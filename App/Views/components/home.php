
<div class="h2 text-center mb-3 fw-bold">Assessoria do varejo</div>

<?php 
foreach($_SESSION['array'] as $key => $row){
    echo '<div class="card mb-3" style="max-width: 540px;">';
    echo    '<div class="row g-0">';
    echo        '<div class="col-md-4">';
    echo            '<img src="App/Views/images/funcionarios/'.$row['foto'].'" class="img-fluid">';
    echo        '</div>';
    echo        '<div class="col-md-8">';
    echo            '<div class="card-body">';
    echo                '<h5 class="card-title">'.$row['nome'].'</h5>';
    echo                '<h8 class="card-text"><small class="text-muted"><strong>Telefone: </strong>'.$row['full_telefone'].'</small></h8>';
    echo                '</br><h8 class="card-text"><small class="text-muted"><strong>Ramal: </strong>'.$row['ramal'].'</small></h8>';
    echo                '</br><h8 class="card-text"><small class="text-muted"><strong>E-mail: </strong>'.$row['email'].'</small></h8>';
    echo                '</br><h8 class="card-text"><small class="text-muted"><strong>Atendimento padrão: </strong>'.$row['contato_padrao'].'</small></h8>';
    echo            '</div>';
    echo        '</div>';
    echo    '</div>';
    echo '</div>';
}

