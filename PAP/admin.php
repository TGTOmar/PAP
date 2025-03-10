<?php
session_start();
include("ligacao.php");

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['editId'])) {
        $id = intval($_POST['editId']);
        $username = isset($_POST['editUsername']) ? mysqli_real_escape_string($con, $_POST['editUsername']) : '';
        $surname = isset($_POST['editSurname']) ? mysqli_real_escape_string($con, $_POST['editSurname']) : '';
        $email = isset($_POST['editEmail']) ? mysqli_real_escape_string($con, $_POST['editEmail']) : '';
        $phone = isset($_POST['editPhone']) ? mysqli_real_escape_string($con, $_POST['editPhone']) : '';

        if ($id > 0) {
            $sqlUPDATE = "UPDATE usuarios SET 
                username='$username', 
                surname='$surname', 
                phone='$phone' 
                WHERE id=$id";

            if (mysqli_query($con, $sqlUPDATE)) {
                echo "Usuário atualizado com sucesso!";
            } else {
                echo "Erro ao atualizar usuário: " . mysqli_error($con);
            }
        } else {
            echo "ID inválido!";
        }
    }

    // Suspender conta
    if (isset($_POST['suspendId'])) {
        $id = intval($_POST['suspendId']);
        $sqlSuspend = "UPDATE usuarios SET status='suspended' WHERE id=$id";
        mysqli_query($con, $sqlSuspend);
        echo "Usuário suspenso!";
    }

    // Alterar papel (admin/user)
    if (isset($_POST['changeRoleId'])) {
        $id = intval($_POST['changeRoleId']);
        $newRole = $_POST['newRole'] === 'admin' ? 'user' : 'admin';
        $sqlChangeRole = "UPDATE usuarios SET role='$newRole' WHERE id=$id";
        mysqli_query($con, $sqlChangeRole);
        echo "Função alterada para $newRole!";
    }
}

?>

<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Administração de Usuários</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            background: white;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #007BFF;
            color: white;
        }
        .btn {
            padding: 5px 10px;
            border: none;
            cursor: pointer;
            color: white;
            margin: 2px;
        }
        .edit { background-color: #28a745; }
        .suspend { background-color: #dc3545; }
        .role { background-color: #ffc107; color: black; }
        .modal {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            background: white;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 10px rgba(0,0,0,0.3);
        }
        .modal input {
            width: 100%;
            margin-bottom: 10px;
            padding: 5px;
        }
    </style>
</head>
<body>
<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Sobrenome</th>
            <th>Email</th>
            <th>Telemóvel</th>
            <th>Status</th>
            <th>Função</th>
            <th>Ações</th>
        </tr>
    </thead>
    <tbody>
        <?php
            $sql1 = "SELECT * FROM usuarios";
            $result = mysqli_query($con, $sql1);
            if (mysqli_num_rows($result) > 0) {
                while ($row = mysqli_fetch_assoc($result)) {
                    echo "<tr>";
                    echo "<td>" . $row["id"] . "</td>";
                    echo "<td>" . $row["username"] . "</td>";
                    echo "<td>" . $row["surname"] . "</td>";
                    echo "<td>" . $row["email"] . "</td>";
                    echo "<td>" . $row["phone"] . "</td>";
                    echo "<td>" . $row["status"] . "</td>";
                    echo "<td>" . $row["role"] . "</td>";
                    echo "<td>
                        <button class='btn edit' 
                            data-id='" . $row["id"] . "' 
                            data-username='" . $row["username"] . "' 
                            data-surname='" . $row["surname"] . "' 
                            data-email='" . $row["email"] . "' 
                            data-phone='" . $row["phone"] . "'>Editar</button>

                        <button class='btn suspend' data-id='" . $row["id"] . "'>Suspender</button>

                        <button class='btn role' data-id='" . $row["id"] . "' data-role='" . $row["role"] . "'>Alterar Função</button>
                    </td>";
                    echo "</tr>";
                }
            } else {
                echo "<tr><td colspan='8'>Nenhum utilizador encontrado</td></tr>";
            }
        ?>
    </tbody>
</table>

<div id="editModal" class="modal">
    <h3>Editar Usuário</h3>
    <form method="POST">
        <input type="hidden" id="editId" name="editId">
        <input type="text" id="editUsername" name="editUsername" placeholder="Nome">
        <input type="text" id="editSurname" name="editSurname" placeholder="Sobrenome">
        <input type="email" id="editEmail" name="editEmail" placeholder="Email" readonly>
        <input type="text" id="editPhone" name="editPhone" placeholder="Telemóvel">
        <button type="button" onclick="saveChanges()">Salvar</button>
        <button type="button" onclick="$('#editModal').hide()">Fechar</button>
    </form>
</div>

<script>
    $(document).on('click', '.edit', function() {
        $('#editId').val($(this).data('id'));
        $('#editUsername').val($(this).data('username'));
        $('#editSurname').val($(this).data('surname'));
        $('#editEmail').val($(this).data('email'));
        $('#editPhone').val($(this).data('phone'));
        $('#editModal').show();
    });

    function saveChanges() {
        $.post('admin.php', $('form').serialize(), function(response) {
            alert(response);
            location.reload();
        });
    }

    $(document).on('click', '.suspend', function() {
        let id = $(this).data('id');
        $.post('admin.php', { suspendId: id }, function(response) {
            alert(response);
            location.reload();
        });
    });

    $(document).on('click', '.role', function() {
        let id = $(this).data('id');
        let newRole = $(this).data('role') === 'admin' ? 'user' : 'admin';
        $.post('admin.php', { changeRoleId: id, newRole: newRole }, function(response) {
            alert(response);
            location.reload();
        });
    });
</script>

</body>
</html>
