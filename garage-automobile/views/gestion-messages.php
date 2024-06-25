<?php
$data = new ContactController();
$messages = $data->readAllMessages();
?>
<div class="container">
    <div class="row mt-4">
        <div class="col-md-10 mx-auto">
                <div class="card">
                    <div class="card-body bg-dark">
                        <div class="table-responsive">
                            <table class="table table-bordered text-white">
                                <thead>
                                    <tr>
                                        <th>Nom & Prénom</th>
                                        <th>Email</th>
                                        <th>Telephone</th>
                                        <th>Message</th>
                                        <th>Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($messages as $message) { ?>
                                        <tr>
                                            <td><?php echo $message['nom'] . ' ' . $message['prenom']; ?></td>
                                            <td><?php echo $message['email']; ?></td>
                                            <td><?php echo $message['telephone']; ?></td>
                                            <td><?php echo $message['message']; ?></td>
                                            <td>
                                                <form class="ml-2" method="post" action="message-delete">
                                                    <input type="hidden" name="id" value="<?php echo $message['id']; ?>">
                                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Êtes-vous sûr de vouloir supprimer ce message ?');">
                                                        <i class="fa fa-trash"></i>
                                                    </button>
                                                </form>
                                            </td>
                                        </tr>
                                    <?php }  ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
        </div>
    </div>
</div>
