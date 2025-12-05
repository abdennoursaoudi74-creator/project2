<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form action="{{ route('register') }}" method="post">
        @csrf
        <label for="">Name</label><br>
        <input type="text" name="name" id=""><br><br>
        <label for="">Email</label><br>
        <input type="email" name="email" id=""><br><br>
        <label for="">Password</label><br>
        <input type="password" name="password" id=""><br><br>
        <button type="submit">Register</button>
    </form>
</body>

</html>