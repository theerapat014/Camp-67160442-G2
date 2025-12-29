<div class="mt-3 col-12">
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Airline</th>
                    <th>Number of Planes</th>
                    <th>Price per Ticket</th>
                </tr>
            </thead>
            <tbody>
                {{-- @foreach ($flights as $flight)
                    <tr>
                        <td>{{ $flight->id }}</td>
                        <td>{{ $flight->name }}</td>
                        <td>{{ $flight->airline }}</td>
                        <td>{{ $flight->number_of_planes }}</td>
                        <td>{{ $flight->price_per_ticket }}</td>
                        <td>
                            <a href="/Flight/{{ $flight->id }}/edit" class="btn btn-warning">Edit</a>
                        </td>
                    </tr>
                @endforeach --}}
            </tbody>
        </table>
    </div>
