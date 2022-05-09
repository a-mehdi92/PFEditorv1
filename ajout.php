<?php
$dbconn = pg_connect('host=web-pgsql port=5432 dbname=foobar user=foobar password=foobar')
    or die('Could not connect');
?>


<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Shop Homepage - Start Bootstrap Template</title>
        <!-- Favicon-->
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Bootstrap icons-->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="css/styles.css" rel="stylesheet" />
    </head>
    <body>
        
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.php">PF Editor</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="ajout.php">Ajouter</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="recherche.php">Rechercher</a></li>
                        <li class="nav-item"><a class="nav-link active" aria-current="page" href="index.php">Supprimer</a></li>
                    </ul>
                    
                </div>
            </div>
        </nav>
        <!-- Header-->
        <header class="bg-dark py-5">
            <div class="container px-4 px-lg-5 my-5">
                <div class="text-center text-white">
                    <h1 class="display-4 fw-bolder">PF Editor</h1>
                    <p class="lead fw-normal text-white-50 mb-0">Ma librairie en ligne</p>
                </div>
            </div>
        </header>
        <!-- Section-->
        <section class="py-5">
            <div class="container px-4 px-lg-5 mt-5">
                <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
                <?php     
$result = pg_query($dbconn, "select * from librairie");
while ($row = pg_fetch_row($result)) {  }
pg_close($dbconn);
?>
                <form>
                    <div class="col-mb-5 col-form-label">
                        <label>ISBN:</label>
                        <input class="form-control" id="ISBN" placeholder="Entrer l'ISBN du Livre">
                    </div>
                    <div class="col-mb-5 col-form-label">
                        <label>Titre:</label>
                        <input class="form-control" id="titre" placeholder="Titre du livre">
                    </div>
                    <div class="col-mb-5 col-form-label">
                        <label>Auteur:</label>
                        <input class="form-control" id="auteur" placeholder="Auteur du livre">
                        </div>
                    <div class="col-mb-5 col-form-label">
                            <label>Année:</label>
                            <input class="form-control" id="annee" placeholder="Année du livre">
                    </div>  
                    <div class="col-mb-5 col-form-label">
                        <label>Image:</label>
                        <input class="form-control" id="lien" placeholder="Lien de la couverture du livre">
                    </div>                      
                    </br>
                    <button type="submit" class="btn btn-primary">Ajouter</button>
                </form>

                </div>
            </div>
        </section>
        <!-- Footer-->
        <footer class="py-5 bg-dark">
            <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Remema 2022</p></div>
        </footer>
        <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script>
    </body>
</html>
