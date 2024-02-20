<?php
class UserController
{

    public function createUser()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'nom'       => $_POST['nom'],
                'prenom'    => $_POST['prenom'],
                'email'     => $_POST['email'],
                'role'      => 'Employe',
                'login'     => $_POST['login'],
                'password'  => MD5($_POST['password']),
                'telephone' => $_POST['telephone'],
            );
            $result = User::create($data);
            if ($result === 'ok') {
                header('location: gestion-employes');
            } else {
                echo $result;
            }
        }
    }

    public function readUser()
    {
        if (isset($_POST['id'])) {
            $data = array('id' => $_POST['id']);
            $User = User::read($data);
            return $User;
        }
    }

    public function readAllUsers()
    {
        $Users = User::readAll();
        return $Users;
    }

    public function updateUser()
    {
        if (isset($_POST['submit'])) {
            $data = array(
                'id'        => $_POST['id'],
                'nom'       => $_POST['nom'],
                'prenom'    => $_POST['prenom'],
                'email'     => $_POST['email'],
                'login'     => $_POST['login'],
                'telephone' => $_POST['telephone'],
            );
            $result = User::update($data);
            if ($result) {
                header('location: gestion-voitures');
            }
        }
    }

    public function deleteUser($id)
    {
        if (isset($id)) {
            $result = User::delete($id);
            if ($result === 'ok') {
                header('location: gestion-employes');
            }
        }
    }

    public function getAdminPhone()
    {
        $phone = User::getPhone();
        return $phone;
    }

    public function login()
    {
        if (isset($_POST['submit'])) {
                $user = User::login($_POST['login']);
                if ($user->login == $_POST['login'] && $user->password == MD5($_POST['password'])) {
                    $_SESSION['logged'] = true;
                    $_SESSION['user']   = $user;
                    header('location: gestion-voitures');
                } else {
                    return '<div class="alert alert-danger">Login ou mot de passe est incorrect !</div>';
                    header('location: employe-login');
                }
        }
    }

    static public function logout()
    {
        session_destroy();
    }


    public function changePasswordUser()
    {
        if (isset($_POST['submit'])) {
            $userPassword = User::getPassword($_POST['id']);
            if ($userPassword !== MD5($_POST['oldPassword'])) {
                return '<div class="alert alert-danger"> Le mot de passe ancien est incorrect ! </div>';
                header('location: employe-change-password');
            } elseif ($_POST['newPassword'] !== $_POST['confirmPassword']) {
                return '<div class="alert alert-danger"> Les deux mots de passe sont incompatibles ! </div>';
                header('location: employe-change-password');
            } else {
                $data = array(
                    'id' => $_POST['id'],
                    'password' => $_POST['newPassword'],
                );
                $result = User::changePassword($data);
                if ($result == "ok") {
                    header('location: employe-profile');
                } else {
                    echo $result;
                }
            }
        }
    }


}
