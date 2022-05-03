<x-layout>
    <thead>
        <tr class="bg-light">
            <th scope="col"><a class="fs-5 text-black text-decoration-none">Project</a></th>
            <th scope="col"><a class="fs-5 text-black text-decoration-none">Employee</a></th>
            <th scope="col"><a class="fs-5 text-black text-decoration-none">Date</a></th>
            <th scope="col"><a class="fs-5 text-black text-decoration-none">Hours</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach ($employees as $employee)
        <tr>
            <td data-column="name">{{ $employee->name }}</td>
            <td data-column="employee_name">{{ $employee->employee_name }}</td>
            <td>{{ date('d-m-Y') }}</td>
            <td data-column="hours">{{ $employee->hours }}</td>
        </tr>
    @endforeach
    </tbody>
</x-layout>
