<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="De Smedt Vincent">
		<meta name="description" content="Books est une bibliothèque en ligne.">
		<link rel="stylesheet" type="text/css" href="../css/styles.css" media="all">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Books (bibliothèque en ligne) - Administration</title>
	</head>
	<body>
        <header class="header administration-page">
            <h1 class="header-heading">Books la bibliothèque</h1>
            <nav class="header-nav administration-page">
                <h2 class="header-nav__heading">Menu de navigation du site</h2>
                <form class="header-nav__form" action="index.php" method="get">
                    <label class="header-nav__menu-label" for="header-navigation-toogle">Menu de navigation</label>
                    <input class="header-nav__menu-input" type="checkbox" id="header-navigation-toogle" name="Menu de navigation">
                    <ul class="header-nav__menu-list">
                        <li class="header-nav__menu-list__elt"><a class="header-nav__menu-list__link" href="./books.php" title="livres">Livres</a></li>
                        <li class="header-nav__menu-list__elt"><a class="header-nav__menu-list__link" href="./authors.php" title="auteurs">Auteurs</a></li>
                        <li class="header-nav__menu-list__elt"><a class="header-nav__menu-list__link" href="./editors.php" title="éditeurs">Éditeurs</a></li>
                    </ul>

                    <a class="header-nav__heading-link" href="../index.php"><em class="header-nav__heading-link-emphasis">Books</em><span class="header-nav__heading-link-description"> la bibliothèque</span></a>

                    <label class="header-nav__menu-connexion-label" for="header-connexion-navigation-toogle">Menu des différentes connexions</label>
                    <input class="header-nav__menu-connexion-input" type="checkbox" id="header-connexion-navigation-toogle" name="Menu des différentes connexions">
                    <ul class="header-nav__menu-connexion-list">
                        <li class="header-nav__menu-connexion__elt"><a class="header-nav__menu-connexion__link" href="./inscription.php" title="inscription">Inscription</a></li>
                        <li class="header-nav__menu-connexion__elt"><a class="header-nav__menu-connexion__link" href="./connexion.php" title="connexion">Connexion</a></li>
                        <li class="header-nav__menu-connexion__elt"><a class="header-nav__menu-connexion__link" href="#" title="administrations">Administration</a></li>
                    </ul>
                </form>
            </nav>
        </header>
        <form class="access administration-page" action="administration.php" method="post">
            <h2 class="access__heading">Administration</h2>
            <div class="access__block">
                <label class="access__label-name" for="name">Nom</label>
                <input class="access__input-name" type="texte" name="name" maxlength="30" id="name" placeholder="De Smedt" required>
            </div>
            <div class="access__block">
                <label class="access__label-firstname" for="firstname">Prénom</label>
                <input class="access__input-firstname" type="texte" name="firstname" maxlength="30" id="firstname" placeholder="Vincent" required>
            </div>
            <div class="access__block">
                <label class="access__label-password" for="password">Mot de passe</label>
                <input class="access__input-password" type="texte" name="password" maxlength="30" id="password" placeholder="******" required>
            </div>
            <button class="access__submit" type="submit" name="submit" value="connexion">Se connecter</button>
            <p class="access__validate">
                Connexion validée&nbsp;!
            </p>
        </form>
        <footer class="footer administration-page">
            <p class="footer__copyright">&copy;&nbsp;2016&nbsp;Books</p>
        </footer>
	</body>
