<div>
    <x-dialog wire:model="showAddModal">
        <x-dialog.open>
            <button type="button" class="text-white bg-blue-500 rounded-xl px-4 py-2 text-sm">New Category</button>
        </x-dialog.open>

        <x-dialog.panel>
            <form wire:submit="save" class="flex flex-col gap-4">
                <h2 class="text-3xl font-bold mb-1">Create New Category</h2>

                <hr class="w-[75%]">

                <label class="flex flex-col gap-2">
                    Name
                    <input autofocus wire:model="form.name"
                           class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                    @error('form.name')
                        <div class="text-sm text-red-500 font-normal">{{ $message }}</div>
                    @enderror
                </label>
                <label class="flex flex-col gap-2">
                    Status
                    <input autofocus wire:model="form.status"
                           class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed">
                    @error('form.status')
                    <div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>

                <label class="flex flex-col gap-2">
                    Description
                    <textarea wire:model="form.description" rows="5"
                              class="px-3 py-2 border font-normal rounded-lg border-slate-300 read-only:opacity-50 read-only:cursor-not-allowed"></textarea>
                    @error('form.description')
                    <div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>

                <x-dialog.footer>
                    <x-dialog.close>
                        <button type="button"
                                class="text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold">
                            Cancel
                        </button>
                    </x-dialog.close>

                    <button type="submit"
                            class="text-center rounded-xl bg-blue-500 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50">
                        Save category
                    </button>

                </x-dialog.footer>
            </form>
        </x-dialog.panel>
    </x-dialog>
</div>
