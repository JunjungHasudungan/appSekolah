<?php

namespace App\Http\Middleware;
use Illuminate\Support\Facedes\Gate;
use App\Models\Role;
use Closure;

class AuthGates
{
    public function handle($request, Closure $next)
    {
        $user = \Auth::user();

        if($user){
            $roles = Role::with('permissions')->get();
            $permissionArray = [];

            foreach ($roles as  $role) {
                foreach ($role->permissions as $permission) {
                    $permissionArray[$permission->title][] = $role->id;                
                }
            }

            foreach ($permissionArray as $title => $roles) {
                Gate::define($title, function(\App\User $user) use($roles){
                    return count(array_intersect($user->roles->pluck('id')->toArray(), $roles)) > 0;
                });
            }
        }
        return $next($request);
    }
}
