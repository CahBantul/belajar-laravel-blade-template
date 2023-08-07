<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Isset Empty</title>
</head>
<body>
    @isset($name)
        Hello, my name is {{ $name }}
    @endisset

    @empty($hobbies)
        I don't have any hobbies.
    @endempty
</body>
</html>