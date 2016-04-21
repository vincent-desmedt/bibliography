<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="De Smedt Vincent">
		<meta name="description" content="Books est une bibliothèque en ligne.">
		<link rel="stylesheet" type="text/css" href="../css/styles.css" media="all">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Books (bibliothèque en ligne) - Administration espace privé</title>
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
                        <li class="header-nav__menu-connexion__elt"><a class="header-nav__menu-connexion__link" href="./administration.php" title="administration">Administration</a></li>
                    </ul>
                </form>
            </nav>
        </header>
        <section class="administration-action">
            <h2 class="administration-action__heading"><a class="administration-action__breadcrumb" href="./administration.php" title="fil d'ariane">Administration</a>&nbsp;→&nbsp;espace&nbsp;privé</h2>
            <div class="administration-action__choose">
                <label class="administration-action__label-add" for="add">Ajouter</label>
                <input class="administration-action__input-add" type="checkbox" name="Ajouter" id="add">
                <ul class="administration-action__list">
                    <li class="administration-action__elt"><a class="administration-action__link" href="./add-book.php" title="ajouter un livre">Un livre</a></li>
                    <li class="administration-action__elt"><a class="administration-action__link" href="./add-author.php" title="ajouter un auteur">Un auteur</a></li>
                    <li class="administration-action__elt"><a class="administration-action__link" href="./add-editor.php" title="ajouter un éditeur">Un éditeur</a></li>
                </ul>
            </div>
            <div class="administration-action__choose">
                <label class="administration-action__label-modify" for="modify">Modifier</label>
                <input class="administration-action__input-modify" type="checkbox" name="Modifier" id="modify">
                <ul class="administration-action__list">
                    <li class="administration-action__elt"><a class="administration-action__link" href="./modify-book.php" title="modifier un livre">Un livre</a></li>
                    <li class="administration-action__elt"><a class="administration-action__link" href="./modify-author.php" title="modifier un auteur">Un auteur</a></li>
                    <li class="administration-action__elt"><a class="administration-action__link" href="./modify-editor.php" title="modifier un éditeur">Un éditeur</a></li>
                </ul>
            </div>
            <div class="administration-action__choose">
                <label class="administration-action__label-delete" for="delete">Supprimer</label>
                <input class="administration-action__input-delete" type="checkbox" name="Supprimer" id="delete">
                <ul class="administration-action__list">
                    <li class="administration-action__elt"><a class="administration-action__link" href="./delete-book.php" title="delete un livre">Un livre</a></li>
                    <li class="administration-action__elt"><a class="administration-action__link" href="./delete-author.php" title="delete un auteur">Un auteur</a></li>
                    <li class="administration-action__elt"><a class="administration-action__link" href="./delete-editor.php" title="delete un éditeur">Un éditeur</a></li>
                </ul>
            </div>
        </section>
        <footer class="footer administration-page">
            <p class="footer__copyright">&copy;&nbsp;2016&nbsp;Books</p>
        </footer>
	</body>
