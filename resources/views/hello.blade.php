<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>show</title>
</head>
<body>
    @foreach ($tampil as $item)
<p>{{ $item->nama }}</p>
<p>{{ $item->umur }}</p>
    @endforeach
</body>
</html>
