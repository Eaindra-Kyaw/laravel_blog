<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">Employees List</h2>
    </x-slot>

    <div class="p-6 bg-white rounded shadow max-w-3xl mx-auto mt-6">
        @if (session('success'))
            <div class="bg-green-100 border border-green-400 text-green-700 px-4 py-3 rounded mb-4">
                {{ session('success') }}
            </div>
        @endif

        <a href="{{ url('/employee-form') }}"
            class="bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 mb-4 inline-block">
            Add New Employee
        </a>

        <table class="w-full border-collapse border border-gray-300">
            <thead>
                <tr class="bg-gray-100">
                    <th class="border px-4 py-2">ID</th>
                    <th class="border px-4 py-2">Name</th>
                    <th class="border px-4 py-2">Age</th>
                    <th class="border px-4 py-2">Position</th>
                    <th class="border px-4 py-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employees as $employee)
                    <tr>
                        <td class="border px-4 py-2">{{ $employee->id }}</td>
                        <td class="border px-4 py-2">{{ $employee->name }}</td>
                        <td class="border px-4 py-2">{{ $employee->age }}</td>
                        <td class="border px-4 py-2">{{ $employee->position }}</td>
                        <td class="border px-4 py-2">
                            <a href="{{ url('/employee-edit/' . $employee->id) }}"
                                class="bg-yellow-500 text-white px-2 py-1 rounded hover:bg-yellow-600">
                                Edit
                            </a>

                            <form action="{{ url('/employee-delete/' . $employee->id) }}" method="POST"
                                class="inline-block">
                                @csrf
                                @method('DELETE')
                                <button type="button" class="bg-red-600 text-white px-2 py-1 rounded hover:bg-red-700"
                                    onclick="confirmDelete(this)">
                                    Delete
                                </button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script>
        function confirmDelete(button) {
            if (confirm('Are you sure you want to delete this employee?')) {
                button.closest('form').submit();
            }
        }
    </script>
</x-app-layout>
