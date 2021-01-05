<!------ Include the above in your HEAD tag ---------->
<?php
include 'struct/entete.html';
include 'struct/menuUser.html';
?>

<body>
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-md-offset-3 publish-form">
                <div class="panel panel-login">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-xs-12">
                                <a href="#" class="active" id="login-form-link">
                                    <h2>Nouvel annonce<h2>
                                </a>
                            </div>
                        </div>
                        <hr>
                    </div>
                    <div class="panel-body ">
                        <!--TODO lors de la validation du formulaire appeler la fonction qui permet de vérifier si l'utilisateur est bien admin-->
                        <div class="row">
                            <div class="col-lg-12">
                                <form id="login-form" action="traitement.php" method="post" role="form" style="display: block;">

                                    <div class="form-group">
                                        <input type="text" name="nom" id="nom" tabindex="1" class="form-control" placeholder="Intitulé de l'annonce" value="">
                                    </div>

                                    <div class="form-group">
                                        <input type="number" name="prix" id="password" tabindex="2" class="form-control" placeholder="Prix">
                                    </div>
                                    <div class="form-check form-check-inline radiobtn1">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="btn1" value="option1">
                                        <label class="form-check-label label1" for="inlineRadio1">Auto</label>
                                    </div>
                                    <div class="form-check form-check-inline radiobtn2">
                                        <input class="form-check-input" type="radio" name="inlineRadioOptions" id="btn2" value="option2">
                                        <label class="form-check-label label2" for="inlineRadio2">Manuelle</label>
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="km" id="km" tabindex="1" class="form-control" placeholder="Kilomètrage" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="chevaux" id="chevaux" tabindex="1" class="form-control" placeholder="Chevaux" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="number" name="annee" id="annee" tabindex="1" class="form-control" placeholder="Année" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="marque" id="marque" tabindex="1" class="form-control" placeholder="Marque" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="modele" id="modele" tabindex="1" class="form-control" placeholder="Modèle" value="">
                                    </div>
                                    <div class="form-group">
                                        <input type="text" name="couleur" id="couleur" tabindex="1" class="form-control" placeholder="Couleur" value="">
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-sm-6 col-sm-offset-3">
                                                <input type="submit" name="login-submit" id="login-submit" tabindex="4" class="form-control btn btn-login btn-submit" value="Publier l'annonce">
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

<?php include 'struct/footer.html'; ?>

<script>
    document.getElementById('accueil').className = "";
    document.getElementById('annonce').className = "";
    document.getElementById('contact').className = "";
    document.getElementById('publier').className = "active";
    document.getElementById('profil').className = "";
</script>