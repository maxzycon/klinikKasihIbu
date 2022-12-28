<x-app-layout>
    <x-slot name="header">
        {{ __('Antrian') }}
    </x-slot>

    <div class="rounded-lg shadow-xs">
        <div class="grid grid-cols-4">
            @foreach($rs as $r)
                <a href="{{ route("rumahSakit.category", $r->id) }}" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 mr-2">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ $r->nama_rs }}
                    </p>
                </a>
            @endforeach
        </div>
    </div>
</x-app-layout>
