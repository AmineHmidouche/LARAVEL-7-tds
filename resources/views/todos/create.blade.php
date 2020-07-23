<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create
    </title>
</head>
<body>
    <form method="POST" action="/todos/create">
        @csrf
    <x-alert/>
    <h2>Enter your information</h2>
        <input type="text" name="title">
        <input type="submit" value="Entrer">

    </form>
</body>
</html>