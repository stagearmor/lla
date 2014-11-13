<!DOCTYPE html>
<html>
    <head>
	<meta name="viewport" content="user-scalable=no, initial-scale=1, maximum-scale=1, minimum-scale=1, width=device-width, height=device-height, target-densitydpi=device-dpi" />
    <title>MobileBlog</title>
</head> 
<body> 
<?php
include ("Pays.php");
include ("Continent.php");
include ("Insulaires.php");
//initialisation
echo"<h1>appel au constructeur</h1>";
$p1 = new Pays("France",675, 62);
$p2 = new Pays("Allemagne",357,82);
$p3 = new Pays("Espagne",505,44);
//affichage
echo"<h2>affichage des donnees du premier pays</h2>";
echo $p1->getNom();
echo"<br />";
echo $p1->getSuperficie();
echo"<br />";
echo $p1->getPopulation();
echo"<br />";
echo"<h2>affichage des donnees du second pays</h2>";
echo $p2->getNom();
echo"<br />";
echo $p2->getSuperficie();
echo $p2->getPopulation();
echo"<br />";
echo"<h2>affichage des donnees du troisième pays</h2>";
echo $p3->getNom();
echo"<br />";
echo $p3->getSuperficie();
echo"<br />";
echo $p3->getPopulation();
echo"<br />";
echo $p3->getPopulation();
echo"<br />";

echo"<h3>Modifications des données concernant la population de la France</h3>";

echo $p1->getNom();
echo"<br />";
echo $p1->getPopulation();
echo"<br />";
echo "<h4>modification de la population de la France</h4>";
$newpop=$p1->getPopulation()*1.1;
$p1->setPopulation($newpop);
echo $p1->getPopulation();
echo"<br />";

echo"<h3>héritage</h3>";

$pc= new Continent("Belgique", 31, 11,"Europe");
echo"<h3>Accès aux données insulaires</h3>";
echo $pc->getNom();
echo"<br />";
echo $pc->getSuperficie();
echo"<br />";
echo $pc->getPopulation();
echo"<br />";
$pi= new Insulaires("Chypre", 9250, 0.8,"Méditerrannée");
echo"<h3>Accès aux données continentales</h3>";
echo $pi->getNom();
echo"<br />";
echo $pi->getSuperficie();
echo"<br />";
echo $pi->getPopulation();
echo"<br />";
//$pc->affichagePays()."<br />";
//$pi->affichagePays();
$pc->__toString();
$pi->__toString();

?>
</body>
</html>