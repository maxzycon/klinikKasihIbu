<x-app-layout>
    <x-slot name="header">
        {{ __('Buat rumah sakit') }}
    </x-slot>
    <a href="{{ route("rumahSakit.index") }}">
        <x-primary-button class="mb-4">Kembali</x-primary-button>
    </a>
    <div class="px-4 py-3 mb-8 bg-white rounded-lg shadow-md dark:bg-gray-800">
       <form action="{{ route("rumahSakit.store") }}" method="POST" enctype="multipart/form-data">
           @csrf
           <label class="block text-sm">
               <span class="text-gray-700 dark:text-gray-400">Nama rumah sakit</span>
               <input class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" placeholder="Masukan nama rumah sakit" type="text" name="nama_rs" required>
           </label>


           <label class="block mt-4 text-sm">
               <span class="text-gray-700 dark:text-gray-400">Deskripsi</span>
               <textarea name="descriptiton_rs" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Masukan deskripsi rumah sakit"></textarea>
           </label>


           <label class="block mt-4 text-sm">
               <span class="text-gray-700 dark:text-gray-400">Alamat</span>
               <textarea  name="alamat_rs" class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-textarea focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" rows="3" placeholder="Masukan alamat rumah sakit"></textarea>
           </label>


           <label class="block text-sm">
               <span class="text-gray-700 dark:text-gray-400">Gambar rumah sakit</span>
               <input name="thumbnail_rs" class="block w-full mt-1 text-sm dark:border-gray-600 dark:bg-gray-700 focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:text-gray-300 dark:focus:shadow-outline-gray form-input" type="file">
           </label>

           <div class="mt-4">
               <x-primary-button type="submit">Submit</x-primary-button>
           </div>
       </form>


{{--        <div class="mt-4 text-sm">--}}
{{--                <span class="text-gray-700 dark:text-gray-400">--}}
{{--                  Account Type--}}
{{--                </span>--}}
{{--            <div class="mt-2">--}}
{{--                <label class="inline-flex items-center text-gray-600 dark:text-gray-400">--}}
{{--                    <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="personal">--}}
{{--                    <span class="ml-2">Personal</span>--}}
{{--                </label>--}}
{{--                <label class="inline-flex items-center ml-6 text-gray-600 dark:text-gray-400">--}}
{{--                    <input type="radio" class="text-purple-600 form-radio focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" name="accountType" value="busines">--}}
{{--                    <span class="ml-2">Business</span>--}}
{{--                </label>--}}
{{--            </div>--}}
{{--        </div>--}}

{{--        <label class="block mt-4 text-sm">--}}
{{--                <span class="text-gray-700 dark:text-gray-400">--}}
{{--                  Requested Limit--}}
{{--                </span>--}}
{{--            <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-select focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">--}}
{{--                <option>$1,000</option>--}}
{{--                <option>$5,000</option>--}}
{{--                <option>$10,000</option>--}}
{{--                <option>$25,000</option>--}}
{{--            </select>--}}
{{--        </label>--}}

{{--        <label class="block mt-4 text-sm">--}}
{{--                <span class="text-gray-700 dark:text-gray-400">--}}
{{--                  Multiselect--}}
{{--                </span>--}}
{{--            <select class="block w-full mt-1 text-sm dark:text-gray-300 dark:border-gray-600 dark:bg-gray-700 form-multiselect focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray" multiple="">--}}
{{--                <option>Option 1</option>--}}
{{--                <option>Option 2</option>--}}
{{--                <option>Option 3</option>--}}
{{--                <option>Option 4</option>--}}
{{--                <option>Option 5</option>--}}
{{--            </select>--}}
{{--        </label>--}}


{{--        <div class="flex mt-6 text-sm">--}}
{{--            <label class="flex items-center dark:text-gray-400">--}}
{{--                <input type="checkbox" class="text-purple-600 form-checkbox focus:border-purple-400 focus:outline-none focus:shadow-outline-purple dark:focus:shadow-outline-gray">--}}
{{--                <span class="ml-2">--}}
{{--                    I agree to the--}}
{{--                    <span class="underline">privacy policy</span>--}}
{{--                  </span>--}}
{{--            </label>--}}
{{--        </div>--}}
    </div>

</x-app-layout>

