<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="De Smedt Vincent">
		<meta name="description" content="Books est une bibliothèque en ligne.">
		<link rel="stylesheet" type="text/css" href="../css/styles.css" media="all">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Books (bibliothèque en ligne) - Carl Mydans - L'auteur</title>
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
                        <li class="header-nav__menu-list__elt"><a class="header-nav__menu-list__link" href="./authors.php" title="auteurs">Auteurs</a></li>
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
        <section class="editor">
            <h2 class="editor__heading"><a class="editor__breadcrumb" href="./editors.php" title="fil d'ariane">Les éditeurs</a>&nbsp;→&nbsp;Atheneum</h2>
            <article class="editor-article">
                <h3 class="editor-article__heading">Atheneum - l'éditeur</h3>
                <figure class="editor-article-figure">
                    <img class="editor-article-figure__img" src="http://dummyimage.com/200x200/000/fff" alt="image du livre" />
                    <figcaption class="editor-article-figure__description">
                        <p class="editor-article-figure__description-elt">Atheneum</p>
                    </figcaption>
                </figure>
                <p class="editor-article__text-content">
                    Donec hendrerit, metus in mollis suscipit, nisi lacus pellentesque sem, sed varius justo lacus et lacus. Suspendisse lorem ipsum, suscipit a nunc non, aliquet efficitur nunc. Vivamus pulvinar tempus libero sit amet lobortis.
                </p>
                <div class="editor-written-books">
                    <h4 class="editor-written-books__heading">Livre(s) édité(s)&nbsp;:&nbsp;</h4>
                    <ul class="editor-written-books__list">
                        <li class="editor-written-books__elt"><a class="editor-written-books__link" href="./book.php" title="Carl Mydans, l'auteur">Une paix violente</a></li>
                        <li class="editor-written-books__elt"><a class="editor-written-books__link" href="./book.php" title="Carl Mydans, l'auteur">Une paix violente</a></li>
                    </ul>
                </div>
            </article>
        </section>
        <footer class="footer">
            <p class="footer__copyright">&copy;&nbsp;2016&nbsp;Books</p>
        </footer>
	</body>
