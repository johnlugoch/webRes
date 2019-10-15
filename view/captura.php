<?php 
$return = Array('ok'=>TRUE);
$upload_folder ='images';
$nombre_archivo = $_FILES['archivo']['name'];
$tipo_archivo = $_FILES['archivo']['type'];
$tamano_archivo = $_FILES['archivo']['size'];
$tmp_archivo = $_FILES['archivo']['tmp_name'];
$archivador = $upload_folder . '/' . $nombre_archivo;
if (!move_uploaded_file($tmp_archivo, $archivador)) {
    $return = Array('ok' => FALSE, 'msg' => "Ocurrio un error al subir el archivo. ".$nombre_archivo." No pudo guardarse.", 'status' => 'error');
}   
header('Content-Type: application/json');
echo json_encode($return);
?>

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
                    
                    <li class="active">
                        <a href="captura.php"><i class="fa fa-user-md"></i> Nueva EPS</a>
                    </li>
                    <li>
                        <a href="ninos05.php"><i class="fa fa-user-md"></i> Mutualser</a>
                    </li>
                    <li>
                        <a href="ninos611.php"><i class="fa fa-user-md"></i> Barrios Unidos</a>
                    </li>
                    <li>
                        <a href="ninos1217.php"><i class="fa fa-user-md"></i>Comfacor</a>
                    </li>
                    <li>
                        <a href="gestante.php"><i class="fa fa-user-md"></i> Coosalud</a>
                    </li>
                    <li>
                        <a href="parto.php"><i class="fa fa-user-md"></i> Saludvida</a>
                    </li>

                    <li>
                        <a href="editarpersona.php"><i class="fa fa-cog"></i> Configuración</a>
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
                        <input type="file" id="archivo" name="archivo"  />
                        <button id="botonSubidor">Enviar</button>                                                        
                    </div>
                </div>
                <hr>

                 <?php 
           
           $filas=file($destino);   
          $i=0;   
          $var14 =0;
          $var15_1 =0;
          $var15_2 =0;
          $var16 = 0;
          $var17 = 0;
          $var18 = 0;
          $var19 = 0;
          $var20 = 0;
          $var21_1 =0;
          $var21_2 =0;
          $var22_1 =0;
          $var22_2 =0;
          $var22 = 0;
          $var23 = 0;
          $var24 = 0;
          $var25_1 = 0;
          $var25_2 = 0;
          $var25_3 = 0;
          $var25_4 = 0;
          $var25_5 = 0;
          $var25_6 = 0;
          $var26 = 0;
          $var27 = 0;
          $var28 = 0;
          $var35=0; $var36=0; $var37_1=0; $var37_2=0; $var37_3=0; $var38_1=0;$var38_2=0; $var38_3=0; $var38_4=0; $var38_5=0;
          $var39_1=0; $var39_2=0; $var40_1=0; $var40_2=0; $var41_1=0; $var41_2=0; $var41_3=0; $var42_1=0; $var42_2=0; $var42_3=0; $var43=0;$var44=0;         
          $var45_1=0; $var45_2=0;$var46_1=0; $var46_2=0; $var46_3=0; $var47_1=0;$var47_2=0; $var47_3=0; $var47_4=0; $var47_5=0;
          $var48=0;
          $var49=0; $var50=0;$var51=0;$var52=0;$var53=0;$var54=0;$var55=0;$var56=0;$var57=0;$var58=0;$var59=0;
          $var60=0;$var61=0;$var62=0;$var63=0;$var64=0;$var65=0;$var66=0;$var67=0;$var68=0;$var69=0;
          $var70=0;$var71=0;$var72=0;$var73=0;$var74=0;$var75=0;$var76=0;$var77_1=0;$var77_2=0;$var78=0;$var79_1=0;$var79_2=0;
          $var81_1=0;$var81_2=0;$var82=0;$var84=0;$var85_1=0;$var85_2=0;$var80=0;$var83_1=0;$var83_2=0;$var84=0;
          $var86_1=0;$var86_2=0;$var86_3=0;
          $var87=0;
          $var91=0;
          $var93=0;
          $var96=0;
          $var99=0;
          $var100=0;
          $var103=0;
          $var105=0;
          $var106=0;
          $var108=0;
          $var110=0;
          $var111=0;
          $var112=0;
          $var118=0;

          $fecha1='2017-01-01'; $fecha2='2017-01-31';

          while(isset($filas[$i])!=NULL){   

  $sql = explode("|",$filas[$i]);   
  for($j=0; $j<count($sql); $j++){
     if ($j==14){
       if($sql[$j]=='1'){
         $var14++;  
       }
     }
     if ($j==15){
       if($sql[$j]=='1'){
         $var15_1++;  
       }
       if($sql[$j]=='2'){
         $var15_2++;  
       }
     }
     if ($j==16){
       if($sql[$j]=='1'){
         $var16++;  
       }       
     }
     if ($j==17){
       if($sql[$j]=='1'){
         $var17++;  
       }       
     }
     if ($j==18){
       if($sql[$j]=='1'){
         $var18++;  
       }       
     }
     if ($j==19){
       if($sql[$j]=='1'){
         $var19++;  
       }       
     }
     if ($j==20){
       if($sql[$j]=='1'){
         $var20++;  
       }       
     }
     if ($j==21){
       if($sql[$j]=='1'){
         $var21_1++;  
       }
       if($sql[$j]=='2'){
         $var21_2++;  
       }         
     }
     if ($j==22){
       if($sql[$j]=='1'){
         $var22_1++;  
       }
       if($sql[$j]=='2'){
         $var22_2++;  
       }         
     }
     if ($j==23){
       if($sql[$j]=='1'){
         $var23++;  
       }       
     }
     if ($j==24){
       if($sql[$j]=='1'){
         $var24++;  
       }       
     }
     if ($j==25){
       if($sql[$j]=='1'){
         $var25_1++;  
       }  
       if($sql[$j]=='2'){
         $var25_2++;  
       }    
       if($sql[$j]=='3'){
         $var25_3++;  
       } 
       if($sql[$j]=='4'){
         $var25_4++;  
       } 
       if($sql[$j]=='5'){
         $var25_5++;  
       } 
       if($sql[$j]=='6'){
         $var25_6++;  
       }                   
     }
     if ($j==26){
       if($sql[$j]=='1'){
         $var26++;  
       }       
     }
     if ($j==27){
       if($sql[$j]=='1'){
         $var27++;  
       }       
     }     
     if ($j==28){
       if($sql[$j]=='1'){
         $var28++;  
       }       
     }  
//Vacunación----------------------------------------------------
    if ($j==35){
       if($sql[$j]=='1'){
         $var35++;  
       }       
     } 
     if ($j==36){
       if($sql[$j]=='1'){
         $var36++;  
       }       
     }   
     if ($j==37){
       if($sql[$j]=='1'){
         $var37_1++;  
       } 
       if($sql[$j]=='2'){
         $var37_2++;  
       }
       if($sql[$j]=='3'){
         $var37_3++;  
       }           
     } 
     if ($j==38){
       if($sql[$j]=='1'){
         $var38_1++;  
       } 
       if($sql[$j]=='2'){
         $var38_2++;  
       }
       if($sql[$j]=='3'){
         $var38_3++;  
       } 
       if($sql[$j]=='4'){
         $var38_4++;  
       } 
       if($sql[$j]=='5'){
         $var38_5++;  
       }           
     }     
     if ($j==39){
       if($sql[$j]=='4'){
         $var39_1++;  
       } 
       if($sql[$j]=='5'){
         $var39_2++;  
       }
     }
     if ($j==40){
       if($sql[$j]=='1'){
         $var40_1++;  
       } 
       if($sql[$j]=='2'){
         $var40_2++;  
       }
     }
     if ($j==41){
       if($sql[$j]=='1'){
         $var41_1++;  
       } 
       if($sql[$j]=='2'){
         $var41_2++;  
       }
       if($sql[$j]=='3'){
         $var41_3++;  
       } 
     }
     if ($j==42){
       if($sql[$j]=='1'){
         $var42_1++;  
       } 
       if($sql[$j]=='2'){
         $var42_2++;  
       }
       if($sql[$j]=='3'){
         $var42_3++;  
       } 
     }
     if ($j==43){
       if($sql[$j]=='1'){
         $var43++;  
       }
     }
     if ($j==44){
       if($sql[$j]=='1'){
         $var44++;  
       }
     } 
     if ($j==45){
       if($sql[$j]=='1'){
         $var45_1++;  
       } 
       if($sql[$j]=='2'){
         $var45_2++;  
       }      
     }
     if ($j==46){
       if($sql[$j]=='1'){
         $var46_1++;  
       } 
       if($sql[$j]=='2'){
         $var46_2++;  
       }
       if($sql[$j]=='3'){
         $var46_3++;  
       } 
     }
     if ($j==47){
       if($sql[$j]=='1'){
         $var47_1++;  
       } 
       if($sql[$j]=='2'){
         $var47_2++;  
       }
       if($sql[$j]=='3'){
         $var47_3++;  
       } 
       if($sql[$j]=='4'){
         $var47_4++;  
       } 
       if($sql[$j]=='5'){
         $var47_5++;  
       } 
     }
     if ($j==48){
       if($sql[$j]=='1'){
         $var48++;  
       }       
     }
     if ($j==49){
       if(($sql[$j]>= $fecha1) and($sql[$j]<=$fecha2)){
         $var49++;
       }

     }
     if ($j==50){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var50++;
       }

     }
     if ($j==51){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var51++;
       }

     }
     if ($j==52){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var52++;
       }

     }
     if ($j==53){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var53++;
       }

     }
     if ($j==55){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var55++;
       }

     }
     if ($j==56){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var56++;
       }

     }
     if ($j==59){
       if($sql[$j]=='1'){
         $var59++;  
       }
     } 
     if ($j==60){
       if($sql[$j]=='1'){
         $var60++;  
       }
     } 
     if ($j==61){
       if($sql[$j]=='1'){
         $var61++;  
       }
     } 
      if ($j==62){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var62++;
       }

     }
     if ($j==63){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var63++;
       }

     }
     if ($j==64){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var64++;
       }

     }
     if ($j==65){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var65++;
       }

     }
     if ($j==66){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var66++;
       }

     }
     if ($j==67){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var67++;
       }

     }
     if ($j==68){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var68++;
       }

     }
     if ($j==69){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var69++;
       }

     }
     if ($j==70){
       if($sql[$j]=='1'){
         $var70++;  
       }
     } 
     if ($j==71){
       if($sql[$j]=='1'){
         $var71++;  
       }
     }
     if ($j==72){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var72++;
       }

     }
     if ($j==73){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var73++;
       }

     } 

     if ($j==75){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var75++;
       }

     }
     if ($j==76){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var76++;
       }

     } 
     if ($j==77){
       if($sql[$j]=='1'){
         $var77_1++;  
       } 
       if($sql[$j]=='2'){
         $var77_2++;  
       }
     }
    if ($j==78){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var78++;
       }

     }
     if ($j==79){
       if($sql[$j]=='1'){
         $var79_1++;  
       } 
       if($sql[$j]=='2'){
         $var79_2++;  
       }
     } 
     if ($j==80){
       if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var80++;
       }

     }
    if ($j==81){
       if($sql[$j]=='1'){
         $var81_1++;  
       }
       if($sql[$j]=='2'){
         $var81_2++;  
       }

    } 
     

    if ($j==82){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var82++;
      }
    }
    if ($j==83){
       if($sql[$j]=='1'){
         $var83_1++;  
       }
       if($sql[$j]=='2'){
         $var83_2++;  
       }
    } 

    if ($j==84){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
         $var84++;
      }
    }
    
    if ($j==85){
       if($sql[$j]=='1'){
         $var85_1++;  
       }
       if($sql[$j]=='2'){
         $var85_2++;  
       }
    }

    


    if ($j==87){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var87++;
      }
    }
    if ($j==91){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var91++;
      }
    }
    if ($j==93){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var93++;
      }
    }
    if ($j==96){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var96++;
      }
    }
    if ($j==99){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var99++;
      }
    }
    if ($j==100){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var100++;
      }
    }
    if ($j==103){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var103++;
      }
    }
    if ($j==105){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var105++;
      }
    }
    if ($j==106){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var106++;
      }
    }
    if ($j==108){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var108++;
      }
    }
    if ($j==110){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var110++;
      }
    }
    if ($j==111){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var111++;
      }
    }
    if ($j==112){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var112++;
      }
    }
    if ($j==118){
      if(($sql[$j]>= $fecha1) and ($sql[$j]<=$fecha2)){
        $var118++;
      }
    }



     
     //echo $j ." ".$sql[$j].'<br/>'; 
   
  }     

  echo "<p />"; 
  $i++; 
}    
             
                
          ?>











                <div id='tbl' class="row"></div>
                    <div class="js-apply-validate" role="tabpanel">
                      <!-- Nav tabs -->                    
                       <!-- Tab panes -->
                        <div class="tab-content">
                            <div role="tabpanel" class="tab-pane fade in active" id="general">                           
                                <div class="row">                                                                   
                                    <div class="table-responsive">
            <table class="table table-striped">
              <thead>
                <tr>
                  <th>Programa</th>
                  <th>Nombre de Actividad</th>  
                  <th>Población por atender</th>                                   
                  <th>Población Atendida</th>                  

                </tr>
              </thead>
              <tbody>
                <!--Crecimiento y desarrollo-->
                <tr>
                  <td>Cto Y Desarrollo</td>
                  <td>Consulta Crecimiento y desarrollo</td>
                  <th>X</th>
                  <td><?=$var69?></td>                                   
                </tr>


                <tr>
                  <td>Cto Y Desarrollo</td>
                  <td>Suministro Sulfato Ferroso</td>
                  <th>X</th>
                  <td><?=$var70?></td>                                   
                </tr>
                <tr>
                  <td>Cto Y Desarrollo</td>
                  <td>Suministro Vitamina A</td>
                  <th>X</th>
                  <td><?=$var71?></td>                                   
                </tr>

                <!--Adulto Joven -->
                <tr>
                  <td>Joven</td>
                  <td>Consulta Joven 1era Vez</td>
                  <th>X</th>
                  <td><?=$var72?></td>                                   
                </tr>

                <!--Adulto Mayor-->
                <tr>
                  <td>Adulto</td>
                  <td>Consulta Adulto 1era Vez</td>
                  <th>X</th>
                  <td><?=$var73?></td>                                   
                </tr>

                <tr>
                  <td>Adulto</td>
                  <td>Fecha de la Toma de Glicemia Basal</td>
                  <th>X</th>
                  <td><?=$var105?></td>                                   
                </tr>
                <tr>
                  <td>Adulto</td>
                  <td>Fecha Creatinina</td>
                  <th>X</th>
                  <td><?=$var106?></td>                                   
                </tr>
                <tr>
                  <td>Adulto</td>
                  <td>Fecha Hemoglobina Glicosilada</td>
                  <th>X</th>
                  <td><?=$var108?></td>                                   
                </tr>
                <tr>
                  <td>Adulto</td>
                  <td>Fecha Toma de Microalbuminuria</td>
                  <th>X</th>
                  <td><?=$var110?></td>                                   
                </tr>
                <tr>
                  <td>Adulto</td>
                  <td>Fecha Toma de HDL</td>
                  <th>X</th>
                  <td><?=$var111?></td>                                   
                </tr>

                <!--Planificación Familiar-->
                <tr>
                  <td>Planificacion familiar</td>
                  <td>Consulta Planificacion familiar</td>
                  <th>X</th>
                  <td><?=$var53?></td>                                   
                </tr>

                <!--Gestante-->

                <tr>
                  <td>Control prenatal</td>
                  <td>Gestantes</td>
                  <th>X</th>
                  <td><?=$var14?></td>                                   
                </tr>

                <tr>
                  <td>Control prenatal</td>
                  <td>Control prenatal de primera vez</td>
                  <th>X</th>
                  <td><?=$var56?></td>                                   
                </tr>
                <tr>
                  <td>Control prenatal</td>
                  <td>Suministro de acido folico control prenatal</td>
                  <th>X</th>
                  <td><?=$var59?></td>                                   
                </tr>
                <tr>
                  <td>Control prenatal</td>
                  <td>Suministro de sulfato ferroso</td>
                  <th>X</th>
                  <td><?=$var60?></td>                                   
                </tr>
                <tr>
                  <td>Control prenatal</td>
                  <td>Suministro de carbonato de calcio</td>
                  <th>X</th>
                  <td><?=$var61?></td>                                   
                </tr>
                <tr>
                  <td>Control prenatal</td>
                  <td>Consejeria lactancia materna</td>
                  <th>X</th>
                  <td><?=$var51?></td>                                   
                </tr>

                <tr>
                  <td>Control prenatal</td>
                  <td>Antigeno superficie Hepatitis B</td>
                  <th>X</th>
                  <td><?=$var78?></td>                                   
                </tr>
                <tr>
                  <td>Control prenatal</td>
                  <td>Resultado Antigeno Hepatitis B - Negativo</td>
                  <th>X</th>
                  <td><?=$var79_1?></td>                                   
                </tr>
                <tr>
                  <td>Control prenatal</td>
                  <td>Resultado Antigeno Hepatitis B - Positivo</td>
                  <th>X</th>
                  <td><?=$var79_2?></td>                                   
                </tr>
                <tr>
                  <td>Control prenatal</td>
                  <td>Fecha Serologia sifilis</td>
                  <th>X</th>
                  <td><?=$var80?></td>                                   
                </tr>
                <tr>
                  <td>Control prenatal</td>
                  <td>Resultado Serologia sifilis no reactiva</td>
                  <th>X</th>
                  <td><?=$var81_1?></td>                                   
                </tr>
                <tr>
                  <td>Control prenatal</td>
                  <td>Resultado Serologia sifilis reactiva</td>
                  <th>X</th>
                  <td><?=$var81_2?></td>                                   
                </tr>
                <tr>
                  <td>Control prenatal</td>
                  <td>Fecha toma elisa vih</td>
                  <th>X</th>
                  <td><?=$var82?></td>                                   
                </tr>
                <tr>
                  <td>Control prenatal</td>
                  <td>Resultado elisa vih negativo</td>
                  <th>X</th>
                  <td><?=$var83_1?></td>                                   
                </tr>
                <tr>
                  <td>Control prenatal</td>
                  <td>Resultado elisa vih positivo</td>
                  <th>X</th>
                  <td><?=$var83_2?></td>                                   
                </tr>

                <!--PARTO-->
                <tr>
                  <td>Parto</td>
                  <td>Fecha TSH Neonatal</td>
                  <th>X</th>
                  <td><?=$var84?></td>                                   
                </tr>
                <tr>
                  <td>Parto</td>
                  <td>TSH Neonatal Normal</td>
                  <th>X</th>
                  <td><?=$var85_1?></td>                                   
                </tr>
                <tr>
                  <td>Parto</td>
                  <td>TSH Neonatal Anormal</td>
                  <th>X</th>
                  <td><?=$var85_2?></td>                                   
                </tr>

                <!--CITOLOGIA -->
                <tr>
                  <td>Citología</td>
                  <td>Citología Cervico uterina</td>
                  <th>X</th>
                  <td><?=$var87?></td>                                   
                </tr>
                
                <!--Salud Visual-->
                <tr>
                  <td>Salud Visual</td>
                  <td>Valoración de agudeza visual</td>
                  <th>X</th>
                  <td><?=$var62?></td>                                   
                </tr>
                <tr>
                  <td>Salud Visual</td>
                  <td>Consulta por oftalmologia</td>
                  <th>X</th>
                  <td><?=$var63?></td>                                   
                </tr>
                </tbody>
            </table>  
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