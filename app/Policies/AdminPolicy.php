<?php

declare(strict_types=1);

namespace App\Policies;

use App\Models\User;

final class AdminPolicy
{
    /**
     * Determine if the user can access the admin dashboard.
     */
    public function viewAdminDashboard(User $user): bool
    {
        return $user->hasRole('admin');
    }

    /**
     * Determine if the user can manage settings.
     */
    public function manageSettings(User $user): bool
    {
        return $user->hasPermission('manage-settings');
    }

    /**
     * Determine if the user can manage categories.
     */
    public function manageCategories(User $user): bool
    {
        return $user->hasPermission('manage-categories');
    }

    /**
     * Determine if the user can manage posts.
     */
    public function managePosts(User $user): bool
    {
        return $user->hasPermission('manage-posts');
    }

    /**
     * Determine if the user can manage tags.
     */
    public function manageTags(User $user): bool
    {
        return $user->hasPermission('manage-tags');
    }

    /**
     * Determine if the user can manage contacts.
     */
    public function manageContacts(User $user): bool
    {
        return $user->hasPermission('manage-contacts');
    }
}
