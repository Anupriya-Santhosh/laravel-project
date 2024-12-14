<!-- resources/views/book_db.blade.php -->

<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Booking Details</title>
    <link rel="icon" href="images/logo web.webp" type="image/png">
    <!-- Include Bootstrap for styling -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container my-5">
        <h1 class="mb-4">Booking Details</h1>

        <!-- Check if there are any bookings -->
        @if ($bookings->isEmpty())
            <p>No bookings found.</p>
        @else
            <table class="table table-bordered">
                <thead class="thead-dark">
                    <tr>
                        <th>ID</th>
                        <th>Full Name</th>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Destination</th>
                        <th>Travel Date</th>
                        <th>Guests</th>
                        <th>Created At</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($bookings as $booking)
                        <tr>
                            <td>{{ $booking->id }}</td>
                            <td>{{ $booking->full_name }}</td>
                            <td>{{ $booking->email }}</td>
                            <td>{{ $booking->phone }}</td>
                            <td>{{ $booking->destination }}</td>
                            <td>{{ $booking->travel_date }}</td>
                            <td>{{ $booking->guests }}</td>
                            <td>{{ $booking->created_at }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        @endif
    </div>

    <!-- Include Bootstrap JS for any JavaScript interactions (optional) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
