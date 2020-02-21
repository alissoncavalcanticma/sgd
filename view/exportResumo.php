<script type="text/javascript">
    
    var pTurno;
    pTurno = prompt("Quem assumiu o turno?");
    if(pTurno === null || pTurno === ""){
        window.close();
    }

</script>

<?php

$pTurno = "<script type='text/javascript'>document.write(pTurno)</script>";

require_once '../autoload.php';

if (isset($_GET['id']) && !empty($_GET['id'])) {
  $id = $_GET['id'];
  $resumoC = new ResumoController();
  $rs = $resumoC->retornaResumo($id);
  $userC = new UsuarioController();
}


?>
<!-- Resumo acesso -->
<!DOCTYPE html>
     <html>
        <head>
            <meta charset="UTF-8">
            <meta name="viewport" content="width=device-width">
                <!-- Bootstrap CSS-->
                <link href="../assets/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">
                <link href="../assets/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
                <link rel="stylesheet" type="text/css" href="../assets/css/theme.css">
        </head>
        <body>
            <br>
            <div class="container">
                <div class="">
                    <a id="selecionar-tabela" href="#">Copiar >>>> <i class="fa fa-copy"></i></a>
                </div>
                <br>
                <table id="minha-tabela">
                    <thead>
                        <th>*Resumo do turno*: </th>
                    </thead>
                    <tbody>
                        <td>
                        <br />*<b><span style="font-size: 12px">Data</span></b>*:       <?php 
                                        $dt = array_reverse(explode('-', $rs['data']));
                                        $dt = implode('/', $dt);
                                        echo $dt;  
                                    ?>, 
                        *<b><span style="font-size: 12px">Turno</span></b>*:      <?= $rs['turno'] ?>, 
                        *<b><span style="font-size: 12px">Operador</span></b>*:   <?php
                                        $uc = $userC->retornaApelido($rs['operador']);
                                        echo $uc['apelido']; 
                                    ?>
                        <br />
                        <br />
                        <?= $rs['resumo'] ?>
                        <br />
                        *<b>Quem assumiu o turno</b>*:<br /><?= $pTurno; ?> 
                        
                    </tbody>
                </table>
               </div>
        </body>
</html>

        <!-- script copiar tabela -->
                <script type="text/javascript">
                        var Tabela = {
                          selecionarTabela: function(el) {
                            var body = document.body, range, sel;
                            if (document.createRange && window.getSelection) {
                                range = document.createRange();
                                sel = window.getSelection();
                                sel.removeAllRanges();
                                try {
                                    range.selectNodeContents(el);
                                    sel.addRange(range);
                                } catch (e) {
                                    range.selectNode(el);
                                    sel.addRange(range);
                                }
                            } else if (body.createTextRange) {
                                range = body.createTextRange();
                                range.moveToElementText(el);
                                range.select();
                            }
                            try {
                              document.execCommand('copy');
                              range.blur();
                            } catch(error){
                              // Exceção aqui
                            }
                          }
                        }

                        var selecionaTabelaBtn = document.querySelector("#selecionar-tabela");
                        var tabelaDeDados = document.querySelector("#minha-tabela");
                        // Seleciona a tabela no clique do botão
                        selecionaTabelaBtn.addEventListener("click", function(){
                          Tabela.selecionarTabela(tabelaDeDados);
                        });
                </script>


<!-- end resumo acesso -->
