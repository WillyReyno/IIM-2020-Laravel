<?php include('includes/header.php'); ?>

<div class="blog-header">
    <h1 class="blog-title">Laravel - Partie 4</h1>
    <p class="lead blog-description">...</p>
</div>

<div class="row">

    <div class="col-sm-8 blog-main">
        <!-- Formulaires -->
        <div id="exo9">
            <h2>Exercice 9 : Formulaire</h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 9</h3>
                </div>
                <div class="panel-body">
                    <p>Créez un formulaire d'ajout pour publier des articles dans le fichier /posts/create.blade.php</p>
                    <ul>
                        <li>Ce formulaire devra comprendre un champ titre et un champ contenu, veillez à ce que les name
                            de ces inputs correspondent aux noms que vous leur avez donné en BDD pour simplifier la
                            tâche.
                        </li>
                        <li>Le formulaire doit rediriger vers la méthode store de votre PostController</li>
                        <li>Ajoutez bien le csrf_field</li>
                        <li>Renseignez les fillable ou guarded dans le model</li>
                        <li>Vérifiez que les données sont bien passées à la route en faisant un dump de $request</li>
                        <li>Dans la méthode store du controller, créez un nouvel objet Post dans lequel vous stockerez
                            les $request->input();
                        </li>
                        <li>Pensez également à stocker l'user_id dans cette méthode !</li>
                        <li>Pour finir, faites une redirection vers la liste des articles.</li>
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
                        <li>Reprenez la forme du formulaire de création afin de faire celui d'édition dans
                            posts/edit.blade.php.
                        </li>
                        <li>Récupérez les anciens champs à l'aide de la fonction old()</li>
                        <li>Ce formulaire sera lié à la méthode update() du PostsController</li>
                        <li>Pensez également à reprendre les validations pour la méthode update()</li>
                        <li>Faire la page show</li> <!-- TODO faire ça plus tôt -->
                        <li>Faire un bouton de suppression d'article (qui sera un formulaire utilisant la méthode
                            DELETE)
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Message de succès -->
        <div id="exo11bis">
            <h2>Exercice 11.1 : Message de succès </h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 11.1</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Définir des messages de succès à l'utilisateur lorsqu'il créé/edite/supprime un article dans
                            le Controller
                        </li>
                        <li>Affichez les messages de succès à l'aide de Session::get('success')</li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Middlewares -->
        <div id="exo12">
            <h2>Exercice 12 : Middlewares </h2>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 12</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Appliquez le middleware auth sur les méthodes update/edit/create/store/delete Pour limiter
                            la publication, l'édition et la suppression aux utilisateurs connectés
                        </li>
                        <li>Créez un nouveau Middleware isadmin pour empêcher l'accès à certaines pages uniquement aux
                            utilisateurs administrateurs
                        </li>
                        <ul>
                            <li>Cela implique de faire une nouvelle migration pour modifier la table users et rajouter
                                un champs isAdmin qui sera un boolean (false par défaut)
                            </li>
                            <li>Ce champs nous permettra également de faire apparaître certains éléments uniquement aux admin (ex : bouton de suppression, de modification)</li>
                        </ul>
                    </ul>
                </div>
            </div>
        </div>
    </div><!-- /.blog-main -->

    <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
        <div data-spy="affix">
            <div class="sidebar-module sidebar-module-inset">
                <h4>Menu</h4>
                <ul>
                    <li><a href="#exo9">Exercice 9 : Formulaires</a></li>
                    <li><a href="#exo10">Exercice 10 : Validations</a></li>
                    <li><a href="#exo11">Exercice 11 : CRUD</a></li>
                    <li><a href="#exo12">Exercice 12 : Système de Commentaire</a></li>
                </ul>
            </div>

            <?php include('includes/sidebar.php'); ?>

        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->


