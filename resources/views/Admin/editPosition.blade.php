<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Lavozimni tahrirlash</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" defer></script>
</head>
<body>
<div class="container mt-5 p-4 bg-light rounded shadow">
    <h2 class="text-center mb-4 text-uppercase">Lavozimni tahrirlash</h2>
    <form action="{{ route('position.update', ["id"=>$position->id]) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <div class="mb-3">
            <label for="fullname" class="form-label">Lavozim nomi</label>
            <input type="text" name="name" id="fullname" class="form-control" value="{{ $position->name }}" placeholder="Lavozim nomini kirting" required>
        </div>

        <div class="d-grid">
            <button type="submit" class="btn btn-success btn-lg">Saqlash</button>
        </div>
    </form>
</div>

</body>
</html>