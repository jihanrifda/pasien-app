<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin Rumah Sakit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f1f5f9;
            font-family: 'Segoe UI', sans-serif;
        }
        .login-box {
            max-width: 400px;
            margin: 80px auto;
            background: #fff;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0,0,0,0.1);
        }
        .login-box img {
            width: 60px;
        }
        .login-title {
            font-weight: 600;
            margin-top: 10px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="login-box text-center">
        {{-- Logo --}}
        <img src="{{ asset('images/logo-rs.png') }}" alt="Logo Rumah Sakit">
        <h4 class="login-title">Login Admin Rumah Sakit</h4>

        {{-- Session --}}
        @if (session('status'))
            <div class="alert alert-success">{{ session('status') }}</div>
        @endif

        {{-- Form --}}
        <form method="POST" action="{{ route('login') }}">
            @csrf

            <div class="mb-3 text-start">
                <label for="email" class="form-label">Email</label>
                <input class="form-control" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                @error('email')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 text-start">
                <label for="password" class="form-label">Password</label>
                <input class="form-control" id="password" type="password" name="password" required>
                @error('password')
                    <small class="text-danger">{{ $message }}</small>
                @enderror
            </div>

            <div class="mb-3 text-start">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">Ingat saya</label>
                </div>
            </div>

            <div class="d-grid gap-2">
                <button class="btn btn-primary" type="submit">Login</button>
            </div>

            <div class="mt-3 text-end">
                <a href="{{ route('password.request') }}" class="text-decoration-none text-muted">Lupa password?</a>
            </div>
        </form>
    </div>

</body>
</html>
