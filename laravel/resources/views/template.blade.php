<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reusable Page</title>
</head>
<body>
    <h1>@yield('judul')</h1>

    <p>@yield('content')</p>

    @include('card', array('numberOfCard' => ['Kucing', 'Anjing', 'Kelinci']))
    
</body>
</html>