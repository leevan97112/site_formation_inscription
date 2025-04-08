<?php
$host = 'localhost';
$user = 'root';
$pass = '';
$db = 'formation_db';
$conn = new mysqli($host, $user, $pass, $db);
if ($conn->connect_error) {
    die('Erreur de connexion à la base de données');
}
?>
<!DOCTYPE html>
<html lang="fr">
<head>
  <meta charset="UTF-8">
  <title>Inscription à une formation</title>
  <link rel="stylesheet" href="style.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
  <link rel="icon" href="favicon.ico" type="logo.png">
</head>
<body>
<header>
<h1> Secours Assistance Formation- SAF 97 </h1>
    <div class="header-content">  <img src="logo.png" alt="SAF Logo">
    <p>Apprendre en toute convivialité <br> Des formations de qualité <br>Une équipe de formateurs à votre écoute</p></div>

 
</header>
<div class="description"><h2 class="desctitle">Descriptions des formations</h2>
    <H3>PSC:</H3>
    <p class="text">La formation PSC, d'une durée de 7 heures, (anciennement appelé PSC1) permet à toute personne d'acquérir <br> les compétences nécessaires à l'exécution d'une action citoyenne d'assistance à personne <br> en réalisant les gestes élémentaires de secours.</p>
    <H3>PSE1:</H3>
    <p class="text">La formation PSE1 est une formation de secourisme essentielle pour ceux qui <br>veulent acquérir les compétences nécessaires pour réagir aux urgences en équipe avec des équipements <br> de premiers secours.<br> Cette formation allie théorie et pratique, elle aborde de nombreux aspects :<br> cadre juridique applicable à votre action de secours, quels gestes appliquer lors d’un accident <Br> (hémorragie, état de choc..), la bonne utilisation des équipements à votre disposition (défibrillateur…).<br> C’est également une formation qui est indispensable pour les métiers du secourisme car vous devez <br> être capable de travailler en équipe afin de répondre aux situations d’urgence</p>
   <h3>PSE2:</h3>
   <P class="text">La formation “Premiers Secours en Equipe de niveau 2” (PSE2) est la seconde étape <br> de la formation vous permettant d’intervenir en équipe et avec du matériel auprès d’une victime.</P>
   <h3>SST:</h3>
   <p class="text">Le salarié sauveteur secouriste du travail (SST), d'une durée de 15 heures, a pour missions de porter les premiers secours <br> à toute victime d'un accident du travail, mais aussi de participer à la prévention<br> des risques professionnels dans son entreprise. Pour cela, il doit acquérir des compétences spécifiques dans le cadre d’une formation initiale,<br> puis de suivre régulièrement une formation de maintien actualisation des compétences.</p>
   <h3>Incendie:</h3>
   <p class="text">La formation à la manipulation des extincteurs, d'une durée de 3 heures, permet de développer la capacité d'analyse <br> et de réactivité des personnels, dans le but d'éteindre les différentes classes de feu<br> avec les extincteurs appropriés. Un départ de feu ne prévient pas.</p>
   <h3>GQS:</h3>
   <p class="text">La formation GQS, pour Gestes Qui Sauvent, d'une durée de 2 heures, est l'une des trois formations de référence <br> aux premiers secours. Son titre est à l'image de son contenu : direct et droit à l'essentiel !<br> L'objectif est de transmettre à tous les bases pour réagir en cas d'urgence.</p>
</div> <main>
  <h1>Inscription à une formation</h1>
  <form action="inscription.php" method="post">
    <input type="text" name="prenom" placeholder="Prénom" required>
    <input type="text" name="nom" placeholder="Nom" required>
    <input type="email" name="email" placeholder="Email" required>
    <input type="phone number" name="phone number" placeholder=" Numero de Tél" required>
    <select name="formation" required>
      <option value="">Choisissez une formation</option>
      <option value="PSC1">PSC Premier Secours Citoyen </option>
      <option value="PSE1">PSE1 Premier Secours en Equipe Niv1</option>
      <option value="PSE2">PSE2 Premier Secours en Equipe Niv2</option>
      <option value="SST">SST Sauveteur et Secouriste du Travail</option>
      <option value="Incendie">Incendie (manipulation extincteur)</option>
      <option value="GQS">GQS (Geste Qui Sauve)</option>
    </select>
    <button type="submit">S'inscrire</button>
  </form>
</main>
</body>
<footer>
  <p>Pour toutes autres infos, nous contacter :</p>
  <p><i class="fa-solid fa-mobile-screen-button"></i> Tél : 0690 84 30 24</p>
  <p><i class="fas fa-envelope"></i> Mail : <a href="mailto:saf97@orange.fr">saf97@orange.fr</a></p>
</footer>
</html>
