<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>service Injection</title>
</head>
<body>
    @inject('service','App\Services\SayHello')
    <h1>{{ $service->sayHello($name) }}</h1>
</body>
</html>