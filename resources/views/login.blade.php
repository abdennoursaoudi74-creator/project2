<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <style>
        /* GLOBAL ------------------------------------------------------------ */
        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f3f4f6;
            font-family: "Inter", sans-serif;
            transition: background .3s;
        }

        /* DARK MODE SUPPORT */
        body.dark {
            background: #0f172a;
        }

        /* CONTAINER --------------------------------------------------------- */
        .form-box {
            width: 100%;
            max-width: 420px;
            padding: 35px;
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, .1);
            transition: .3s;
        }

        body.dark .form-box {
            background: rgba(30, 41, 59, 0.8);
            box-shadow: 0 8px 25px rgba(255, 255, 255, .05);
        }

        /* TITLE -------------------------------------------------------------- */
        .form-box h2 {
            font-size: 26px;
            margin-bottom: 20px;
            text-align: center;
            color: #111827;
        }

        body.dark .form-box h2 {
            color: #f1f5f9;
        }

        /* LABEL -------------------------------------------------------------- */
        label {
            font-size: 14px;
            font-weight: 500;
            color: #374151;
        }

        body.dark label {
            color: #e2e8f0;
        }

        /* INPUT -------------------------------------------------------------- */
        input {
            width: 100%;
            margin-top: 6px;
            padding: 12px 14px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            background: #fff;
            color: #111;
            font-size: 15px;
            transition: border .2s, box-shadow .2s, background .3s;
        }

        body.dark input {
            background: #1e293b;
            border-color: #475569;
            color: #f1f5f9;
        }

        input:hover {
            border-color: #818cf8;
        }

        input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, .3);
        }

        /* BUTTON ------------------------------------------------------------- */
        button {
            width: 100%;
            padding: 12px 14px;
            margin-top: 10px;
            font-size: 15px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            color: #fff;
            background: linear-gradient(90deg, #6366f1, #8b5cf6, #d946ef);
            transition: transform .2s, box-shadow .2s;
        }

        button:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 15px rgba(139, 92, 246, .4);
        }

        button:active {
            transform: scale(.97);
        }

        .error-msg {
            font-size: 14px;
            color: #dc2626;
        }

        body {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            background: #f3f4f6;
            font-family: "Inter", sans-serif;
            transition: background .3s;
        }

        /* DARK MODE SUPPORT */
        body.dark {
            background: #0f172a;
        }

        /* CONTAINER --------------------------------------------------------- */
        .form-box {
            width: 100%;
            max-width: 420px;
            padding: 80px;
            border-radius: 14px;
            background: rgba(255, 255, 255, 0.9);
            backdrop-filter: blur(10px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, .1);
            transition: .3s;
        }

        body.dark .form-box {
            background: rgba(30, 41, 59, 0.8);
            box-shadow: 0 8px 25px rgba(255, 255, 255, .05);
        }

        /* TITLE -------------------------------------------------------------- */
        .form-box h2 {
            font-size: 26px;
            margin-bottom: 20px;
            text-align: center;
            color: #111827;
        }

        body.dark .form-box h2 {
            color: #f1f5f9;
        }

        /* LABEL -------------------------------------------------------------- */
        label {
            font-size: 14px;
            font-weight: 500;
            color: #374151;
        }

        body.dark label {
            color: #e2e8f0;
        }

        /* INPUT -------------------------------------------------------------- */
        input {
            width: 100%;
            margin-top: 6px;
            padding: 12px 14px;
            border-radius: 8px;
            border: 1px solid #d1d5db;
            background: #fff;
            color: #111;
            font-size: 15px;
            transition: border .2s, box-shadow .2s, background .3s;
        }

        body.dark input {
            background: #1e293b;
            border-color: #475569;
            color: #f1f5f9;
        }

        input:hover {
            border-color: #818cf8;
        }

        input:focus {
            outline: none;
            border-color: #6366f1;
            box-shadow: 0 0 0 3px rgba(99, 102, 241, .3);
        }

        /* BUTTON ------------------------------------------------------------- */
        button {
            width: 100%;
            padding: 12px 14px;
            margin-top: 10px;
            font-size: 15px;
            font-weight: 600;
            border: none;
            border-radius: 8px;
            cursor: pointer;
            color: #fff;
            background: linear-gradient(90deg, #6366f1, #8b5cf6, #d946ef);
            transition: transform .2s, box-shadow .2s;
        }

        button:hover {
            transform: scale(1.03);
            box-shadow: 0 6px 15px rgba(139, 92, 246, .4);
        }

        button:active {
            transform: scale(.97);
        }

        .error-msg {
            font-size: 14px;
            color: #dc2626;
        }
    </style>
</head>

<body class="text-center">
    <div class="form-box">
        <h2>Login</h2>

        <form action="{{ url('login') }}" method="post">
            @csrf

            <div style="width: 93%">
                <label for="email">Email</label>
                <input id="email" name="email" type="email" value="{{ old('email') }}" required>
            </div>

            <div style="width: 93%">
                <label for="password">Password</label>
                <input id="password" name="password" type="password" required>
            </div>

            @if (session('error'))
            <div class="error-msg">{{ session('error') }}</div>
            @endif
            <div style="height: 15px;"></div>
            <button type="submit">Login</button>
    </div>
    </form>
    </div>
</body>



</html>