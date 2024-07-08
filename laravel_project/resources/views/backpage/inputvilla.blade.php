<x-villa-layout>
    <a href="{{route('adminvilla.index')}}" type="button" class="bg-blue-300 inline-block mx-4 px-6 py-2 border-2 border-blue-600 text-black font-medium text-xs leading-tight uppercase rounded-r-md hover:bg-indigo-500 hover:border-indigo-300 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" width="20px">Back</a>
    <body class="flex flex-col items-center justify-center w-screen h-screen bg-gray-200 text-gray-700">

        <!-- Component Start -->
        <form enctype="multipart/form-data" class="flex flex-col bg-white rounded shadow-lg p-12 mt-12" action="{{(isset($packages))?route('adminvilla.update',$packages->id_package):route('adminvilla.store')}}" method="POST">
        @csrf
        @if(isset($packages))@method('PUT')@endif
        <div class="grid grid-cols-2 grid-rows-1 gap-0">
            <div>
                <label for="kode" class="font-semibold text-xs">Code</label>
                <input value="{{(isset($packages))?$packages->kode_package:old('kode_package')}}" id="code" name="kode_package" class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text" required>
                    @error('kode_package')
                    <div class="text-xs text-red-500">{{ $message }}</div>
                    @enderror
            </div>
            <div>
                <label for="desk_package" class="font-semibold text-xs mt-3">Deskripsi Villa</label>
            <textarea value="{{(isset($packages))?$packages->desk_package:old('desk_package')}}" id="desk_package" name="desk_package" class="flex items-center h-12 px-4 w-1/2 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text" required>
                @error('desk_package')
                <div class="text-xs text-red-500">{{ $message }}</div>
                @enderror
            </textarea>
            </div>
        </div>
        <div>
            <label for="nama_package" class="font-semibold text-xs mt-3">Nama Villa</label>
            <input value="{{(isset($packages))?$packages->nama_package:old('nama_package')}}" id="nama_package" name="nama_package" class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text" required>
                @error('nama_package')
                <div class="text-xs text-red-500">{{ $message }}</div>
                @enderror
        </div>
        <div >    
        </div>
        <div>
            <label for="foto" class="font-semibold text-xs mt-3">Masukan Foto</label>
            <input name="img_package" class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="file" required>
                @error('img_package')
                <div class="text-xs text-red-500">{{ $message }}</div>
                @enderror
        </div>
        <div class="pt-5">
            <label for="comunities" class="font-semibold text-xs mt-3">Comunity</label>
            <select id="comunity" name="id_comunity">
                <option value="">Pilih Comunity</option>
                @foreach ($comunity as $item)
                    <option 
                    {{(isset($packages) && $packages->id_comunity == $item->id_comunity) || old('id_comunity') == $item->id_comunity ? 'selected' : '' }}
                    value="{{$item->id_comunity}}"> {{$item->nm_comunity}}</option>
                @endforeach
            </select>
                @error('id_comunity')
                <div class="text-xs text-red-500">{{ $message }}</div>
                @enderror
        </div>
        <button type="submit" class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Save</button>
        </form>
    
    </body>
</x-villa-layout>