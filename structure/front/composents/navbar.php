<!-- MENU PRINCIPAL -->
<nav class="nav-principal">

    <section class="navHamburger">
        <div id="nav-icon2">
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
            <span></span>
        </div>
    </section>

    <a class="" href="/"><img class="logo" src="assets/img/amlogo.png" alt="Action Mephi"></a>

    <button class="btn custom-btn">FAIRE UN DON</button>

    <!-- <button class="navbar-toggler" type="button" id="hamburgerBtn">
        <span class="navbar-toggler-icon"></span>
    </button> -->


    <ul id="popupForm">
        <li class="item-active">
            <a class="active" aria-current="page" href="/">ACCUEIL</a>
        </li>
        <li class="ligne">
            <a class="brule" href="nous-decouvrir">NOUS DECOUVRIR</a>
        </li>
        <li class="ligne">
            <a class="brule" href="evenements">EVENEMENTS</a>
        </li>
        <li class="ligne">
            <a class="brule" href="nos-domaines">NOS DOMAINS D'ACTIONS</a>
        </li>
        <li class="ligne">
            <a class="brule" href="s-engager">S'ENGAGER</a>
        </li>
        <li class="area-bouton">
            <a href=""><input type="text" id="area" placeholder="   Votre recherche"><button class="fas fa-magnifying-glass grandir bouton-area"></button></a>
        </li>
        <li>
            <a href=""><i class="fas fa-magnifying-glass grandir sucher"></i></a>
        </li>


        <li class="donateur">
            <a class="" href="espace-donateur">
                <i class="fas fa-circle-user me-2"></i>ESPACE DONATEUR
            </a>
        </li>

        <li class="don">
            <a class="" href="https://paypal.me/actionMephi?country.x=FR&locale.x=fr_FR" target="_blank"><i class="fa fa-heart me-2"></i>FAIRE UN DON</a>
        </li>
    </ul>

</nav>

<?php
if (isset($_SESSION['flash'])) {
    foreach ($_SESSION['flash'] as $flash) {
        $message = $flash['message'];
        $status = $flash['status'];

        switch ($status) {
            case 'success':
                $icon = 'felicitation';
                break;
            case 'danger':
                $icon = 'echec';
                break;
            case 'warning':
                $icon = 'attention';
        }
        // Afficher le message avec le statut approprié
        echo '
            <div class="alert alert-' . $status . ' alert-dismissible fade show" role="alert">
  <strong>' . $icon . '!</strong>' . $message . '.
  <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>
            ';
    }
    // Supprimer le message de la session
    unset($_SESSION['flash']);
}
?>
<script src="../../../assets/js/menu.js"></script>
</header>