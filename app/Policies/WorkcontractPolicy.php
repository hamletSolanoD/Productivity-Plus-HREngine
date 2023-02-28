<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Workcontract;
use Illuminate\Auth\Access\HandlesAuthorization;

class WorkcontractPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(User $user)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Workcontract  $workcontract
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(User $user, Workcontract $workcontract)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(User $user)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Workcontract  $workcontract
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(User $user, Workcontract $workcontract)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Workcontract  $workcontract
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(User $user, Workcontract $workcontract)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Workcontract  $workcontract
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(User $user, Workcontract $workcontract)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Models\Workcontract  $workcontract
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(User $user, Workcontract $workcontract)
    {
        //
    }
}
