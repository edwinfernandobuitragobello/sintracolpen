
<!DOCTYPE html>
    <head>
        <meta charset="utf-8">
        <title>Sintracolpen - Admin</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="viewport" content="width=device-width,initial-scale=1,maximum-scale=1.0">

        <link rel="stylesheet" href="{{ asset('cssAdmin/bootstrap.min.css') }}" >
        <link rel="stylesheet" href="{{ asset('cssAdmin/main.css') }}">
        <script src="{{ asset('jsjsAdmin/jquery-2.2.2.min.js') }}"></script>
        <link rel="icon" type="image/png" href="{{ asset('imgAdmin/favicon.ico') }}">
    </head>    

    <img src="{{ asset('imgAdmin/background.jpg') }}" alt="Background Sintracolpen" class="full-bg animation-pulseSlow">
    
    <div id="login-container">
        <h1 class="h2 text-light text-center push-top-bottom animation-slideDown">
            <img src="{{ asset('imgAdmin/logoSintracolpen.png') }}">
        </h1>

        <div class="block animation-fadeInQuickInv">
            <div class="block-title">
                <h2>Login</h2>
            </div>

            <form action="" class="form-horizontal" id="form-login" method="post" accept-charset="utf-8">
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="text" id="email" name="email" class="form-control" placeholder="usuario@sintracolpen.com" required>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-xs-12">
                        <input type="password" id="password" name="password" class="form-control" placeholder="••••••••" required>
                    </div>
                </div>
                <div class="form-group form-actions">
                    <div class="col-xs-8"></div>
                    <div class="col-xs-4 text-right">
                        <button type="submit" class="btn btn-effect-ripple btn-sm btn-primary"><i class="fa fa-check"></i> Entrar</button>
                    </div>
                </div>
            </form>
        </div>
    </div>

        <script src="{{ asset('jsAdmin/vendor/modernizr-2.8.3.min.js') }}"> </script>
        <script src="{{ asset('jsAdmin/vendor/bootstrap.min.js') }}"> </script>
    </body>
</html>