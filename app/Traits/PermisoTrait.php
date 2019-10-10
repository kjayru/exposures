<?php
namespace App\Traits;

trait permisoTrait{
    
    public static function getTag()
    {
        return '';
    }

   
    public function permissions()
    {
        return $this->belongsToMany(Permission::class)->withTimestamps();
    }

  
    protected function getFreshPermissions()
    {
        
    }

    public function getPermissions()
    {
        $primaryKey = $this[$this->primaryKey];
        $cacheKey   = 'seguridad.'.substr(static::getTag(), 0, -1).'.permissions.'.$primaryKey;

        if (method_exists(app()->make('cache')->getStore(), 'tags')) {
            return app()->make('cache')->tags(static::getTag())->remember($cacheKey, 60, function () {
                return $this->getFreshPermissions();
            });
        }

        return $this->getFreshPermissions();
    }

    public function assignPermission($permissionId = null)
    {
        $permissions = $this->permissions;

        if (!$permissions->contains($permissionId)) {
            $this->flushPermissionCache();

            return $this->permissions()->attach($permissionId);
        }

        return false;
    }

  
    public function revokePermission($permissionId = '')
    {
        $this->flushPermissionCache();

        return $this->permissions()->detach($permissionId);
    }

    
    public function syncPermissions(array $permissionIds = [])
    {
        $this->flushPermissionCache();

        return $this->permissions()->sync($permissionIds);
    }

    public function revokeAllPermissions()
    {
        $this->flushPermissionCache();

        return $this->permissions()->detach();
    }

    
    public function flushPermissionCache(array $tags = null)
    {
        if (method_exists(app()->make('cache')->getStore(), 'tags')) {
            if ($tags === null) {
                $tags = [ static::getTag() ];
            }

            foreach ($tags as $tag) {
                app()->make('cache')->tags($tag)->flush();
            }
        }
    }

    
    protected function hasAllPermissions($permission, array $permissions)
    {
        if (is_array($permission)) {
            $permissionCount   = count($permission);
            $intersection      = array_intersect($permissions, $permission);
            $intersectionCount = count($intersection);

            return ($permissionCount == $intersectionCount) ? true : false;
        } else {
            return in_array($permission, $permissions);
        }
    }

    
    protected function hasAnyPermission(array $permission, array $permissions)
    {
        $intersection      = array_intersect($permissions, $permission);
        $intersectionCount = count($intersection);

        return ($intersectionCount > 0) ? true : false;
    }
}
