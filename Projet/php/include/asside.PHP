<?php $alea = (rand( 1 , 2 /*,3*//*,4*/ )) ?>

<?php if ($alea == 1) { ?>
<ul>
    <div class="contactAsside">
    <h3>Contact :</h3>    
    <ul>
            <li>-mail: labuche@caenvoiedubois.fr</li>
            <li>-adresse: <br> <strong>66 route de la forêt 1234 clairiere</strong></li>
            <li>-tel: <br> <strong>555-0001</strong> </li>
     </ul>
        </div>
    <ul>

    <div class='aside'>
        <p class='titreAside'>PROMO ECLAIRE</p>
         20% de reduction <br>
        sur tout le stock!</p>
        <p id='countdown'></p>

        <img src="images/bois-chauffage-en-vrac-50cm.jpg" alt="image" width="170" height="170" >
    </div>
</ul>

<?php } elseif ($alea == 2) { ?>
    <ul>
    <div class="contactAsside">
    <h3>Contact :</h3>    
    <ul>
            <li>-mail: labuche@caenvoiedubois.fr</li>
            <li>-adresse: <br> <strong>66 route de la forêt 1234 clairiere</strong></li>
            <li>-tel: <br> <strong>555-0001</strong> </li>
        </ul>
    </div>
    <ul>

    <div class="aside">
    <p class='titreAside'>PROMO ECLAIRE</p>
         40% de reduction
        pour tout achat de sapin de noel !</p>
        <p id='countdown'></p>

        <img src="images/sapin.jpg" alt="image" width="170" height="170" >
    </div>
</ul>

<?php } /* elseif ($alea == 3) { ?>
    <ul>
    <div class="contactAsside">
    <h3>Contact :</h3>    
    <ul>
            <li>-mail: labuche@caenvoiedubois.fr</li>
            <li>-adresse: <br> <strong>66 route de la forêt 1234 clairiere</strong></li>
            <li>-tel: <br> <strong>555-0001</strong> </li>
        </ul>
    </div>
    <ul>

    <div class="aside">
    <p class='titreAside'>Nom de la promo</p>
         la promo</p>

        <img src="images/image.jpg" alt="image" width="170" height="170" >
    </div>
</ul>

<?php } */