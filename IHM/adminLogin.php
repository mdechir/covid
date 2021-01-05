<!------ Include the above in your HEAD tag ---------->
<?php include 'struct/entete.html'; ?>
<div class="offcanvas-menu-wrapper">
    <div class="offcanvas__logo">
        <a href="index.php"><img src="../img/logo.png" alt=""></a>
    </div>
</div>
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
<header class="header">
    <div class="container">
        <div class="row">
            <div class="col-lg-12 admin-title">
                ADMINISTRATEUR
            </div>
        </div>
    </div>
</header>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="#" class="active" id="login-form-link">
                                    <h2>Connexion<h2>
                                </a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body"><!--TODO lors de la validation du formulaire appeler la fonction qui permet de vérifier si l'utilisateur est bien admin-->
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="admin.html" method="post" role="form" style="display: block;">
                                    <div class="form-group">
                                        <input type="text" name="username" id="username" tabindex="1" class="form-control" placeholder="Username" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="password" name="password" id="password" tabindex="2" class="form-control" placeholder="Mot de passe">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login" value="Se Connecter">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>