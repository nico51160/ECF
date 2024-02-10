<?php
class User
{
    static public function create($user)
    {
        $sql = "INSERT INTO utilisateurs(nom,prenom,email,role,login,password,telephone)
        VALUES(:nom,:prenom,:email,:role,:login,:password,:telephone)";
        $role = 'Employe';
        $pdo = Cnx::Connect()->prepare($sql);
        $pdo->bindParam(':nom', $user['nom']);
        $pdo->bindParam(':prenom', $user['prenom']);
        $pdo->bindParam(':email', $user['email']);
        $pdo->bindParam(':role', $role);
        $pdo->bindParam(':login', $user['login']);
        $pdo->bindParam(':password', $user['password']);
        $pdo->bindParam(':telephone', $user['telephone']);
        if ($pdo->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }

    static public function login($user)
    {
        $login = $user['login'];
        try {
            $pdo = Cnx::Connect()->prepare("SELECT * FROM utilisateurs where login= ?");
            $pdo->execute(array($login));
            $user = $pdo->fetch(PDO::FETCH_OBJ);
            return $user;
        } catch (PDOException $e) {
            echo 'erreur' . $e->getMessage();
        }
    }

    static public function update($user)
    {
        $sql = "UPDATE utilisateurs SET nom=:nom, prenom=:prenom, email=:email, login=:login, telephone=:telephone WHERE id=:id";
        $pdo = Cnx::Connect()->prepare($sql);
        $pdo->bindParam(':id', $user['id']);
        $pdo->bindParam(':nom', $user['nom']);
        $pdo->bindParam(':prenom', $user['prenom']);
        $pdo->bindParam(':email', $user['email']);
        $pdo->bindParam(':login', $user['login']);
        $pdo->bindParam(':telephone', $user['telephone']);
        if ($pdo->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }

    static public function changePassword($user)
    {
        $query = "UPDATE utilisateurs SET password=:password WHERE id=:id";
        $pdo = Cnx::Connect()->prepare($query);
        $pdo->bindParam(':id', $user['id']);
        $pdo->bindParam(':password', MD5($user['password']));
        if ($pdo->execute()) {
            return 'ok';
        } else {
            return 'error';
        }
    }

    static public function getPassword($id)
    {
        try {
            $pdo = Cnx::Connect()->prepare("SELECT password FROM utilisateurs where id=:id");
            $pdo->execute(array(":id" => $id));
            $user = $pdo->fetch(PDO::FETCH_OBJ);
            return $user->password;
            $pdo = null;
        } catch (PDOException $e) {
            echo 'erreur' . $e->getMessage();
        }
    }


    static public function read($user)
    {
        $id = $user['id'];
        try {
            $pdo = Cnx::Connect()->prepare("SELECT * FROM utilisateurs where id=:id");
            $pdo->execute(array(":id" => $id));
            $user = $pdo->fetch(PDO::FETCH_OBJ);
            return $user;
            $pdo = null;
        } catch (PDOException $e) {
            echo 'erreur' . $e->getMessage();
        }
    }

    static public function readAll()
    {
        $pdo = Cnx::Connect()->prepare("SELECT * FROM utilisateurs");
        $pdo->execute();
        return $pdo->fetchAll();
    }

    static public function delete($user)
    {
        $id = $user['id'];
        try {
            $pdo = Cnx::Connect()->prepare("DELETE FROM utilisateurs where id=:id");
            $pdo->execute(array(":id" => $id));
            if ($pdo->execute()) {
                return 'ok';
            }
            $pdo = null;
        } catch (PDOException $e) {
            echo 'erreur' . $e->getMessage();
        }
    }

    static public function find($user)
    {
        $search = $user['search'];
        try {
            $pdo = Cnx::Connect()->prepare("SELECT * FROM utilisateurs where nom LIKE ? OR prenom LIKE ?");
            $pdo->execute(array('%' . $search . '%', '%' . $search . '%'));
            $utilisateurs = $pdo->fetchAll();
            return $utilisateurs;
        } catch (PDOException $e) {
            echo 'erreur' . $e->getMessage();
        }
    }
}
