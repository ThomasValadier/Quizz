<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Quizz</title>
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <link rel="stylesheet" href="../assets/stylesheets/stylesheets.css">
</head>
<body>
<header>
    <nav class="navbar navbar-default">
        <div class="container-fluid">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse"
                        data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <p class="navbar-brand">Wik'Ynov</p>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Utilisateurs <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Messagerie</a></li>
                            <li><a href="">Droit utilisateur</a></li>
                        </ul>
                    </li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true"
                           aria-expanded="false">Articles <span class="caret"></span></a>
                        <ul class="dropdown-menu">
                            <li><a href="">Ajouter article</a></li>
                            <li><a href="">Ajouter catégorie</a></li>
                            <li><a href="">Administrer</a></li>
                            <li><a href="">Vu publique</a></li>
                        </ul>
                    </li>
                </ul>
                <form class="navbar-form navbar-left" action="" role="search">
                    <div class="form-group">
                        <input type="text" class="form-control" name="rechercher" placeholder="Rechercher">
                    </div>
                    <button type="submit" name="gorech" class="btn btn-default">
                        <div class="glyphicon glyphicon-search"></div>
                    </button>
                </form>
                <ul class="nav navbar-nav navbar-right">
                    <!-- Trigger the modal with a button -->
                    <button type="button" id="boutConIns" class="btn btn-info btn-lg" data-toggle="modal" data-target="#connect">
                        Connexion
                    </button>





                </ul>
            </div><!-- /.navbar-collapse -->
        </div><!-- /.container-fluid -->
    </nav>
</header>

