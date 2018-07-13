<meta name="viewport" content="width=device-width">
<meta charset="utf-8">
<link rel="stylesheet" href="CSS/style.css">
<?php
echo "<table border=1>";
echo  "<tr>
                        <th>immatriclations</th>
                        <th>marques</th>
                        <th>modeles</th>
                        <th>categories</th>
                        <th>nb portes</th>
                        <th>motorisation</th>
                   </tr>";
while ($voituresMotori = $voitureMotori->fetch())
    {
    
    echo "<tr><td>".$voituresMotori["plaque_immat"]."</td>";
    echo "<td>".$voituresMotori["nom_marque"]."</td>";
    echo "<td>".$voituresMotori["nom_modele"]."</td>";
    echo "<td>".$voituresMotori["libelle_categorie"]."</td>";
    echo "<td>".$voituresMotori["nb_portes"]."</td>";
    echo "<td>".$voituresMotori["libelle_motorisation"]."</td></tr>";
    }
$voitureMotori->closecursor();
