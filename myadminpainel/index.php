<?php include_once('inc/login-header.php'); ?>


<body class="hold-transition login-page">
    <div class="login-box">
        <div class="login-logo">
            <a href="#">Bibliotéca de Marília</a>
        </div>
        <!-- /.login-logo -->
        <div class="login-box-body">
            <p class="login-box-msg">Faça login para iniciar sua sessão</p>

            <form action="pages/dashboard/index.php" method="post">
                <div class="form-group has-feedback">
                    <input type="email" class="form-control" placeholder="Email">
                    <span class="glyphicon glyphicon-envelope form-control-feedback"></span>
                </div>
                <div class="form-group has-feedback">
                    <input type="password" class="form-control" placeholder="Senha">
                    <span class="glyphicon glyphicon-lock form-control-feedback"></span>
                </div>
                <div class="row">
                    <div class="col-xs-12">
                        <button type="submit" class="btn btn-primary meu btn-block btn-flat">Entrar</button>
                    </div>
                    <!-- /.col -->
                </div>
            </form>

            <br>

            <div class="esqueceu"><a href="#">Esqueci a minha senha!</a></div>

        </div>
        <!-- /.login-box-body -->
    </div>
    <!-- /.login-box -->

<?php include_once('inc/login-footer.php'); ?>

