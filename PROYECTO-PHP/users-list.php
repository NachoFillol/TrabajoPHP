<?php

$usuarios = get_users();

?>

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Usuarios Registrados (<?= count($usuarios) ?>)</h1>

            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Nombre</th>
                        <th>Apellido</th>
                        <th>Email Principal</th>
                        <th>Avatar</th>
                    </tr>
                </thead>

                <tbody>
                    <?php foreach ($usuarios as $id => $usuario): ?>
                        <tr>
                            <td><?= $id ?></td>
                            <td><?= $usuario['firstname'] ?></td>
                            <td><?= $usuario['lastname'] ?></td>
                            <td><?= $usuario['email1'] ?></td>
                            <td>
                                <img src="<?= $usuario['avatar'] ?>" style="border-radius: 50%; width: 25px;">
                            </td>
                            <td>
                                <button class="btn btn-sm btn-success">Detalles</button>
                                <button class="btn btn-sm btn-primary">Editar</button>
                                <button class="btn btn-sm btn-danger">Borrar</button>
                            </td>
                        </tr>
                    <?php endforeach ?>
                </tbody>
            </table>
        </div>
    </div>
</div>