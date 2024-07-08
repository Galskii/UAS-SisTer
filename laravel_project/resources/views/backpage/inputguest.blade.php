<x-villa-layout>
    <a href="{{ route('adminguest.index') }}" type="button" class="bg-blue-300 inline-block mx-4 px-6 py-2 border-2 border-blue-600 text-black font-medium text-xs leading-tight uppercase rounded-r-md hover:bg-indigo-500 hover:border-indigo-300 focus:outline-none focus:ring-0 transition duration-150 ease-in-out" width="20px">Back</a>
    <body class="flex flex-col items-center justify-center w-screen h-screen bg-gray-200 text-gray-700">

        <!-- Component Start -->
        <form class="flex flex-col bg-white rounded shadow-lg p-12 mt-12" action="{{ isset($guest) ? route('guest.update', $guest->id) : route('guest.store') }}" method="POST">
            @csrf
            @if(isset($guest)) @method('PUT') @endif
            <div>
                <label for="nama" class="font-semibold text-xs">Nama</label>
                <input value="{{ isset($guest) ? $guest->nama : old('nama') }}" id="nama" name="nama" class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text" required>
                @error('nama')
                <div class="text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="email" class="font-semibold text-xs mt-3">Email</label>
                <input value="{{ isset($guest) ? $guest->email : old('email') }}" id="email" name="email" class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="email" required>
                @error('email')
                <div class="text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="phone_number" class="font-semibold text-xs mt-3">Phone Number</label>
                <input value="{{ isset($guest) ? $guest->phone_number : old('phone_number') }}" id="phone_number" name="phone_number" class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text" required>
                @error('phone_number')
                <div class="text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <div>
                <label for="address" class="font-semibold text-xs mt-3">Address</label>
                <input value="{{ isset($guest) ? $guest->address : old('address') }}" id="address" name="address" class="flex items-center h-12 px-4 w-64 bg-gray-200 mt-2 rounded focus:outline-none focus:ring-2" type="text" required>
                @error('address')
                <div class="text-xs text-red-500">{{ $message }}</div>
                @enderror
            </div>
            <button type="submit" class="flex items-center justify-center h-12 px-6 w-64 bg-blue-600 mt-8 rounded font-semibold text-sm text-blue-100 hover:bg-blue-700">Save</button>
        </form>
    </body>
</x-villa-layout>
