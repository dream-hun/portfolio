<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('Edit Setting') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <form method="POST" action="{{ route('settings.update', $setting) }}" class="space-y-6">
                        @csrf
                        @method('PUT')

                        <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                            <!-- Site Name -->
                            <div>
                                <x-input-label for="site_name" :value="__('Site Name')" />
                                <x-text-input id="site_name" name="site_name" type="text" class="mt-1 block w-full" :value="old('site_name', $setting->site_name)" required autofocus />
                                <x-input-error class="mt-2" :messages="$errors->get('site_name')" />
                            </div>

                            <!-- Email -->
                            <div>
                                <x-input-label for="email" :value="__('Email')" />
                                <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email', $setting->email)" />
                                <x-input-error class="mt-2" :messages="$errors->get('email')" />
                            </div>

                            <!-- GitHub -->
                            <div>
                                <x-input-label for="github" :value="__('GitHub URL')" />
                                <x-text-input id="github" name="github" type="text" class="mt-1 block w-full" :value="old('github', $setting->github)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('github')" />
                            </div>

                            <!-- Twitter -->
                            <div>
                                <x-input-label for="twitter" :value="__('Twitter URL')" />
                                <x-text-input id="twitter" name="twitter" type="text" class="mt-1 block w-full" :value="old('twitter', $setting->twitter)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('twitter')" />
                            </div>

                            <!-- Instagram -->
                            <div>
                                <x-input-label for="instagram" :value="__('Instagram URL')" />
                                <x-text-input id="instagram" name="instagram" type="text" class="mt-1 block w-full" :value="old('instagram', $setting->instagram)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('instagram')" />
                            </div>

                            <!-- Facebook -->
                            <div>
                                <x-input-label for="facebook" :value="__('Facebook URL')" />
                                <x-text-input id="facebook" name="facebook" type="text" class="mt-1 block w-full" :value="old('facebook', $setting->facebook)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('facebook')" />
                            </div>

                            <!-- LinkedIn -->
                            <div>
                                <x-input-label for="linkedin" :value="__('LinkedIn URL')" />
                                <x-text-input id="linkedin" name="linkedin" type="text" class="mt-1 block w-full" :value="old('linkedin', $setting->linkedin)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('linkedin')" />
                            </div>

                            <!-- YouTube -->
                            <div>
                                <x-input-label for="youtube" :value="__('YouTube URL')" />
                                <x-text-input id="youtube" name="youtube" type="text" class="mt-1 block w-full" :value="old('youtube', $setting->youtube)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('youtube')" />
                            </div>

                            <!-- TikTok -->
                            <div>
                                <x-input-label for="tiktok" :value="__('TikTok URL')" />
                                <x-text-input id="tiktok" name="tiktok" type="text" class="mt-1 block w-full" :value="old('tiktok', $setting->tiktok)" />
                                <x-input-error class="mt-2" :messages="$errors->get('tiktok')" />
                            </div>

                            <!-- Location -->
                            <div>
                                <x-input-label for="location" :value="__('Location')" />
                                <x-text-input id="location" name="location" type="text" class="mt-1 block w-full" :value="old('location', $setting->location)" required />
                                <x-input-error class="mt-2" :messages="$errors->get('location')" />
                            </div>

                            <!-- Status -->
                            <div>
                                <x-input-label for="status" :value="__('Status')" />
                                <select id="status" name="status" class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex h-9 w-full min-w-0 rounded-md border bg-transparent px-3 py-1 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive">
                                    <option value="active" {{ old('status', $setting->status) === 'active' ? 'selected' : '' }}>Active</option>
                                    <option value="inactive" {{ old('status', $setting->status) === 'inactive' ? 'selected' : '' }}>Inactive</option>
                                </select>
                                <x-input-error class="mt-2" :messages="$errors->get('status')" />
                            </div>
                        </div>

                        <!-- Description -->
                        <div>
                            <x-input-label for="description" :value="__('Description')" />
                            <textarea id="description" name="description" rows="4" class="border-input placeholder:text-muted-foreground selection:bg-primary selection:text-primary-foreground flex w-full min-w-0 rounded-md border bg-transparent px-3 py-2 text-base shadow-xs transition-[color,box-shadow] outline-none disabled:pointer-events-none disabled:cursor-not-allowed disabled:opacity-50 md:text-sm focus-visible:border-ring focus-visible:ring-ring/50 focus-visible:ring-[3px] aria-invalid:ring-destructive/20 dark:aria-invalid:ring-destructive/40 aria-invalid:border-destructive" required>{{ old('description', $setting->description) }}</textarea>
                            <x-input-error class="mt-2" :messages="$errors->get('description')" />
                        </div>

                        <div class="flex items-center justify-end gap-4">
                            <a href="{{ route('settings.index') }}" class="inline-flex items-center px-4 py-2 bg-gray-300 dark:bg-gray-700 border border-transparent rounded-md font-semibold text-xs text-gray-800 dark:text-gray-300 uppercase tracking-widest hover:bg-gray-400 dark:hover:bg-gray-600 focus:bg-gray-400 dark:focus:bg-gray-600 active:bg-gray-500 dark:active:bg-gray-500 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150">
                                {{ __('Cancel') }}
                            </a>
                            <x-primary-button>{{ __('Update') }}</x-primary-button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
