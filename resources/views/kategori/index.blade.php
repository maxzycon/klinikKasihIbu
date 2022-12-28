<x-app-layout>
    <x-slot name="header">
        {{ __('Kategori') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">
        <a href="{{ route("kategori.create") }}">
            <x-primary-button class="mb-4">Tambah</x-primary-button>
        </a>
        <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
            <div class="overflow-x-auto w-full">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Rumah sakit</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                    @foreach($kategori as $s)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 text-sm">
                                {{ $s->nama_kategori }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $s->rumah_sakit->nama_rs }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
                {{ $kategori->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
