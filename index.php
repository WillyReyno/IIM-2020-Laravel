<?php include('includes/header.php'); ?>

<div class="blog-header">
    <h1 class="blog-title">Laravel - Partie 1</h1>
    <p class="lead blog-description">Routes, Vues et Templating.</p>
</div>

<div class="row">


    <div class="col-sm-8 blog-main">

        <!-- Introduction -->
        <div id="intro">
            <h2>Introduction</h2>

            <!-- TODO Intro -->

            <p>Au cours de cette vingtaine d'exercices vous apprendrez à créer un blog avec Laravel
                (publication d'articles, édition, suppression...).</p>

            <div class="alert alert-info">Afin de vous aider nous avons ajouté des liens vers la <a
                    href="https://laravel.com/docs/5.4">documentation officielle de Laravel</a>, cette
                dernière étant extrêmement bien rédigée et facile à comprendre, nous vous invitons à vous en servir dès
                que vous avez un doute où que vous souhaitez revoir un point spécifique.<br>
                Vous trouverez les liens vers la documentation en cliquant sur les icônes présentes sur ces pages : <a
                    href="#"><i class="fa fa-book"></i></a>.
            </div>

            <p>Ces exercices sont découpés en 4 parties qui correspondent aux 4 parties du CM que votre intervenant fera
                avec vous.<br>
                Ne commencez donc pas les exercices de la partie 2 sans avoir eu la 2ème partie du CM !</p>

            <p>Si vous êtes bloqués, n'hésitez pas à demander à vos camarades, à consulter la documentation, ou à
                demander à votre intervenant.</p>
        </div>

        <!-- <a href="https://laravel.com/docs/5.4" target="_blank"><i class="fa fa-book"></i></a>

        <!-- Routes -->
        <div id="exo1">
            <h2>Exercice 1 : Les routes <a href="https://laravel.com/docs/5.4/routing" target="_blank"><i
                        class="fa fa-book"></i></a></h2>

            <p>Afin de pouvoir naviguer sur votre site, vous allez devoir définir des <strong>routes</strong> qui feront
                office de lien vers vos pages.
                Une route se défini avec un chemin (ex : <em>/accueil</em>, <em>/a-propos</em>, etc.)
                et est toujours liée à une fonction ou une méthode de Controller (que nous verrons plus tard).</p>

            <blockquote>
                Dans Laravel 5.4, les routes se définissent dans le fichier <strong>/routes/web.php</strong>
            </blockquote>

            Exemple de route :
            <pre>
            <code class="language-php">
Route::get('/helloworld', function() {
    return 'Hello World';
});
            </code>
        </pre>

            <p><em>Cette route nous indique qu'en faisant une requête http "get" sur l'url <strong>/helloworld</strong>,
                    cela nous retournera <strong>"Hello World"</strong>.</em></p>


            <p>Il est également possible de passer des paramètres <a
                    href="https://laravel.com/docs/5.4/routing#required-parameters" target="_blank"><i
                        class="fa fa-book"></i></a> dans une route afin d'afficher du contenu
                dynamique.<br>
                Ces paramètres se définissent dans le chemin de la route à l'aide d'accolades (ex :
                <strong>{monparametre}</strong>) et se passent en paramètre dans la fonction sous forme de variable
                (<strong>$monparametre</strong>).</p>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 1</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Créez une route <strong>/iim</strong> qui retournera le texte : "Institut de l'Internet et
                            du
                            Multimédia".
                        </li>
                        <br>
                        <li>Créez une seconde route qui prendra un paramètre et le retournera à l'écran.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Views -->
        <div id="exo2">
            <h2>Exercice 2 : Les vues</h2>

            <p>Une fois vos routes créées, il vous faudra les lier à des <strong>vues</strong> afin d'afficher autre
                chose que de simple phrases.<br>
                Dans Laravel, les vues sont sont gérées par le moteur de template <strong>Blade</strong> <a
                    href="https://laravel.com/docs/5.4/blade" target="_blank"><i class="fa fa-book"></i></a>.
                Un fichier Blade respecte la nomenclature suivante : <strong>nomdufichier.blade.php</strong>
            </p>

            <blockquote>
                Les vues sont à placer dans le dossier <strong>/resources/views</strong>.
            </blockquote>

            <p>Les fichiers blades ont leur propre syntaxe, inutile d'utiliser des balises PHP, ici tout se faire entre
                double accolades.</p>

            <p>Afficher une variable dans un fichier Blade : </p>
            <pre>
            <code class="language-php">
{{ $mavariable }}
            </code>
        </pre>

            <p>Pour lier une route à une vue, il suffit de retourner la méthode <strong>view()</strong> <a
                    href="https://laravel.com/docs/5.4/helpers#method-view" target="_blank"><i
                        class="fa fa-book"></i></a> en prenant en paramètre le nom
                du fichier blade (sans .blade.php).<br>
                Cette méthode va automatiquement chercher un fichier dans le répertoire de nos vues, <strong>/resources/views</strong>.
            </p>
            <pre>
            <code class="language-php">
// Retournera la vue resources/views/index.blade.php
return view('index');

// Retournera resources/views/users/index.blade.php
return view('users.index');
            </code>
        </pre>

            <p>Si vous souhaitez passer une variable à votre vue, il suffit d'utiliser la méthode compact (attention à
                ne pas mettre le $ dans compact) :</p>
            <pre>
            <code class="language-php">
$ecole = 'iim';

// La méthode compact permet d'envoyer une variable à votre vue afin de la traiter ou de l'afficher.
return view('mavue', compact('ecole');
            </code>
        </pre>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 2</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Liez votre route <strong>/iim</strong> à un fichier <strong>iim.blade.php</strong> et
                            affichez
                            "Institut de l'Internet et du Multimédia" en gras dans ce fichier.
                        </li>

                        <br>

                        <li>Liez votre seconde route à un autre fichier blade.php que vous créérez, et <strong>affichez
                                le
                                paramètre de la route dans ce fichier</strong>.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Blade -->
        <div id="exo3">
            <h2>Exercice 3 : Blade</h2>

            <p>En PHP vous êtes habitués à utiliser des logiques conditionnelles (if, else, elseif) ou encore des
                boucles (while, for, foreach).</p>
            Dans Blade ces logiques sont également présentes mais ne s'écrivent pas tout à fait de la même manière.
            <a href="https://laravel.com/docs/5.4/blade#control-structures" target="_blank"><i
                    class="fa fa-book"></i></a>

            <blockquote>
                En Blade, plus besoin de points-virgules à la fin de vos lignes !
            </blockquote>

        <pre>
            <code class="language-php">
@if($mavariable > 2)
    // Si $mavariable est strictement supérieure à 2...
@else
    // Sinon...
@endif
            </code>
        </pre>
            <p><em>Il en va de même pour <strong>@while / @endwhile</strong>, <strong>@for / @endfor</strong>, <strong>@foreach
                        / @endforeach</strong>...</em></p>

            <p>Il existe même quelques variantes telles que <strong>@forelse</strong> et <strong>@unless</strong>.</p>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 3</h3>
                </div>
                <div class="panel-body">
                    Entraînez-vous en faisant usage de ces logiques dans un de vos fichiers blade.:
                    <ul>
                        <li>@if / @else / @elseif / @endif</li>
                        <li>@while</li>
                        <li>@for</li>
                        <li>@forelse</li>
                        <li>@unless</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Templating -->
        <div id="exo4">

            <h2>Exercice 4 : Blade Templating</h2>

            <!-- TODO Faire un rappel de tous les @ de Blade ? -->

            <p>Allons un peu plus loin avec Blade et créons de vrais templates afin d'optimiser nos pages</p>

            <pre>
            <code class="language-markup">
&lt;!DOCTYPE html>
&lt;html lang="en">
&lt;head>
    &lt;meta charset="UTF-8">
    &lt;title>Title&lt;/title>
&lt;/head>
&lt;body>
    &lt;!-- Mon contenu -->
&lt;/body>
&lt;/html>
            </code>
        </pre>

            <!-- TODO Lier un fichier CSS ? -->

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 4</h3>
                </div>
                <div class="panel-body">
                    Entraînez-vous en faisant usage de :
                    <ul>
                        <li>Créez un fichier layout.blade.php qui contiendra le HTML ci-dessus.</li>
                        <li>Dans ce fichier layout :</li>
                        <ul>
                            <li>Remplacez le title par @yield qui permettra de le définir selon la page où l'on se
                                trouve.
                            </li>
                            <li>Remplacez le commentaire par un @yield qui définira où sera écrit le contenu de votre
                                page.
                            </li>
                        </ul>
                        <li>Créez deux nouveaux fichiers blade qui étendront de layout.blade.php et remplissez-y les
                            section
                            du titre et du contenu.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- TODO Vérifier qu'on ne fait pas le Auth avant le templating ?
        TODO et garder l'inté d'un thème complet pour le rendu -->

        <!-- Templating complet -->
        <div id="exo4bis">
            <h2>Exercice 4.1 : Un template un peu plus complet ! </h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 4.1</h3>
                </div>
                <div class="panel-body">
                    Entraînez-vous en faisant usage de :
                    <ul>
                        <li>Trouvez un template HTML ou Bootstrap sur internet et adaptez-le afin qu'il vous serve de
                            template principal (layout.blade.php)
                        </li>
                        <li>Définissez les zones qui seront réutilisés (contenu de la page, title, etc) et faites-en des
                            @yield)
                        </li>
                        <li>Dans un dossier resources/posts créez les fichiers : create.blade.php, edit.blade.php,
                            index.blade.php et show.blade.php
                        </li>
                        <ul>
                            <li>- Create correspond à votre formulaire de publication d'articles</li>
                            <li>- Edit correspond à votre formulaire de modification d'articles</li>
                            <li>- Index correspond à votre liste d'articles</li>
                            <li>- Show correspond à la page d'un article</li>
                        </ul>
                    </ul>
                </div>
            </div>

        </div>


        <a href="/day-2" class="pull-right btn btn-info">Passer à la suite</a>

    </div>


    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div data-spy="affix">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Menu</h4>
                <ul>
                    <li><a href="#exo1">Exercice 1 : Routes</a></li>
                    <li><a href="#exo2">Exercice 2 : Vues</a></li>
                    <li><a href="#exo3">Exercice 3 : Blade</a></li>
                    <li><a href="#exo4">Exercice 4 : Blade Templating</a></li>
                    <li><a href="#exo4bis">Exercice 4.1 : Template complet</a></li>
                </ul>
            </div>

            <?php include('includes/sidebar.php'); ?>

        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->

<?php include('includes/footer.php'); ?>

