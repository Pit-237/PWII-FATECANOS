<?php
    include '../../config/connection.php';

    if ($_SERVER["REQUEST_METHOD"] == "GET") {
        $id= isset($_GET['id']) ? $_GET['id'] : exit();

        if(empty($id)){
            echo'O ID é obrigatório!';
            exit();
        }

        $cleiton = $pdo->prepare('SELECT * FROM usuario WHERE id = :id');
        $cleiton->bindParam(':id',$id);
        $cleiton->execute();
        $usuario = $cleiton->fetchAll();
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $id = isset($_POST['id'])? $_POST['id'] : null;
        $username = isset($_POST['username'])? $_POST['username'] : null;
        $password = isset($_POST['password'])? $_POST['password'] : null;

        if(empty($id)){
            echo "ID é obrigatório ";
            exit();
        }

        if(empty($username)){
            echo "Nome do usuario é obrigatório ";
            exit();
        }

        if(empty($password)){
            echo "O campo da senha é obrigatório ";
            exit();
        }

        $cleiton = $pdo->prepare('UPDATE usuario SET username = :userame, password = :password WHERE id = :id');
        $cleiton->bindParam(':id', $id);
        $cleiton->bindParam(':username', $username);
        $cleiton->bindParam(':password', $password);
        $cleiton->execute();


        header('Location: read.php');



        
    }

    


?>

<form action="update.php" method="POST">
<input type="hidden" name ="id" value="<?php echo $usuario [0]['id'];?>">
<label for="username">Editar nome do Usuario</label>
<input type="text" name="username" id="username" value="<?php echo $usuario[0]['username']; ?>">
<br><br>
<label for="password">Editar Senha</label>
<input type="password" name="password" id="password">
<br><br>
<button type="submit">Atualizar</button>

</form>



