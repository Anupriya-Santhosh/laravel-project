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
            <!-- resources/views/dashboard.blade.php -->

    <section>
    <h4 align="center">Feature Destinations</h4>
    <p align="center">Explore our curated destinations for an unforgettable travel experience.</p>

    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Title</th>
                <th>Description</th>
                <th>Image</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
        @foreach($destinations as $destination)
    <tr>
        <td>{{ $destination->title }}</td>
        <td>{{ $destination->description }}</td>
        <td> @if ($destination->image)
        <img src="{{ asset('storage/' . $destination->image) }}" alt="{{ $destination->title }}" width="100">
                        @else
                            No Image
                        @endif</td>
        
        <td>
            <a href="{{ route('edit_destination', ['id' => $destination->id]) }}">Edit</a>


            <!-- Delete form -->
            <form action="{{ route('delete_destination', ['id' => $destination->id]) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE') <!-- Specify DELETE method -->
                <button type="submit" class="btn btn-danger">Delete</button>
            </form>
        </td>
    </tr>
@endforeach
        </tbody>
    </table>
</section>

            </div>
        </div>
    </div>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</x-app-layout>

           

