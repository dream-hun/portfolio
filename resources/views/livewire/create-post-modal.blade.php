<div>
    <x-dialog wire:model="showAddModal">
        <x-dialog.open>
            <button type="button"
                    class="text-white bg-blue-500 rounded-xl px-4 py-2 text-sm hover:bg-blue-600 transition-colors">
                New Post
            </button>
        </x-dialog.open>

        <x-dialog.panel class="max-w-4xl">
            <form wire:submit.prevent="addPost" class="flex flex-col gap-4">
                <h2 class="text-3xl font-bold mb-1">Create New Post</h2>

                <hr class="w-[75%]">

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <label class="flex flex-col gap-2 font-bold">
                        Title
                        <input autofocus wire:model="form.title"
                               class="px-3 py-2 border font-normal rounded-lg border-slate-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                               placeholder="Enter post title">
                        @error('form.title')
                        <div class="text-sm text-red-500 font-normal">{{ $message }}</div>
                        @enderror
                    </label>

                    <label class="flex flex-col gap-2 font-bold">
                        Category
                        <select wire:model="form.category_id"
                                class="px-3 py-2 border font-normal rounded-lg border-slate-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            <option value="">Select a category</option>
                            @foreach($categories as $category)
                                <option value="{{ $category->id }}">{{ $category->name }}</option>
                            @endforeach
                        </select>
                        @error('form.category_id')
                        <div class="text-sm text-red-500 font-normal">{{ $message }}</div>
                        @enderror
                    </label>
                </div>

                <div class="grid grid-cols-1 gap-4">
                    <label class="flex flex-col gap-2 font-bold">
                        Tags
                        <div wire:ignore x-data="{
                            selectedTags: @entangle('form.tags').defer,
                            init() {
                                let select2 = $(this.$refs.select).select2({
                                    placeholder: 'Select tags',
                                    allowClear: true,
                                    width: '100%',
                                    theme: 'bootstrap-5',
                                    closeOnSelect: false
                                });

                                // Set initial value
                                select2.val(this.selectedTags).trigger('change');

                                // Update Alpine data when Select2 changes
                                select2.on('change', (e) => {
                                    this.selectedTags = $(e.target).val();
                                });

                                // Update Select2 when Alpine data changes
                                this.$watch('selectedTags', (value) => {
                                    if (JSON.stringify(value) !== JSON.stringify($(this.$refs.select).val())) {
                                        $(this.$refs.select).val(value).trigger('change');
                                    }
                                });
                            }
                        }">
                            <select x-ref="select" multiple
                                    class="select2-tags px-3 py-2 border font-normal rounded-lg border-slate-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                                @foreach($tags as $tag)
                                    <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                @endforeach
                            </select>
                        </div>
                        @error('form.tags')
                        <div class="text-sm text-red-500 font-normal">{{ $message }}</div>
                        @enderror
                    </label>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <label class="flex flex-col gap-2 font-bold">
                        Status
                        <select wire:model="form.status"
                                class="px-3 py-2 border font-normal rounded-lg border-slate-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                            <option value="draft">Draft</option>
                            <option value="published">Published</option>
                            <option value="archived">Archived</option>
                        </select>
                        @error('form.status')
                        <div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>
                </div>

                <div class="grid grid-cols-1 lg:grid-cols-2 gap-4">
                    <label class="flex flex-col gap-2 font-bold">
                        Published At
                        <input type="datetime-local" wire:model="form.published_at"
                               class="px-3 py-2 border font-normal rounded-lg border-slate-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500">
                        @error('form.published_at')
                        <div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>

                    <label class="flex flex-col gap-2 font-bold">
                        Featured Image URL
                        <input wire:model="form.featured_image"
                               class="px-3 py-2 border font-normal rounded-lg border-slate-300 focus:border-blue-500 focus:ring-1 focus:ring-blue-500"
                               placeholder="https://example.com/image.jpg">
                        @error('form.featured_image')
                        <div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                    </label>
                </div>

                <label class="flex flex-col gap-2 font-bold">
                    Content
                    <div wire:ignore>
                        <div id="create-editor" style="height: 300px;"></div>
                        <textarea wire:model="form.content" id="create-content" class="hidden"></textarea>
                    </div>
                    @error('form.content')
                    <div class="text-sm text-red-500 font-normal">{{ $message }}</div>@enderror
                </label>

                <x-dialog.footer>
                    <x-dialog.close>
                        <button type="button"
                                class="text-center rounded-xl bg-slate-300 text-slate-800 px-6 py-2 font-semibold hover:bg-slate-400 transition-colors">
                            Cancel
                        </button>
                    </x-dialog.close>

                    <button type="submit"
                            class="text-center rounded-xl bg-blue-500 text-white px-6 py-2 font-semibold disabled:cursor-not-allowed disabled:opacity-50 hover:bg-blue-600 transition-colors">
                        Create Post
                    </button>
                </x-dialog.footer>
            </form>

            <script>
                document.addEventListener('livewire:initialized', () => {
                    initializeCreateEditor();
                });

                function initializeCreateEditor() {
                    if (typeof Quill !== 'undefined' && document.getElementById('create-editor')) {
                        const quill = new Quill('#create-editor', {
                            theme: 'snow',
                            placeholder: 'Write your post content here...',
                            modules: {
                                toolbar: [
                                    [{ 'header': [1, 2, 3, 4, 5, 6, false] }],
                                    ['bold', 'italic', 'underline', 'strike'],
                                    [{ 'color': [] }, { 'background': [] }],
                                    [{ 'list': 'ordered' }, { 'list': 'bullet' }],
                                    [{ 'align': [] }],
                                    ['link', 'image'],
                                    ['clean']
                                ]
                            }
                        });

                        // Update Livewire when content changes
                        quill.on('text-change', function() {
                            const content = quill.root.innerHTML;
                            document.getElementById('create-content').value = content;
                            document.getElementById('create-content').dispatchEvent(new Event('input'));
                        });

                        // Reset editor when modal closes
                        Livewire.on('postAdded', () => {
                            quill.setContents([]);
                        });
                    }
                }
            </script>
        </x-dialog.panel>
    </x-dialog>
</div>
