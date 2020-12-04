<?php include('./php/function/fonction.php') ?>

<?php if (is_page('index.php')) { ?>
    <nav>
        <ul>
            <li><a class="active" href="index">.accueil</a></li>
            <li><a href="services">.services</a></li>
            <li><a href="contact">.contact</a></li>
        </ul>
    </nav>

<?php } elseif (is_page('services.php')) { ?>
    <nav>
        <ul>
            <li><a href="index">.accueil</a></li>
            <li><a class="active" href="services">.services</a></li>
            <li><a href="contact">.contact</a></li>
        </ul>
    </nav>

<?php } elseif (is_page('contact.php')) { ?>
    <nav>
        <ul>
            <li><a href="index">.accueil</a></li>
            <li><a href="services">.services</a></li>
            <li><a class="active" href="contact">.contact</a></li>

    </nav>

<?php } elseif (is_page('not-found-page.php')) { ?>
    <nav>
        <ul>
            <li><a href="index">.accueil</a></li>
            <li><a href="services">.services</a></li>
            <li><a href="contact">.contact</a></li>

    </nav>

<?php } elseif (is_page('contact_core.php')) { ?>
    <nav>
        <ul>
            <li><a href="index">.accueil</a></li>
            <li><a href="services">.services</a></li>
            <li><a href="contact">.contact</a></li>

    </nav>

<?php }?>