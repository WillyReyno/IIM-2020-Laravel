<?php include('includes/header.php'); ?>

<div class="blog-header">
    <h1 class="blog-title">Laravel - Jour 1</h1>
    <p class="lead blog-description">Créons nos premières routes, nos premières vues... </p>
</div>

<div class="row">

    <div class="col-sm-8 blog-main">

        <h2 id="exo1">Exercice 1 : Les routes</h2>

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


        <p>Il est également possible de passer des paramètres dans une route afin d'afficher du contenu dynamique.<br>
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
                        Multimédia".
                    </li>
                    <li>Créez une seconde route qui prendra un paramètre et le retournera à l'écran.</li>
                </ul>
            </div>
        </div>

        <h2 id="exo2">Exercice 2 : Les vues</h2>

        <p>Une fois vos routes créées, il vous faudra les lier à des <strong>vues</strong> afin d'afficher autre chose
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

        <p>Pour lier une route à une vue, il suffit de retourner la fonction view() en prenant en paramètre le nom du
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
                    <li>Liez votre route <strong>/iim</strong> à un fichier <strong>iim.blade.php</strong> et affichez
                        "Institut de l'Internet et du Multimédia" en gras dans ce fichier.
                    </li>
                    <li>Liez votre seconde route à un fichier blade.php que vous créérez, et <strong>affichez le
                            paramètre dans le fichier blade</strong>.
                    </li>
                </ul>
            </div>
        </div>

        <h2 id="exo3">Exercice 3 : Blade</h2>

        <p>En PHP vous êtes habitués à utiliser des logiques conditionnelles (if, else, elseif) ou encore des boucles
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

        <h2 id="exo4">Exercice 4 : Blade Templating</h2>

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
                    <li>Créez deux nouveaux fichiers blade qui étendront de layout.blade.php et remplissez-y les section
                        du titre et du contenu.
                    </li>
                </ul>
            </div>
        </div>

        <h2 id="exo5">Exercice 5 : Les migrations</h2>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Exercice 5</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li>Créez une migration pour la table "posts" qui contiendra nos articles</li>
                    <li>Via les fichiers de migrations, ajoutez des champs : title, content, user_id</li>
                    <li>Lancez votre migration</li>
                </ul>
            </div>
        </div>

        <h2 id="exo6">Exercice 6 : Query Builder</h2>

        <br>
        <div class="alert alert-warning">Cet exercice est à commencer après avoir vu la partie du cours sur les
            migrations !
        </div>

        <p>Le <strong>Query Builder</strong> va nous permettre de formuler des requêtes afin d'intéragir avec
            la base de données.
            Le Query Builder a pour avantage de simplifier la syntaxe d'une requête, et de la rendre plus simple à lire.<br>
            Par exemple, cette requête va nous permettre de récupérer l'article correspondant à l'id 12. :</p>
        <pre>
            <code class="language-php">
                DB::table('posts')->where('id', 12);
            </code>
        </pre>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Exercice 6</h3>
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

                    <li>Toujours à l'aide du Query Builder, récupérez la liste de tous les articles en base de données
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

                    <li>Créez une route <strong>/posts/id/edit</strong> qui prendra en paramètre l'id d'un article et
                        qui modifiera le titre et le contenu de l'article en question.
                    </li>
                    <ul>
                        <li>Cette route devra être liée à un template
                            <strong>resources/views/posts/edit.blade.php</strong></li>
                    </ul>
                </ul>
            </div>
        </div>

        <h2 id="exo7">Exercice 7 : Eloquent</h2>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Exercice 7</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li>Convertir tout ce qui a été fait avec le QB avec Eloquent</li>
                </ul>
            </div>
        </div>

        <h2 id="exo8">Exercice 8 : Controllers</h2>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Exercice 8</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li>Création d'un TestController</li>
                    <li>Créez une méthode pour chaque route précédemment créée (index, show, create, edit)</li>
                    <li>Placez le code que vous aviez fait dans vos routes directement dans ces méthodes</li>
                    <li>Relier toutes les routes aux méthodes du controller</li>
                </ul>
            </div>
        </div>

        <h2 id="exo8bis">Exercice 8.5 : Resource Controllers </h2>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Exercice 8.5</h3>
            </div>
            <div class="panel-body">
                <p>A l'aide d'une ligne de commande, crééz un PostController
                    qui sera prérempli de toutes les méthodes dont on aura besoin.</p>
                <ul>
                    <li>index, create, store, show, edit, update, destroy</li>
                    <li>créez une route resource qui liera en une ligne vos routes /posts avec ce controller.</li>
                    <li>vous pouvez supprimer le TestController.</li>
                </ul>
            </div>
        </div>

        <h2 id="exo9">Exercice 9 : Formulaires</h2>

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

        <h2 id="exo10">Exercice 10 : Validations</h2>

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

        <h2 id="exo11">Exercice 11 : Le reste de notre CRUD </h2>

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

        <h2 id="exo12">Exercice 12 : Relations</h2>

        <div class="panel panel-primary">
            <div class="panel-heading">
                <h3 class="panel-title">Exercice 12</h3>
            </div>
            <div class="panel-body">
                <ul>
                    <li>Faire make:auth</li>
                    <li>Mettre en place la relation entre User et Post</li>
                    <li>Update les migrations posts pour prendre un user_id</li>
                    <li>Sur show.blade.php, afficher l'auteur de l'article</li>
                    <li>Créez une route de profil pour l'utilisateur affichant son nom ainsi que la liste de tous ses articles</li>
                </ul>
            </div>
        </div>

        <h2 id="exo13">Exercice 13 : Système de commentaire </h2>

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

        <h2 id="exo14">Exercice 14 : Middlewares </h2>

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

        <h2 id="exo15">Exercice 15 : </h2>

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

        <h2 id="exo17">Exercice 17 : </h2>

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

        <h2 id="exo18">Exercice 18 : </h2>

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
                </ul>
            </div>

            <?php include('includes/sidebar.php'); ?>

        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->

<?php include('includes/footer.php'); ?>

