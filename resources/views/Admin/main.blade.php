<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel</title>
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

        .table-container {
            margin-top: 20px;
        }

        .header {
            background-color: #fff;
            padding: 10px 20px;
            border-bottom: 1px solid #ddd;
        }

        .header h2 {
            margin: 0;
        }
    </style>
</head>
<body>

<!-- Sidebar -->
<div class="sidebar">
    <h3 class="text-center">Admin Panel</h3>
    <a href="#teachers" class="nav-link" data-target="teachers-table">O'qituvchilar</a>
    <a href="#circles" class="nav-link" data-target="circles-table">To'garaklar</a>
    <a href="#positions" class="nav-link" data-target="positions-table">Lavozimlar</a>
    <a href="#school-info" class="nav-link" data-target="school-info-table">Maktab Ma'lumotlari</a>
</div>

<!-- Main Content -->
<div class="main-content">
    <!-- Header -->
    <div class="header">
        <h2>Admin Panel</h2>
    </div>

    <!-- Dynamic Content -->
    <div class="table-container" id="dynamic-content">
         <div id="teachers-table" class="table-section">
            <h3>O'qituvchilar</h3>
            <a href="{{ route("teachers.create") }}" class="btn btn-success btn-sm mb-5 mt-1">O'qituvchi qo'shish</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Ism</th>
                    <th>Telefon raqami</th>
                    <th>Mail</th>
                    <th>Ish vaqti</th>
                    <th>Lavozim</th>
                    <th>Rasm</th>
                    <th>Biografiya</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($teachers as $teacher)
                    <tr>
                        <td>{{ $teacher->id }}</td>
                        <td>{{ $teacher->fullname }}</td>
                        <td>{{ $teacher->number }}</td>
                        <td>{{ $teacher->gmail }}</td>
                        <td>{{ $teacher->work_time }}</td>
                        <td>{{ $teacher->lavozim }}</td>
                        <td>
                            <img src="{{ asset($teacher->image) }}" alt="" style="width: 100px">
                        </td>
                        <td>{{ $teacher->biography }}</td>
                        <td>
                            <a href="{{ route('teachers.edit', ['id' => $teacher->id]) }}" class="btn btn-primary btn-sm mb-5 mt-1">Edit</a>


                            <form action="{{ route('teachers.destroy', ['id' => $teacher->id]) }}" method="POST" style="display: inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm mb-5 mt-1" onclick="return confirm('Siz o\'qituvchini o\'chirishni xohlaysizmi?')">O'chirish</button>
                            </form>
                        </td>

                    </tr>

                @endforeach
                </tbody>
            </table>
        </div>

        <div id="circles-table" class="table-section" style="display: none;">
            <h3>To'garaklar</h3>
            <a href="{{ route("circle.create") }}" class="btn btn-success btn-sm mb-5 mt-1">To'garak qo'shish</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nomi</th>
                    <th>O'quvchilar soni</th>
                    <th>O'qituvchi</th>
                    <th>To'garak kunlari</th>
                    <th>To'garak vaqtlari</th>
                    <th>Sinflar</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($educations as $education)
                    <tr>
                        <td>{{ $education->id }}</td>
                        <td>{{ $education->name }}</td>
                        <td>{{ $education->participants }}</td>
                        <td>{{ $education->teacher }}</td>
                        <td>{{ $education->work_days }}</td>
                        <td>{{ $education->work_time }}</td>
                        <td>
                            @php
                                $classes = json_decode($education->classes, true);
                                $minClass = min($classes['class']);
                                $maxClass = max($classes['class']);
                            @endphp
                            {{ $minClass }} - {{ $maxClass }}
                        </td>
                        <td>
                            <a href="{{ route("circle.edit", ["id"=>$education->id]) }}" class="btn btn-primary btn-sm mb-5 mt-1">Edit</a>
                            <form action="{{ route("circle.destroy", ["id"=>$education->id]) }}" method="post">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger btn-sm mb-5 mt-1">O'chirish</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>

        <div id="positions-table" class="table-section" style="display: none;">
            <h3>Lavozimlar</h3>
            <a href="{{ route("position.create") }}" class="btn btn-success btn-sm mb-5 mt-1">Lavozim qo'shish</a>
            <table class="table table-bordered">
                <thead>
                <tr>
                    <th>#</th>
                    <th>Nomi</th>
                    <th>Action</th>
                </tr>
                </thead>
                <tbody>
                @foreach($lavozim as $lav)
                    <tr>
                        <td>{{ $lav->id }}</td>
                        <td>{{ $lav->name  }}</td>
                        <td><a href="{{ route("position.edit", ["id"=>$lav->id]) }}" class="btn btn-primary btn-sm mb-5 mt-1">Edit</a>
                            <form action="{{ route("position.destroy", ["id"=>$lav->id]) }}" method="POST">
                                @csrf
                                @method("DELETE")
                                <button class="btn btn-danger btn-sm mb-5 mt-1">O'chirish</button></td>
                            </form>
                    </tr>
                @endforeach

                </tbody>
            </table>
        </div>


    </div>
</div>

<script>
    document.querySelectorAll('.nav-link').forEach(link => {
        link.addEventListener('click', function (e) {
            e.preventDefault();

            const target = this.dataset.target;

            document.querySelectorAll('.table-section').forEach(section => {
                section.style.display = 'none';
            });

            document.getElementById(target).style.display = 'block';
        });
    });
</script>

</body>
</html>
