<!-- resources/views/layouts/app.blade.php -->
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post and categories</title>
    <!-- Bootstrap CSS from CDN without integrity and crossorigin -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
 <style>
        /* Custom Sidebar styles */
        .sidebar {
            position: fixed;
            top: 0;
            left: 0;
            height: 100%;
            width: 250px;
            background-color: #343a40;
            color: white;
            padding-top: 20px;
        }

        .sidebar a {
            color: white;
            padding: 10px 15px;
            text-decoration: none;
            display: block;
        }

        .sidebar a:hover {
            background-color: #575d63;
        }

        .content-wrapper {
            margin-left: 250px;
            padding: 20px;
        }

        .navbar-custom {
            background-color: #343a40;
            color: white;
        }
    </style>
    <!-- Sidebar -->
    <div class="sidebar">
        <h4 class="text-center text-white">Dashboard</h4>
        <a href="{{ route('posts.index') }}">Posts</a>
        <a href="{{ route('posts.create') }}">Create Post</a>
        <a href="{{ route('category.index') }}">Categories</a>
        <a href="{{ route('category.create') }}">Create Category</a>    
    </div>

    <!-- Main Content -->
    <div class="content-wrapper">
        <!-- Header (Navigation Bar) -->
<!--         <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Post and Categories</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
            </div>
        </nav> -->

        <!-- Content from individual pages -->
        <div class="container mt-5">
            @yield('content')
        </div>
    </div>

    <!-- Bootstrap JS and Popper.js for Bootstrap components (like Dropdown) -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.min.js"></script>
</body>
</html>
