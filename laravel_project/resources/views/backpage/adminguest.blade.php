<x-villa-layout>
    <div class="px-10">
        <div class="grid grid-cols-2 grid-rows-1 gap-0">
            <a href="{{route('adminguest.create')}}" type="button" class="bg-blue-300 inline-block mx-4 px-6 py-2 border-2 w-1/3 border-blue-600 text-black font-medium text-xs leading-tight uppercase rounded-r-md hover:bg-indigo-500 hover:border-indigo-300 focus:outline-none focus:ring-0 transition duration-150 ease-in-out">Tambah Tamu</a>
            <form action="{{route('adminguest.index')}}" method="GET">
                <div class="flex">
                    <div class="relative w-full">
                        <input type="search" name="s" value="{{(isset($_GET['s']))?$_GET['s']:''}}" id="search-dropdown" class="block p-2.5 w-full z-20 text-sm text-gray-900 bg-gray-50 rounded-e-lg border-s-gray-50 border-s-2 border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-s-gray-700  dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:border-blue-500" placeholder="Search">
                        <button type="submit" class="absolute top-0 right-0 p-2.5 text-sm font-medium h-full text-white bg-blue-700 rounded-e-lg border border-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                            <svg class="w-4 h-4" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                            <span class="sr-only">Search</span>
                        </button>
                    </div>
                </div>
            </form>
        </div>
        
        <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400 shadow-lg mt-10 border-gray-500">
            <thead class="text-xs text-gray-700 uppercase bg-slate-50 dark:bg-gray-700 dark:text-gray-200">
                <tr>
                    <th scope="col" class="px-6 py-3">Nama Tamu</th>
                    <th scope="col" class="px-6 py-3">Email</th>
                    <th scope="col" class="px-6 py-3">Nomor Telepon</th>
                    <th scope="col" class="px-6 py-3">Alamat</th>
                    <th scope="col" class="px-6 py-3">Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($guest as $guest)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <td class="px-6 py-4 font-bold text-justify">{{ $guest->nama }}</td>
                    <td class="px-6 py-4 text-justify">{{ $guest->email }}</td>
                    <td class="px-6 py-4 text-justify">{{ $guest->phone_number }}</td>
                    <td class="px-6 py-4 text-justify">{{ $guest->address }}</td>
                    <td class="px-6 py-4">
                        <a href="{{ route('adminguest.edit', $guest->id) }}" class="font-medium text-blue-600 dark:text-blue-500 hover:underline mr-2">
                            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-pen" viewBox="0 0 16 16">
                                <path d="m13.498.795.149-.149a1.207 1.207 0 1 1 1.707 1.708l-.149.148a1.5 1.5 0 0 1-.059 2.059L4.854 14.854a.5.5 0 0 1-.233.131l-4 1a.5.5 0 0 1-.606-.606l1-4a.5.5 0 0 1 .131-.232l9.642-9.642a.5.5 0 0 0-.642.056L6.854 4.854a.5.5 0 1 1-.708-.708L9.44.854A1.5 1.5 0 0 1 11.5.796a1.5 1.5 0 0 1 1.998-.001zm-.644.766a.5.5 0 0 0-.707 0L1.95 11.756l-.764 3.057 3.057-.764L14.44 3.854a.5.5 0 0 0 0-.708l-1.585-1.585z"/>
                            </svg>
                        </a>
                        <form action="{{ route('adminguest.destroy', $guest->id) }}" method="POST" class="inline-block">
                            @csrf @method('DELETE')
                            <button type="submit" onclick="return confirm('Anda Yakin')" class="font-medium text-red-600 dark:text-red-500 hover:underline">
                                <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
                                    <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5Zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6Z"/>
                                    <path d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1ZM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118ZM2.5 3h11V2h-11v1Z"/>
                                </svg>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</x-villa-layout>
