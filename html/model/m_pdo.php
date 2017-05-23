<?php

/**
 * Fonction pour la connexion à la base de données
 * @return pdo l'instance de la connexion
 */

function connection()
{
$dsn = "pgsql:"
    . "ec2-54-228-255-234.eu-west-1.compute.amazonaws.com;"
    . "dbname=dfaar7m27gf6oe;"
    . "user=troqpmtpbxkeni;"
    . "port=5432;"
    . "sslmode=require;"
    . "password=2e8bc26da2710462f3b894ddc36f19253ce3023f6d7acd5378ae2de4de942ffb";

		try{
			$db = new PDO($dsn);
		}
		catch (Exception $e)
		{
				die('Erreur : ' . $e->getMessage());
		}
return($db);
}
?>
