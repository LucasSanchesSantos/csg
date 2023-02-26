<?php
    $config = include("{$_SERVER['DOCUMENT_ROOT']}/csg/App/Controller/config/config.php");
    $uri = $_SERVER['REQUEST_URI'];
    date_default_timezone_set('America/Sao_Paulo');

?>

<div class="mt-2 p-2">

<div class="h2 text-center mb-3 fw-bold">Cadastros CSG</div>
    <div class="bg-light px-4 py-2 border rounded shadow mb-3">
        <div class="d-flex align-items-center justify-content-between mt-2" id="title"> 
            <table class="table table-hover">
                <thead class="bg-grey text-dark">
                    <tr>
                        <th scope="col" class="text-center">Nome</th>
                        <th scope="col" class="text-center">Ramal</th>
                        <th scope="col" class="text-center">Permissão</th>
                        <th scope="col" class="text-center">Situação</th>
                        <th scope="col" class="text-center">Alterar cadastro</th>

                    </tr>
                </thead>    
                <tbody>
                <?php
                    foreach ($_SESSION['array'] as $key => $row) {
                        echo '<tr>';
                        echo '<td class="align-middle text-center">'. $row['nome'].'</td>';
                        echo '<td class="align-middle text-center">'. $row['ramal'].'</td>';
                        echo '<td class="align-middle text-center">'. $row['tipo_permissao'].'</td>';
                        echo '<td class="align-middle text-center">'. $row['situacao_cadastro'].'</td>';
                        echo '<td class="align-middle text-center">';
                        echo ' <a class="btn btn-warning" href="/csg/App/Controller/user/update.php?id_usuario_csg='.$row['id_usuario_csg'].'"><i class="bi bi-gear-fill"></i></a>';   
                        echo '</td>';
                    }
                ?>
                </tbody>
            </table>              
        </div>
    </div>                
</div>
