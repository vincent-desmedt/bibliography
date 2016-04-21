<!DOCTYPE html>
<html lang="fr">
	<head>
		<meta charset="utf-8">
		<meta name="author" content="De Smedt Vincent">
		<meta name="description" content="Books est une bibliothèque en ligne.">
		<link rel="stylesheet" type="text/css" href="../css/styles.css" media="all">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Books (bibliothèque en ligne) - Carl Mydans - Une paix violente</title>
	</head>
	<body>
        <header class="header book-page">
            <h1 class="header-heading">Books la bibliothèque</h1>
            <nav class="header-nav">
                <h2 class="header-nav__heading">Menu de navigation du site</h2>
                <form class="header-nav__form" action="book.php" method="get">
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
                        <li class="header-nav__menu-connexion__elt"><a class="header-nav__menu-connexion__link" href="./administration.php" title="administrations">Administration</a></li>
                    </ul>
                </form>
            </nav>
        </header>
        <section class="books book-page">
            <h2 class="books__heading book-page"><a class="books__breadcrumb" href="./books.php" title="fil d'ariane">Les livres</a>&nbsp;→&nbsp;Carl Mydans&nbsp;-&nbsp;Une paix violente</h2>
            <article class="books-article">
                <h3 class="books-article__heading">Carl Mydans - Une paix violente</h3>
                <figure class="books-article-figure book-page">
                    <img class="books-article-figure__img" src="http://dummyimage.com/200x200/000/fff" alt="image du livre" />
                    <figcaption class="books-article-figure__description book-page">
                        <p class="books-article-figure__description-elt">Carl Mydans</p>
                        <p class="books-article-figure__description-elt">Une paix violente</p>
                        <p class="books-article-figure__description-elt">Édition Atheneum</p>
                    </figcaption>
                </figure>
                <p class="books-article__text-content">
                    Donec hendrerit, metus in mollis suscipit, nisi lacus pellentesque sem, sed varius justo lacus et lacus. Suspendisse lorem ipsum, suscipit a nunc non, aliquet efficitur nunc. Vivamus pulvinar tempus libero sit amet lobortis. Duis aliquet lacinia fermentum. Vestibulum ut suscipit tellus. Vestibulum sollicitudin, quam sed semper elementum, ligula ligula euismod tellus, scelerisque auctor arcu tellus id ligula. Mauris tempor diam nunc, non blandit neque blandit a. Cras euismod cursus libero, eu pretium dui fringilla vel. Cras posuere quis nibh id porttitor. Maecenas in nunc ac lorem pretium viverra et sed risus. Maecenas dapibus, risus eget consectetur interdum, felis quam laoreet nulla, sed euismod enim augue placerat nulla. Maecenas finibus in sem eget accumsan.
                </p>
            </article>
            <div class="books-article-availability">
                <h2 class="books-article-availability__heading">Où trouver ce livre&nbsp;?</h2>
                <p class="books-article-availability__current-availability">Livre disponible</p>
                <ul class="books-article-availability__list">
                    <li class="books-article-availability__elt">
                        <h3 class="books-article-availability__elt">Bibliothèque des Chiroux</h3>
                        <p class="books-article-availability__elt">Rue des Croisiers 15</p>
                        <p class="books-article-availability__elt">4000 Liège</p>
                    </li>
                </ul>
            </div>
            <form class="books-rate" action="book.php" method="get">
                <h2 class="books-rate__heading">Évaluer le livre</h2>
                <input class="books-rate__input" type="checkbox" id="one-star" name="one-star">
                <label class="books-rate__label" for="one-star">1&nbsp;étoile&nbsp;</label>
                <input class="books-rate__input" type="checkbox" id="two-star" name="two-stars">
                <label class="books-rate__label" for="two-star">2&nbsp;étoiles</label>
                <input class="books-rate__input" type="checkbox" id="three-star" name="three-stars">
                <label class="books-rate__label" for="three-star">3&nbsp;étoiles</label>
                <input class="books-rate__input" type="checkbox" id="four-star" name="four-stars">
                <label class="books-rate__label" for="four-star">4&nbsp;étoiles</label>
                <input class="books-rate__input" type="checkbox" id="five-star" name="five-stars">
                <label class="books-rate__label" for="five-star">5&nbsp;étoiles</label>
                <button class="books-rate__submit" type="submit" name="submit" value="rate">Valider ma côte</button>
            </form>
            <form class="books-my-comment" action="book.php" method="post">
                <h2 class="books-my-comment__heading">Commenter</h2>
                <label class="books-my-comment__label" for="my-comment">Commenter</label>
                <textarea id="my-comment" class="books-my-comment__text" name="textarea" rows="5" maxlength="500" placeholder="Mon commentaire&hellip;"></textarea>
                <button class="books-my-comment__submit" type="submit" name="submit" value="Comment">Envoyer</button>
            </form>
            <div class="books-comments">
                <p class="books-comments__number-comments">1 commentaire(s)</p>
                <ul class="books-comments__list">
                    <li class="books-comments__elt">
                        <p class="books-comments__user">
                            Vincent De Smedt
                        </p>
                        <p class="books-comments__comment">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam vehicula magna bibendum tempor laoreet. Nunc sed laoreet nisl.
                        </p>
                    </li>
                </ul>
            </div>

        </section>
        <footer class="footer">
            <p class="footer__copyright">&copy;&nbsp;2016&nbsp;Books</p>
        </footer>
	</body>
