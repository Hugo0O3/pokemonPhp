<?php

require 'php/db_link.inc.php';

use DB\DBLink;

$message = "";

$db = DBLink::connect2db(MYDB, $message);

if ($db) {
    echo "✅ Connexion réussie à la base de données !<br>";
} else {
    echo "❌ Échec de la connexion : $message<br>";
}

DBLink::disconnect($db);

if ($db === null) {
    echo "✅ Déconnexion réussie !";
} else {
    echo "❌ Erreur lors de la déconnexion.";
}

?>