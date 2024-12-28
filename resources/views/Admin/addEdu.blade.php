<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qo'shimcha dars</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Qo'shimcha dars qo'shish</h2>

    <!-- Formani yuborish -->
    <form action="{{ route('circle.store') }}" method="POST">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">To'garak Nomi</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ old('name') }}" required>
        </div>

        <div class="mb-3">
            <label for="participants" class="form-label">O'quvchilar soni</label>
            <input type="number" name="participants" id="participants" class="form-control" value="{{ old('participants') }}" required>
        </div>

        <div class="mb-3">
            <label for="teacher_id" class="form-label">O'qituvchi</label>
            <select name="teacher_id" id="teacher_id" class="form-select" required>
                <option value="">O'qitchini tanlang</option>
                @foreach($teachers as $teacher)
                    @if($teacher->lavozim_id != 1)
                        <option value="{{ $teacher->id }}" {{ old('teacher_id') == $teacher->id ? 'selected' : '' }}>
                            {{ $teacher->fullname }}
                        </option>
                    @endif
                @endforeach
            </select>
        </div>

        <div class="mb-3">
            <label for="work_days" class="form-label">To'garak kunlari</label>
            <input type="text" name="work_days" id="work_days" class="form-control" value="{{ old('work_days') }}" required>
        </div>

        <div class="mb-3">
            <label for="work_time" class="form-label">To'garak vaqtlari</label>
            <input type="text" name="work_time" id="work_time" class="form-control" value="{{ old('work_time') }}" required>
        </div>

        <div class="mb-3">
            <label for="classes" class="form-label">Sinflar</label>
            <select name="classes[]" id="classes" class="form-select" multiple required>
                <option value="7" {{ in_array('7', old('classes', [])) ? 'selected' : '' }}>7</option>
                <option value="8" {{ in_array('8', old('classes', [])) ? 'selected' : '' }}>8</option>
                <option value="9" {{ in_array('9', old('classes', [])) ? 'selected' : '' }}>9</option>
                <option value="10" {{ in_array('10', old('classes', [])) ? 'selected' : '' }}>10</option>
                <option value="11" {{ in_array('11', old('classes', [])) ? 'selected' : '' }}>11</option>
            </select>
            <small class="form-text text-muted">Sinflarni tanlang (bir yoki bir nechta sinflarni tanlash mumkin)</small>
        </div>



        <button type="submit" class="btn btn-success">Qo'shish</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
