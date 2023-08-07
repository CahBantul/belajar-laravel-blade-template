<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Selamat datang</title>
</head>
<body>
    @includeWhen($user["owner"], 'header-admin')
    <p>selamat datang {{ $user["name"] }}</p>
</body>
</html>