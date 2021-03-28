<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="utf-8">
        <meta name="robots" content="noindex, nofollow">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Silvio Iwata Prime | Log in</title>

        <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
        <link rel="stylesheet" href="{{asset('adm/css/adminlte.min.css')}}">
    </head>
    <body style="background-color: white;" class="hold-transition login-page">
        <div class="login-box">
            <div class="login-logo">
                <img src="{{asset('adm/imagens/logo-login.png')}}">
            </div>
            <!-- /.login-logo -->
            <div class="card">
                <div class="card-body login-card-body">
                    @include('alertas.alerts')
                    <p class="login-box-msg">Iniciar sessão</p>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="input-group mb-3">
                            <input type="email" class="form-control" placeholder="Email" name="email" value="{{ old('email') }}"  autocomplete="email" autofocus>
                            <div class="input-group-append">
                                <div class="input-group-text"></div>
                            </div>
                        </div>
                        <div class="input-group mb-3">
                            <input type="password" class="form-control" placeholder="Senha" name="password"  autocomplete="current-password">
                            <div class="input-group-append">
                                <div class="input-group-text"></div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-4">
                                <button type="submit" class="btn btn-primary btn-block">Entrar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
