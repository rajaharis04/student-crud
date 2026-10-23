
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Student Management') - Laravel CRUD</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css"
          rel="stylesheet">

    <style>
        body { background: #f5f7fb; }
        .navbar { background: #163b72; }
        .page-card {
            background: #fff;
            border: 1px solid #e5eaf2;
            border-radius: 12px;
            box-shadow: 0 3px 15px rgba(0,0,0,.035);
        }
        .required::after { content: " *"; color: #dc3545; }
    </style>
</head>
<body>
<nav class="navbar navbar-dark navbar-expand-lg">
    <div class="container">
        <a class="navbar-brand fw-bold" href="{{ route('students.index') }}">
            Student Management
        </a>
        <div class="ms-auto">
            <a href="{{ route('students.index') }}" class="btn btn-outline-light btn-sm">
                All Students
            </a>
            <a href="{{ route('students.create') }}" class="btn btn-light btn-sm">
                + Add Student
            </a>
        </div>
    </div>
</nav>

<main class="container py-4 py-md-5">
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close"
                    data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endif

    @if($errors->any())
        <div class="alert alert-danger" role="alert">
            <strong>Please correct the following errors:</strong>
            <ul class="mb-0 mt-2">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    @yield('content')
</main>

<footer class="text-center text-secondary py-4 small">
    Student Management System &copy; {{ date('Y') }}
</footer>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

