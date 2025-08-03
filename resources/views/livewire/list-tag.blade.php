<div class="flex flex-col gap-8 w-full px-8 dark:bg-gray-900">

    @if($notification)
        <x-alert :type="$notification['type']" show="true">
            {{ $notification['message'] }}
        </x-alert>
    @endif

    <div class="flex justify-between">
        <h1 class="text-3xl font-semibold leading-6 text-slate-900">&nbsp;</h1>

        <livewire:create-tag-modal @tagAdded="$refresh" />
    </div>

    <table class="min-w-full divide-y divide-slate-300 bg-white shadow rounded-xl">
        <thead>
        <tr class="text-left text-slate-800">
            <th class="pl-6 rounded-tl-xl py-4 font-semibold bg-slate-50">Name</th>
            <th class="pl-4 rounded-tr-xl pr-4 bg-slate-50"></th>
        </tr>
        </thead>

        <tbody class="divide-y divide-slate-200" wire:loading.class="opacity-50">
            @foreach ($tags as $tag)
                <livewire:tag-row :key="$tag->id" :$tag @deleted="delete({{ $tag->id }})" />
            @endforeach
        </tbody>
    </table>
</div>
