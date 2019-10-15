<?php
include "../conexion/connect.php";
include "../conexion/secure.php";
include "../admin/class/clsoperador.php";
include "../admin/class/clsauditoria.php";
include "../admin/class/clspaciente.php";
$manoperador = new manoperador;
$manauditoria = new manauditoria;
$manpaciente = new manpaciente;

$status = "";
if ($_POST["action"] == "upload") {
    // obtenemos los datos del archivo
    $tamano = $_FILES["archivo"]['size'];
    $tipo = $_FILES["archivo"]['type'];
    $archivo = $_FILES["archivo"]['name'];
    $prefijo = substr(md5(uniqid(rand())),0,6);
   
    if ($archivo != "") {
        // guardamos el archivo a la carpeta files
        //$destino =  "files/".$prefijo."_".$archivo;
        $destino =  "files/".$archivo;
        if (copy($_FILES['archivo']['tmp_name'],$destino)) {
            $status = "Archivo subido: <b>".$archivo."</b>";
        } else {
            $status = "Error al subir el archivo";
        }
    } else {
        $status = "Error al subir archivo";
    }
}

 
?>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <title>Bootstrap, from Twitter</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    
   <!-- <script src="//code.jquery.com/jquery-latest.min.js">-->
    <script src="../js/jquery-git2.js">
    <script src="../js/bootstrap.min.js"></script>
    <script src="../js/bootstrap-hover-dropdown.min.js"></script>

    <!--<script src="//code.jquery.com/jquery-latest.min.js"></script>-->
    <!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
    <script src="/downloads/bootstrap-hover-dropdown/bootstrap-hover-dropdown.js"></script>-->

    

    <!-- Le styles -->
    
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    
    

    <style type="text/css">
      body {
        padding-top: 60px;
        padding-bottom: 40px;
      }
    </style>
    <!--<link href="../css/bootstrap-responsive.css" rel="stylesheet">-->

    <!-- Le HTML5 shim, for IE6-8 support of HTML5 elements -->
    <!--[if lt IE 9]>
      <script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->

    <!-- Le fav and touch icons -->
    <link rel="shortcut icon" href="../assets/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="../assets/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="../assets/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="../assets/ico/apple-touch-icon-57-precomposed.png">

    
      
  </head>

  <body>

    
    <div class="container">
            
      <!--<img src="../img/banner.jpg"  width="100%"/>      -->
      <div class="navbar navbar-fixed">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <!--<a class="brand" href="#">Project name</a>-->
          <div class="nav-collapse">
            <ul class="nav">

              <li class="active">                 
                <a href="../menus/index.php" class="tab" data-toggle="tab">Inicio</a>                
              </li>

              <li class="dropdown">                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false">
                    Auditoría<b class="caret"></b>
                </a>
                <!--<ul class="dropdown-menu">
                    <li><a tabindex="-1" href="../admin/admempleado.php">Auditoria por Médico</a></li>                                        

                </ul>-->
              </li>


              <li class="dropdown">                
                <a href="admbuscar.php" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false">
                    Búsqueda<b class="caret"></b>
                </a>
                <!--<ul class="dropdown-menu">
                    <li><a tabindex="-1" href="../admin/admempleado.php">Información personal</a></li>                    
                    
                </ul>-->
              </li> 
              <li class="dropdown">                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false">
                    Análisis de Actividades<b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="../admin/admambuq.php">Barrios Unidos</a></li>
                    <li><a tabindex="-1" href="../admin/ambuq.php">Caprecom</a></li>
                    <li><a tabindex="-1" href="../admin/ambuq.php">Cajacopi</a></li>
                    <li><a tabindex="-1" href="../admin/ambuq.php">Comfacor</a></li>
                    <li><a tabindex="-1" href="../admin/ambuq.php">Mutualser</a></li>                    
                    <li><a tabindex="-1" href="../admin/ambuq.php">Saludvida</a></li>
                    
                </ul>
              </li> 

              <li class="dropdown">                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false">
                    Análisis del Producto<b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="../admin/admambuq.php">Cargar Archivo</a></li>
                                        
                </ul>
              </li>
              <li class="dropdown">                
                <a href="#" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="1000" data-close-others="false">
                    Configuración<b class="caret"></b>
                </a>
                <ul class="dropdown-menu">
                    <li><a tabindex="-1" href="../admin/admambuq.php">Ingresar Meta</a></li>
                                        
                </ul>
              </li>       

              <!--<li class="active"><a href="#">Inicio</a></li>
              <li><a href="#about">Empleados</a></li>                
              <li><a href="#contact">Nomina</a></li>
              <li><a href="#contact">Informes</a></li>
              <li><a href="#contact">Configuracion</a></li>
              <li><a href="#contact">Ayuda</a></li> -->
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </div>
    </div>


      <!-- Example row of columns -->
      <div class="row">
        <div class="span9">  
          

        </div>  

        <section id="resultados">

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


                <!--<tr>
                  <td>Sifilis Gestacional</td>
                  <td><?=$var15_1?></td>                                   
                </tr>
                <tr>
                  <td>Recien Nacido con Sifilis</td>
                  <td><?=$var15_2?></td>                                   
                </tr>
                <tr>
                  <td>Hipertension Inducida por la Gestacion</td>
                  <td><?=$var16?></td>                                   
                </tr>
                <tr>
                  <td>Hipotiroidismo Congenito</td>
                  <td><?=$var17?></td>                                   
                </tr>
                <tr>
                  <td>Sintomatico Respiratorio</td>
                  <td><?=$var18?></td>                                   
                </tr>
                <tr>
                  <td>Tuberculosis Multidrogoresistente</td>
                  <td><?=$var19?></td>                                   
                </tr>
                <tr>
                  <td>Lepra</td>
                  <td><?=$var20?></td>                                   
                </tr>
                <tr>
                  <td>Obesidad</td>
                  <td><?=$var21_1?></td>                                   
                </tr>
                <tr>
                  <td>Desnutricion</td>
                  <td><?=$var21_2?></td>                                   
                </tr>
                <tr>
                  <td>Mujer victima del maltrato</td>
                  <td><?=$var22_1?></td>                                   
                </tr>
                <tr>
                  <td>Menor victima del maltrato</td>
                  <td><?=$var22_2?></td>                                   
                </tr>
                <tr>
                  <td>Victima de Violencia Sexual</td>
                  <td><?=$var23?></td>                                   
                </tr>
                <tr>
                  <td>Infecciones de Trasmision Sexual</td>
                  <td><?=$var24?></td>                                   
                </tr>
                <tr>
                  <td>Ansiedad</td>
                  <td><?=$var25_1?></td>                                   
                </tr>
                <tr>
                  <td>Depresion</td>
                  <td><?=$var25_2?></td>                                   
                </tr>
                <tr>
                  <td>Esquizofrenia</td>
                  <td><?=$var25_3?></td>                                   
                </tr>
                <tr>
                  <td>Hiperactividad</td>
                  <td><?=$var25_4?></td>                                   
                </tr>
                <tr>
                  <td>Sustancias Psicoactivas</td>
                  <td><?=$var25_5?></td>                                   
                </tr>
                <tr>
                  <td>Animo Bipolar</td>
                  <td><?=$var25_6?></td>                                   
                </tr>
                <tr>
                  <td>Cancer de Cervix</td>
                  <td><?=$var26?></td>                                   
                </tr>
                <tr>
                  <td>Cancer de Seno</td>
                  <td><?=$var27?></td>                                   
                </tr>
                <tr>
                  <td>Fluorosis Dental</td>
                  <td><?=$var28?></td>                                   
                </tr>
                <tr>
                  <td>BCG</td>
                  <td><?=$var35?></td>                                   
                </tr>
                <tr>
                  <td>Hepatitis b</td>
                  <td><?=$var36?></td>                                   
                </tr>
                <tr>
                  <td>Pentavelente 1 Dosis</td>
                  <td><?=$var37_1?></td>                                   
                </tr>
                <tr>
                  <td>Pentavelente 2 Dosis</td>
                  <td><?=$var37_2?></td>                                   
                </tr>
                <tr>
                  <td>Pentavelente 3 Dosis</td>
                  <td><?=$var37_3?></td>                                 
                </tr>
                <tr>
                  <td>Polio 1 Dosis</td>
                  <td><?=$var38_1?></td>                                   
                </tr>
                <tr>
                  <td>Polio 2 Dosis</td>
                  <td><?=$var38_2?></td>                                   
                </tr>
                <tr>
                  <td>Polio 3 Dosis</td>
                  <td><?=$var38_3?></td>                                   
                </tr>
                <tr>
                  <td>Polio 4 Dosis</td>
                  <td><?=$var38_4?></td>                                   
                </tr>
                <tr>
                  <td>Polio 5 Dosis</td>
                  <td><?=$var38_5?></td>                                   
                </tr>
                <tr>
                  <td>DPT 4 Dosis</td>
                  <td><?=$var39_1?></td>                                   
                </tr>
                <tr>
                  <td>DPT 5 Dosis</td>
                  <td><?=$var39_2?></td>                                   
                </tr>
                <tr>
                  <td>Rotavirus 1 Dosis</td>
                  <td><?=$var40_1?></td>                                   
                </tr>
                <tr>
                  <td>Rotavirus 2 Dosis</td>
                  <td><?=$var40_2?></td>                                   
                </tr>
                <tr>
                  <td>Neumococo 1 Dosis</td>
                  <td><?=$var41_1?></td>                                   
                </tr>
                <tr>
                  <td>Neumococo 2 Dosis</td>
                  <td><?=$var41_2?></td>                                   
                </tr>
                <tr>
                  <td>Neumococo 3 Dosis</td>
                  <td><?=$var41_3?></td>                                   
                </tr>
                <tr>
                  <td>Influenza 1 Dosis</td>
                  <td><?=$var42_1?></td>                                   
                </tr>
                <tr>
                  <td>Influenza 2 Dosis</td>
                  <td><?=$var42_2?></td>                                   
                </tr>
                <tr>
                  <td>Influenza 3 Dosis</td>
                  <td><?=$var42_3?></td>                                   
                </tr>
                <tr>
                  <td>Fiebre amarilla</td>
                  <td><?=$var43?></td>                                   
                </tr>
                <tr>
                  <td>Hepatitis A</td>
                  <td><?=$var44?></td>                                   
                </tr>
                <tr>
                  <td>Triple viral 1 Dosis</td>
                  <td><?=$var45_1?></td>                                   
                </tr>
                <tr>
                  <td>Triple viral 2 Dosis</td>
                  <td><?=$var45_2?></td>                                   
                </tr>
                <tr>
                  <td>VPH 1 Dosis</td>
                  <td><?=$var46_1?></td>                                   
                </tr>
                <tr>
                  <td>VPH 2 Dosis</td>
                  <td><?=$var46_2?></td>                                   
                </tr>
                <tr>
                  <td>VPH 3 Dosis</td>
                  <td><?=$var46_3?></td>                                   
                </tr>
                <tr>
                  <td>TD O TT 1 Dosis</td>
                  <td><?=$var47_1?></td>                                   
                </tr>
                <tr>
                  <td>TD O TT 2 Dosis</td>
                  <td><?=$var47_2?></td>                                   
                </tr>
                <tr>
                  <td>TD O TT 3 Dosis</td>
                  <td><?=$var47_3?></td>                                   
                </tr>
                <tr>
                  <td>TD O TT 4 Dosis</td>
                  <td><?=$var47_4?></td>                                   
                </tr>
                <tr>
                  <td>TD O TT 5 Dosis</td>
                  <td><?=$var47_5?></td>                                   
                </tr>
                <tr>
                  <td>Control placa</td>
                  <td><?=$var48?></td>                                   
                </tr>
                <tr>
                  <td>Atencion del Parto o cesaria</td>
                  <td><?=$var49?></td>                                   
                </tr>
                <tr>
                  <td>Fecha salida atencion parto</td>
                  <td><?=$var50?></td>                                   
                </tr>
                
                <tr>
                  <td>Control de recien nacido</td>
                  <td><?=$var52?></td>                                   
                </tr>
                
                <tr>
                  <td>Fecha suministro Metodo Anticonceptivo</td>
                  <td><?=$var55?></td>                                   
                </tr>
                
                
                
                <tr>
                  <td>Desnutricion proteico calorica</td>
                  <td><?=$var64?></td>                                   
                </tr>
                <tr>
                  <td>Menor victima de maltrato</td>
                  <td><?=$var65?></td>                                   
                </tr>
                <tr>
                  <td>Consulta victima violencia sexual</td>
                  <td><?=$var66?></td>                                   
                </tr>
                <tr>
                  <td>Consulta nutricion</td>
                  <td><?=$var67?></td>                                   
                </tr>
                <tr>
                  <td>Consulta psicologia</td>
                  <td><?=$var68?></td>                                   
                </tr>
                
                
                <tr>
                  <td>Asesoria pre test</td>
                  <td><?=$var75?></td>                                   
                </tr>
                <tr>
                  <td>Asesoria pos test</td>
                  <td><?=$var76?></td>                                   
                </tr>
                <tr>
                  <td>Diag.Psicologia. En proceso</td>
                  <td><?=$var77_1?></td>                                   
                </tr>
                <tr>
                  <td>Diag.Psicologia  Recibio atencion</td>
                  <td><?=$var77_2?></td>                                   
                </tr>
                
                
                
                <tr>
                  <td>Fecha Colposcopia</td>
                  <td><?=$var91?></td>                                   
                </tr>
                <tr>
                  <td>Fecha Biopsia Cervical</td>
                  <td><?=$var93?></td>                                   
                </tr>
                <tr>
                  <td>Fecha Mamografía</td>
                  <td><?=$var96?></td>                                   
                </tr>
                <tr>
                  <td>Fecha Toma BiopsiaSeno por BACAF</td>
                  <td><?=$var99?></td>                                   
                </tr>
                <tr>
                  <td>Fecha Resultado Biopsia Seno</td>
                  <td><?=$var100?></td>                                   
                </tr>
                <tr>
                  <td>Fecha Toma de Hemoglobina</td>
                  <td><?=$var103?></td>                                   
                </tr>
                
                <tr>
                  <td>Fecha Toma de Baciloscopia de Diagnóstico</td>
                  <td><?=$var112?></td>                                   
                </tr>

                <tr>
                  <td>Fecha de Terminación Tratamiento para Leishmaniasis</td>
                  <td><?=$var118?></td>                                   
                </tr>-->
    
          

              </tbody>
            </table>   
                    
            <?php 

            //}
                  
            ?>  

          
           
        </section> 
      
      </div>

      <hr>

      <footer>
        <p>&copy; Migradatos</p>
      </footer>

    </div> <!-- /container -->

    <!-- Le javascript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="../assets/js/jquery.js"></script>
    <script src="../assets/js/bootstrap-transition.js"></script>
    <script src="../assets/js/bootstrap-alert.js"></script>
    <script src="../assets/js/bootstrap-modal.js"></script>
    <script src="../assets/js/bootstrap-dropdown.js"></script>
    <script src="../assets/js/bootstrap-scrollspy.js"></script>
    <script src="../assets/js/bootstrap-tab.js"></script>
    <script src="../assets/js/bootstrap-tooltip.js"></script>
    <script src="../assets/js/bootstrap-popover.js"></script>
    <script src="../assets/js/bootstrap-button.js"></script>
    <script src="../assets/js/bootstrap-collapse.js"></script>
    <script src="../assets/js/bootstrap-carousel.js"></script>
    <script src="../assets/js/bootstrap-typeahead.js"></script>

  </body>
</html>