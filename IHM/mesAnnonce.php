<?php


include 'struct/entete.html';
include 'struct/menuUser.html';

?>
<div class="col-12 annonce">
    <div class="row">
        <div class="col-2"> <img src="../img/cars/car-1.jpg" alt=""></div>
        <div class="col-4 col-border">
            <div class="car__item__text border-annonce">
                <div class="car__item__text__inner">
                    <div class="label-date">2016</div>
                    <h5><a href="#">Porsche cayenne turbo s</a></h5>
                </div>
            </div>
        </div>
        <div class="col-4 col-border">
            <div class="car__item__text border-annonce">
                <div class="car__item__text__inner">
                    <ul>
                        <li><span>35,000</span> km</li>
                        <li>Auto</li>
                        <li><span>700</span> hp</li>
                    </ul>
                </div>
                <div class="car__item__price">
                    <span class="car-option">A louer</span>
                    <h6>$218<span>/Mois</span></h6>
                </div>
            </div>
        </div>
        <div class="col-2 col-border center-cross">
            <a href="#" class="delete red-delete" title="Delete" data-toggle="tooltip"><i class="material-icons delete-ajust">&#xE5C9;</i></a>
        </div>
    </div>
</div>
<div class="col-12 annonce">
    <div class="row">
        <div class="col-2"> <img src="../img/cars/car-1.jpg" alt=""></div>
        <div class="col-4 col-border">
            <div class="car__item__text border-annonce">
                <div class="car__item__text__inner">
                    <div class="label-date">2016</div>
                    <h5><a href="#">Porsche cayenne turbo s</a></h5>
                </div>
            </div>
        </div>
        <div class="col-4 col-border">
            <div class="car__item__text border-annonce">
                <div class="car__item__text__inner">
                    <ul>
                        <li><span>35,000</span> km</li>
                        <li>Auto</li>
                        <li><span>700</span> hp</li>
                    </ul>
                </div>
                <div class="car__item__price">
                    <span class="car-option">A louer</span>
                    <h6>$218<span>/Mois</span></h6>
                </div>
            </div>
        </div>
        <div class="col-2 col-border center-cross">
            <a href="#" class="delete red-delete" title="Delete" data-toggle="tooltip"><i class="material-icons delete-ajust">&#xE5C9;</i></a>
        </div>
    </div>
</div>

<div class="col-12 annonce">
    <div class="row">
        <div class="col-2"> <img src="../img/cars/car-1.jpg" alt=""></div>
        <div class="col-4 col-border">
            <div class="car__item__text border-annonce">
                <div class="car__item__text__inner">
                    <div class="label-date">2016</div>
                    <h5><a href="#">Porsche cayenne turbo s</a></h5>
                </div>
            </div>
        </div>
        <div class="col-4 col-border">
            <div class="car__item__text border-annonce">
                <div class="car__item__text__inner">
                    <ul>
                        <li><span>35,000</span> km</li>
                        <li>Auto</li>
                        <li><span>700</span> hp</li>
                    </ul>
                </div>
                <div class="car__item__price">
                    <span class="car-option">A louer</span>
                    <h6>$218<span>/Mois</span></h6>
                </div>
            </div>
        </div>
        <div class="col-2 col-border center-cross">
            <a href="#" class="delete red-delete" title="Delete" data-toggle="tooltip"><i class="material-icons delete-ajust">&#xE5C9;</i></a>
        </div>
    </div>
</div>


<?php

include "struct/footer.html";

?>

<script>
    document.getElementById('accueil').className = "";
    document.getElementById('annonce').className = "";
    document.getElementById('contact').className = "";
    document.getElementById('publier').className = "";
    document.getElementById('profil').className = "active";
</script>