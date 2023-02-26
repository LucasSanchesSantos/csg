<?php
    $config = include("{$_SERVER['DOCUMENT_ROOT']}/csg/App/Controller/config/config.php");
    $uri = $_SERVER['REQUEST_URI'];
    date_default_timezone_set('America/Sao_Paulo');

?>

<div class="mt-2 p-2">

<div class="h2 text-center mb-3 fw-bold">Alterar cadastro</div>
    
<div class="bg-light px-4 py-2 border rounded shadow mb-3">
    <div class="d-flex align-items-center justify-content-between mt-2" id="title"> 
        <form action=""class="w-100">

        <div class="mb-3">
            <label class="form-label">Nome</label>
            <input type="text" name="nome" class="form-control" value="<?=$_SESSION['nome']?>"></input>
        </div>

        <div class="mb-3">
            <label class="form-label">Ramal</label>
            <input type="text" name="nome" class="form-control" value="<?= "e"?>"></input>
        </div>

        <div class="mb-3">
            <label class="form-label">E-mail</label>
            <input type="text" name="nome" class="form-control" value="<?= "e"?>"></input>
        </div>

        <div class="mb-3">
            <label class="form-label">Telefone</label>
            <div class="row g-3 align-items-center">
                <div class="col-md-1">
                    <input type="text" id="ddd" minlength="2" maxlength="2" class="form-control" placeholder="DDD">
                </div>  
                <div class="col-auto">
                    <input type="text" id="telefone" class="form-control" maxlength="9" minlength="8" placeholder="Número 9 dígitos">
                </div>
            </div>
        </div>

        <div class="mb-3">Tipo de acesso</label>
            <input type="text" name="nome" class="form-control" value="<?= "e"?>"></input>
        </div>

        <div class="mb-3">
            <label class="form-label">Contato padrão</label>
            <input type="text" name="nome" class="form-control" value="<?= "e"?>"></input>
        </div>

        <div class="mb-3">
            <label class="form-label">Senha</label>
            <input type="text" name="nome" class="form-control" value="<?= "e"?>"></input>
        </div>

        <div class="mb-3">
            <label class="form-label">Situação funcionário CSG</label>
            <input type="text" name="nome" class="form-control" value="<?= "e"?>"></input>
        </div>


        <button type="submit" class="btn btn-primary">Submit</button>
            
        </form>
    </div>
</div>                
