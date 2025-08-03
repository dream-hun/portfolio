<div class="flex flex-col gap-8 w-full px-8">
    {{-- Include Quill.js CSS and JS --}}
    <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
    <script src="https://cdn.quilljs.com/1.3.6/quill.min.js"></script>

    @if($notification)
        <x-alert :type="$notification['type']" show="true">
            {{ $notification['message'] }}
        </x-alert>
    @endif

    <div class="flex justify-between items-center">
        <h1 class="text-3xl font-semibold leading-6 text-slate-900">Posts</h1>
        <livewire:create-post-modal @postAdded="$refresh" />
    </div>

    <div class="bg-white shadow rounded-xl overflow-hidden">
        <table class="min-w-full divide-y divide-slate-300">
            <thead>
            <tr class="text-left text-slate-800">
                <th class="pl-6 rounded-tl-xl py-4 font-semibold bg-slate-50">Title</th>
                <th class="pl-4 py-4 font-semibold bg-slate-50 hidden sm:table-cell">Status</th>
                <th class="pl-4 py-4 font-semibold bg-slate-50 hidden lg:table-cell">Published</th>
                <th class="pl-4 rounded-tr-xl pr-4 bg-slate-50"></th>
            </tr>
            </thead>

            <tbody class="divide-y divide-slate-200" wire:loading.class="opacity-50">
            @forelse ($posts as $post)
                <livewire:post-row :key="$post->id" :$post @deleted="delete({{ $post->id }})" />
            @empty
                <tr>
                    <td colspan="4" class="text-center py-12 text-slate-500">
                        <div class="flex flex-col items-center gap-2">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                 stroke="currentColor" class="w-12 h-12">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                      d="M19.5 14.25v-2.625a3.375 3.375 0 00-3.375-3.375h-1.5A1.125 1.125 0 0113.5 7.125v-1.5a3.375 3.375 0 00-3.375-3.375H8.25m0 12.75h7.5m-7.5 3H12M10.5 2.25H5.625c-.621 0-1.125.504-1.125 1.125v17.25c0 .621.504 1.125 1.125 1.125h12.75c.621 0 1.125-.504 1.125-1.125V11.25a9 9 0 00-9-9z" />
                            </svg>
                            <p class="text-lg font-medium">No posts yet</p>
                            <p class="text-sm">Create your first post to get started</p>
                        </div>
                    </td>
                </tr>
            @endforelse
            </tbody>
        </table>
    </div>
</div>
