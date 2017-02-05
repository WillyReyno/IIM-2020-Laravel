<?php include('includes/header.php'); ?>

<div class="blog-header">
    <h1 class="blog-title">Laravel - Partie 2</h1>
    <p class="lead blog-description">Préparation des controllers et de la base de données</p>
</div>

<div class="row">

    <div class="col-sm-8 blog-main">

        <!-- Resource Controllers -->
        <div id="exo5">
            <h2>Exercice 5 : Resource Controllers <a
                    href="https://laravel.com/docs/5.4/controllers#resource-controllers" target="_blank"><i
                        class="fa fa-book"></i></a></h2>

            <p>Vous allez maintenant créer une controller qui permettra de lier les routes avec les vues tout en
                passant des données si cela est nécessaire.</p>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 5</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>À l'aide d'une ligne de commande, créez un <strong>ArticleController</strong>
                            qui sera pré-rempli avec les méthodes : <strong>index()</strong>, <strong>create()</strong>,
                            <strong>store()</strong>,
                            <strong>show()</strong>, <strong>edit()</strong>, <strong>update()</strong> et
                            <strong>destroy()</strong>.
                        </li>

                        <br>

                        <li>Reliez les méthodes <strong>index()</strong>, <strong>create()</strong>,
                            <strong>show()</strong>
                            et
                            <strong>edit()</strong> aux vues que vous avez créées dans les exercices précédents (pour le
                            moment, les méthodes store(), update() et destroy() doivent rester vide).
                        </li>

                        <br>

                        <li>Créez une route resource <strong>/article</strong> qui permettra de faire la liaison avec
                            votre
                            ArticleController.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Migrations -->
        <div id="exo6">
            <h2>Exercice 6 : Les migrations <a href="https://laravel.com/docs/5.4/migrations" target="_blank"><i
                        class="fa fa-book"></i></a></h2>


            <div class="alert alert-warning">
                Pour les <strong>utilisateurs de Mac</strong>, pensez à renseigner l'unix socket.
                dans le fichier <strong>.env</strong> et <strong>config/database.php</strong> avant de commencer
                l'exercice
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

            <div class="alert alert-warning">
                Si vous possédez une version de MySQL inférieure à la 5.77, vous obtiendrez une erreur lors de vos
                migrations.

                Pour la corriger, il suffit d'ajouter cette ligne dans la méthode boot() du fichier
                <strong>app/Providers/AppServiceProvider.php</strong> <br>(et n'oubliez pas d'importer la class Schema
                (alt + click sur
                Schema))
            </div>

            <pre>
            <code class="language-php">
                public function boot() {
                    Schema::defaultStringLength(191);
                }
            </code>
        </pre>


            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 6</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Créez une nouvelle migration pour la table <strong>articles</strong> qui contiendra nos
                            articles.
                        </li>

                        <br>

                        <li>Dans le fichier de migration créé, ajoutez les champs suivants :
                            <ul>
                                <li><strong>title</strong>, qui contiendra le titre de nos articles.</li>
                                <li><strong>content</strong>, qui contiendra le contenu de nos articles.</li>
                                <li><strong>user_id</strong>, qui contiendra l'id de l'auteur de l'article.</li>
                                <em>(Choisissez bien les types de colonnes que vous utiliserez)</em>
                                </li>

                            </ul>

                            <br>

                        <li>Vous pouvez désormais lancer vos migrations et vérifier en base de données si tout
                            est OK. <br> Le cas échéant, faites un rollback ou un reset puis recommencez !
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Clés Etrangères -->
        <div id="exo6bis">
            <h2>Exercice 6.1 : Clés étrangères <a href="https://laravel.com/docs/5.4/migrations#foreign-key-constraints"
                                                  target="_blank"><i class="fa fa-book"></i></a></h2>

            <p>Tout comme en SQL, les clés étrangères permettent de lier deux tables entre elles grâce à un champ
                commun.</p>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 6.1</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Créez une nouvelle migration dans laquelle vous renseignerez vos clés étrangères</li>

                        <br>

                        <li>Dans cette migration, définissez la liaison entre la table <strong>users</strong> et la
                            table
                            <strong>articles</strong>.
                        </li>

                        <br>

                        <li>Lancez la migration pour que la modification soit prise en compte.</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Seeders & Factories -->
        <div id="exo6ter">
            <h2>Exercice 6.2 : Seeders & Factories <a href="https://laravel.com/docs/5.4/seeding#using-model-factories"
                                                      target="_blank"><i class="fa fa-book"></i></a></h2>

            <p>Vous allez maintenant devoir remplir vos tables avec du contenu, et c'est à cela que servent les Seeders
                et
                les Model Factories.</p>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 6.2</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>À l'aide de la ligne de commande, créez un model <strong>Article</strong> et renseignez les
                            champs <strong>$fillable</strong> dans un array protected.
                        </li>
                        <br>
                        <li>Dans le fichier database/factories/ModelFactory.php, dupliquez le code existant et
                            adaptez-le à votre table articles.
                        </li>
                        <br>

                        <li>Les types de faux contenus proposés par le package Faker sont disponibles sur
                            <a href="https://github.com/fzaninotto/Faker">
                                le repository du package</a>.
                        </li>

                        <br>

                        <li>Générez le fichier UsersTableSeeder, puis ArticlesTableSeeder en ligne de commande.</li>

                        <br>

                        <li>Dans votre fichier ArticlesTableSeeder faites appel à la fonction <strong>factory()</strong>
                            en lui passant en paramètre le namespace de votre modèle ainsi que le nombre d'itérations
                            voulues.
                        </li>

                        <br>

                        <li>Appelez ensuite la class ArticlesTableSeeder dans votre DatabaseSeeder.php</li>

                        <br>

                        <li>Lancez les seeders depuis votre ligne de commande !</li>
                    </ul>
                </div>
            </div>
        </div>

        <div id="auth">
            <h2>Authentification</h2>

            <p>Maintenant que vos tables ont été migrées et seedées, vous allez pouvoir vous inscrire sur votre site
                à l'aide du système d'authentification créé dans l'exercice 4.1 !</p>

            <p>Une fois connecté.e, vous aurez accès à de nouvelles fonctions vous permettant de tester si oui ou non
                votre utilisateur est connecté.</p>

            <pre>
                <code class="language-php">
                    // Permet de vérifier si l'utilisateur est connecté
                    Auth::check()

                    // Permet de vérifier si l'utilisateur est invité
                    Auth::guest()

                    // Toutes les informations de l'utilisateur connecté sont stockées dans :
                    Auth::user()

                    // Exemple, pour récupérer le nom de l'utilisateur :
                    Auth::user()->name
                </code>
            </pre>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Authentification</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Inscrivez-vous sur votre site via le formulaire prévu à cet effet</li>

                        <br>

                        <li>Dans une de vos vues, ajoutez un message qui ne sera visible que par un utilisateur
                            connecté.
                        </li>

                        <br>

                        <li>Créez une page profil <strong>/user</strong> de l'utilisateur connecté où seront listés son
                            nom, son e-mail et sa
                            date d'inscription.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <a href="part3.php" class="pull-right btn btn-info next-step">Partie 3</a>

    </div><!-- /.blog-main -->

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div data-spy="affix">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Menu</h4>
                <ul>
                    <li><a href="#exo5">Exercice 5 : Resource Controller</a></li>
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


