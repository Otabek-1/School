<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Message from {{ $data['name'] }}</h1>
    <p><b>Email: {{ $data['email'] }}</b></p>
    <p><b>Phone: {{ $data['phone'] }}</b></p>
    <br><br><br>

<h2>Mavzu: {{ $data['theme'] }}</h2>


<span>{{ $data['message'] }}</span>
</body>
</html>
