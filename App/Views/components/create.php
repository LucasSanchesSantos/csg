<?php
    $config = include("{$_SERVER['DOCUMENT_ROOT']}/csg/App/Controller/config/config.php");
    $uri = $_SERVER['REQUEST_URI'];
    date_default_timezone_set('America/Sao_Paulo');

?>
<p>
  <a class="btn btn-primary" data-bs-toggle="collapse" href="#multiCollapse1" role="button" aria-expanded="false" aria-controls="multiCollapseExample1">Novo colaborador</a>
</p>
<div class="row">
    <div class="col">
        <div class="collapse multi-collapse" id="multiCollapse1">
            <div class="h2 text-center mb-3 fw-bold">Novo Colaborador</div>
            <div class="mt-2 p-2">
                <div class="bg-light px-4 py-2 border rounded shadow mb-3">
                    <div class="mt-3 d-flex justify-content-center p-2">
                        <form action="/csg/App/Controller/user/create.php" method="POST" class="w-100">
                            <div class="row">
                                <div class="form-group col-md-12 mb-3">
                                
                                    <label class="mb-2 fw-bold">Usuario Sabium</label>
                                    <input type="number" required class="form-control" name="id_usuario_sabium" placeholder="Ex: 12345">

                                    <br>
                                    <label class="mb-2 fw-bold">Tipo Funcionário</label>
                                    <select required class="form-control" name="id_tipo_usuario">
                                        <option value="2">Suporte</option>
                                        <option value="3">Administrador</option>
                                    </select>
                                    <br>

                                    <label class="mb-2 fw-bold">Senha</label>
                                    <input type="password" required class="form-control" name="senha" placeholder="">

                                    <div class="form-actions mt-3 text-end">
                                        <input type="submit" name="colaborador" class="btn btn-success fw-bold" value="Cadastrar"></input>
                                    </div>

                                </div>   
                            </div>   
                        </form>
                    </div>
                </div>
            </div> 
        </div>
    </div>
</div>

<button class="btn btn-primary" type="button" data-bs-toggle="collapse" data-bs-target="#multiCollapse2" aria-expanded="false" aria-controls="multiCollapseExample2">Nova filial</button>

<div class="col">
    <div class="collapse multi-collapse" id="multiCollapse2">
        <div class="h2 text-center mb-3 fw-bold">Nova filial</div>
        <div class="mt-2 p-2">
            <div class="bg-light px-4 py-2 border rounded shadow mb-3">
                <div class="mt-3 d-flex justify-content-center p-2">
                    <form action="/csg/App/Controller/user/create.php" method="POST" class="w-100">
                        <div class="row">
                            <div class="form-group col-md-12 mb-3">
                                <label class="mb-2 fw-bold">Filial</label>
                                <input type="text" required class="form-control" name="idfilial" placeholder="Ex: 10002">
                                <br>
                                <label class="mb-2 fw-bold">Senha</label>
                                <input type="password" required class="form-control" name="senha" placeholder="">

                                <div class="form-actions mt-3 text-end">
                                    <input type="submit" name="filial" class="btn btn-success fw-bold" value="Cadastrar"></input>
                                </div>
                            </div>   
                        </div>   
                    </form>
                </div>
            </div>
        </div> 
    </div>
</div>