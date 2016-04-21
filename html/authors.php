<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="De Smedt Vincent">
		<meta name="description" content="Books est une bibliothèque en ligne.">
		<link rel="stylesheet" type="text/css" href="../css/styles.css" media="all">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Books (bibliothèque en ligne) - Les auteurs</title>
	</head>
    <body>
        <header class="header authors-page">
            <h1 class="header-heading">Books la bibliothèque</h1>
            <nav class="header-nav">
                <h2 class="header-nav__heading">Menu de navigation</h2>
                <form class="header-nav__form" action="books.php" method="get">
                    <label class="header-nav__menu-label" for="header-navigation-toogle">Menu de navigation</label>
                    <input class="header-nav__menu-input" type="checkbox" id="header-navigation-toogle" name="Navigation Menu">
                    <ul class="header-nav__menu-list">
                        <li class="header-nav__menu-list__elt"><a class="header-nav__menu-list__link" href="./books.php" title="livres">Livres</a></li>
                        <li class="header-nav__menu-list__elt"><a class="header-nav__menu-list__link" href="#" title="auteurs">Auteurs</a></li>
                        <li class="header-nav__menu-list__elt"><a class="header-nav__menu-list__link" href="./editors.php" title="éditeurs">Éditeurs</a></li>
                    </ul>

                    <a class="header-nav__heading-link" href="../index.php" title="Books la bibliothèque"><em class="header-nav__heading-link-emphasis">Books</em><span class="header-nav__heading-link-description"> la bibliothèque</span></a>

                    <label class="header-nav__menu-connexion-label" for="header-connexion-navigation-toogle">Menu des différentes connexions</label>
                    <input class="header-nav__menu-connexion-input" type="checkbox" id="header-connexion-navigation-toogle" name="Connexions Menu">
                    <ul class="header-nav__menu-connexion-list">
                        <li class="header-nav__menu-connexion__elt"><a class="header-nav__menu-connexion__link" href="./inscription.php" title="inscription">Inscription</a></li>
                        <li class="header-nav__menu-connexion__elt"><a class="header-nav__menu-connexion__link" href="./connexion.php" title="connexion">Connexion</a></li>
                        <li class="header-nav__menu-connexion__elt"><a class="header-nav__menu-connexion__link" href="./administration.php" title="administrations">Administration</a></li>
                    </ul>
                </form>
            </nav>
        </header>
        <section class="authors">
            <h2 class="authors__heading">Les auteurs&nbsp;:&nbsp;</h2>
            <ul class="authors__list">
                <li class="authors__elt"><a class="authors__link" href="./author.php" title="Carl Mydans, l'auteur">Carl Mydans</a></li>
                <li class="authors__elt"><a class="authors__link" href="./author.php" title="Carl Mydans, l'auteur">Carl Mydans</a></li>
            </ul>
        </section>
        <footer class="footer">
            <p class="footer__copyright">&copy;&nbsp;2016&nbsp;Books</p>
        </footer>
	</body>
