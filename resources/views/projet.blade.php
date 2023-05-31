<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="css/header.css" rel="stylesheet">
    <link href="css/projet.css" rel="stylesheet">

    <title>Projet</title>
</head>
<body>
    <header>
        <div>
        <!-- <img src="assets/photocv.png" alt="Photo de Matéo Lo Pinto"> -->
         
        <p><a href="/">Page Général    </a></p>
        
        </div>
        <div>
            <li>
            <li><a href="/formation">Formation</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/projet">Projets</a></li>

        </div>
    </header>
    <main>
        <article class="White" onclick="Raw_Event()">
            <div>
                <section>
                <h1>Raw_Event</h1>
                <p>Pour ce projet, j'ai dû concevoir le site d'une entreprise de promotion de concert, en prenant en compte l'aspect estéthique et facilité d'utilisation.</p>
                </section>
                <button> Se rendre au projet</button>
            </div>
            <div>
                <img src="assets/Raw_Event.png" width="350px" height="200px">
            </div>
        </article>
        <article class="Black" onclick="Rib_appli()"> 
            <div>
                <section>
                <h1>Rib_appli</h1>
                <p>Lors de mon Stage, j'ai du réalisé une application complète de gestion de Rib, prenant en compte l'architecture complète d'une application.</p>
            </section>
            <button> Se rendre au projet</button>
            </div>
            <div>
                <img src="assets/logo_laravel.png" width="350px" height="200px">
            </div>
        </article>
        <article class="White" onclick="Bdsql()">
            <div>
                <section>
                <h1>SQL SERVER</h1>
                <p>Au cours de la formation, j'ai eu comme exercice de créer une base de donnée en relation avec un magasin, en y ajustant les rôles et les tables avec.</p>
                </section>
                <button> Se rendre au projet</button>

            </div>
            <div>
                <img src="assets/logo_sql.png" width="350px" height="200px">
            </div>
        </article>
        <article class="Black" onclick="Sudoku()">
            <div>
                <section>
                <h1>Sudoku</h1>
                <p>J'ai confectionner au sein de ma formation un Sudoku en ligne. </p>
                </section>
                <button> Se rendre au projet</button>

            </div>
            <div>
            <img src="assets/logo_sudoku.png" width="350px" height="200px">
            </div>
        </article>
        <article class="White" onclick="Lolitatika()">
            <div>
                <section>
                <h1>Lolitatika</h1>
                <p>Ce projet est une analyse du site d'une boutique de bijou, avec une proposition de refonte du site en question.</p>
                </section>
                <button> Se rendre au projet</button>

            </div>
            <div>
                <img src="assets/logo_lolitatika.png" width="350px" height="200px">
            </div>
        </article>
        <article class="Black" onclick="Derive()">
            <div>
                <section>
                <h1>Derive Bière de la Plaisance</h1>
                <p>Dans la continuité du projet précédent, celui-ci est de même l'analyse d'un site marchand avec une proposition de solution afin d'attirer la clientèle.</p>
                </section>
                <button> Se rendre au projet</button>

            </div>
            <div>
            <img src="assets/logo_derive.png" width="450" height="200px">
            </div>
        </article>
        <article class="White" onclick="Django()">
            <div>
                <section>
                <h1>Projet - Django</h1>
                <p>Dans la continuité du projet précédent, celui-ci est de même l'analyse d'un site marchand avec une proposition de solution afin d'attirer la clientèle.</p>
                </section>
                <button> Se rendre au projet</button>

            </div>
            <div>
            <img src="assets/logo_django.png" width="300px" height="300px">
            </div>
        </article>
        <article class="Black" onclick="Infra_reseau()">
            <div>
                <section>
                <h1>Bedrock</h1>
                <p>Créer une infrastructure qui héberge l'ensemble des projets imaginés.</p>
                </section>
                <button> Se rendre au projet</button>

            </div>
            <div>
            <img src="assets/Infra_reseau/Shema.PNG" height="90%" width="90%">
            </div>
        </article>
        <article class="White" onclick="Proj_Velo()">
            <div>
                <section>
                <h1>Vente Vélo - léger site Web</h1>
                <p>Ce projet constitait à la création d'un site en ligne d'annonce de vente de vélo.</p>
                </section>
                <button> Se rendre au projet</button>

            </div>
            <div>
            <img src="assets/Projvelo.png" width="450" height="200px">
            </div>
        </article>
        <article class="Black" onclick="Infra_Env()">
            <div>
                <section>
                <h1>Infrastructure Environnement - Bedrock</h1>
                <p>Dans la continuité du projet précédent, celui-ci est de même l'analyse d'un site marchand avec une proposition de solution afin d'attirer la clientèle.</p>
                </section>
                <button> Se rendre au projet</button>

            </div>
            <div>
            <img src="assets/logo_infra.png" width="450" height="200px">

            </div>
        </article>
        
    </main>
    <script>
        function Raw_Event(){
            document.location.href = "/raw_event"
        }
        function Rib_appli(){
            document.location.href = "/rib_appli"
        }
        function Sudoku(){
            document.location.href = "/sudoku"
        }
        function Django(){
            document.location.href = "/django"
        }
        function Bdsql(){
            document.location.href = "/bdsql"
        }
        function Lolitatika(){
            document.location.href = "/lolitatika"
        }
        function Derive(){
            document.location.href = "/derive"
        }
        function Proj_Velo(){
            document.location.href = "/proj_velo"
        }
        function Infra_Env(){
            document.location.href = "/infra_env"
        }
        function Infra_reseau(){
            document.location.href = "/infra_reseau"
        }

    </script>
</body>
</html>