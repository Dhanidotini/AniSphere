<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Episode;
use Illuminate\Auth\Access\HandlesAuthorization;

class EpisodePolicy
{
    use HandlesAuthorization;

    public function associating(User $user, Episode $episode)
    {
        return $user->can('associating_episodes::episode');
    }
    public function disassociating(User $user, Episode $episode)
    {
        return $user->can('disassociating_episodes::episode');
    }
    public function associatingAll(User $user, Episode $episode)
    {
        return $user->can('associating_all_episodes::episode');
    }
    public function disassociatingAll(User $user, Episode $episode)
    {
        return $user->can('disassociating_all_episodes::episode');
    }
    public function viewAny(User $user): bool
    {
        return $user->can('view_any_episodes::episode');
    }
    public function viewALL(User $user): bool
    {
        return $user->can('view_all_episodes::episode');
    }
    public function view(User $user, Episode $episode): bool
    {
        return $user->can('view_episodes::episode');
    }
    public function create(User $user): bool
    {
        return $user->can('create_episodes::episode');
    }
    public function update(User $user, Episode $episode): bool
    {
        return $user->can('update_episodes::episode');
    }
    public function updateAll(User $user, Episode $episode): bool
    {
        return $user->can('update_all_episodes::episode');
    }
    public function delete(User $user, Episode $episode): bool
    {
        return $user->can('delete_episodes::episode');
    }
    public function deleteAll(User $user, Episode $episode): bool
    {
        return $user->can('delete_all_episodes::episode');
    }
    public function deleteAny(User $user): bool
    {
        return $user->can('delete_any_episodes::episode');
    }
    public function forceDelete(User $user, Episode $episode): bool
    {
        return $user->can('{{ ForceDelete }}');
    }
    public function forceDeleteAny(User $user): bool
    {
        return $user->can('{{ ForceDeleteAny }}');
    }
    public function forceDeleteALl(User $user): bool
    {
        return $user->can('{{ ForceDeleteALl }}');
    }
    public function restore(User $user, Episode $episode): bool
    {
        return $user->can('restore_episodes::episode');
    }
    public function restoreAny(User $user): bool
    {
        return $user->can('restore_any_episodes::episode');
    }
    public function restoreAll(User $user): bool
    {
        return $user->can('restore_all_episodes::episode');
    }
    public function replicate(User $user, Episode $episode): bool
    {
        return $user->can('{{ Replicate }}');
    }
    public function reorder(User $user): bool
    {
        return $user->can('{{ Reorder }}');
    }
}
