<!DOCTYPE html>
<html>
<head>
    <title>Register</title>
    <style>
        body { font-family: Arial; background:#f4f4f4; }
        .box { width:350px; margin:100px auto; background:#fff; padding:20px; }
        input, select, button { width:100%; padding:10px; margin:8px 0; }
        button { background:#007bff; color:#fff; border:none; cursor:pointer; }
    </style>
</head>
<body>

<div class="box">
    <h2>Register</h2>

    @if ($errors->any())
        <div style="color:red;">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    <form method="POST" action="{{ url('/register') }}">
        @csrf

        <input type="text" name="name" placeholder="Full Name" required>
        <input type="email" name="email" placeholder="Email" required>

        <select name="role" required>
            <option value="">Select Role</option>
            <option value="HR">HR</option>
            <option value="Employee">Employee</option>
        </select>

        <input type="password" name="password" placeholder="Password" required>

        <button type="submit">Register</button>
    </form>

    <a href="{{ url('/login') }}">Already have an account?</a>
</div>

</body>
</html>
