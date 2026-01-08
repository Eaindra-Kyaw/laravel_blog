<!DOCTYPE html>
<html>

<head>
    <title>Employee List</title>
</head>

<body>

    <h1>Employee List</h1>

    @if (session('success'))
        <p style="color:green;">{{ session('success') }}</p>
    @endif

    <ul>
        @foreach ($employees as $employee)
            <li>
                {{ $employee->id }} | {{ $employee->name }} | Age: {{ $employee->age }} | Position:
                {{ $employee->position }}
            </li>
        @endforeach
    </ul>

    <p>
        {{-- <a href="/create-employee">Create Sample Employee</a> | --}}
        {{-- <a href="/update-employee">Update Employee ID 2</a> | --}}
        <a href="/delete-employee">Delete Employee ID 2</a>
    </p>

</body>

</html>
