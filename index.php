<?php include('includes/header.php'); ?>

<div class="blog-header">
    <h1 class="blog-title">Laravel - Jour 1</h1>
    <p class="lead blog-description">Créons nos premières routes, nos premières vues... </p>
</div>

<div class="row">


    <div class="col-sm-8 blog-main">

        <!-- Introduction -->
        <div id="intro">
            <h2>Introduction</h2>

            <!-- TODO Intro -->

            <p>Au cours de ces exercices vous allez apprendre à créer un système de blog simple
                avec articles et commentaires.</p>

            <p>Surtout, commencez ces exercices sur une installation Laravel vierge !</p>

            <div class="alert alert-info">Afin de vous aider pour chaque nouvelle partie traitée nous avons ajouté un
                lien vers la page de
                la documentation liée à cette partie.
                <br>
                Vous les trouverez en cliquant sur les icônes suivantes : <a href="#"><i
                        class="fa fa-book"></i></a>.
            </div>
        </div>

        <!-- <a href="https://laravel.com/docs/5.4" target="_blank"><i class="fa fa-book"></i></a>

        <!-- Routes -->
        <div id="exo1">
            <h2>Exercice 1 : Les routes</h2>

            <p>Afin de pouvoir naviguer sur votre site, vous allez devoir définir des <strong>routes</strong> qui feront
                office de lien vers vos pages.
                Une route se défini avec un chemin (ex : <em>/accueil</em>, <em>/a-propos</em>, etc.)
                et est toujours liée à une fonction ou un méthode de Controller (que nous verrons plus tard).</p>

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


            <p>Il est également possible de passer des paramètres dans une route afin d'afficher du contenu
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
                        <li>Créez une route <em>/iim</em> qui retournera le texte : "Institut de l'Internet et du
                            Multimédia". <a href=""><i class="fa fa-book"></i></a>
                        </li>
                        <li>Créez une seconde route qui prendra un paramètre et le retournera à l'écran.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Views -->
        <div id="exo2">
            <h2>Exercice 2 : Les vues</h2>

            <p>Une fois vos routes créées, il vous faudra les lier à des <strong>vues</strong> afin d'afficher autre
                chose
                que de simple phrases..
                Dans Laravel, les vues sont sont gérées par le moteur de template <strong>Blade</strong>.
                Un fichier Blade respecte la nomenclature suivante : nomdufichier.blade.php
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

            <p>Pour lier une route à une vue, il suffit de retourner la fonction view() en prenant en paramètre le nom
                du
                fichier blade (sans .blade.php) :</p>
            <pre>
            <code class="language-php">
return view('mavue.blade.php');
            </code>
        </pre>

            <p>Si vous souhaitez passer une variable à votre vue, il suffit d'utiliser la méthode compact :</p>
            <pre>
            <code class="language-php">
$ecole = 'iim';
return view('mavue.blade.php', compact('ecole');
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
                        <li>Liez votre seconde route à un fichier blade.php que vous créérez, et <strong>affichez le
                                paramètre dans le fichier blade</strong>.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Blade -->
        <div id="exo3">
            <h2>Exercice 3 : Blade</h2>

            <p>En PHP vous êtes habitués à utiliser des logiques conditionnelles (if, else, elseif) ou encore des
                boucles
                (while, for, foreach).</p>
            Dans Blade ces logiques sont également présentes mais ne s'écrivent pas tout à fait de la même manière.

            <blockquote>
                En Blade, plus besoin de points-virgule à la fin de vos lignes !
            </blockquote>

            <pre>
            <code class="language-php">
@if($mavariable > 2)
    // Si $mavariable est strictement supérieure à 2...
@else
    // Sinon afficher ceci...
@endif
            </code>
        </pre>
            <p><em>Il en va de même pour @while / @endwhile, @for / @endfor, @foreach / @endforeach...</em></p>

            <p>Il existe même quelques variantes telles que @forelse et @unless.</p>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 3</h3>
                </div>
                <div class="panel-body">
                    Entraînez-vous en faisant usage de :
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

        <!-- Templating complet -->
        <div id="exo4bis">
            <!-- TODO Exo 4.1 -->
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

        <!-- Controllers -->
        <div id="exo5">
            <h2>Exercice 5 : Controllers</h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 5</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Création d'un TestController</li>
                        <li>Créez une méthode pour chaque route précédemment créée (index, show, create, edit)</li>
                        <li>Placez le code que vous aviez fait dans vos routes directement dans ces méthodes</li>
                        <li>Reliez toutes les routes aux méthodes du controller</li>
                    </ul>
                </div>
            </div>

        </div>

        <!-- Resource Controllers -->
        <div id="exo5bis">
            <h2>Exercice 5.1 : Resource Controllers </h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 5.1</h3>
                </div>
                <div class="panel-body">
                    <p>A l'aide d'une ligne de commande, crééz un PostController
                        qui sera prérempli de toutes les méthodes dont on aura besoin.</p>
                    <ul>
                        <li>index, create, store, show, edit, update, destroy (les fonctions store, update et destroy ne
                            doivent rien retourner pour le moment)
                        </li>
                        <li>créez une route resource qui liera en une ligne vos routes /posts avec ce controller.</li>
                        <li>vous pouvez supprimer le TestController.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Migrations -->
        <div id="exo6">
            <h2>Exercice 6 : Les migrations</h2>

            <!-- TODO faire une liste migrate, refresh, reset etc ? (sauf si c'est dans le cours) -->

            <div class="alert alert-warning">
                Pour toutes les personnes ayant MySQL < x.xx ajoutez la ligne suivante dans la fonction boot() du
                fichier
                app/Providers/AppServiceProvider.php (et n'oubliez pas d'importer la class Schema (alt + click sur
                Schema)
            </div>

            <pre>
            <code class="language-php">
                public function boot() {
                    Schema::defaultStringLength(191);
                }
            </code>
        </pre>
            <div class="alert alert-warning">
                Pour les <strong>utilisateurs de Mac</strong>, pensez à renseigner l'unix socket.
                dans le fichier .env et config/database.php
            </div>
            <pre>
            <code class="language-php">
                // .env
MAC_UNIX_SOCKET=/Applications/MAMP/tmp/mysql/mysql.sock
            </code>
        </pre>

            <pre>
            <code class="language-php">
                // config/database.php
'mysql' => [
    // ...
    'unix_socket' => env('MAC_UNIX_SOCKET'),
    // ...
],
            </code>
        </pre>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 6</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Créez une migration pour la table "posts" qui contiendra nos articles</li>
                        <li>Via les fichiers de migrations, ajoutez des champs : title, content, user_id (choisissant
                            bien les types de colonnes à utiliser)
                        </li>
                        <li>Lancez votre migration</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Clés Etrangères -->
        <div id="exo6bis">
            <h2>Exercice 6.1 : Clés étrangères</h2>

            <pre>
            <code class="language-php">
                // Code clé étrangère
            </code>
        </pre>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 6.1</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Définissez une clé étrangère liant la table user à la table posts</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Seeders & Factories -->
        <div id="exo6ter">
            <h2>Exercice 6.2 : Seeders & Factories</h2>

            <pre>
            <code class="language-php">
                // Seeders
            </code>
        </pre>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 6.2</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Dans le fichier database/factories/ModelFactory.php, dupliquez le code existant et
                            adaptez-le à votre table posts.
                        </li>
                        <li>Les types de faux contenus proposés par le package Faker sont disponibles sur
                            <a href="https://github.com/fzaninotto/Faker">
                                le repository du package</a>.
                        </li>
                        <p>Dans votre fichier PostsTableSeeder faites appel à la méthode Factory en lui passant en
                            paramètre votre modèle + le nombre d'itérations voulues.</p>
                        <li>Appelez ensuite la class PostsTableSeeder dans votre DatabaseSeeder.php</li>
                        <li>Lancez la ligne de commander d'execution des seeders !</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Query Builder -->
        <div id="exo7">
            <h2>Exercice 7 : Query Builder</h2>

            <p>Le <strong>Query Builder</strong> va nous permettre de formuler des requêtes afin d'intéragir avec
                la base de données.
                Le Query Builder a pour avantage de simplifier la syntaxe d'une requête, et de la rendre plus simple à
                lire.<br>
                Par exemple, cette requête va nous permettre de récupérer l'article correspondant à l'id 12. :</p>
            <pre>
            <code class="language-php">
                DB::table('posts')->where('id', 12);
            </code>
        </pre>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 7</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Créez une route <strong>/posts/create</strong> qui aura pour but d'insérer un nouvel article
                            dans la base de données à l'aide du <strong>Query Builder</strong>.
                        </li>
                        <ul>
                            <li>Cette route devra être liée à un template
                                <strong>resources/views/posts/create.blade.php</strong></li>
                        </ul>
                        <br>

                        <li>Toujours à l'aide du Query Builder, récupérez la liste de tous les articles en base de
                            données
                            et affichez-les sur une route nommée <strong>/posts</strong>.
                        </li>
                        <ul>
                            <li>Cette route devra être liée à un template
                                <strong>resources/views/posts/index.blade.php</strong></li>
                        </ul>
                        <br>

                        <li>Créez une route <strong>/posts/id</strong> qui prendra en paramètre l'id d'un article et qui
                            affichera l'article en question.
                        </li>
                        <ul>
                            <li>Cette route devra être liée à un template
                                <strong>resources/views/posts/show.blade.php</strong></li>
                        </ul>
                        <br>

                        <li>Créez une route <strong>/posts/id/edit</strong> qui prendra en paramètre l'id d'un article
                            et
                            qui modifiera le titre et le contenu de l'article en question.
                        </li>
                        <ul>
                            <li>Cette route devra être liée à un template
                                <strong>resources/views/posts/edit.blade.php</strong></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Models & Eloquent -->
        <div id="exo8">
            <h2>Exercice 8 : Models et Eloquent</h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 8</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Créez un model Post et renseignez les champs $fillable dans un array protected</li>
                        <li>Maintenant, utilisez votre model afin de récupérer vos données plutôt que le Query
                            Builder.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Formulaires -->
        <div id="exo9">
            <h2>Exercice 9 : Formulaires</h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 9</h3>
                </div>
                <div class="panel-body">
                    <p>Créez un formulaire d'ajout pour publier des articles dans le fichier /posts/create.blade.php</p>
                    <ul>
                        <li>Ce formulaire devra comprendre un titre et un contenu</li>
                        <li>Le formulaire doit rediriger vers la route /posts (?) en méthode POST</li>
                        <li>Ajoutez bien le csrf_field</li>
                        <li>Renseignez les fillable ou guarded dans le model</li>
                        <li>Vérifiez que les données sont bien passées à la route en faisant un dump de $request</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Validations -->
        <div id="exo10">
            <h2>Exercice 10 : Validations</h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 10</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Ajoutez des règles de validation à votre formulaire</li>
                        <li>Titre : requis, minimum 5 caractères</li>
                        <li>Contenu : requis, minimum 10 caractères</li>
                        <li>Affichez les erreurs retournées dans votre vue</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Fin du CRUD -->
        <div id="exo11">
            <h2>Exercice 11 : Le reste de notre CRUD </h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 11</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Faire le formulaire d'édition</li>
                        <li>Faire la page show</li>
                        <li>Faire un formulaire de suppression</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Relations -->
        <div id="exo12">
            <h2>Exercice 12 : Relations</h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 12</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <!-- TODO faire un .1 / entracte / autre ? -->
                        <li>Faire make:auth (forcément après les migrations d'users)</li>
                        <li>S'inscrire sur son site</li>
                        <!-- TODO parler des auth:check()) -->
                        <li>Afficher quelque chose uniquement lorsque l'on est connecté</li>

                        <li>Mettre en place la relation entre User et Post</li>
                        <li>Update les migrations posts pour prendre un user_id</li>
                        <li>Sur show.blade.php, afficher l'auteur de l'article</li>
                        <li>Créez une route de profil pour l'utilisateur affichant son nom ainsi que la liste de tous
                            ses
                            articles
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Commentaires -->
        <div id="exo13">
            <h2>Exercice 13 : Système de commentaire </h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 13</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>à faire entièrement</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Middlewares -->
        <div id="exo14">
            <h2>Exercice 14 : Middlewares </h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 14</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Pour limiter la publication aux utilisateurs connectés</li>
                        <li>Page d'administration ?</li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  -->
        <div id="exo15">
            <h2>Exercice 15 : </h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 15</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  -->
        <div id="exo16">
            <h2 id="exo16">Exercice 16 : </h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 16</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  -->
        <div id="exo17">
            <h2>Exercice 17 : </h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 17</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li></li>
                        <li></li>
                    </ul>
                </div>
            </div>
        </div>

        <!--  -->
        <div id="exo18">
            <h2>Exercice 18 : </h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 18</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li></li>
                        <li></li>
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
                    <li><a href="#exo5">Exercice 5 : Controllers</a></li>
                    <li><a href="#exo5bis">Exercice 5.1 : Resource Controllers</a></li>
                    <li><a href="#exo6">Exercice 6 : Migrations</a></li>
                    <li><a href="#exo6bis">Exercice 6.1 : Clés étrangères</a></li>
                    <li><a href="#exo6ter">Exercice 6.2 : Seeders</a></li>
                    <li><a href="#exo7">Exercice 7 : Query Builder</a></li>
                    <li><a href="#exo8">Exercice 8 : Models et Eloquent</a></li>
                    <li><a href="#exo9">Exercice 9 : Formulaires</a></li>
                    <li><a href="#exo10">Exercice 10 : Validations</a></li>
                    <li><a href="#exo11">Exercice 11 : CRUD</a></li>
                    <li><a href="#exo12">Exercice 12 : Relations</a></li>
                    <li><a href="#exo13">Exercice 13 : Système de Commentaire</a></li>
                    <li><a href="#exo14">Exercice 14 : Middlewares</a></li>
                </ul>
            </div>

            <?php include('includes/sidebar.php'); ?>

        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->

<?php include('includes/footer.php'); ?>

