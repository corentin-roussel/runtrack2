SELECT * FROM etudiants WHERE TIMESTAMPDIFF(YEAR, naissance, CURDATE()) <= 18;
/* select all pour etudiants ou la difference entre 
l'anné de naissance
et curdate pour la date actuelle <=18 
pour les personnes mineurs */