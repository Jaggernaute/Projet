<?php include('./php/function/fonction.php') ?>

<?php if (is_page('index.php')) { ?>
    <nav>
        <ul>
            <li><a class="active" href="index.php">.accueil</a></li>
            <li><a href="services.php">.services</a></li>
            <li><a href="contact.php">.contact</a></li>
        </ul>
    </nav>

<?php } elseif (is_page('services.php')) { ?>
    <nav>
        <ul>
            <li><a href="index.php">.accueil</a></li>
            <li><a class="active" href="services.php">.services</a></li>
            <li><a href="contact.php">.contact</a></li>
        </ul>
    </nav>

<?php } elseif (is_page('contact.php')) { ?>
    <nav>
        <ul>
            <li><a href="index.php">.accueil</a></li>
            <li><a href="services.php">.services</a></li>
            <li><a class="active" href="contact.php">.contact</a></li>

    </nav>

<?php } ?>