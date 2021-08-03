<?php

namespace App\Policies;

use App\User;
use App\Model\Post;
use Illuminate\Auth\Access\HandlesAuthorization;

class PostPolicy
{
    use HandlesAuthorization;
    
    /**
     * Determine whether the user can view any posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the post.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Post  $post
     * @return mixed
     */
    public function view(User $user, Post $post)
    {
        //
    }

    /**
     * Determine whether the user can create posts.
     *
     * @param  \App\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
      
        return $this->getPermission($user,1);   

    }

    /**
     * Determine whether the user can update the post.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Post  $post
     * @return mixed
     */
    public function update(User $user)
    {
        return $this->getPermission($user,2);
    }

    /**
     * Determine whether the user can delete the post.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Post  $post
     * @return mixed
     */
    public function delete(User $user)
    {
        return $this->getPermission($user,3);
    }

    public function menu(User $user)
    {
        return $this->getPermission($user,9);
    }

    public function title(User $user)
    {
        return $this->getPermission($user,8);
    }
    
    public function filemanager(User $user)
    {
        return $this->getPermission($user,12);
    }
    /**
     * Determine whether the user can restore the post.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Post  $post
     * @return mixed
     */
    public function restore(User $user)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the post.
     *
     * @param  \App\User  $user
     * @param  \App\Model\Post  $post
     * @return mixed
     */
    public function forceDelete(User $user)
    {
        //
    }


    protected function getPermission($user,$permission_id)
    {
        foreach ($user->roles as $role) {
            foreach ($role->permissions as $permission) {
                if ($permission->id == $permission_id) {
                    return true;
                }
            }
        }

        return false;
    }
}
