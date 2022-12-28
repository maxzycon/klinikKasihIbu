<x-app-layout>
    <x-slot name="header">
        {{ __('List Antrian') }} {{ $category->nama_kategori }}
    </x-slot>

    <div class="rounded-lg shadow-xs">
        <div class="grid grid-cols-4">
            <?php
            $dateStart = Date("Y-m-d");
            for ($i=0; $i < $category->jumlah_hari;$i++):
            $dateStart = date("Y-m-d", strtotime("+1 days", strtotime($dateStart)));
            ?>
                <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800 mr-2 mt-4 cursor-pointer">
                    <form action="{{ route("rumahSakit.queue", $category->id) }}" method="POST">
                        @csrf
                        <input type="hidden" value="{{ $dateStart }}" name="tanggalQueue"/>
                        <h2>{{ $dateStart }}</h2>
                        <p class="text-sm text-gray-600 dark:text-gray-400">
                            {{ $category->nama_kategori }}
                        </p>
                        <p>{{ $category->start_time }} - {{ $category->end_time }}</p>
                        <p>{{ \DB::table("queues")->where("category_rs_id",$category->id)->where("tanggal_antrian", $dateStart)->count() }}/{{ $category->max_queue }}</p>

                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">
                              Priority
                            </span>
                            <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" required name="priority">
                                <option value="">- Pilih priority -</option>
                                <option value="1">Low</option>
                                <option value="2">Medium</option>
                                <option value="3">High</option>
                            </select>
                        </label>

                        <label class="block mt-4 text-sm">
                            <span class="text-gray-700 dark:text-gray-400">Alasan</span>
                            <textarea  name="alasan" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Masukan alasan priority"></textarea>
                        </label>


                        <x-primary-button class="mt-4">Antri</x-primary-button>
                    </form>
                </div>
            <?php endfor; ?>
        </div>
    </div>
</x-app-layout>
