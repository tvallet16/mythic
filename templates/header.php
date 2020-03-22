<header>
    <nav>
        <ul class="flex">
            <li><a href="/">Accueil</a></li>
            <li><a href="rencontre.php">Rencontre</a></li>
            <li><a href="users.php">utilisateurs</a> </li>

            <?php if (isset($_SESSION['name'])) {?>
                <li class="profil">
                    <?= $_SESSION['name'] ?>
                    <ul class="none">
                        <li> <a href="profile.php">profil</a> </li>
                        <li><a href="controllers/logout.php">deconexion</a></li>
                    </ul>
                </li>
            <?php }else{ ?>
                <li><a href="login.php"> Se connecter </a></li>
            <?php } ?>
        </ul>
    </nav>
</header>