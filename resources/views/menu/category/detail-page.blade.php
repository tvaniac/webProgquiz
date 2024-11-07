<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $data['title'] }}</title>
</head>
<body>
    <div class="container mt-5">
        <h1>{{ $data['title'] }}</h1>
        <img src="{{ asset($data['image']) }}" alt="{{ $data['title'] }}" class="img-fluid mb-4">
        <p>{{ $data['content'] }}</p>
    </div>
</body>
</html>
