<?php
header('Access-Control-Allow-Origin: *');
header('Content-Type: application/text/html/json; charset=UTF-8');
header('Access-Control-Allow-Methods: GET');
header('Access-Control-Allow-Headers: Access-Control-Allow-Headers,Access-Control-Allow-Methods,Content-Type,Authorisation,X-Requested-With');
////////zone de controle

if($_SERVER['REQUEST_METHOD'] == 'GET') {
        ////////reponse api ok 
        http_response_code(200);

$q = intval($_GET['q']);

try {
    $connexion = new PDO('mysql:host=localhost;dbname=u117764026_garage_auto;charset=utf8', 'u117764026_nicolas', 'Nico123@.db');
    $connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $sql = "SELECT * FROM user WHERE id = :id";
    $req = $connexion->prepare($sql);
    $req->bindParam(':id', $q);
    $req->execute();

    echo "  <div id='content'>
            <table class='styled-table'>
            <tr>
                <th>Nom</th>
                <th>Prenom</th>
                <th>Rôle</th>
                <th>Email</th>
                <th>Telephone</th>
            </tr>";

    while($data = $req->fetch(PDO::FETCH_ASSOC)) {
        echo "<tr>";
        echo "<td>" . $data['nom'] . "</td>";
        echo "<td>" . $data['prenom'] . "</td>";
        echo "<td>" . $data['role'] . "</td>";
        echo "<td>" . $data['email'] . "</td>";
        echo "<td>" . $data['telephone'] . "</td>";
        echo "</tr>";
    }

    echo "</table>
            </div>";
} catch (PDOException $e) {
    echo "Erreur : " . $e->getMessage();
}

$connexion = null;


} else {
    ////////reponse api ko
    http_response_code(405);
    ////////reponse api ko
    http_response_code(405);
    $message = array(
        'explication' => 'Demande non autorisée'
    );
    echo json_encode($message);
}
?>

