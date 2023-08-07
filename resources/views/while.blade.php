<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>while Blade</title>
</head>
<body>
    @while ($i < 10)
        the current value is {{ $i }}

        @php
            $i++
        @endphp
    @endwhile
</body>
</html>