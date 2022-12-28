<x-app-layout>
    <x-slot name="header">
        {{ __('Antrian') }} {{ $rumahSakit->nama_rs }}
    </x-slot>

    <img width="200" src="{{ url("storage/".$rumahSakit->thumbnail_rs) }}">

    <p>{{ $rumahSakit->descriptiton_rs }}</p>
    <p>{{ $rumahSakit->alamat_rs }}</p>

    <div class="rounded-lg shadow-xs">
        <div class="grid grid-cols-4">
            @foreach($rumahSakit->categoryRs as $r)
                <a href="{{ route("rumahSakit.categoryList", $r->id) }}" class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 mr-2 mt-4">
                    <p class="text-sm text-gray-600 dark:text-gray-400">
                        {{ $r->nama_kategori }}
                    </p>
                    <p>{{ $r->start_time }} - {{ $r->end_time }}</p>
                    <p>{{ $r->max_queue }}</p>
                </a>
            @endforeach
        </div>
    </div>
</x-app-layout>
