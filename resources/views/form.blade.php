<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form vlade</title>
</head>
<body>
    <input type="checkbox" @checked($user["premium"]) value="Premium"> <br/>
    <input type="text" @readonly(!$user["admin"]) value="{{ $user["name"] }}"> <br/>
</body>
</html>