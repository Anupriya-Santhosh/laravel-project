<x-app-layout>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>
    <link rel="icon" href="images/logo web.webp" type="image/png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/dash.css') }}">
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <!-- Sidebar -->
            <div class="col-md-3 col-lg-2 sidebar" id="sidebar">
                <button id="close-btn" class="close-btn">&times;</button>
                <div class="sidebar-header">
                    <h2>Menu</h2>
                </div>
                <ul class="list-unstyled">
                <li><a href="{{ asset('dashboard') }}">Home</a></li>
                <li><a href="{{ asset('add_destination') }}">Add Destination</a></li>
                <li><a href="{{ asset('dash') }}">Feature Destination</a></li>
                <li><a href="{{ asset('booking')}}">Bookings</a></li>
                <li><a href="#">Logout</a></li>
            </ul>
            </div>

            <!-- Main Content -->
            <div class="col-md-9 col-lg-10 main-content">
                <header class="dashboard-header d-flex align-items-center justify-content-between py-3">
                    <button id="toggle-btn" class="btn btn-outline-secondary">&#9776; Menu</button>
                    <h1 class="h3">Welcome to Dashboard</h1>
                </header>
    <main class="d-flex justify-content-center align-items-center" style="min-height: 80vh;">
        <section class="w-100" style="max-width: 1000px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
            <h4 class="text-center mb-4">Booking Details</h4>

            <!-- Check if there are any bookings -->
            @if ($bookings->isEmpty())
                <p class="text-center">No bookings found.</p>
            @else
                <table class="table table-bordered table-hover">
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
        </section>
    </main>
    </div>
        </div>
    </div>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
</x-app-layout>
