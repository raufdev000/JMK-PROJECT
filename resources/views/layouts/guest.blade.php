<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JMK Repairs - Admin Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.0/font/bootstrap-icons.css" rel="stylesheet">
    <style>
        * { margin: 0; padding: 0; box-sizing: border-box; }
        body {
            min-height: 100vh;
            background: linear-gradient(135deg, #1a1a2e 0%, #16213e 50%, #0f3460 100%);
            display: flex;
            align-items: center;
            justify-content: center;
            font-family: 'Segoe UI', sans-serif;
            padding: 20px;
        }
        .login-wrapper {
            width: 100%;
            max-width: 420px;
        }
        .login-card {
            background: rgba(255,255,255,0.05);
            backdrop-filter: blur(20px);
            border: 1px solid rgba(255,255,255,0.1);
            border-radius: 20px;
            padding: 40px;
            box-shadow: 0 25px 50px rgba(0,0,0,0.4);
        }
        .brand-area {
            text-align: center;
            margin-bottom: 35px;
        }
        .brand-icon {
            width: 70px;
            height: 70px;
            background: linear-gradient(135deg, #6c63ff, #a855f7);
            border-radius: 18px;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 15px;
            font-size: 30px;
            color: white;
        }
        .brand-area h2 {
            color: white;
            font-size: 22px;
            font-weight: 700;
            margin-bottom: 5px;
        }
        .brand-area p {
            color: rgba(255,255,255,0.5);
            font-size: 13px;
        }
        .form-label {
            color: rgba(255,255,255,0.8);
            font-size: 13px;
            font-weight: 500;
            margin-bottom: 6px;
        }
        .form-control {
            background: rgba(255,255,255,0.08);
            border: 1px solid rgba(255,255,255,0.15);
            border-radius: 10px;
            color: white;
            padding: 12px 15px;
            font-size: 14px;
            transition: all 0.3s;
        }
        .form-control:focus {
            background: rgba(255,255,255,0.12);
            border-color: #6c63ff;
            box-shadow: 0 0 0 3px rgba(108,99,255,0.2);
            color: white;
        }
        .form-control::placeholder { color: rgba(255,255,255,0.3); }
        .btn-login {
            width: 100%;
            background: linear-gradient(135deg, #6c63ff, #a855f7);
            border: none;
            border-radius: 10px;
            color: white;
            padding: 13px;
            font-size: 15px;
            font-weight: 600;
            margin-top: 10px;
            transition: all 0.3s;
            letter-spacing: 0.5px;
        }
        .btn-login:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(108,99,255,0.4);
            color: white;
        }
        .form-check-label { color: rgba(255,255,255,0.6); font-size: 13px; }
        .form-check-input:checked { background-color: #6c63ff; border-color: #6c63ff; }
        .forgot-link {
            color: rgba(255,255,255,0.5);
            font-size: 13px;
            text-decoration: none;
            transition: color 0.3s;
        }
        .forgot-link:hover { color: #a855f7; }
        .alert-danger {
            background: rgba(220,53,69,0.15);
            border: 1px solid rgba(220,53,69,0.3);
            border-radius: 10px;
            color: #ff6b7a;
            font-size: 13px;
            padding: 10px 15px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="login-wrapper">
        <div class="login-card">
            <div class="brand-area">
                <div class="brand-icon">
                    <i class="bi bi-tools"></i>
                </div>
                <h2>JMK Repairs</h2>
                <p>Admin Panel — Sign in to continue</p>
            </div>

            @if($errors->any())
                <div class="alert-danger">
                    <i class="bi bi-exclamation-circle me-1"></i>
                    {{ $errors->first() }}
                </div>
            @endif

            {{ $slot }}
        </div>
    </div>
</body>
</html>