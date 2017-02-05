<?php include('includes/header.php'); ?>

<div class="blog-header">
    <h1 class="blog-title">Laravel - Partie 4</h1>
    <p class="lead blog-description">Création des formulaires de publication et d'édition</p>
</div>

<div class="row">

    <div class="col-sm-8 blog-main">
        <!-- Formulaires -->
        <div id="exo8">
            <h2>Exercice 8 : Formulaire</h2>

            <p>Vous allez maintenant créer un formulaire de publication d'articles !</p>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 8</h3>
                </div>
                <div class="panel-body">

                    <ul>
                        <li>Créez un formulaire pour publier des articles dans le fichier <strong>/articles/create.blade.php</strong>
                        </li>

                        <br>

                        <li>Ce formulaire devra comprendre les champs nécessaires à la publication d'un article.
                            Veillez à ce que les name de ces inputs correspondent aux noms que vous leur avez donné en
                            BDD pour simplifier la tâche.
                            <ul>
                                <li>Le formulaire doit cibler la méthode store() de votre ArticleController</li>
                                <li>Ajoutez bien le <strong>csrf_field()</strong> pour vous protéger des attaques CSRF.
                                </li>
                            </ul>
                        </li>

                        <br>

                        <li>Dans la méthode <strong>store()</strong> de l'ArticleController :</li>
                        <ul>
                            <li>Vérifiez que les données sont bien passées à la route en faisant un dd (dump & die) de
                                $request
                            </li>

                            <li>Créez un nouvel objet Article dans lequel vous stockerez les champs retournés par
                                $request.
                            </li>

                            <li>N'oubliez pas de transmettre l'<strong>user_id</strong> avant d'envoyer les données en
                                BDD !
                            </li>

                            <li>Pour finir, faites une redirection vers la liste des articles.</li>
                        </ul>

                    </ul>
                </div>
            </div>
        </div>

        <!-- Validations -->
        <div id="exo9">
            <h2>Exercice 9 : Validations</h2>

            <p>Les validations vont vous permettre de définir si vos champs sont obligatoires, s'ils doivent contenir un
                minimum ou maximum de caractères etc.</p>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 9</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Ajoutez des règles de validation à votre formulaire dans la méthode <strong>store()</strong>
                            de votre
                            ArticleController
                        </li>
                        <ul>
                            <li>Le titre doit être un champ requis</li>
                            <li>Le contenu doit être un champ requis</li>
                            <li>Paramétrez également les erreurs liées à ces validations</li>
                        </ul>
                        <li>Créez un nouveau fichier <strong>messages/errors.blade.php</strong> dans lequel vous
                            afficherez les erreurs
                            trouvées. Ce fichier pourra ensuite être inclus dans vos autres vues via
                            <strong>@include()</strong>
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Fin du CRUD -->
        <div id="exo10">
            <h2>Exercice 10 : Le reste de notre CRUD </h2>

            <p>Il ne vous reste plus qu'à finaliser votre CRUD en faisant la partie d'édition et de suppression
                d'articles.
            </p>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 10</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Reprenez le code du formulaire de create.blade.php afin de faire celui d'édition dans
                            articles/edit.blade.php.
                        </li>

                        <ul>
                            <li>Récupérez les anciens champs à l'aide de la fonction <strong>old()</strong> dans les
                                values des inputs
                            </li>
                            <li>Ce formulaire devra cibler la méthode update() de l'ArticleController</li>
                            <li>Pensez également à reprendre les validations mises en place dans store().</li>
                        </ul>

                        <li>Faites un autre formulaire qui contiendra un simple bouton et qui fera une requête
                            DELETE vers la méthode destroy() de l'ArticleController.
                        </li>

                        <br>

                        <li>Dans la méthode <strong>destroy()</strong> de votre controller, il ne vous reste plus qu'à
                            récupérer l'article lié à l'id passé
                            et de le supprimer via delete().
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Message de succès -->
        <div id="exo10bis">
            <h2>Exercice 10.1 : Message de succès </h2>

            <p>Maintenant que vous pouvez ajouter / modifier / supprimer un article, il serait bien d'afficher un
                message
                de confirmation à l'utilisateur qui effectue l'action.</p>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 10.1</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Définir des messages de succès dans les méthodes store(), update() et destroy().
                        </li>

                        <br>

                        <li>Retournez ces messages dans un nouveau fichier messages/success.blade.php et utilisez
                            include() pour l'afficher sur les vues concernées.
                        </li>
                    </ul>
                </div>
            </div>
        </div>

        <!-- Middlewares -->
        <div id="exo11">
            <h2>Exercice 11 : Middlewares </h2>

            <p>Les middlewares vont vous permettre d'intéragir au chargement d'une route.<br>
                Cela peut permettre notamment de vérifier qu'un utilisateur possède bien les droits nécessaires pour
                accéder à un certain contenu</p>

            <p>Laravel propose par défaut un middleware auth qui permet de retourner si l'utilisateur est connecté ou
                non.</p>

            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">Exercice 11</h3>
                </div>
                <div class="panel-body">
                    <ul>
                        <li>Appliquez le middleware auth sur les méthodes update(), edit(), create(), store() et delete() pour limiter
                            la publication, l'édition et la suppression d'articles aux utilisateurs connectés
                            uniquement.
                        </li>

                        <br>

                        <li>Créez un nouveau Middleware isadmin pour empêcher l'accès à certaines pages uniquement aux
                            utilisateurs administrateurs
                        </li>
                        <ul>
                            <li>Cela implique de faire une nouvelle migration pour modifier la table users et rajouter
                                un champ isAdmin qui sera un boolean (false par défaut)
                            </li>

                            <br>

                            <li>Ce champ permettra également de faire apparaître certains éléments uniquement aux
                                administrateurs (ex : bouton de suppression, de modification...)
                            </li>
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
                    <li><a href="#exo8">Exercice 8 : Formulaires</a></li>
                    <li><a href="#exo9">Exercice 9 : Validations</a></li>
                    <li><a href="#exo10">Exercice 10 : CRUD</a></li>
                    <li><a href="#exo10bis">Exercice 10 : Message de succès</a></li>
                    <li><a href="#exo11">Exercice 11 : Middlewares</a></li>
                </ul>
            </div>

            <?php include('includes/sidebar.php'); ?>

        </div>
    </div><!-- /.blog-sidebar -->

</div><!-- /.row -->


