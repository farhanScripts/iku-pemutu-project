<div>
    <form wire:submit.prevent="import" enctype="multipart/form-data">
        <input type="file" wire:model="file" accept=".xls,.xlsx" />
        @error('file') <span class="error">{{ $message }}</span> @enderror

        <button type="submit" class="bg-blue-500 text-white px-4 py-2 rounded mt-2">Upload</button>
    </form>

    @if (session()->has('message'))
        <div class="mt-4 text-green-500">
            {{ session('message') }}
        </div>
    @endif
</div>
