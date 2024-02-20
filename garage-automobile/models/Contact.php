<?php
class Contact
{
    static public function create($contact)
    {
        $sql = "INSERT INTO contact(nom,prenom,email,telephone,message)
        VALUES(:nom,:prenom,:email,:telephone,:message)";
        $pdo = Cnx::Connect()->prepare($sql);
        $pdo->bindParam(':nom', $contact['nom'],PDO::PARAM_STR);
        $pdo->bindParam(':prenom', $contact['prenom'],PDO::PARAM_STR);
        $pdo->bindParam(':email', $contact['email'],PDO::PARAM_STR);
        $pdo->bindParam(':telephone', $contact['telephone'],PDO::PARAM_STR);
        $pdo->bindParam(':message', $contact['message'],PDO::PARAM_STR);
        if ($pdo->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }

    static public function readAll()
    {
        $sql = "SELECT * FROM contact";
        $pdo = Cnx::Connect()->prepare($sql);
        $pdo->execute();
        return $pdo->fetchAll(PDO::FETCH_ASSOC);
    }

    static public function delete($id)
    {

        $pdo1 = Cnx::Connect()->prepare("DELETE FROM contact where id=:id");
        $pdo1->bindParam(':id', $id, PDO::PARAM_INT);
        if ($pdo1->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }
}
