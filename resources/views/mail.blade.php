<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <form action="/mail" method="post">
        @csrf
        <input type="text" name="username">
        <input type="text" name="email">
        <input type="text" name="content">
        <input type="submit" value="ok">
    </form>
</body>
</html>