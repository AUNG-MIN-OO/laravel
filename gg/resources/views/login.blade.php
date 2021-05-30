<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <title>Home | Log in</title>
    <link rel="stylesheet" href="{{ asset("css/app.css") }}">
</head>
<body>
<h1>Log in</h1>
<form action="{{ route('login') }}" method="post">
    @csrf
    <label for="">Email or Phone Number</label>
    <input type="text" name="aa" required>
    <label for="">Password</label>
    <input type="password" name="password" required>
    <button>Login</button>
</form>
</body>
</html>


