<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Permission extends Model
{
   
    protected $fillable = ['name', 'slug', 'description'];

   
    protected $table = 'permissions';

   
    public function roles()
    {
        return $this->belongsToMany(Role::class)->withTimestamps();
    }

   
    public function assignRole($roleId = null)
    {
        $roles = $this->roles;

        if (!$roles->contains($roleId)) {
            return $this->roles()->attach($roleId);
        }

        return false;
    }

   
    public function revokeRole($roleId = '')
    {
        return $this->roles()->detach($roleId);
    }

    public function syncRoles(array $roleIds = [])
    {
        return $this->roles()->sync($roleIds);
    }

    
    public function revokeAllRoles()
    {
        return $this->roles()->detach();
    }
}
