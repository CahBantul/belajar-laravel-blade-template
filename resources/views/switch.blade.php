<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Switch blade</title>
</head>
<body>
    @switch($value)
        @case("A")
            Memuaskan
            @break
        @case("B")
            Bagus
            @break
        @case("C")
            Cukup
            @break
        @default
            Tidak Lulus
    @endswitch
</body>
</html>