<?php
if (isset($_POST['id'])) {
    $existUser = new UserController();
    $existUser->deleteUser();
}
 
?>