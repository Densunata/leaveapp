<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        .box { width:350px; margin:100px auto; background:#fff; padding:20px; }
        input, button { width:100%; padding:10px; margin:8px 0; }
        button { background:#28a745; color:#fff; border:none; }
    </style>
</head>
<body>

<div class="box">
    <h2>Login</h2>

    @if(session('error'))
        <p style="color:red">{{ session('error') }}</p>
    @endif

    <form method="POST" action="/login">
        @csrf
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Login</button>
    </form>
</div>

</body>
</html>
