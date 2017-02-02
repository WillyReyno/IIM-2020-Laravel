<?php include('includes/header.php'); ?>

<div class="blog-header">
    <h1 class="blog-title">Laravel - Partie 3</h1>
    <p class="lead blog-description">...</p>
</div>

<div class="row">

    <div class="col-sm-8 blog-main">

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
                        <li>Maintenant, utilisez votre model afin de récupérer vos données (plus besoin du Query
                            Builder)
                        </li>
                        <li>Affichez le résultat dans vos vues (index</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <div id="exo8bis">
            <h2>Exercice 8.1 : Pagination</h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 8.1</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Mettez en place une pagination sur votre page posts/index.blade.php</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Relations -->
        <div id="exo8ter">
            <h2>Exercice 8.2 : Relations</h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 8.2</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Mettre en place la relation entre User et Post</li>
                        <li>Sur show.blade.php, afficher l'auteur de l'article</li>
                        <li>Créez une route de profil pour l'utilisateur affichant son nom ainsi que la liste de tous
                            ses articles
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <a href="part4.php" class="pull-right btn btn-info">Passer à la suite</a>

    </div><!-- /.blog-main -->

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div data-spy="affix">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Menu</h4>
                <ul>
                    <li><a href="#exo7">Exercice 7 : Query Builder</a></li>
                    <li><a href="#exo8">Exercice 8 : Models et Eloquent</a></li>
                    <li><a href="#exo8bis">Exercice 8.1 : Pagination</a></li>
                    <li><a href="#exo8ter">Exercice 8.2 : Relations</a></li>
                </ul>
            </div>

            <?php include('includes/sidebar.php'); ?>

        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->


