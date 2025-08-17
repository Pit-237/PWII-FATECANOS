<?php include 'header.php'; ?>

    <div class="container-fluid">
        <div class="row d-flex justify-content-center">
            <div class="col-sm-12 col-md-8 col-xl-6 col-xxl-4">

                <div class="card my-5 d-flex align-items-center">
                    <img src="https://images.genius.com/3947697b23299ccb04ed09fb62763bb2.500x500x1.jpg"class="card-img-top w-25">
                    <div class="card-body">
                        <form action="" method="post">

                            <div class="mb-3">
                                <label for="nome" class="label-control">Nome Completo</label>
                                <input type="text" name="nome" id="nome" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="email" class="label-control">E-mail</label>
                                <input type="text" name="email" id="email" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="senha" class="label-control">Senha</label>
                                <input type="password" name="senha" id="senha" class="form-control">
                            </div>

                            <div class="mb-3">
                                <label for="confirmar_senha" class="label-control">Confirmar Senha</label>
                                <input type="password" name="confirmar_senha" id="confirmar_senha" class="form-control">
                            </div>

                            <div class="mb-3">
                                <p>Já possui conta? <a href="login.php">Clique Aqui</a></p>
                            </div>

                            <button type="submit" class="w-100 btn btn-primary">Cadastrar</button>

                        </form>
                    </div>
                </div>

            </div>
        </div>
    </div>


<?php include 'footer.php'; ?>