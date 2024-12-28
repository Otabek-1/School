<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Qo'shimcha dars ma'lumotlarini tahrirlash</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">Qo'shimcha dars ma'lumotlarini tahrirlash</h2>


    <form action="{{ route('circle.update', ["id"=>$circle->id]) }}" method="POST">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="name" class="form-label">To'garak Nomi</label>
            <input type="text" name="name" id="name" class="form-control" value="{{ $circle->name }}" required>
        </div>

        <div class="mb-3">
            <label for="participants" class="form-label">O'quvchilar soni</label>
            <input type="number" name="participants" id="participants" class="form-control" value="{{ $circle->participants }}" required>
        </div>

        <div class="mb-3">
            <label for="teacher_id" class="form-label">O'qituvchi</label>
            <select name="teacher_id" id="teacher_id" class="form-select" required>
                <option value="{{ $circle->teacher_id }}">{{ $circle->teacher }}</option>
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
            <input type="text" name="work_days" id="work_days" class="form-control" value="{{ $circle->work_days }}" required>
        </div>

        <div class="mb-3">
            <label for="work_time" class="form-label">To'garak vaqtlari</label>
            <input type="text" name="work_time" id="work_time" class="form-control" value="{{ $circle->work_time }}" required>
        </div>

        <div class="mb-3">
            <label for="classes" class="form-label">Sinflar</label>
            <select name="classes[]" id="classes" class="form-select" multiple required>
                <option value="7" {{ in_array('7', json_decode($circle->classes)->class) ? 'selected' : '' }}>7</option>
                <option value="8" {{ in_array('8', json_decode($circle->classes)->class) ? 'selected' : '' }}>8</option>
                <option value="9" {{ in_array('9', json_decode($circle->classes)->class) ? 'selected' : '' }}>9</option>
                <option value="10" {{ in_array('10', json_decode($circle->classes)->class) ? 'selected' : '' }}>10</option>
                <option value="11" {{ in_array('11', json_decode($circle->classes)->class) ? 'selected' : '' }}>11</option>
            </select>
            <small class="form-text text-muted">Sinflarni tanlang (bir yoki bir nechta sinflarni tanlash mumkin)</small>
        </div>

        <button type="submit" class="btn btn-success">Qo'shish</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
