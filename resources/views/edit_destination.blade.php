



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
    <div class="container">
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
    <section class="w-100" style="max-width: 600px; background: #fff; padding: 20px; border-radius: 10px; box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);">
        <h4 class="text-center mb-4">Update Destination</h4>

        @if ($errors->any())
            <div class="alert alert-danger">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        <form action="{{ route('update_destination', ['id' => $destination->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT') <!-- Specify PUT method for updating -->

            <div class="mb-3">
                <label for="title" class="form-label">Destination Name</label>
                <input type="text" id="title" name="title" class="form-control" value="{{ $destination->title }}" placeholder="Destination Title" required>
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea id="description" name="description" class="form-control" rows="4" placeholder="Description" required>{{ $destination->description }}</textarea>
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image</label>
                <input type="file" id="image" name="image" class="form-control" accept="image/*">
                <!-- Display existing image if available -->
                @if($destination->image_path)
                    <div class="mt-2">
                        <img src="{{ asset('storage/'.$destination->image_path) }}" alt="Current Image" style="max-width: 100%; height: auto; border-radius: 5px;">
                    </div>
                @endif
                <small class="form-text text-muted">Max size: 2MB. Formats: JPG, PNG, GIF.</small>
            </div>

            <div class="text-center">
                <button type="submit" class="btn btn-primary">Update Destination</button>
            </div>
        </form>

        @if (session('success'))
            <div class="alert alert-success mt-3">
                <p>{{ session('success') }}</p>
            </div>
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

