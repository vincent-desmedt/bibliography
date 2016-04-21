<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="De Smedt Vincent">
		<meta name="description" content="Books est une bibliothèque en ligne.">
		<link rel="stylesheet" type="text/css" href="./css/styles.css" media="all">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Books (bibliothèque en ligne) - Accueil</title>
	</head>
	<body>
        <header class="header">
            <h1 class="header-heading">Books la bibliothèque</h1>
            <nav class="header-nav">
                <h2 class="header-nav__heading">Menu de navigation</h2>
                <form class="header-nav__form" action="index.php" method="get">
                    <label class="header-nav__menu-label" for="header-navigation-toogle">Menu de navigation</label>
                    <input class="header-nav__menu-input" type="checkbox" id="header-navigation-toogle" name="Navigation Menu">
                    <ul class="header-nav__menu-list">
                        <li class="header-nav__menu-list__elt"><a class="header-nav__menu-list__link" href="./html/books.php" title="livres">Livres</a></li>
                        <li class="header-nav__menu-list__elt"><a class="header-nav__menu-list__link" href="./html/authors.php" title="auteurs">Auteurs</a></li>
                        <li class="header-nav__menu-list__elt"><a class="header-nav__menu-list__link" href="./html/editors.php" title="éditeurs">Éditeurs</a></li>
                    </ul>

                    <a class="header-nav__heading-link" href="#" title="Books la bibliothèque"><em class="header-nav__heading-link-emphasis">Books</em><span class="header-nav__heading-link-description"> la bibliothèque</span></a>

                    <label class="header-nav__menu-connexion-label" for="header-connexion-navigation-toogle">Menu des différentes connexions</label>
                    <input class="header-nav__menu-connexion-input" type="checkbox" id="header-connexion-navigation-toogle" name="Connexions Menu">
                    <ul class="header-nav__menu-connexion-list">
                        <li class="header-nav__menu-connexion__elt"><a class="header-nav__menu-connexion__link" href="./html/inscription.php" title="inscription">Inscription</a></li>
                        <li class="header-nav__menu-connexion__elt"><a class="header-nav__menu-connexion__link" href="./html/connexion.php" title="connexion">Connexion</a></li>
                        <li class="header-nav__menu-connexion__elt"><a class="header-nav__menu-connexion__link" href="./html/administration.php" title="administrations">Administration</a></li>
                    </ul>

                    <div class="header-nav-search">
                        <label class="header-nav-search__search-book-label" for="header-search-book">Rechercher un livre</label>
                        <input class="header-nav-search__search-book-input" list="livres" type="search" id="header-search-book" name="search book" placeholder="Rechercher un livre" maxlength="200">
                        <datalist class="header-nav-search__search-book-datalist" id="livres">
        					<option value="livre 1">livre 1</option>
        				</datalist>
        				<label class="header-nav-search__search-book-search-label" for="header-search-submit">Envoie de la requête du livre</label>
        				<button class="header-nav-search__search-book-search-submit" name="submit" type="submit" id="header-search-submit" value="1"></button>
                    </div>
                </form>
            </nav>
        </header>
        <section class="books">
            <h2 class="books__heading">Les derniers livres&nbsp;:&nbsp;</h2>
            <a class="books__link-book" href="./html/book.php" title="Carl Mydans - Une paix violente (livre)">
                <article class="books-article">
                    <h3 class="books-article__heading">Carl Mydans - Une paix violente</h3>
                    <figure class="books-article-figure">
                        <img class="books-article-figure__img" src="http://dummyimage.com/100x100/000/fff" alt="image du livre" />
                        <figcaption class="books-article-figure__description">
                            <p class="books-article-figure__description-elt">Carl Mydans</p>
                            <p class="books-article-figure__description-elt">Une paix violente</p>
                            <p class="books-article-figure__description-elt">Édition Atheneum</p>
                        </figcaption>
                    </figure>
                </article>
            </a>
            <a class="books__link-book" href="./html/book.php" title="Carl Mydans - Une paix violente (livre)">
                <article class="books-article">
                    <h3 class="books-article__heading">Carl Mydans - Une paix violente</h3>
                    <figure class="books-article-figure">
                        <img class="books-article-figure__img" src="http://dummyimage.com/100x100/000/fff" alt="image du livre" />
                        <figcaption class="books-article-figure__description">
                            <p class="books-article-figure__description-elt">Carl Mydans</p>
                            <p class="books-article-figure__description-elt">Une paix violente</p>
                            <p class="books-article-figure__description-elt">Édition Atheneum</p>
                        </figcaption>
                    </figure>
                </article>
            </a>
            <a class="books__link-book" href="./html/book.php" title="Carl Mydans - Une paix violente (livre)">
                <article class="books-article">
                    <h3 class="books-article__heading">Carl Mydans - Une paix violente</h3>
                    <figure class="books-article-figure">
                        <img class="books-article-figure__img" src="http://dummyimage.com/100x100/000/fff" alt="image du livre" />
                        <figcaption class="books-article-figure__description">
                            <p class="books-article-figure__description-elt">Carl Mydans</p>
                            <p class="books-article-figure__description-elt">Une paix violente</p>
                            <p class="books-article-figure__description-elt">Édition Atheneum</p>
                        </figcaption>
                    </figure>
                </article>
            </a>
            <a class="books__link-book" href="./html/book.php" title="Carl Mydans - Une paix violente (livre)">
                <article class="books-article">
                    <h3 class="books-article__heading">Carl Mydans - Une paix violente</h3>
                    <figure class="books-article-figure">
                        <img class="books-article-figure__img" src="http://dummyimage.com/100x100/000/fff" alt="image du livre" />
                        <figcaption class="books-article-figure__description">
                            <p class="books-article-figure__description-elt">Carl Mydans</p>
                            <p class="books-article-figure__description-elt">Une paix violente</p>
                            <p class="books-article-figure__description-elt">Édition Atheneum</p>
                        </figcaption>
                    </figure>
                </article>
            </a>
        </section>
        <footer class="footer">
            <p class="footer__copyright">&copy;&nbsp;2016&nbsp;Books</p>
        </footer>
	</body>
</html>
