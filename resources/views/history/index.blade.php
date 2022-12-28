<x-app-layout>
    <x-slot name="header">
        {{ __('History') }}
    </x-slot>

    <div class="p-4 bg-white rounded-lg shadow-xs">
        <div class="overflow-hidden mb-8 w-full rounded-lg border shadow-xs">
            <div class="overflow-x-auto w-full">
                <table class="w-full whitespace-no-wrap">
                    <thead>
                    <tr class="text-xs font-semibold tracking-wide text-left text-gray-500 uppercase bg-gray-50 border-b">
                        <th class="px-4 py-3">Nama</th>
                        <th class="px-4 py-3">Kategori</th>
                        <th class="px-4 py-3">Nomor Antrian</th>
                        <th class="px-4 py-3">Rumah sakit</th>
                        <th class="px-4 py-3">Tanggal</th>
                        <th class="px-4 py-3">Priority</th>
                        @if(auth()->user()->role == 1)
                        <th class="px-4 py-3">Action</th>
                        @endif
                    </tr>
                    </thead>
                    <tbody class="bg-white divide-y">
                        @foreach($antrian as $s)
                            <tr class="text-gray-700">
                                <td class="px-4 py-3 text-sm">
                                    {{ $s->user->name }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $s->category_rs->nama_kategori }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    A{{ $s->category_rs->rumah_sakit_id }}{{ $s->category_rs_id }}-{{str_pad($s->nomor_antrian,5,'0',STR_PAD_LEFT)}}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $s->category_rs->rumah_sakit->nama_rs }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $s->tanggal_antrian }}
                                </td>
                                <td class="px-4 py-3 text-sm">
                                    {{ $s->priority }}
                                </td>
                                @if(auth()->user()->role == 1)
                                <td class="px-4 py-3 text-sm">
                                    <form method="POST" action="{{ route("queue.update", $s->id) }}">
                                        @csrf
                                        @method('PUT')
                                        <x-primary-button>Selesai</x-primary-button>
                                    </form>
                                </td>
                                @endif
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="px-4 py-3 text-xs font-semibold tracking-wide text-gray-500 uppercase bg-gray-50 border-t sm:grid-cols-9">
                {{ $antrian->links() }}
            </div>
        </div>
    </div>
</x-app-layout>
