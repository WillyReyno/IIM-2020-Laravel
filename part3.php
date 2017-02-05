<?php include('includes/header.php'); ?>

<div class="blog-header">
    <h1 class="blog-title">Laravel - Partie 3</h1>
    <p class="lead blog-description">Récupérez les données et les afficher</p>
</div>

<div class="row">

    <div class="col-sm-8 blog-main">

        <!-- Query Builder -->
        <!--<div id="exo7">
            <h2>Exercice 7 : Query Builder</h2>

            <p>Le <strong>Query Builder</strong> va nous permettre de formuler des requêtes afin d'intéragir avec
                la base de données.
                Le Query Builder a pour avantage de simplifier la syntaxe d'une requête, et de la rendre plus simple à
                lire.<br>
                Par exemple, cette requête va nous permettre de récupérer l'article correspondant à l'id 12. :</p>
            <pre>
            <code class="language-php">
                DB::table('articles')->where('id', 12);
            </code>
        </pre>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 7</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Dans la méthode create() de votre ArticleController,

                            Créez une route <strong>/articles/create</strong> qui aura pour but d'insérer un nouvel article
                            dans la base de données à l'aide du <strong>Query Builder</strong>.
                        </li>
                        <ul>
                            <li>Cette route devra être liée à un template
                                <strong>resources/views/articles/create.blade.php</strong></li>
                        </ul>
                        <br>

                        <li>Toujours à l'aide du Query Builder, récupérez la liste de tous les articles en base de
                            données
                            et affichez-les sur une route nommée <strong>/articles</strong>.
                        </li>
                        <ul>
                            <li>Cette route devra être liée à un template
                                <strong>resources/views/articles/index.blade.php</strong></li>
                        </ul>
                        <br>

                        <li>Créez une route <strong>/article/id</strong> qui prendra en paramètre l'id d'un article et qui
                            affichera l'article en question.
                        </li>
                        <ul>
                            <li>Cette route devra être liée à un template
                                <strong>resources/views/articles/show.blade.php</strong></li>
                        </ul>
                        <br>

                        <li>Créez une route <strong>/article/id/edit</strong> qui prendra en paramètre l'id d'un article
                            et
                            qui modifiera le titre et le contenu de l'article en question.
                        </li>
                        <ul>
                            <li>Cette route devra être liée à un template
                                <strong>resources/views/articles/edit.blade.php</strong></li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>-->

        <!-- Models & Eloquent -->
        <div id="exo7">
            <h2>Exercice 7 : Models et Eloquent</h2>

            <p>Vous allez maintenant devoir récupérer vos articles depuis votre base de données et les afficher dans vos
                vues.<br>
                Pour ce faire, vous utiliserez l'ORM (Object Relational Mapping) de Laravel : Eloquent.</p>
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 7</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Créez un model <strong>Article</strong> et renseignez les champs <strong>$fillable</strong>
                            dans un array protected.
                        </li>

                        <br>

                        <li>Maintenant, utilisez votre model afin de récupérer vos données :</li>

                        <ul>
                            <li>Récupérez la liste de vos articles complète dans la méthode <strong>index()</strong> de
                                votre controller et
                                affichez-la dans la vue articles/index.blade.php
                            </li>

                            <br>

                            <li>Récupérez l'article lié à l'<strong>id</strong> passé en paramètre de la méthode
                                <strong>show()</strong> et affichez-le dans la vue show.blade.php
                            </li>

                            <br>

                            <li>
                                Récupérez l'article lié à l'<strong>id</strong> passé en paramètre de la méthode
                                <strong>edit()</strong> et passez-le à la vue edit.blade.php (sans l'afficher)
                            </li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div id="exo7bis">
            <h2>Exercice 7.1 : Pagination</h2>

            <p>Laravel permet de créer une pagination de manière très simple, un simple paramètre à ajouter à votre
                requête Eloquent !</p>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 7.1</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Mettez en place une pagination sur votre page articles/index.blade.php</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Relations -->
        <div id="exo7ter">
            <h2>Exercice 7.2 : Relations</h2>

            <p>Les relations vont permettre de définir les dépendances qu'auront nos objets.

                Par exemple, un utilisateur peut avoir publié plusieurs articles, mais un article ne peut avoir qu'un
                seul
                auteur !</p>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 7.2</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Mettez en place une relation OneToMany entre vos models User et Article</li>

                        <br>

                        <li>Sur <strong>articles/show.blade.php</strong>, affichez l'auteur de l'article.</li>

                        <br>

                        <li>Sur la route /user créez plus tôt, affichez la liste des articles qu'il a publié.</li>
                    </ul>
                </div>
            </div>
        </div>

        <a href="part4.php" class="pull-right btn btn-info next-step">Partie 4</a>

    </div><!-- /.blog-main -->

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div data-spy="affix">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Menu</h4>
                <ul>
                    <li><a href="#exo7">Exercice 7 : Models et Eloquent</a></li>
                    <li><a href="#exo7bis">Exercice 7.1 : Pagination</a></li>
                    <li><a href="#exo7ter">Exercice 7.2 : Relations</a></li>
                </ul>
            </div>

            <?php include('includes/sidebar.php'); ?>

        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->


