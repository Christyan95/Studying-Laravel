@extends('layouts.main')

@section('title', 'Entrar')

@section('content')
    <style>
        body {
            background: #f7f7f7;
            margin: 0;
            padding: 0;
            /* display: flex; */
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .login-container {
            background: #fff;
            padding: 40px;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            width: 300px;
        }
        .login-container h2 {
            text-align: center;
            margin-bottom: 20px;
            color: #333;
        }
        .login-form input[type='text'],
        .login-form input[type='password'] {
            width: 100%;
            padding: 10px;
            margin-bottom: 20px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }
        .login-form input[type='submit'] {
            width: 100%;
            padding: 10px;
            border: none;
            border-radius: 5px;
            background-color: #5cb85c;
            color: white;
            cursor: pointer;
        }
        .login-form input[type='submit']:hover {
            background-color: #4cae4c;
        }
    </style>

    <h1>Entrar</h1>

    <div class="login-container">
        <h2>Login</h2>

        <form class="login-form">
            <input type="text" placeholder="Usuário" required>
            <input type="password" placeholder="Senha" required>
            <input type="submit" value="Entrar">
        </form>
    </div>

@endsection