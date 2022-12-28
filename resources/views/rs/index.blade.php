<x-app-layout>
    <x-slot name="header">
        {{ __('Rumah sakit') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">
        <a href="{{ route("rumahSakit.create") }}">
            <x-primary-button class="mb-4">Tambah</x-primary-button>
        </a>
        <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
            <div class="overflow-x-auto w-full">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Alamat</th>
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                    @foreach($rs as $s)
                        <tr class="text-gray-700">
                            <td class="px-4 py-3 text-sm">
                                {{ $s->nama_rs }}
                            </td>
                            <td class="px-4 py-3 text-sm">
                                {{ $s->alamat_rs }}
                            </td>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
            <div class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
                {{ $rs->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
