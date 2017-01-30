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
                    <li>Créez un fichier layout.blade.php qui contiendra le HTML ci-dessus.
                    <li>Dans ce fichier layout :
                        <ul>
                            <li>Remplacez le title par @yield qui permettra de le définir selon la page où l'on se trouve.</li>
                            <li>Remplacez le commentaire par un @yield qui définira où sera écrit le contenu de votre page.</li>
                        </ul></li>
                    <li>Créez deux nouveaux fichiers blade qui étendront de layout.blade.php et remplissez-y les section du titre et du contenu.</li>
                </ul>
            </div>
        </div>

        <h2 id="exo5">Exercice 5 : Query Builder</h2>

        <a href="/day-2" class="pull-right btn btn-info">Passer à la suite</a>

    </div><!-- /.blog-main -->


    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div data-spy="affix">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Menu</h4>
                <ul>
                    <li><a href="#exo1">Exercice 1 : Routes</a></li>
                    <li><a href="#exo2">Exercice 2 : Vues</a></li>
                    <li><a href="#exo3">Exercice 3 : Blade</a></li>
                    <li><a href="#exo4">Exercice 4 : Blade Templating</a></li>
                    <li><a href="#exo5">Exercice 5 : Query Builder</a></li>
                </ul>
            </div>

            <?php include('includes/sidebar.php'); ?>

        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->

<?php include('includes/footer.php'); ?>

