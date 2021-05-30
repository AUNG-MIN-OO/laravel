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
<form action="{{ route('passcode-login') }}" method="post">
    @csrf
    {!! DNS1D::getBarcodeSVG('4445645656', 'PHARMA2T') !!}
    {!! DNS2D::getBarcodeHTML('https://myblog.learnwithme.life/', 'QRCODE') !!}
    <br>
    <br>
    @php
        echo '<img src="' . DNS1D::getBarcodePNG('4', 'C39+',3,33) . '" alt="barcode"   />';
    @endphp
    <label for="">Passcode</label>
    <input type="text" name="passcode" required>
    <button>Login</button>
</form>
</body>
</html>


