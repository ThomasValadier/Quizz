<?php
require '../models/dbConnect.php';

$pdo = new DB();

$id = $_GET['user'];
$cle = $_GET['cle'];
$sql = "SELECT actif FROM users WHERE id_user LIKE ? AND cle LIKE ?";
$stmt = $pdo->getBDD()->prepare($sql);
$stmt->execute([$id,
    $cle]);
$req = $stmt->fetchAll(PDO::FETCH_OBJ);
foreach ($req as $cle):
    if (count($req) == 1) {
        if ($cle->actif == 0) {
            $sql = "UPDATE users SET actif = ?  WHERE id_user LIKE ?";
            $stmt = $pdo->getBDD()->prepare($sql);
            $stmt->execute([1, $id]);
            echo "Felicitation votre compte a bien ete active !!!!</br>";
            echo '<a href="index.php">Cliquez ici pour vous connecter!</a>';
        } else
            echo "votre compte a deja ete valide";
    } else
        echo " lutilisateur nexiste pas";
endforeach;