<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            Edit Employee
        </h2>
    </x-slot>

    <div class="p-6 bg-white rounded shadow max-w-lg mx-auto mt-6">
        <form method="POST" action="{{ url('/employee-update/' . $employee->id) }}">
            @csrf
            @method('PUT')

            {{-- Name --}}
            <div class="mb-4">
                <label class="block text-gray-700">Name</label>
                <input type="text" name="name" value="{{ old('name', $employee->name) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 @error('name') border-red-500 @enderror">
                @error('name')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Age --}}
            <div class="mb-4">
                <label class="block text-gray-700">Age</label>
                <input type="number" name="age" value="{{ old('age', $employee->age) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 @error('age') border-red-500 @enderror">
                @error('age')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Position --}}
            <div class="mb-4">
                <label class="block text-gray-700">Position</label>
                <input type="text" name="position" value="{{ old('position', $employee->position) }}"
                    class="w-full border border-gray-300 rounded px-3 py-2 @error('position') border-red-500 @enderror">
                @error('position')
                    <p class="text-red-500 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            <button type="submit" class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                Update Employee
            </button>
        </form>
    </div>
</x-app-layout>
