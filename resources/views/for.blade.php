<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>for blade</title>
</head>

<body>
    <ul>
        @for ($i = 0; $i < $count; $i++) <li>{{ $i }} </li> @endfor </ul>
</body>

</html>