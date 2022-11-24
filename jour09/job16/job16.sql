SELECT etage.nom, salles.nom AS 'Biggest Room', MAX(salles.capacite)
FROM salles
INNER JOIN etage ON salles.id_etage=etage.id