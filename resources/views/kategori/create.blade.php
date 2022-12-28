<x-app-layout>
    <x-slot name="header">
        {{ __('Buat kategori') }}
    </x-slot>
    <a href="{{ route("kategori.index") }}">
        <x-primary-button class="mb-4">Kembali</x-primary-button>
    </a>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
        <form action="{{ route("kategori.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Nama kategori</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Masukan nama kategori" type="text" name="nama_kategori" required>
            </label>

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Maximum antrian</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Masukan maximun antrian" type="number" name="max_queue" required>
            </label>


            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Jam buka</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Masukan nama rumah sakit" type="time" name="start_time" required>
            </label>


            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Jam tutup</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Masukan nama rumah sakit" type="time" name="end_time" required>
            </label>

            <label class="block text-sm">
                <span class="text-gray-700 dark:text-gray-400">Jumlah hari</span>
                <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Masukan jumlah hari antrian rumah sakit" type="number" name="jumlah_hari" required>
            </label>

            <label class="block mt-4 text-sm">
                <span class="text-gray-700 dark:text-gray-400">
                  Rumah sakit
                </span>
                <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" required name="rumah_sakit_id">
                    <option value="">- Pilih rumah sakit -</option>
                    @foreach($rs as $index => $e)
                        <option value="{{ $e["id"] }}">{{ $e["nama_rs"] }}</option>
                    @endforeach
                </select>
            </label>

            <div class="mt-4">
                <x-primary-button type="submit">Submit</x-primary-button>
            </div>
        </form>


{{--                <div class="mt-4 text-sm">--}}
{{--                        <span class="text-gray-700 dark:text-gray-400">--}}
{{--                          Account Type--}}
{{--                        </span>--}}
{{--                    <div class="mt-2">--}}
{{--                        <label class="inline-flex items-center text-gray-600 dark:text-gray-400">--}}
{{--                            <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="personal">--}}
{{--                            <span class="ml-2">Personal</span>--}}
{{--                        </label>--}}
{{--                        <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">--}}
{{--                            <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="busines">--}}
{{--                            <span class="ml-2">Business</span>--}}
{{--                        </label>--}}
{{--                    </div>--}}
{{--                </div>--}}

{{--                <label class="block mt-4 text-sm">--}}
{{--                        <span class="text-gray-700 dark:text-gray-400">--}}
{{--                          Multiselect--}}
{{--                        </span>--}}
{{--                    <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" multiple="">--}}
{{--                        <option>Option 1</option>--}}
{{--                        <option>Option 2</option>--}}
{{--                        <option>Option 3</option>--}}
{{--                        <option>Option 4</option>--}}
{{--                        <option>Option 5</option>--}}
{{--                    </select>--}}
{{--                </label>--}}


{{--                <div class="flex mt-6 text-sm">--}}
{{--                    <label class="flex items-center dark:text-gray-400">--}}
{{--                        <input type="checkbox" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">--}}
{{--                        <span class="ml-2">--}}
{{--                            I agree to the--}}
{{--                            <span class="underline">privacy policy</span>--}}
{{--                          </span>--}}
{{--                    </label>--}}
{{--                </div>--}}
    </div>

</x-app-layout>

