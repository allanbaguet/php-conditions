<?php
// la variable est = à null car on ne l'a connait pas en avance
$magnitude = 10;
// L’instruction switch va nous permettre d’exécuter un code en fonction
                //  de la valeur d’une variable. On va pouvoir gérer autant de situations ou de « cas » que l’on souhaite.
                switch ($magnitude) {
                    case '1':
                        $result = 'Micro-séisme impossible à ressentir.';
                        break;
                    case '2':
                        $result = 'Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.';
                        break;
                    case '3':
                        $result = 'Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.';
                        break;
                    case '4':
                        $result = 'Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.';
                        break;
                    case '5':
                        $result = 'Séisme capable d\'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.';
                        break;
                    case '6':
                        $result = 'Fort séisme capable d\'engendrer des destructions majeures sur une large distance (180 km) autour de l\'épicentre.';
                        break;
                    case '7':
                        $result = 'Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.';
                        break;
                    case '8':
                        $result = 'Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.';
                        break;
                    case '9':
                        $result = 'Séisme capable de tout détruire sur une très vaste zone.';
                        break;
                    default : 
                        $result = 'Valeur inconnue';
                }
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <link rel="stylesheet" href="/exercice-2/public/assets/css/style.css">
    <title>Exercice 4</title>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-body-secondary d-flex">
        <div class="container-fluid">
            <a class="navbar-brand fs-2" href="#">Les conditions</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
                <ul class="navbar-nav fs-4">
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-1/exercice1.php">Exercice 1</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-2/exercice2.php">Exercice 2</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-3/index.php">Exercice 3</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="/exercice-4/index.php">Exercice 4</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-5/index.php">Exercice 5</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-6/index.php">Exercice 6</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-7/index.php">Exercice 7</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/exercice-8/index.php">Exercice 8</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    </header>
    <div class="container-fluid">
        <div class="row">
            <div class="col">
                <h1 class="text-center p-5">Exercice 4</h1>
                <p class="text-center fs-4">L'échelle de Richter est un outil de mesure qui permet de définir la magnitude de moment d'un tremblement de terre. Cette échelle va de 1 à 9.
                    Créer une variable <strong>magnitude</strong>. Selon la valeur de <strong>magnitude</strong>, afficher la phrase correspondante.</p>
                <table border="1" class="table">
                    <thead>
                        <tr>
                            <th scope="col">Magnitude</th>
                            <th scope="col">Phrase</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Micro-séisme impossible à ressentir.</td>
                        </tr>
                        <tr>
                            <th scope="row">2</th>
                            <td>Micro-séisme impossible à ressentir mais enregistrable par les sismomètres.</td>
                        </tr>
                        <tr>
                            <th scope="row">3</th>
                            <td>Ne cause pas de dégats mais commence à pouvoir être légèrement ressenti.</td>
                        </tr>
                        <tr>
                            <th scope="row">4</th>
                            <td>Séisme capable de faire bouger des objets mais ne causant généralement pas de dégats.</td>
                        </tr>
                        <tr>
                            <th scope="row">5</th>
                            <td> Séisme capable d'engendrer des dégats importants sur de vieux bâtiments ou bien des bâtiments présentants des défauts de construction. Peu de dégats sur des bâtiments modernes.</td>
                        </tr>
                        <tr>
                            <th scope="row">6</th>
                            <td>Fort séisme capable d'engendrer des destructions majeures sur une large distance (180 km) autour de l'épicentre.</td>
                        </tr>
                        <tr>
                            <th scope="row">7</th>
                            <td>Séisme capable de destructions majeures à modérées sur une très large zone en fonction de la distance.</td>
                        </tr>
                        <tr>
                            <th scope="row">8</th>
                            <td>Séisme capable de destructions majeures sur une très large zone de plusieurs centaines de kilomètres.</td>
                        </tr>
                        <tr>
                            <th scope="row">9</th>
                            <td>Séisme capable de tout détruire sur une très vaste zone.</td>
                        </tr>
                    </tbody>
                </table>
                <p class="text-center fs-4">Gérer tous les cas. <br>
                    Utiliser autre chose que des if else.</p>
            </div>
        </div>
    </div>
    <hr class="border border-4 border-dark">
    <main>
        <div>
            <p>
                <?= $result ?>
            </p>
        </div>
    </main>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>

</body>

</html>