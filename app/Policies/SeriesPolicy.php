<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Series;
use Illuminate\Auth\Access\HandlesAuthorization;

class SeriesPolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_series::series');
    }

    public function viewAll(User $user): bool
    {
        return $user->can('view_all_series::series');
    }

    public function view(User $user, Series $series): bool
    {
        return $user->can('view_series::series');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->can('create_series::series');
    }

    public function update(User $user, Series $series): bool
    {
        return $user->can('update_series::series');
    }

    public function updateAll(User $user, Series $series):bool
    {
        return $user->can('update_all_series::series');
    }
    public function delete(User $user, Series $series): bool
    {
        return $user->can('delete_series::series');
    }

    /**
     * Determine whether the user can bulk delete.
     */
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_series::series');
    }
    public function deleteAll(User $user): bool
    {
        return $user->can('delete_all_series::series');
    }

    /**
     * Determine whether the user can permanently delete.
     */
    public function forceDelete(User $user, Series $series): bool
    {
        return $user->can('force_delete_series::series');
    }

    /**
     * Determine whether the user can permanently bulk delete.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('force_delete_any_series::series');
    }

    /**
     * Determine whether the user can restore.
     */
    public function restore(User $user, Series $series): bool
    {
        return $user->can('restore_series::series');
    }

    /**
     * Determine whether the user can bulk restore.
     */
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_series::series');
    }

    /**
     * Determine whether the user can replicate.
     */
    public function replicate(User $user, Series $series): bool
    {
        return $user->can('replicate_series::series');
    }

    /**
     * Determine whether the user can reorder.
     */
    public function reorder(User $user): bool
    {
        return $user->can('reorder_series::series');
    }
}
