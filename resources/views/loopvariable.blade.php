<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>loop variable</title>
</head>
<body>
    <ul>
        @foreach ($hobbies as $hobby)
            <li>{{ $loop->iteration }}.{{ $hobby }}</li>
        @endforeach
    </ul>
</body>
</html>