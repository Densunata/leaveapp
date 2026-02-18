<!DOCTYPE html>
<html>
<head>
    <title>Admin Register</title>
    <style>
        body {
            font-family: Arial;
            background: #f4f6f9;
        }
        .box {
            width: 350px;
            margin: 100px auto;
            background: #fff;
            padding: 30px;
            border-radius: 8px;
            box-shadow: 0 0 10px #ccc;
        }
        input {
            width: 100%;
            padding: 10px;
            margin: 8px 0;
        }
        button {
            width: 100%;
            padding: 10px;
            background: #007bff;
            border: none;
            color: white;
        }
    </style>
</head>
<body>

<div class="box">
    <h2>Admin Register</h2>

    @if(session('success'))
        <p style="color:green">{{ session('success') }}</p>
    @endif

    <form method="POST" action="/admin/register">
        @csrf
        <input type="text" name="name" placeholder="Name">
        <input type="email" name="email" placeholder="Email">
        <input type="password" name="password" placeholder="Password">
        <button type="submit">Register</button>
    </form>

    <p><a href="/admin/login">Already have account?</a></p>
</div>

</body>
</html>
