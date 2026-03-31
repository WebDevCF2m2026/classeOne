<?php
# view/inc/menu.php
?>
<nav>
    <a href="./" class="logo">Portfolio</a>
    <button class="menu-toggle">☰</button>
    <ul class="nav-links">
<?php
// si on est sur l'accueil
if(!isset($_GET['p'])):
?>
        <li><a href="./" class="active">Accueil</a></li>
<?php
// on est pas sur la page d'accueil
else:
?>
        <li><a href="./">Accueil</a></li>
<?php
// fin de condition
endif;       
# tant qu'on a des pages (éléments du menu)
foreach(ARRAY_VALID_PAGES as $page):
    // vérification de la page actuelle pour mettre 
    // en actif si identique à la variable get qui
    // doit exister (isset pour éviter le bug de accueil)
    $active = (isset($_GET['p']) && $page == $_GET['p'])
            ? 'class="active"' 
            : "";

?>
<li><a href="./?p=<?= $page ?>" <?= $active ?>><?= ucfirst($page) ?></a></li>
<?php
endforeach;
?>
    </ul>
</nav>
