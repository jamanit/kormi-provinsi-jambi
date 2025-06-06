<?php

namespace App\Policies;

use Illuminate\Auth\Access\Response;
use App\Models\ConfigItem;
use App\Models\User;

class ConfigItemPolicy
{
    /**
     * Determine whether the user can view any models.
     */
    public function viewAny(User $user): bool
    {
        return $user->checkPermissionTo('view-any ConfigItem');
    }

    /**
     * Determine whether the user can view the model.
     */
    public function view(User $user, ConfigItem $configitem): bool
    {
        return $user->checkPermissionTo('view ConfigItem');
    }

    /**
     * Determine whether the user can create models.
     */
    public function create(User $user): bool
    {
        return $user->checkPermissionTo('create ConfigItem');
    }

    /**
     * Determine whether the user can update the model.
     */
    public function update(User $user, ConfigItem $configitem): bool
    {
        return $user->checkPermissionTo('update ConfigItem');
    }

    /**
     * Determine whether the user can delete the model.
     */
    public function delete(User $user, ConfigItem $configitem): bool
    {
        return $user->checkPermissionTo('delete ConfigItem');
    }

    /**
     * Determine whether the user can delete any models.
     */
    public function deleteAny(User $user): bool
    {
        return $user->checkPermissionTo('delete-any ConfigItem');
    }

    /**
     * Determine whether the user can restore the model.
     */
    public function restore(User $user, ConfigItem $configitem): bool
    {
        return $user->checkPermissionTo('restore ConfigItem');
    }

    /**
     * Determine whether the user can restore any models.
     */
    public function restoreAny(User $user): bool
    {
        return $user->checkPermissionTo('restore-any ConfigItem');
    }

    /**
     * Determine whether the user can replicate the model.
     */
    public function replicate(User $user, ConfigItem $configitem): bool
    {
        return $user->checkPermissionTo('replicate ConfigItem');
    }

    /**
     * Determine whether the user can reorder the models.
     */
    public function reorder(User $user): bool
    {
        return $user->checkPermissionTo('reorder ConfigItem');
    }

    /**
     * Determine whether the user can permanently delete the model.
     */
    public function forceDelete(User $user, ConfigItem $configitem): bool
    {
        return $user->checkPermissionTo('force-delete ConfigItem');
    }

    /**
     * Determine whether the user can permanently delete any models.
     */
    public function forceDeleteAny(User $user): bool
    {
        return $user->checkPermissionTo('force-delete-any ConfigItem');
    }
}
