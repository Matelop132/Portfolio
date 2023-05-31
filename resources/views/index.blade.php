
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="css/header.css" >
    <title>PORTFOLIO</title>
</head>
<body>
    <header>
        <div>
        <!-- <img src="assets/photocv.png" alt="Photo de Matéo Lo Pinto"> -->
         
        <p><a href="portfolio.html">Page Général    </a></p>
        
        </div>
        <div>
            <li>
            <li><a href="/formation">Formation</a></li>
            <li><a href="/contact">Contact</a></li>
            <li><a href="/projet">Projets</a></li>
        </div>
    </header>
    <main>
        <h1>Matéo Lo Pinto</h1>
        <h1>Portfolio</h1>
        <div>
        <article onclick="ArticleProjet()">
            
                    <h2>
                        Projets
                    </h2>
                <img src="assets/Projvelo.png" height="50px">
                <p>Mes différents projets</p>
                
        </article>
        <article onclick="ArticleFormation()">
            
            <h2>
                Formations
            </h2>
            <img src="assets/logo_Epsi.png" height="50px">  
        <p>
            Mon parcours professionel
        </p>
        
        </article>
        <article onclick="ArticleContact()">
            
            <h2>
                Contact
            </h2>
            <img src="assets/logo_telephone.png" height="50px">
        <p>
            Mes divers coordonnées
        </p>
        
    </article>
    </div>
    </main>
    <script>
        function ArticleProjet(){
            document.location.href = "/projet"
        }
        function ArticleContact(){
            document.location.href = "/contact"
        }
        function ArticleFormation(){
            document.location.href = "/formation"
        }
        function MeContacter(){
            document.location.href = "/avis"
        }

    </script>
    <footer>
    </footer>
    <style>
       
        main{
            text-align: center;
            
            
        }

        main div article {
            margin: 10%;
            border: 1px solid grey;
            background-color: lightgrey;
            border-radius: 30px;
            height: 200px;

        }
        main div article:hover {
            border-color: black;

        }
        main div{
            display: flex;

            
        }
        main button{
            padding: 10px 150px;
            background-color: black;
            border-color:white ;
            color:white;
            border-radius: 15px;
            font-family: Courier New, monospace;
        }  

        main button:hover{
            background-color: grey;
        }  
       
        
    </style>
</body>
</html>