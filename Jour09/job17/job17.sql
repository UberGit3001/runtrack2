USE jour09;

SELECT  etage.nom AS nom_etage, salles.nom AS `Smallest_Room`, salles.capacite
FROM salles
JOIN etage
ON salles.id_etage = etage.id
ORDER BY salles.capacite ASC LIMIT 1;