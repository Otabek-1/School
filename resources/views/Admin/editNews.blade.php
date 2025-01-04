<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Yangilik Qo'shish</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css">
    <style>
        body {
            padding: 20px;
        }

        .form-container {
            max-width: 800px;
            margin: 0 auto;
            padding: 20px;
            background-color: #f8f9fa;
            border-radius: 8px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .form-container h3 {
            margin-bottom: 20px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            font-weight: bold;
        }

        .form-group textarea {
            resize: vertical;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h3>Yangilik tahrirlash</h3>
    
    <!-- Form start -->
    <form action="{{ route('news.update', $news->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method("PUT")
        <!-- Title input -->
        <div class="form-group">
            <label for="title">Sarlavha</label>
            <input type="text" class="form-control" value="{{ $news->title}}" id="title" name="title" placeholder="Yangilik sarlavhasi" required>
        </div>
        
        <!-- Body input -->
        <div class="form-group">
            <label for="body">Tavsif</label>
            <textarea class="form-control" id="body" name="body"  rows="5" placeholder="Yangilik matni" required>{{ $news->body }}</textarea>
        </div>
        
        <!-- Image input -->
        <div class="form-group">
            <label for="image">Rasm</label>
            <img src="{{ asset($news->image) }}" alt="Yangilik rasmi" style="width: 100px;">
            <input type="file" class="form-control" id="image" name="image" accept="image/*" required>
        </div>

        <!-- Submit button -->
        <button type="submit" class="btn btn-success btn-lg">Qo'shish</button>
    </form>
</div>

</body>
</html>
