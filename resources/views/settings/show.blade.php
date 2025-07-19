<x-admin-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('View Setting') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900 dark:text-gray-100">
                    <div class="flex justify-between items-center mb-6">
                        <h3 class="text-lg font-semibold">{{ $setting->site_name }}</h3>
                        <div class="flex space-x-2">
                            <a href="{{ route('settings.edit', $setting) }}" class="px-4 py-2 bg-indigo-600 text-white rounded-md hover:bg-indigo-700 transition">
                                {{ __('Edit') }}
                            </a>
                            <a href="{{ route('settings.index') }}" class="px-4 py-2 bg-gray-600 text-white rounded-md hover:bg-gray-700 transition">
                                {{ __('Back to List') }}
                            </a>
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Site Name') }}</h4>
                            <p>{{ $setting->site_name }}</p>
                        </div>

                        <div>
                            <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Email') }}</h4>
                            <p>{{ $setting->email ?? 'N/A' }}</p>
                        </div>

                        <div>
                            <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('GitHub') }}</h4>
                            <p><a href="{{ $setting->github }}" target="_blank" class="text-blue-600 hover:underline">{{ $setting->github }}</a></p>
                        </div>

                        <div>
                            <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Twitter') }}</h4>
                            <p><a href="{{ $setting->twitter }}" target="_blank" class="text-blue-600 hover:underline">{{ $setting->twitter }}</a></p>
                        </div>

                        <div>
                            <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Instagram') }}</h4>
                            <p><a href="{{ $setting->instagram }}" target="_blank" class="text-blue-600 hover:underline">{{ $setting->instagram }}</a></p>
                        </div>

                        <div>
                            <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Facebook') }}</h4>
                            <p><a href="{{ $setting->facebook }}" target="_blank" class="text-blue-600 hover:underline">{{ $setting->facebook }}</a></p>
                        </div>

                        <div>
                            <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('LinkedIn') }}</h4>
                            <p><a href="{{ $setting->linkedin }}" target="_blank" class="text-blue-600 hover:underline">{{ $setting->linkedin }}</a></p>
                        </div>

                        <div>
                            <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('YouTube') }}</h4>
                            <p><a href="{{ $setting->youtube }}" target="_blank" class="text-blue-600 hover:underline">{{ $setting->youtube }}</a></p>
                        </div>

                        <div>
                            <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('TikTok') }}</h4>
                            <p>
                                @if($setting->tiktok)
                                    <a href="{{ $setting->tiktok }}" target="_blank" class="text-blue-600 hover:underline">{{ $setting->tiktok }}</a>
                                @else
                                    N/A
                                @endif
                            </p>
                        </div>

                        <div>
                            <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Location') }}</h4>
                            <p>{{ $setting->location }}</p>
                        </div>

                        <div>
                            <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Status') }}</h4>
                            <p>
                                <span class="px-2 inline-flex text-xs leading-5 font-semibold rounded-full {{ $setting->status === 'active' ? 'bg-green-100 text-green-800' : 'bg-red-100 text-red-800' }}">
                                    {{ ucfirst($setting->status) }}
                                </span>
                            </p>
                        </div>
                    </div>

                    <div>
                        <h4 class="text-sm font-medium text-gray-500 dark:text-gray-400 uppercase tracking-wider mb-2">{{ __('Description') }}</h4>
                        <div class="bg-gray-100 dark:bg-gray-700 p-4 rounded">
                            {{ $setting->description }}
                        </div>
                    </div>

                    <div class="mt-6 border-t border-gray-200 dark:border-gray-700 pt-4">
                        <div class="flex justify-between text-sm text-gray-500 dark:text-gray-400">
                            <div>
                                <span>{{ __('Created at') }}: {{ $setting->created_at->format('M d, Y H:i') }}</span>
                            </div>
                            <div>
                                <span>{{ __('Last updated') }}: {{ $setting->updated_at->format('M d, Y H:i') }}</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-admin-layout>
