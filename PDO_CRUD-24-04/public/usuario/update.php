<?php

include '../../config/connection.php';


$stmt = $pdo->query('SELECT * FROM usuario');
$usuarios =$stmt->fetchAll();


// echo"<pre>";
// echo var_dump($usuarios);
?>

<?php
foreach ($usuarios as $index => $user) {
?>
<p><strong>Nome: </strong><?php echo $user["username"]?></p>
<a href="http://localhost/PWII-FATECANOS/PDO_CRUD-24-04/public/usuario/delete.php">Remover</a>
<a href="http://localhost/PWII-FATECANOS/PDO_CRUD-24-04/public/usuario/update.php">Editar</a>
<hr>
<?php } ?>

