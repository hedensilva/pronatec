<!-- Conexão com banco de dados -->
<?php
    function conectar(){
        $servidor = '127.0.0.1';
        $usuario = 'root';
        $senha = 'root';
        //$db = 'escola';

        $con = new mysqli($servidor,$usuario,$senha);

        return $con;
    }

    function criarDatabaseEscola(){
        $con = conectar();
        $sql = "CREATE DATABASE IF NOT EXISTS escola";
        $con->query($sql);
    }

    function conectarDatabase($db){
        $servidor = '127.0.0.1';
        $usuario = 'root';
        $senha = 'root';

        $con = new mysqli($servidor,$usuario,$senha,$db);

        return $con;
    }

    function criarTabelaAluno(){
        $con = conectarDatabase('escola');
        $sql = "CREATE TABLE aluno(
            matricula INT AUTO_INCREMENT PRIMARY KEY,
            nome VARCHAR(50)
        )";
        $con->query($sql);
    }

    criarDatabaseEscola();
    criarTabelaAluno();

    function inserirAluno($nome){
        $con = conectar();
        $sql = "INSERT INTO aluno(nome)VALUES('$nome')";
    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-LN+7fdVzj6u52u30Kp6M/trliBMCMKTyK833zpbD+pXdCLuTusPj697FH4R/5mcr" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <div class="card">
            <div class="card-body">
                <form action="">
                    <div class="mb-3">
                        <label class='form-label'>
                            E-mail
                        </label>
                        <input name='nome' class='form-control' type="text">
                    </div>
                    <div class="mb-3">
                        <label class="form-label">
                            Senha
                        </label>
                        <input name='senha' type="password" class="form-control">
                    </div>
                    <div class="mb-3">
                        <button class="btn btn-primary form-control" type='submit'>
                            Login 
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.7/dist/js/bootstrap.bundle.min.js" integrity="sha384-ndDqU0Gzau9qJ1lfW4pNLlhNTkCfHzAVBReH9diLvGRem5+R9g2FzA8ZGN954O5Q" crossorigin="anonymous"></script>
