<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>E'lon</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
</head>
<body>
<div class="container mt-5">
    <h2 class="mb-4">E'lon qo'shish</h2>


    <form action="{{ route('ann.store') }}" method="POST" enctype="multipart/form-data">
        @csrf

        <div class="mb-3">
            <label for="name" class="form-label">E'lon Nomi</label>
            <input type="text" name="title" id="name" class="form-control" required>
        </div>

        <div class="mb-3">
            <label for="participants" class="form-label">Link</label>
            <input type="text" name="body" id="participants" class="form-control" required>
        </div>

        <div class="form-group">
            <label for="image">Rasm</label>
            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
        </div>

        <button type="submit" class="btn btn-success mt-3">Qo'shish</button>
    </form>
</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
