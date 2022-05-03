<x-layout>
    <thead>
        <tr class="bg-light">
            <th scope="col"><a class="fs-5 text-black text-decoration-none">Project</a></th>
            <th scope="col"><a class="fs-5 text-black text-decoration-none">Employee</a></th>
            <th scope="col"><a class="fs-5 text-black text-decoration-none">Hours</a></th>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->employee_name }}</td>
                <td>{{ $employee->total_sales }}</td>
            </tr>
        @endforeach
    </tbody>
</x-layout>