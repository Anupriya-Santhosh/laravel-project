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
                <section class="my-4 bg-light p-5 rounded shadow text-center">
                    <h4 class="welcome-heading">Welcome To Dashboard</h4>
                </section>

                <section class="features-section my-4 p-5 rounded shadow bg-white">
                    <div class="container">
                        <h2 class="text-center mb-4 text-primary">Dashboard Features</h2>
                        <div class="row">
                            <div class="col-md-4 text-center mb-4">
                                <i class="bi bi-bar-chart-line fs-1 text-success"></i>
                                <h4 class="mt-3">Analytics</h4>
                                <p>View detailed analytics and insights about your data and performance.</p>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <i class="bi bi-gear-fill fs-1 text-info"></i>
                                <h4 class="mt-3">Settings</h4>
                                <p>Customize your dashboard and manage your preferences easily.</p>
                            </div>
                            <div class="col-md-4 text-center mb-4">
                                <i class="bi bi-people-fill fs-1 text-warning"></i>
                                <h4 class="mt-3">User Management</h4>
                                <p>Manage users, their roles, and permissions efficiently.</p>
                            </div>
                        </div>
                    </div>
                </section>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/dashboard.js') }}"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

</x-app-layout>