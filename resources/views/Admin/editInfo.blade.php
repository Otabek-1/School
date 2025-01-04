<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maktab Ma'lumotlarini Tahrirlash</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            display: flex;
            min-height: 100vh;
            margin: 0;
        }

        .sidebar {
            width: 250px;
            background-color: #343a40;
            color: white;
            height: 100vh;
            padding-top: 20px;
            position: fixed;
        }

        .sidebar a {
            color: white;
            text-decoration: none;
            padding: 15px 20px;
            display: block;
            transition: background 0.3s;
        }

        .sidebar a:hover {
            background-color: #495057;
        }

        .main-content {
            margin-left: 250px;
            width: calc(100% - 250px);
            padding: 20px;
            background-color: #f8f9fa;
        }

        .header {
            background-color: #fff;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }

        .header h2 {
            margin: 0;
        }

        .form-container {
            background-color: #fff;
            padding: 30px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
            margin-top: 20px;
        }

        .form-group {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h3 class="text-center">Admin Panel</h3>
    <a href="#school-info" class="nav-link" data-target="school-info-table">Maktab Ma'lumotlari</a>
    <a href="#teachers" class="nav-link" data-target="teachers-table">O'qituvchilar</a>
    <a href="#circles" class="nav-link" data-target="circles-table">To'garaklar</a>
    <a href="#positions" class="nav-link" data-target="positions-table">Lavozimlar</a>
    <a href="#news" class="nav-link" data-target="news">Yangiliklar</a>
</div>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <div class="header">
        <h2>Maktab Ma'lumotlarini Tahrirlash</h2>
    </div>

    <!-- Edit Form -->
    <div class="form-container">
        <form action="{{ route('schoolinfo.update') }}" method="POST">
            @csrf
            @method('PUT')

            @foreach ($schoolInfo as $info)
            <div class="form-group">
                <label for="student_count_{{ $info->id }}">{{ $info->info_name }}</label>
                <input type="number" class="form-control" id="student_count_{{ $info->id }}" name="{{ $info->id }}" value="{{ $info->info_count }}" required>
            </div>
            @endforeach
            <button type="submit" class="btn btn-primary">Saqlash</button>
        </form>
    </div>

</div>

</body>
</html>
