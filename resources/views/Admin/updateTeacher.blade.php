<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>O'qituvchi ma'lumotlarini tahrirlash</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
<body>
<div class="container mt-5 p-4 bg-light rounded shadow">
    <h2 class="text-center mb-4 text-uppercase">O'qituvchi ma'lumotlarini tahrirlash</h2>
    <form action="{{ route('teachers.update', ['id' => $teacher->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="mb-3">
            <label for="fullname" class="form-label">To'liq ism</label>
            <input type="text" name="fullname" id="fullname" class="form-control" value="{{ $teacher->fullname }}" placeholder="O'qituvchining to'liq ismini kiriting" required>
        </div>
        <div class="mb-3">
            <label for="number" class="form-label">Telefon raqami</label>
            <input type="text" name="number" id="number" class="form-control" value="{{ $teacher->number }}" placeholder="+998 (XX) XXX-XX-XX" required>
        </div>
        <div class="mb-3">
            <label for="gmail" class="form-label">Email</label>
            <input type="email" name="gmail" id="gmail" class="form-control" value="{{ $teacher->gmail }}" placeholder="example@mail.com" required>
        </div>
        <div class="mb-3">
            <label for="work_time" class="form-label">Ish vaqti</label>
            <input type="text" name="work_time" id="work_time" class="form-control" value="{{ $teacher->work_time }}" placeholder="08:00 - 17:00" required>
        </div>
        <div class="mb-3">
            <label for="lavozim_id" class="form-label">Lavozim</label>
            <select name="lavozim_id" id="lavozim_id" class="form-select" required>
                <option selected disabled>{{ $teacher->lavozim->name  }}</option>
                @foreach($positions as $position)
                    <option value="{{ $position->id }}" >{{ $position->name }}</option>
                @endforeach
            </select>
        </div>
        <div class="mb-3">
            <label for="image" class="form-label">Rasm yuklash</label>

            <!-- Agar rasm mavjud bo'lsa, uni ko'rsatish -->
            @if($teacher->image)
                <img src="{{ asset($teacher->image) }}" alt="Teacher Image" width="100" height="100">
            @endif

            <input type="file" name="image" id="image" class="form-control">
        </div>

        <div class="mb-3">
            <label for="biography" class="form-label">Biografiya</label>
            <textarea name="biography" value="{{ $teacher->biography }}" id="biography" rows="5" class="form-control" placeholder="O'qituvchining qisqacha ma'lumotini yozing">{{ $teacher->biography }}</textarea>
        </div>
        <div class="d-grid">
            <button type="submit" class="btn btn-success btn-lg">Saqlash</button>
        </div>
    </form>
</div>

</body>
</html>
