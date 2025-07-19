<?php

declare(strict_types=1);

namespace App\Providers;

use App\Models\User;
use App\Policies\AdminPolicy;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

final class AuthServiceProvider extends ServiceProvider
{
    /**
     * The model to policy mappings for the application.
     *
     * @var array<class-string, class-string>
     */
    protected $policies = [
        // Register policies here
    ];

    /**
     * Register any authentication / authorization services.
     */
    public function boot(): void
    {
        // Register the AdminPolicy gates
        Gate::define('view-admin-dashboard', [AdminPolicy::class, 'viewAdminDashboard']);
        Gate::define('manage-settings', [AdminPolicy::class, 'manageSettings']);
        Gate::define('manage-categories', [AdminPolicy::class, 'manageCategories']);
        Gate::define('manage-posts', [AdminPolicy::class, 'managePosts']);
        Gate::define('manage-tags', [AdminPolicy::class, 'manageTags']);
        Gate::define('manage-contacts', [AdminPolicy::class, 'manageContacts']);
    }
}
