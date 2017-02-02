<?php include('includes/header.php'); ?>

<div class="blog-header">
    <h1 class="blog-title">Laravel - Partie 2</h1>
    <p class="lead blog-description">...</p>
</div>

<div class="row">

    <div class="col-sm-8 blog-main">

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

        <!-- Authentification -->
        <div id="auth">
            <h2>Authentification</h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Authentification</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Faire make:auth (forcément après les migrations d'users)</li>
                        <li>S'inscrire sur son site</li>
                        <!-- TODO parler des auth:check()) -->
                        <li>Afficher quelque chose uniquement lorsque l'on est connecté</li>
                    </ul>
                </div>
            </div>
        </div>

        <a href="part3.php" class="pull-right btn btn-info">Passer à la suite</a>

    </div><!-- /.blog-main -->

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div data-spy="affix">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Menu</h4>
                <ul>
                    <li><a href="#exo5">Exercice 5 : Controllers</a></li>
                    <li><a href="#exo5bis">Exercice 5.1 : Resource Controllers</a></li>
                    <li><a href="#exo6">Exercice 6 : Migrations</a></li>
                    <li><a href="#exo6bis">Exercice 6.1 : Clés étrangères</a></li>
                    <li><a href="#exo6ter">Exercice 6.2 : Seeders</a></li>
                    <li><a href="#auth">Authentification</a></li>
                </ul>
            </div>

            <?php include('includes/sidebar.php'); ?>

        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->


