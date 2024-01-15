<?php
    include 'head.php'; 
    session_start (); // doit etre dans les deux fichiers dans php

$chemin_GIF_chargement ="https://media.giphy.com/media/7NeWz65w2SUwLsLHaI/giphy.gif"
?>

<style>

.gif_chargement {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            display: none;
        }
         
        .masquer { 
            display: none;
        }

</style>

<img class=gif_chargement src="<?php echo $chemin_GIF_chargement ?>" alt="Encadrement GIF">


<div id="conteneurPrincipal" class="masquer">

<?php 
$Choix_ordinateur=array('C’est certain',
'C’est complètement ça',
'Sans aucun doute',
'Oui vraiment',
'Tu peux compter dessus',
' Augure favorable',
' Très probablement',
'Ça m’a l’air de bien se présenter',
'Oui',
'Les signes indiquent que oui',
'La réponse est flou, essaye encore',
'Redemande plus tard',
'Il ne vaut mieux pas que je réponde tout de suite',
'Impossible à prévoir pour l’instant',
'Concentre toi et redemande',
'Ne compte pas dessus',
'Ma réponse est non',
'Mes sources disent non',
'Ça ne se présente pas bien',
'Très peu probable');
$random_int=array_rand($Choix_ordinateur,4);

($_SERVER['REQUEST_METHOD']==="POST");
$question= $_POST["question"];

"<br>";

echo '<p><strong style="color:rgb(0, 125, 125);padding: 15px 32px;margin: 4px 2px;text-align: center;font-size: 25px;">' .  $question . '</style></strong></p>'."<br>";
echo '<p><strong>Ce que vous réserve 2024 : </strong><strong style="color:white;background-color:rgb(0, 125, 125);padding: 15px 32px;font-size: 25px;">' .  $Choix_ordinateur[$random_int[0]] . '</style></strong></p>';

$cheminGIF = "https://media.giphy.com/media/91slJlppCOgaK85Edd/giphy.gif" 

?>

<img src="<?php echo $cheminGIF ?>">

<br>
<br>

<style>
        .bouton_rejouer {
            display: inline-block;
            padding: 10px 20px;
            border: 2px solid;
            border-radius: 5px;
            background-color: #3498db;
            color: writh;
            text-align: center;
            text-decoration: none;
            font-size: 16px;
            cursor: pointer;
        }

    </style>

<a href="index.php" class="bouton_rejouer">Rejouer</a>

<?php
    include 'footer.php';
?>

</div>


<script>   // fait avec chatGPT
    // Masquer tous les éléments au début
    document.getElementById('conteneurPrincipal').classList.add= 'none';

    // Afficher l'image de chargement
    document.querySelector('.gif_chargement').style.display = 'block';

    // Après 5 secondes, cacher l'image de chargement et afficher le contenu principal
    setTimeout(function () {
        // Cacher l'image de chargement
        document.querySelector('.gif_chargement').style.display = 'none';

        // Afficher le contenu principal
        document.getElementById('conteneurPrincipal').style.display = 'block';
    }, 5000);
</script>


</body>



 












