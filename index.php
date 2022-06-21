<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/grid.css">
    <link rel="stylesheet" href="assets/css/rolecard.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rapport de stage</title>
</head>
<body>
    <header class="header"></header>
    <?php include('assets/includes/navbar.php') ?>




<div class="gallery">
    <div class="title">
        <h1>Les Rôles</h1>
    </div>
        <div class="manager">
            <div class="role">
                <div class="card">
                    <div class="card-img"><img src="assets/img/person_FILL0_wght400_GRAD0_opsz48.svg" alt="user"></div>
                    <p>Manager</p>
                        <div class="card-info">
                            <p class="text-body">
                                <ul>
                                    <li>Carrière : ne donne pas d'ordre, tire les gens vers le haut, cherche les objectifs intéressants avec les développeurs</li>
                                    <li>Relation : pour une bonne ambiance. (changement d’équipe, de type de projet).</li>
                                    <li>regarde les projets et fait la road map pour les enchaînement des projets (décide la priorisation des projets), planifie les projets avec une vision global du temps nécessaire pour les projets.</li>
                                    <li>facilite le travaille de tout les jours en facilitant la communication entre les teams</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <div class="productmanager">
        <div class="manager">
            <div class="role">
                <div class="card">
                    <div class="card-img"><img src="assets/img/person_FILL0_wght400_GRAD0_opsz48.svg" alt="user"></div>
                    <p>Designer</p>
                        <div class="card-info">
                            <p class="text-body">
                                <ul>
                                    <li>Fait des prototypes de que demande les praticiens a travers les PM.</li>
                                    <li>Ils font le liens entre les développeurs et les praticiens.</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="designer">
        <div class="role">
                <div class="card">
                    <div class="card-img"><img src="assets/img/person_FILL0_wght400_GRAD0_opsz48.svg" alt="user"></div>
                    <p>Product Manager (PM)</p>
                        <div class="card-info">
                            <p class="text-body">
                                <ul>
                                    <li>Tout d’abord, il identifie le problème au près des médecins puis identifie les besoins et les priorise dans une ROAD MAP. Ils collectent les infos par plusieurs moyens : Comme Community, les tracker event, et les appel direct des médecins</li>
                                    <li>Dans une deuxième partie, ils cherchent les solutions aux problèmes en :</li>
                                    <ul>
                                        <li>Faisant des maquettes sur Figma avec des designer.</li>
                                        <li>Et en discutant avec les devs.</li>
                                        <li>Ajustement des composants</li>
                                        <li>Et travaillent avec les développeurs</li>
                                    </ul>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="principalengeneer">
        <div class="role">
                <div class="card">
                    <div class="card-img"><img src="assets/img/person_FILL0_wght400_GRAD0_opsz48.svg" alt="user"></div>
                    <p>Principal engineer (Team architecte)</p>
                        <div class="card-info">
                            <p class="text-body">
                                <ul>
                                    <li>Essaye de garder une coérance, une simplicité au sein de la tech</li>
                                    <li>répond aux questions des personnes en difficultées</li>
                                    <li>et aide les takes olders à prendre les bonnes décitions</li>
                                </ul>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="softwareengenir">
        <div class="role">
                <div class="card">
                    <div class="card-img"><img src="assets/img/person_FILL0_wght400_GRAD0_opsz48.svg" alt="user"></div>
                        <div class="card-info">
                            <p class="text-body">Lorem ipsum dolor sit amet consectetur adipisicing elit. Corrupti repellat, consequuntur doloribus voluptate esse iure?</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
</div>

<script>
    function myFunction() {
        var x = document.getElementById("myTopnav");
        if (x.className === "topnav") {
            x.className += " responsive";
        } else {
            x.className = "topnav";
        }
    }
</script>
</body>
</html>