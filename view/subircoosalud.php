<?php
 include ("secure.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Análisis-4505</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/sb-admin.css" rel="stylesheet">

    <!-- Morris Charts CSS -->
    <link href="css/plugins/morris.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #map-canvas {
            height: 25.000em;
            width: 56.250em;
      }
    </style>

</head>
<body>
     <div style="display:none"><div id="map-canvas"></div></div>
    <div id="wrapper">

        <!-- Navigation -->
        <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-marca" href="index.html"><i class="fa fa-plus-square" aria-hidden="true" style="color: #ffffff"></i>&nbsp;Analisis-4505</a>
            </div>
            <!-- Top Menu Items -->
            <ul class="nav navbar-right top-nav">
                <li class="dropdown">
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-user"></i><?php echo $_SESSION['user_name'];?><b class="caret"></b></a>
                    <ul class="dropdown-menu">
                        <li>
                            <a href="#"><i class="fa fa-fw fa-user"></i>  <?php echo $_SESSION['ips'];?></a>
                        </li>
                        <!--<li>
                            <a href="#"><i class="fa fa-fw fa-envelope"></i> Inbox</a>
                        </li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-gear"></i> Settings</a>
                        </li>
                        <li class="divider"></li>
                        <li>
                            <a href="#"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                        </li>-->
                    </ul>
                </li>
            </ul>
            <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
            <div class="collapse navbar-collapse navbar-ex1-collapse">
                <ul class="nav navbar-nav side-nav">
                    
                    <li  class="active">
                        <a href="subircajacopi.php"><i class="fa fa-user-md"></i> Cajacopi</a>
                    </li>
                    
                    <li>
                        <a href="subirnueva.php"><i class="fa fa-user-md"></i> Nueva EPS</a>
                    </li>
                    <li>
                        <a href="subirmutual.php"><i class="fa fa-user-md"></i> Mutualser</a>
                    </li>
                    <li>
                        <a href="subirambuq.php"><i class="fa fa-user-md"></i> Barrios Unidos</a>
                    </li>
                    <li>
                        <a href="subircomfacor.php"><i class="fa fa-user-md"></i>Comfacor</a>
                    </li>
                    <li>
                        <a href="subircoosalud.php"><i class="fa fa-user-md"></i> Coosalud</a>
                    </li>
                    <li>
                        <a href="subirsalud.php"><i class="fa fa-user-md"></i> Saludvida</a>
                    </li>

                    <li>
                        <a href="configuracion.php#"><i class="fa fa-cog"></i> Configuración</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </nav>

        <div id="page-wrapper">

            <div class="container-fluid">

                <!-- Page Heading 
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                           <i class="fa fa-check"> Resolución 2175</i>
                        </h1>
                    </div>
                </div>
                <!-- /.row -->            
                <!-- /.row -->
        
                <div class="row">
                    <div class="col-xs-12">
                        <p>&nbsp;</p>
                    </div>
                    <div class="col-xs-12">
                        <form  method="POST" ENCTYPE="multipart/form-data" action="rep_coosalud.php">
                          <!--<h3>Información personal</h3>-->
                          <div>&nbsp;</div>

                          <div class="row-fluid">
                            
                            <div class="span4">
                              <input name="archivo" type="file" size="100" />
                              <input name="enviar" type="submit" value="Upload File" />
                              <input name="action" type="hidden" value="upload" />    
                              
                            </div>
                                          
                          </div><!--/row-->
                          
                          <input id="submit" type="submit" name="submit" value="Enviar" />

                        </form>                                                     
                    </div>
                </div>
                <hr>

                 







                <div id='tbl' class="row"></div>
                    <div class="js-apply-validate" role="tabpanel">
                      <!-- Nav tabs -->                    
                       <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="general">                           
                                <div class="row">                                                                   
                                    <div class="table-responsive">
            
                                </div>
                            </div>
                        </div>
                <!-- /.row -->
                </div>
            <!-- /.container-fluid -->

            </div>
        <!-- /#page-wrapper -->

    </div>
    <!-- /#wrapper -->
    <!-- jQuery -->
    <script src="js/jquery.js"></script>
     <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>
    <!--<script src="js/logicalValidator.js"></script>-->
    <script src="js/main.js"></script>

     <script>        
                                
            
        $(document).ready(function() {
            //$('#botonSubidor').click(uploadAjax());

            $("#botonSubidor").click(function(){
              /* Change param of fnsubmit(param) to true to disable alert */
              //if(FNLOGIC.fnsubmit(false)){
                uploadAjax();
                
              //}else{
                /* ERROR */
              //};
            });
        });
       

    </script>    

    </body>

</html>    