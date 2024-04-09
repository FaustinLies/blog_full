    <!-- ======= Header ======= -->
    <header id="header" class="header fixed-top d-flex align-items-center">
        <div class="container-fluid d-flex align-items-center justify-content-between">

            <!-- Nav Menu -->
            <nav id="navmenu" class="navmenu">
                <ul>
                    <li><a href="index.php" class="active">Home</a></li>
                    <li><a href="#blog">Publication</a></li>
                    <li>
                        <a href="../pub_articule.php">Publier</a>
                    </li>
                    <li><a href="blog.php">Blog de vous</a></li>
                    <li><a href="../apropos.php">A propos</a></li>
                </ul>

                <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
            </nav>
            <!-- End Nav Menu -->
            <?php
            if (isset($_SESSION['authatification'])) {
            ?>
                <a class="btn-getstarted" href="profil.php?id=<?= $_SESSION['id']; ?>">Profil</a>
                <a class="btn-getstarted" href="../controllers/logout.php">Deconnexion</a>
            <?php
            }
            ?>
        </div>
    </header>
