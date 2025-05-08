<?php

include '../../config/connection.php';

?>

<form action="create.php" method="POST">

<label for="username">Nome do Usuario</label>
<input type="text" name="username" id="username">
<br><br>
<label for="password">Senha</label>
<input type="password" name="password" id="password">
<br><br>
<button type="submit">Cadastrar</button>

</form>

<?php

$username = isset($_POST['username']) ? $_POST['username']: exit();
$password = isset($_POST['password']) ? $_POST['password']: exit();

//statement
$stmt = $pdo ->prepare('INSERT INTO usuario(username, password) VALUES (:username, :password)');
$stmt->bindParam(':username', $username);
$stmt->bindParam(':password', $password);
$stmt->execute();

?>


INSERT INTO `usuario` (`id`, `username`, `password`) VALUES
(1, 'Batman', 'robin'),
(2, 'Diogo', 'jacare'),
(3, 'Mulher-Maravilha', 'lacoouro'),
(4, 'Tempestade', 'tempestade123'),
(5, 'Sonic', 'fastestthingalive'),
(6, 'Vampira', 'absorcao'),
(7, 'Feiticeira Escarlate', 'chaosmagic'),
(8, 'Viúva Negra', 'widowsbite'),
(9, 'Hera Venenosa', 'plantas'),
(10, 'Mulher-Gato', 'selinakyle'),
(11, 'Cuphead', 'mugsy123'),
(12, 'Wubbox', 'totheearthquake'),
(13, 'Capitã Marvel', 'binarypower'),
(14, 'Leonardo Watch', 'faketown'),
(15, 'Nebulosa', 'cybernetic'),
(16, 'Mantis', 'empatica'),
(17, 'Jessica Jones', 'alias'),
(18, 'Steve', 'chickenjockey'),
(19, 'Rogue', 'forcaabsorvida'),
(20, 'Zatanna', 'magicwords'),
(21, 'Ravena', 'azarath'),
(22, 'Starfire', 'tamaran'),
(23, 'Ash', 'pikachu123'),
(24, 'Batgirl', 'oraclegotham'),
(25, 'Arlequina', 'pudim'),
(26, 'Caçadora de Marte', 'marsforever'),
(27, 'Power Girl', 'krypton2'),
(28, 'Miss Marvel', 'embiggen'),
(29, 'Enchantress', 'seidrmagic'),
(30, 'Rewrite', 'iamgod'),
(31, 'Bomba Relógio', 'ticktock'),
(32, 'Elektra', 'ninjasai');