<?php 

session_start(); 

require '../autoload.php';

if (!$_SESSION['logon']){
    header("Location: login.php");
}

$userC = new UsuarioController();


if (isset($_GET['id']) && !empty($_GET['id'])) {
      $id = $_GET['id'];
      //$rsmC = new ResumoController();
      //$rsm = $rsmC->retornaResumo($id);
}


?>

      <!-- MENU SIDEBAR-->
<?php include_once 'menu.php'; ?>
<!-- MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">

            <!-- HEADER DESKTOP-->
        <?php include_once 'topo.php'; ?>
            <!-- HEADER DESKTOP-->
            
          <?php

          if(isset($_GET['msg']) && !empty($_GET['msg'])){
              $msg = $_GET['msg'];

          ?>
            <!-- Java Script -->
            
            <script type="text/javascript">
                Snackbar.show({
                  text: '<b><?= $msg ?></b>',
                  pos: 'top-center',
                  actionText: '',
                  backgroundColor: '#1476C6',

                });
            </script>

            <!-- Java Script -->

          <?php

            }

          ?>
          
            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-md-12" style="line-height:35px; margin-top:30px">
                                <div style="float: left;">
                                    <?= !isset($id) ? "Registrar Resumo" : "Editar Resumo" ?>
                                </div>
                                <!-- <div style="float: right;">
                                    <button class="btn btn-success" onclick="window.open('cad_acesso.php', '_self')"> <i class="fa fa-plus"></i> Acesso</button>
                                </div>
                            -->
                            </div>
                        </div>
                  <div class="row m-t-30" style="margin-top: 10px;">
                      <div class="col-md-12">
                          <!-- DATA TABLE-->
                          <div class="table-responsive m-b-40">
                                    
            <!-- Content -->
                <!-- MAIN CONTENT-->
                <div class="main-content" style="padding-top: 10px;">
                    <div class="section__content section__content--p30">
                        <div class="container-fluid">
                            <div class="row">
                  
                                <div class="col-lg-12" style=" margin: auto;">
                      
                                <div class="div-cad-acesso">
                                  <div class="form-part form-part-button-form" style="padding-top: 10px">
                                    
                                    <button type="button" class="btn btn-primary" onclick="window.open('resumos.php', '_self')"><<<</button>
                                    </button>
                                    
                                    <div class="div-cad-acesso-int">
                                    
                                   <!-- /# column -->
                                    <div class="col-lg-11">
                                       
                                            
                                            <div style="margin: auto; padding-left: 35px; padding-right: 35px">

                                                    <!-- RESUMOS -->
                                                        <div class="tab-pane fade show active">
                                                     <p>
                                                    <!-- Form -->
                                                        <form action="../controller/ResumoController.class.php" method="get">

                                                        <div class="row" style="margin-bottom: 7px">
                                                            
                                                            <div class="col-md-12" style="background-color: #E9ECEF">
                                                                
                                                                <!-- DATA
                                                                <div class="col-md-3" style="float: right">
                                                                <?php
                                                                    date_default_timezone_set('America/Sao_Paulo');
                                                                    $data = date("d/m/Y", time());
                                                                ?>
                                                                <input type="datetime" id="data" name="data" class="form-control form-control-sm input-format-center" 
                                                                value="<?php
                                                                            if (isset($rsm['data'])) {
                                                                                $dt = array_reverse(explode('-', $rsm['data']));
                                                                                $dt = implode('/', $dt);
                                                                                echo $dt;
                                                                            } else {
                                                                                echo $data;
                                                                            }
                                                                        ?>" style="font-weight: bold; font-size: 14px; border: 0px" readonly>
                                                                </div>
                                                            
                                                                END DATA -->

                                                            </div>
                                                        </div>

                                                        <br>

<div class="container bootstrap snippet">
    <div class="row">
    	
    </div>
    <div class="row">

  		<div class="col-sm-3"><!--left col-->
              

                <div class="text-center">
                    <img src="http://ssl.gstatic.com/accounts/ui/avatar_2x.png" class="avatar img-circle img-thumbnail" alt="avatar">
                    <br>
                    <input type="file" class="text-center center-block file-upload">
                </div>
                </hr>
                <br>
      
                <div class="panel panel-default">
                        
                </div>
                      
        </div><!--/col-3-->


    	<div class="col-sm-9">
              
          <div class="tab-content">
            <div class="tab-pane active" id="home">
                <hr>
                  <form class="form" action="##" method="post" id="registrationForm">
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="first_name"><h4>First name</h4></label>
                              <input type="text" class="form-control" name="first_name" id="first_name" placeholder="first name" title="enter your first name if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="last_name"><h4>Last name</h4></label>
                              <input type="text" class="form-control" name="last_name" id="last_name" placeholder="last name" title="enter your last name if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="phone"><h4>Phone</h4></label>
                              <input type="text" class="form-control" name="phone" id="phone" placeholder="enter phone" title="enter your phone number if any.">
                          </div>
                      </div>
          
                      <div class="form-group">
                          <div class="col-xs-6">
                             <label for="mobile"><h4>Mobile</h4></label>
                              <input type="text" class="form-control" name="mobile" id="mobile" placeholder="enter mobile number" title="enter your mobile number if any.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Email</h4></label>
                              <input type="email" class="form-control" name="email" id="email" placeholder="you@email.com" title="enter your email.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="email"><h4>Location</h4></label>
                              <input type="email" class="form-control" id="location" placeholder="somewhere" title="enter a location">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                              <label for="password"><h4>Password</h4></label>
                              <input type="password" class="form-control" name="password" id="password" placeholder="password" title="enter your password.">
                          </div>
                      </div>
                      <div class="form-group">
                          
                          <div class="col-xs-6">
                            <label for="password2"><h4>Verify</h4></label>
                              <input type="password" class="form-control" name="password2" id="password2" placeholder="password2" title="enter your password2.">
                          </div>
                      </div>
                      <div class="form-group">
                           <div class="col-xs-12">
                                <br>
                              	<button class="btn btn-lg btn-success" type="submit"><i class="glyphicon glyphicon-ok-sign"></i> Save</button>
                               	<button class="btn btn-lg" type="reset"><i class="glyphicon glyphicon-repeat"></i> Reset</button>
                            </div>
                      </div>
              	</form>
              
              <hr>
              
             </div><!--/tab-pane-->
            
          </div><!--/tab-content-->

        </div><!--/col-9-->
    </div><!--/row-->
                                                      
                                                        
                                                        <!-- END RESUMO DIÁRIO DE TURNO -->
                                                        
                                                        
                                                        <?= !isset($id) ? "<input type='hidden' name='acao' value='cadastrar'>" : "<input type='hidden' name='acao' value='editar'> <input type='hidden' name='id' value='$id'>" ?>
                                                        
                                                        <!-- BUTTON SUBMIT -->
                                                        <hr>
                                                        <div class="row">
                                                            <div class="form-part form-part-button-form" style="padding-bottom: 40px; clear:both; width: 100%;">
                                                                <button type="submit" class="btn btn-success" id="sbmt" onclick="myFunction()">
                                                                    <?= !isset($id) ? "Salvar" : "Editar" ?>
                                                                </button>
                                                            </div>
                                                        </div>
                                                        <!-- END BUTTON SUBMIT -->

                                                        </form>
                                                        <!-- End Form -->
                                                      </<span>
                                                </div>
                                                <!--END CHECKLIST -->
                                            </div>
                                            
                                        </div>
                                    
                                <!-- /# column -->

                                  </div>

                            </div>
                          </div>

                        </div>
                            
                       </div>

                     </div>
                        
                 </div>
              </div>
            </div>
        </div>
            <script type="text/javascript">
                $('#sbmt').click(function() { 
                
                }); 
            </script>
            <script type="text/javascript">
        
                $(document).ready(function() {
                
                var readURL = function(input) {

                if (input.files && input.files[0]) {
                    var reader = new FileReader();

                    reader.onload = function (e) {
                        $('.avatar').attr('src', e.target.result);
                    }

                    reader.readAsDataURL(input.files[0]);
                }
                }

                $(".file-upload").on('change', function(){
                    readURL(this);
                });
                });
        
            </script>
     
    </div>
<!-- End Content -->


                                </div>
                                <!-- END DATA TABLE-->
                            </div>
                        </div>

        <!-- RODAPÉ -->
<?php include_once 'rodape.php'; ?>
<!-- RODAPÉ -->