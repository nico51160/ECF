<?php
if (isset($_POST['id'])) {
    $id= $_POST['id'];
    $existService = new ContactController();
    $existService->deleteMessage($id);
}
 
?>