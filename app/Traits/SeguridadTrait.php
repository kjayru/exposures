<?php
namespace App\Traits;

trait seguridadTrait
{
    use PermisoTrait;

    public static function getTag()
    {
        return 'seguridad.users';
    }


    public function roles()
    {
        return $this->belongsToMany('App\Role')->withTimestamps();
    }


    public function getRoles()
    {
        if (!is_null($this->roles)) {
            return $this->roles->pluck('slug')->all();
        }
    }


    public function isRole($slug)
    {
        $slug = strtolower($slug);

        foreach ($this->roles as $role) {
            if ($role->slug == $slug) {
                return true;
            }
        }

        return false;
    }

    public function assignRole($roleId = null)
    {
        $this->flushPermissionCache();

        if (!is_numeric($roleId)) {
            $roleId = Role::where('slug', $roleId)->pluck('id')->first();
        }

        $roles = $this->roles;

        if (!$roles->contains($roleId)) {
            return $this->roles()->attach($roleId);
        }

        return false;
    }

    public function revokeRole($roleId = '')
    {
        $this->flushPermissionCache();

        if (!is_numeric($roleId)) {
            $roleId = Role::where('slug', $roleId)->pluck('id')->first();
        }

        return $this->roles()->detach($roleId);
    }


    public function syncRoles(array $roleIds)
    {
        $this->flushPermissionCache();
        return $this->roles()->sync($roleIds);
    }


    public function revokeAllRoles()
    {
        $this->flushPermissionCache();
        return $this->roles()->detach();
    }


    public function getUserPermissions()
    {
        return $this->permissions->pluck('slug')->all();
    }


    protected function getFreshPermissions()
    {
        $permissions = [[], $this->getUserPermissions()];
        foreach ($this->roles as $role) {
            $permissions[] = $role->getPermissions();
        }
        return call_user_func_array('array_merge', $permissions);
    }


    public function can($permission, $arguments = [])
    {
        foreach ($this->roles as $role) {
            if ($role->special === 'no-access') {
                return false;
            }
            if ($role->special === 'all-access') {
                return true;
            }
        }
        return $this->hasAllPermissions($permission, $this->getPermissions());
    }

    public function canAtLeast(array $permissions)
    {
        foreach ($this->roles as $role) {
            if ($role->special === 'no-access') {
                return false;
            }

            if ($role->special === 'all-access') {
                return true;
            }

            if ($role->canAtLeast($permissions)) {
                return true;
            }
        }

        return false;
    }


    public function __call($method, $arguments = [])
    {

        if (starts_with($method, 'is') and $method !== 'is') {
            $role = kebab_case(substr($method, 2));

            return $this->isRole($role);
        }


        if (starts_with($method, 'can') and $method !== 'can') {
            $permission = kebab_case(substr($method, 3));

            return $this->can($permission);
        }

        return parent::__call($method, $arguments);
    }
}
