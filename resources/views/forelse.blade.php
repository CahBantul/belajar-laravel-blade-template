<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>foreach blade</title>
</head>
<body>
    <ul>
        @forelse ($hobbies as $hobby)
            <li>{{ $hobby }}</li>
        @empty
            Tidak punya hobi
        @endforelse
    </ul>
</body>
</html>