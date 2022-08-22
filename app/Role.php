<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Traits\PermisoTrait;
class Role extends Model
{
   
    
    use PermisoTrait {
        flushPermissionCache as parentFlushPermissionCache;
    }

   
    protected $fillable = ['name', 'slug', 'description', 'special'];

    
    protected $table = 'roles';

    
    public static function getTag()
    {
        return 'seguridad.roles';
    }

  
    public function users()
    {
        return $this->belongsToMany(config('auth.model') ?: config('auth.providers.users.model'))->withTimestamps();
    }

    
    protected function getFreshPermissions()
    {
        return $this->permissions->pluck('slug')->all();
    }

    
    public function flushPermissionCache()
    {
        $userClass = config('auth.model') ?: config('auth.providers.users.model');
        $usersTag = call_user_func([$userClass, 'getShinobiTag']);
        static::parentFlushPermissionCache([
          static::getShinobiTag(),
          $usersTag,
        ]);
    }

    
    public function can($permission)
    {
        if ($this->special === 'no-access') {
            return false;
        }

        if ($this->special === 'all-access') {
            return true;
        }

        return $this->hasAllPermissions($permission, $this->getPermissions());
    }

  
    public function canAtLeast(array $permission = [])
    {
        if ($this->special === 'no-access') {
            return false;
        }

        if ($this->special === 'all-access') {
            return true;
        }

        return $this->hasAnyPermission($permission, $this->getPermissions());
    }
}
