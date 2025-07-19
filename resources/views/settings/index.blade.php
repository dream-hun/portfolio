<x-admin-layout>
    @push('scripts')
    <script>
        function settingsCrud() {
            return {
                // Notification state
                notification: {
                    show: false,
                    type: 'success',
                    message: ''
                },

                // Modal states
                createModalOpen: false,
                editModalOpen: false,
                viewModalOpen: false,
                deleteModalOpen: false,

                // Form data
                formData: {
                    site_name: '',
                    email: '',
                    github: '',
                    twitter: '',
                    instagram: '',
                    facebook: '',
                    linkedin: '',
                    youtube: '',
                    tiktok: '',
                    description: '',
                    status: 'active',
                    location: ''
                },

                // Current setting being edited/viewed/deleted
                currentSetting: null,

                // Form errors
                errors: {},

                // Initialize
                initialize() {
                    // Check for session success message and convert to notification
                    @if(session('success'))
                        this.showNotification('success', '{{ session('success') }}');
                    @endif
                },

                // Reset form data
                resetForm() {
                    this.formData = {
                        site_name: '',
                        email: '',
                        github: '',
                        twitter: '',
                        instagram: '',
                        facebook: '',
                        linkedin: '',
                        youtube: '',
                        tiktok: '',
                        description: '',
                        status: 'active',
                        location: ''
                    };
                    this.errors = {};
                },

                // Open create modal
                openCreateModal() {
                    this.resetForm();
                    this.createModalOpen = true;
                    $dispatch('open-modal', 'create-setting');
                },

                // Open edit modal
                openEditModal(setting) {
                    this.resetForm();
                    this.currentSetting = setting;

                    // Fill form with setting data
                    this.formData = {
                        site_name: setting.site_name,
                        email: setting.email || '',
                        github: setting.github,
                        twitter: setting.twitter,
                        instagram: setting.instagram,
                        facebook: setting.facebook,
                        linkedin: setting.linkedin,
                        youtube: setting.youtube,
                        tiktok: setting.tiktok || '',
                        description: setting.description,
                        status: setting.status,
                        location: setting.location
                    };

                    this.editModalOpen = true;
                    $dispatch('open-modal', 'edit-setting');
                },

                // Open view modal
                openViewModal(setting) {
                    this.currentSetting = setting;
                    this.viewModalOpen = true;
                    $dispatch('open-modal', 'view-setting');
                },

                // Open delete modal
                openDeleteModal(setting) {
                    this.currentSetting = setting;
                    this.deleteModalOpen = true;
                    $dispatch('open-modal', 'delete-setting');
                },

                // Create setting
                createSetting() {
                    fetch('{{ route('settings.store') }}', {
                        method: 'POST',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify(this.formData)
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            this.createModalOpen = false;
                            this.showNotification('success', data.message);
                            window.dispatchEvent(new CustomEvent('setting-created', { detail: data.setting }));
                            // Reload the page to show the new setting
                            window.location.reload();
                        } else {
                            this.errors = data.errors || {};
                            this.showNotification('error', data.message || 'An error occurred while creating the setting.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        this.showNotification('error', 'An error occurred while creating the setting.');
                    });
                },

                // Update setting
                updateSetting() {
                    fetch(`/settings/${this.currentSetting.id}`, {
                        method: 'PUT',
                        headers: {
                            'Content-Type': 'application/json',
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        body: JSON.stringify(this.formData)
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            this.editModalOpen = false;
                            this.showNotification('success', data.message);
                            window.dispatchEvent(new CustomEvent('setting-updated', { detail: data.setting }));
                            // Reload the page to show the updated setting
                            window.location.reload();
                        } else {
                            this.errors = data.errors || {};
                            this.showNotification('error', data.message || 'An error occurred while updating the setting.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        this.showNotification('error', 'An error occurred while updating the setting.');
                    });
                },

                // Delete setting
                deleteSetting() {
                    fetch(`/settings/${this.currentSetting.id}`, {
                        method: 'DELETE',
                        headers: {
                            'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                            'X-Requested-With': 'XMLHttpRequest'
                        }
                    })
                    .then(response => response.json())
                    .then(data => {
                        if (data.success) {
                            this.deleteModalOpen = false;
                            this.showNotification('success', data.message);
                            window.dispatchEvent(new CustomEvent('setting-deleted', { detail: this.currentSetting.id }));
                            // Reload the page to remove the deleted setting
                            window.location.reload();
                        } else {
                            this.showNotification('error', data.message || 'An error occurred while deleting the setting.');
                        }
                    })
                    .catch(error => {
                        console.error('Error:', error);
                        this.showNotification('error', 'An error occurred while deleting the setting.');
                    });
                },

                // Show notification
                showNotification(type, message) {
                    this.notification = {
                        show: true,
                        type: type,
                        message: message
                    };

                    // Hide notification after 5 seconds
                    setTimeout(() => {
                        this.notification.show = false;
                    }, 5000);
                },

                // Handle setting created event
                handleSettingCreated(setting) {
                    // This will be handled by the page reload in createSetting()
                },

                // Handle setting updated event
                handleSettingUpdated(setting) {
                    // This will be handled by the page reload in updateSetting()
                },

                // Handle setting deleted event
                handleSettingDeleted(settingId) {
                    // This will be handled by the page reload in deleteSetting()
                }
            };
        }
    </script>
    @endpush

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Settings') }}
        </h2>
    </x-slot>

    <div class="py-6"
        x-data="settingsCrud()"
        x-init="initialize()"
        @setting-created.window="handleSettingCreated($event.detail)"
        @setting-updated.window="handleSettingUpdated($event.detail)"
        @setting-deleted.window="handleSettingDeleted($event.detail)">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold">{{ __('Manage Settings') }}</h3>
                        <button
                            @click="openCreateModal()"
                            class="px-4 py-2 bg-blue-600 text-white rounded-md hover:bg-blue-700 transition">
                            {{ __('Create New Setting') }}
                        </button>
                    </div>

                    <div x-show="notification.show" x-cloak>
                        <div
                            x-bind:class="{
                                'bg-green-50 text-green-800 border-green-200 dark:bg-green-900/50 dark:text-green-200 dark:border-green-800/30': notification.type === 'success',
                                'bg-red-50 text-red-800 border-red-200 dark:bg-red-900/50 dark:text-red-200 dark:border-red-800/30': notification.type === 'error',
                                'bg-yellow-50 text-yellow-800 border-yellow-200 dark:bg-yellow-900/50 dark:text-yellow-200 dark:border-yellow-800/30': notification.type === 'warning',
                                'bg-blue-50 text-blue-800 border-blue-200 dark:bg-blue-900/50 dark:text-blue-200 dark:border-blue-800/30': notification.type === 'info'
                            }"
                            class="border rounded-md p-4 mb-4 flex items-start"
                            x-transition:enter="transition-all duration-300"
                            x-transition:enter-start="opacity-0 transform translate-y-4"
                            x-transition:enter-end="opacity-100 transform translate-y-0"
                            x-transition:leave="transition-all duration-200"
                            x-transition:leave-start="opacity-100 transform translate-y-0"
                            x-transition:leave-end="opacity-0 transform translate-y-4"
                        >
                            <div class="flex-shrink-0 mr-3">
                                <template x-if="notification.type === 'success'">
                                    <svg class="h-5 w-5 text-green-500 dark:text-green-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm3.707-9.293a1 1 0 00-1.414-1.414L9 10.586 7.707 9.293a1 1 0 00-1.414 1.414l2 2a1 1 0 001.414 0l4-4z" clip-rule="evenodd" />
                                    </svg>
                                </template>
                                <template x-if="notification.type === 'error'">
                                    <svg class="h-5 w-5 text-red-500 dark:text-red-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zM8.707 7.293a1 1 0 00-1.414 1.414L8.586 10l-1.293 1.293a1 1 0 101.414 1.414L10 11.414l1.293 1.293a1 1 0 001.414-1.414L11.414 10l1.293-1.293a1 1 0 00-1.414-1.414L10 8.586 8.707 7.293z" clip-rule="evenodd" />
                                    </svg>
                                </template>
                                <template x-if="notification.type === 'warning'">
                                    <svg class="h-5 w-5 text-yellow-500 dark:text-yellow-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M8.257 3.099c.765-1.36 2.722-1.36 3.486 0l5.58 9.92c.75 1.334-.213 2.98-1.742 2.98H4.42c-1.53 0-2.493-1.646-1.743-2.98l5.58-9.92zM11 13a1 1 0 11-2 0 1 1 0 012 0zm-1-8a1 1 0 00-1 1v3a1 1 0 002 0V6a1 1 0 00-1-1z" clip-rule="evenodd" />
                                    </svg>
                                </template>
                                <template x-if="notification.type === 'info'">
                                    <svg class="h-5 w-5 text-blue-500 dark:text-blue-400" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                        <path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd" />
                                    </svg>
                                </template>
                            </div>
                            <div class="flex-1">
                                <span x-text="notification.message"></span>
                            </div>
                            <div class="ml-auto pl-3">
                                <div class="-mx-1.5 -my-1.5">
                                    <button
                                        type="button"
                                        @click="notification.show = false"
                                        class="inline-flex rounded-md p-1.5 hover:bg-opacity-10 hover:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-offset-transparent"
                                        x-bind:class="{
                                            'text-green-500 dark:text-green-400 focus:ring-green-500': notification.type === 'success',
                                            'text-red-500 dark:text-red-400 focus:ring-red-500': notification.type === 'error',
                                            'text-yellow-500 dark:text-yellow-400 focus:ring-yellow-500': notification.type === 'warning',
                                            'text-blue-500 dark:text-blue-400 focus:ring-blue-500': notification.type === 'info'
                                        }"
                                    >
                                        <span class="sr-only">Dismiss</span>
                                        <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor">
                                            <path fill-rule="evenodd" d="M4.293 4.293a1 1 0 011.414 0L10 8.586l4.293-4.293a1 1 0 111.414 1.414L11.414 10l4.293 4.293a1 1 0 01-1.414 1.414L10 11.414l-4.293 4.293a1 1 0 01-1.414-1.414L8.586 10 4.293 5.707a1 1 0 010-1.414z" clip-rule="evenodd" />
                                        </svg>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="overflow-x-auto">
                        <table class="min-w-full bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700">
                            <thead>
                                <tr>
                                    <th class="px-6 py-3 border-b border-gray-300 dark:border-gray-700 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        {{ __('Site Name') }}
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-300 dark:border-gray-700 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        {{ __('Email') }}
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-300 dark:border-gray-700 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        {{ __('Status') }}
                                    </th>
                                    <th class="px-6 py-3 border-b border-gray-300 dark:border-gray-700 text-left text-xs font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider">
                                        {{ __('Actions') }}
                                    </th>
                                </tr>
                            </thead>
                            <tbody class="divide-y divide-gray-300 dark:divide-gray-700">
                                @forelse($settings as $setting)
                                    <tr>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                            {{ $setting->site_name }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm text-gray-900 dark:text-gray-100">
                                            {{ $setting->email ?? 'N/A' }}
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm">
                                            <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $setting->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                                {{ ucfirst($setting->status) }}
                                            </span>
                                        </td>
                                        <td class="px-6 py-4 whitespace-nowrap text-sm font-medium">
                                            <div class="flex space-x-2">
                                                <button
                                                    @click="openViewModal({{ $setting }})"
                                                    class="text-blue-600 hover:text-blue-900 dark:text-blue-400 dark:hover:text-blue-300"
                                                >
                                                    {{ __('View') }}
                                                </button>
                                                <button
                                                    @click="openEditModal({{ $setting }})"
                                                    class="text-indigo-600 hover:text-indigo-900 dark:text-indigo-400 dark:hover:text-indigo-300"
                                                >
                                                    {{ __('Edit') }}
                                                </button>
                                                <button
                                                    @click="openDeleteModal({{ $setting }})"
                                                    class="text-red-600 hover:text-red-900 dark:text-red-400 dark:hover:text-red-300"
                                                >
                                                    {{ __('Delete') }}
                                                </button>
                                            </div>
                                        </td>
                                    </tr>
                                @empty
                                    <tr>
                                        <td colspan="4" class="px-6 py-4 whitespace-nowrap text-sm text-gray-500 dark:text-gray-400 text-center">
                                            {{ __('No settings found.') }}
                                        </td>
                                    </tr>
                                @endforelse
                            </tbody>
                        </table>
                    </div>

                    <div class="mt-4">
                        {{ $settings->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Create Modal -->
    <x-modal name="create-setting" :show="false" maxWidth="2xl">
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                {{ __('Create New Setting') }}
            </h2>

            <form @submit.prevent="createSetting" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Site Name -->
                    <div>
                        <x-input-label for="create_site_name" :value="__('Site Name')" />
                        <input
                            id="create_site_name"
                            x-model="formData.site_name"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                            autofocus
                        />
                        <div x-show="errors && errors.site_name" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.site_name"></span>
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <x-input-label for="create_email" :value="__('Email')" />
                        <input
                            id="create_email"
                            x-model="formData.email"
                            type="email"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                        />
                        <div x-show="errors && errors.email" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.email"></span>
                        </div>
                    </div>

                    <!-- GitHub -->
                    <div>
                        <x-input-label for="create_github" :value="__('GitHub URL')" />
                        <input
                            id="create_github"
                            x-model="formData.github"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.github" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.github"></span>
                        </div>
                    </div>

                    <!-- Twitter -->
                    <div>
                        <x-input-label for="create_twitter" :value="__('Twitter URL')" />
                        <input
                            id="create_twitter"
                            x-model="formData.twitter"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.twitter" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.twitter"></span>
                        </div>
                    </div>

                    <!-- Instagram -->
                    <div>
                        <x-input-label for="create_instagram" :value="__('Instagram URL')" />
                        <input
                            id="create_instagram"
                            x-model="formData.instagram"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.instagram" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.instagram"></span>
                        </div>
                    </div>

                    <!-- Facebook -->
                    <div>
                        <x-input-label for="create_facebook" :value="__('Facebook URL')" />
                        <input
                            id="create_facebook"
                            x-model="formData.facebook"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.facebook" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.facebook"></span>
                        </div>
                    </div>

                    <!-- LinkedIn -->
                    <div>
                        <x-input-label for="create_linkedin" :value="__('LinkedIn URL')" />
                        <input
                            id="create_linkedin"
                            x-model="formData.linkedin"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.linkedin" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.linkedin"></span>
                        </div>
                    </div>

                    <!-- YouTube -->
                    <div>
                        <x-input-label for="create_youtube" :value="__('YouTube URL')" />
                        <input
                            id="create_youtube"
                            x-model="formData.youtube"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.youtube" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.youtube"></span>
                        </div>
                    </div>

                    <!-- TikTok -->
                    <div>
                        <x-input-label for="create_tiktok" :value="__('TikTok URL')" />
                        <input
                            id="create_tiktok"
                            x-model="formData.tiktok"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                        />
                        <div x-show="errors && errors.tiktok" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.tiktok"></span>
                        </div>
                    </div>

                    <!-- Location -->
                    <div>
                        <x-input-label for="create_location" :value="__('Location')" />
                        <input
                            id="create_location"
                            x-model="formData.location"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.location" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.location"></span>
                        </div>
                    </div>

                    <!-- Status -->
                    <div>
                        <x-input-label for="create_status" :value="__('Status')" />
                        <select
                            id="create_status"
                            x-model="formData.status"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                        >
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <div x-show="errors && errors.status" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.status"></span>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <x-input-label for="create_description" :value="__('Description')" />
                    <textarea
                        id="create_description"
                        x-model="formData.description"
                        rows="4"
                        class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex w-full min-w-0 rounded-md border bg-transparent px-3 py-2 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                        required
                    ></textarea>
                    <div x-show="errors && errors.description" class="text-sm text-red-600 dark:text-red-400 mt-2">
                        <span x-text="errors.description"></span>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-4">
                    <button
                        type="button"
                        @click="$dispatch('close-modal', 'create-setting')"
                        class="inline-flex items-center px-4 py-2 bg-gray-300 dark:bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-gray-800 dark:text-gray-300 uppercase tracking-widest hover:bg-gray-400 dark:hover:bg-gray-600 focus:bg-gray-400 dark:focus:bg-gray-600 active:bg-gray-500 dark:active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                    >
                        {{ __('Cancel') }}
                    </button>
                    <button
                        type="submit"
                        class="inline-flex items-center px-4 py-2 bg-primary text-primary-foreground border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-primary/90 dark:hover:bg-primary/90 focus:bg-primary/90 dark:focus:bg-primary/90 active:bg-primary/80 dark:active:bg-primary/80 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-background transition-all duration-300"
                    >
                        {{ __('Create') }}
                    </button>
                </div>
            </form>
        </div>
    </x-modal>

    <!-- Edit Modal -->
    <x-modal name="edit-setting" :show="false" maxWidth="2xl">
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                {{ __('Edit Setting') }}
            </h2>

            <form @submit.prevent="updateSetting" class="space-y-6">
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                    <!-- Site Name -->
                    <div>
                        <x-input-label for="edit_site_name" :value="__('Site Name')" />
                        <input
                            id="edit_site_name"
                            x-model="formData.site_name"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                            autofocus
                        />
                        <div x-show="errors && errors.site_name" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.site_name"></span>
                        </div>
                    </div>

                    <!-- Email -->
                    <div>
                        <x-input-label for="edit_email" :value="__('Email')" />
                        <input
                            id="edit_email"
                            x-model="formData.email"
                            type="email"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                        />
                        <div x-show="errors && errors.email" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.email"></span>
                        </div>
                    </div>

                    <!-- GitHub -->
                    <div>
                        <x-input-label for="edit_github" :value="__('GitHub URL')" />
                        <input
                            id="edit_github"
                            x-model="formData.github"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.github" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.github"></span>
                        </div>
                    </div>

                    <!-- Twitter -->
                    <div>
                        <x-input-label for="edit_twitter" :value="__('Twitter URL')" />
                        <input
                            id="edit_twitter"
                            x-model="formData.twitter"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.twitter" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.twitter"></span>
                        </div>
                    </div>

                    <!-- Instagram -->
                    <div>
                        <x-input-label for="edit_instagram" :value="__('Instagram URL')" />
                        <input
                            id="edit_instagram"
                            x-model="formData.instagram"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.instagram" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.instagram"></span>
                        </div>
                    </div>

                    <!-- Facebook -->
                    <div>
                        <x-input-label for="edit_facebook" :value="__('Facebook URL')" />
                        <input
                            id="edit_facebook"
                            x-model="formData.facebook"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.facebook" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.facebook"></span>
                        </div>
                    </div>

                    <!-- LinkedIn -->
                    <div>
                        <x-input-label for="edit_linkedin" :value="__('LinkedIn URL')" />
                        <input
                            id="edit_linkedin"
                            x-model="formData.linkedin"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.linkedin" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.linkedin"></span>
                        </div>
                    </div>

                    <!-- YouTube -->
                    <div>
                        <x-input-label for="edit_youtube" :value="__('YouTube URL')" />
                        <input
                            id="edit_youtube"
                            x-model="formData.youtube"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.youtube" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.youtube"></span>
                        </div>
                    </div>

                    <!-- TikTok -->
                    <div>
                        <x-input-label for="edit_tiktok" :value="__('TikTok URL')" />
                        <input
                            id="edit_tiktok"
                            x-model="formData.tiktok"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                        />
                        <div x-show="errors && errors.tiktok" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.tiktok"></span>
                        </div>
                    </div>

                    <!-- Location -->
                    <div>
                        <x-input-label for="edit_location" :value="__('Location')" />
                        <input
                            id="edit_location"
                            x-model="formData.location"
                            type="text"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                            required
                        />
                        <div x-show="errors && errors.location" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.location"></span>
                        </div>
                    </div>

                    <!-- Status -->
                    <div>
                        <x-input-label for="edit_status" :value="__('Status')" />
                        <select
                            id="edit_status"
                            x-model="formData.status"
                            class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                        >
                            <option value="active">Active</option>
                            <option value="inactive">Inactive</option>
                        </select>
                        <div x-show="errors && errors.status" class="text-sm text-red-600 dark:text-red-400 mt-2">
                            <span x-text="errors.status"></span>
                        </div>
                    </div>
                </div>

                <!-- Description -->
                <div>
                    <x-input-label for="edit_description" :value="__('Description')" />
                    <textarea
                        id="edit_description"
                        x-model="formData.description"
                        rows="4"
                        class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex w-full min-w-0 rounded-md border bg-transparent px-3 py-2 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive"
                        required
                    ></textarea>
                    <div x-show="errors && errors.description" class="text-sm text-red-600 dark:text-red-400 mt-2">
                        <span x-text="errors.description"></span>
                    </div>
                </div>

                <div class="flex items-center justify-end gap-4">
                    <button
                        type="button"
                        @click="$dispatch('close-modal', 'edit-setting')"
                        class="inline-flex items-center px-4 py-2 bg-gray-300 dark:bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-gray-800 dark:text-gray-300 uppercase tracking-widest hover:bg-gray-400 dark:hover:bg-gray-600 focus:bg-gray-400 dark:focus:bg-gray-600 active:bg-gray-500 dark:active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                    >
                        {{ __('Cancel') }}
                    </button>
                    <button
                        type="submit"
                        class="inline-flex items-center px-4 py-2 bg-primary text-primary-foreground border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-primary/90 dark:hover:bg-primary/90 focus:bg-primary/90 dark:focus:bg-primary/90 active:bg-primary/80 dark:active:bg-primary/80 focus:outline-none focus:ring-2 focus:ring-primary focus:ring-offset-2 dark:focus:ring-offset-background transition-all duration-300"
                    >
                        {{ __('Update') }}
                    </button>
                </div>
            </form>
        </div>
    </x-modal>

    <!-- View Modal -->
    <x-modal name="view-setting" :show="false" maxWidth="2xl">
        <div class="p-6">
            <div class="flex justify-between items-center mb-6">
                <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                    <span x-text="currentSetting?.site_name"></span>
                </h2>
                <div class="flex space-x-2">
                    <button
                        @click="openEditModal(currentSetting)"
                        class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition"
                    >
                        {{ __('Edit') }}
                    </button>
                    <button
                        @click="$dispatch('close-modal', 'view-setting')"
                        class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 transition"
                    >
                        {{ __('Close') }}
                    </button>
                </div>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                <div>
                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Site Name') }}</h4>
                    <p x-text="currentSetting?.site_name"></p>
                </div>

                <div>
                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Email') }}</h4>
                    <p x-text="currentSetting?.email || 'N/A'"></p>
                </div>

                <div>
                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('GitHub') }}</h4>
                    <p>
                        <a
                            :href="currentSetting?.github"
                            target="_blank"
                            class="text-blue-600 hover:underline"
                            x-text="currentSetting?.github"
                        ></a>
                    </p>
                </div>

                <div>
                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Twitter') }}</h4>
                    <p>
                        <a
                            :href="currentSetting?.twitter"
                            target="_blank"
                            class="text-blue-600 hover:underline"
                            x-text="currentSetting?.twitter"
                        ></a>
                    </p>
                </div>

                <div>
                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Instagram') }}</h4>
                    <p>
                        <a
                            :href="currentSetting?.instagram"
                            target="_blank"
                            class="text-blue-600 hover:underline"
                            x-text="currentSetting?.instagram"
                        ></a>
                    </p>
                </div>

                <div>
                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Facebook') }}</h4>
                    <p>
                        <a
                            :href="currentSetting?.facebook"
                            target="_blank"
                            class="text-blue-600 hover:underline"
                            x-text="currentSetting?.facebook"
                        ></a>
                    </p>
                </div>

                <div>
                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('LinkedIn') }}</h4>
                    <p>
                        <a
                            :href="currentSetting?.linkedin"
                            target="_blank"
                            class="text-blue-600 hover:underline"
                            x-text="currentSetting?.linkedin"
                        ></a>
                    </p>
                </div>

                <div>
                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('YouTube') }}</h4>
                    <p>
                        <a
                            :href="currentSetting?.youtube"
                            target="_blank"
                            class="text-blue-600 hover:underline"
                            x-text="currentSetting?.youtube"
                        ></a>
                    </p>
                </div>

                <div>
                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('TikTok') }}</h4>
                    <p>
                        <template x-if="currentSetting?.tiktok">
                            <a
                                :href="currentSetting?.tiktok"
                                target="_blank"
                                class="text-blue-600 hover:underline"
                                x-text="currentSetting?.tiktok"
                            ></a>
                        </template>
                        <template x-if="!currentSetting?.tiktok">
                            <span>N/A</span>
                        </template>
                    </p>
                </div>

                <div>
                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Location') }}</h4>
                    <p x-text="currentSetting?.location"></p>
                </div>

                <div>
                    <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Status') }}</h4>
                    <p>
                        <span
                            class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full"
                            :class="currentSetting?.status === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800'"
                            x-text="currentSetting?.status ? (currentSetting.status.charAt(0).toUpperCase() + currentSetting.status.slice(1)) : ''"
                        ></span>
                    </p>
                </div>
            </div>

            <div>
                <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Description') }}</h4>
                <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded">
                    <p x-text="currentSetting?.description"></p>
                </div>
            </div>

            <div class="mt-6 border-t border-gray-200 dark:border-gray-700 pt-4">
                <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400">
                    <div>
                        <span>{{ __('Created at') }}: </span>
                        <span x-text="currentSetting?.created_at ? new Date(currentSetting.created_at).toLocaleString() : ''"></span>
                    </div>
                    <div>
                        <span>{{ __('Last updated') }}: </span>
                        <span x-text="currentSetting?.updated_at ? new Date(currentSetting.updated_at).toLocaleString() : ''"></span>
                    </div>
                </div>
            </div>
        </div>
    </x-modal>

    <!-- Delete Confirmation Modal -->
    <x-modal name="delete-setting" :show="false" maxWidth="md">
        <div class="p-6">
            <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100 mb-4">
                {{ __('Delete Setting') }}
            </h2>

            <div class="mb-6">
                <p class="text-sm text-gray-600 dark:text-gray-400">
                    {{ __('Are you sure you want to delete this setting?') }} {{ __('This action cannot be undone.') }}
                </p>
                <p class="mt-2 font-medium">
                    <span x-text="currentSetting?.site_name"></span>
                </p>
            </div>

            <div class="flex justify-end gap-4">
                <button
                    type="button"
                    @click="$dispatch('close-modal', 'delete-setting')"
                    class="inline-flex items-center px-4 py-2 bg-gray-300 dark:bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-gray-800 dark:text-gray-300 uppercase tracking-widest hover:bg-gray-400 dark:hover:bg-gray-600 focus:bg-gray-400 dark:focus:bg-gray-600 active:bg-gray-500 dark:active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                >
                    {{ __('Cancel') }}
                </button>
                <button
                    type="button"
                    @click="deleteSetting()"
                    class="inline-flex items-center px-4 py-2 bg-red-600 text-white border border-transparent rounded-md font-semibold text-xs uppercase tracking-widest hover:bg-red-700 focus:bg-red-700 active:bg-red-800 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"
                >
                    {{ __('Delete') }}
                </button>
            </div>
        </div>
    </x-modal>
</x-admin-layout>
