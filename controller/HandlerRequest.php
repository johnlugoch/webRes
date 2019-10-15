<?php


if( isset($_GET['op']) )
{
    switch ($_GET['op']) 
    {
               

        case "getPersonaSelectValues":
        
            require './RecienController.php';
    
            $recienController = new RecienController();
            $recienController->getSelectValues();
    
            
        break;

        case "saveRecien":

                require './RecienController.php';
                     
                $recienController = new RecienController();
                
                $recienController->saveRecien($_POST['tipoIdentificacion'], $_POST['numero'], $_POST['fechaNacimiento'], $_POST['sexo'],$_POST['etnia'],$_POST['primerApellido'], $_POST['segundoApellido'],$_POST['primerNombre'],$_POST['segundoNombre'],$_POST['tamizaje'],$_POST['fechaTamizaje']);                
        break;

        case "updateRecien":

                require './RecienController.php';
                     
                $recienController = new RecienController();
                
                $recienController->updateRecien($_POST['codigo'],$_POST['tipoIdentificacion'], $_POST['numero'], $_POST['fechaNacimiento'], $_POST['sexo'], $_POST['etnia'], $_POST['primerApellido'], $_POST['segundoApellido'],$_POST['primerNombre'],$_POST['segundoNombre'],$_POST['tamizaje'],$_POST['fechaTamizaje']);                           
        break;

        case "ninos_05":

                require './Ninos05Controller.php';
                     
                $ninos05Controller = new Ninos05Controller();                
                $ninos05Controller->save($_POST['tipoIdentificacion'], $_POST['id'], $_POST['fechaNacimiento'], $_POST['sexo'], $_POST['etnia'], $_POST['primerApellido'], $_POST['segundoApellido'], $_POST['primerNombre'], $_POST['segundoNombre'], 
                  $_POST['fechaAtencion'], $_POST['finalidad'], $_POST['cups'],$_POST['peso'], $_POST['talla'], $_POST['fechaSulfato'],
                  $_POST['fechaVitamina'], $_POST['fechaMicro'], $_POST['fechaHemo'],$_POST['hemo']);                     
        break;

        case "updateninos05":

                require './Ninos05Controller.php';
                     
                $ninos05Controller = new Ninos05Controller();                
                $ninos05Controller->updateNinos05($_POST['codigo'],$_POST['tipoIdentificacion'],$_POST['id'], $_POST['fechaNacimiento'], $_POST['sexo'], $_POST['etnia'], $_POST['primerApellido'], $_POST['segundoApellido'], $_POST['primerNombre'],$_POST['segundoNombre'],
                                              $_POST['fechaAtencion'],$_POST['finalidad'],$_POST['cups'],$_POST['peso'],$_POST['talla'],$_POST['fechaSulfato'],$_POST['fechaVitamina'],$_POST['fechaMicro'],$_POST['fechaHemo'],$_POST['hemo']);                        
        break;

        case "ninos_611":

                require './Ninos611Controller.php';
                     
                $ninos611Controller = new Ninos611Controller();                
                $ninos611Controller->save($_POST['id'],$_POST['tipoIdentificacion'], $_POST['fechaNacimiento'], $_POST['sexo'],$_POST['primerNombre'],$_POST['segundoNombre'],$_POST['primerApellido'], $_POST['segundoApellido'],$_POST['etnia'],
                                              $_POST['fechaAtencion'],$_POST['finalidad'],$_POST['cups'],$_POST['peso'],$_POST['talla'],$_POST['fechaHemo'],$_POST['hemo']);                        
        break;

        case "updateninos611":

                require './Ninos611Controller.php';
                     
                $ninos611Controller = new Ninos611Controller();                
                $ninos611Controller->update($_POST['codigo'], $_POST['id'],$_POST['tipoIdentificacion'], $_POST['fechaNacimiento'], $_POST['sexo'],$_POST['primerNombre'],$_POST['segundoNombre'],$_POST['primerApellido'], $_POST['segundoApellido'],$_POST['etnia'],
                                              $_POST['fechaAtencion'],$_POST['finalidad'],$_POST['cups'],$_POST['peso'],$_POST['talla'],$_POST['fechaHemo'],$_POST['hemo']);                        
        break;

        case "ninos_1217":

                require './Ninos1217Controller.php';
                $ninos1217Controller = new Ninos1217Controller();                 
                $ninos1217Controller->save($_POST['id'],$_POST['tipoIdentificacion'], $_POST['fechaNacimiento'], $_POST['sexo'],$_POST['primerNombre'],$_POST['segundoNombre'],$_POST['primerApellido'], $_POST['segundoApellido'],$_POST['etnia'],
                                              $_POST['fechaAtencion'],$_POST['finalidad'],$_POST['cups'],$_POST['peso'],$_POST['talla'],$_POST['fechaHemo'],$_POST['hemo']);       
                                                  
        break;

        case "updateninos1217":

                require './Ninos1217Controller.php';
                     
                $ninos1217Controller = new Ninos1217Controller();                
                $ninos1217Controller->update($_POST['codigo'],$_POST['id'], $_POST['tipoIdentificacion'],  $_POST['fechaNacimiento'], $_POST['sexo'], $_POST['etnia'], $_POST['primerApellido'], $_POST['segundoApellido'], $_POST['primerNombre'],$_POST['segundoNombre'],
                                              $_POST['fechaAtencion'],$_POST['finalidad'],$_POST['cups'],$_POST['peso'],$_POST['talla'],$_POST['fechaHemo'],$_POST['hemo']);                        
        break;

        case "gestante":

                require './GestanteController.php';
                     
                $gestanteController = new GestanteController();                
                $gestanteController->save( $_POST['id'], $_POST['tipoIdentificacion'], $_POST['primerApellido'], 
                                          $_POST['segundoApellido'],
                                          $_POST['primerNombre'],
                                          $_POST['segundoNombre'],
                                          $_POST['fechaNacimiento'],
                                          $_POST['gestacional'],
                                          $_POST['etnia'],                                          
                                          $_POST['fechaAtencion'],
                                          $_POST['finalidad'],
                                          $_POST['cups'],
                                          $_POST['fechafolico'],
                                          $_POST['fechaSulfato'], 
                                          $_POST['fechaCarbonato'],
                                          $_POST['fechaAntigeno'], 
                                          $_POST['resultadoAntigeno'],
                                          $_POST['fechaSerologia'],
                                          $_POST['resultadoSerologia'],
                                          $_POST['fechaAsesoria'], 
                                          $_POST['fechaTomaElisa'], 
                                          $_POST['resultadoElisa'], 
                                          $_POST['fechaHemo'],
                                          $_POST['hemo'],  
                                          $_POST['fechaConsejeria']);

        break;

        case "updategestante":

                require './GestanteController.php';
                     
                $gestanteController = new GestanteController();                
                $gestanteController->update($_POST['codigo'], $_POST['id'], $_POST['tipoIdentificacion'], $_POST['primerApellido'], 
                                          $_POST['segundoApellido'],
                                          $_POST['primerNombre'],
                                          $_POST['segundoNombre'],
                                          $_POST['fechaNacimiento'],
                                          $_POST['gestacional'],
                                          $_POST['etnia'],                                          
                                          $_POST['fechaAtencion'],
                                          $_POST['finalidad'],
                                          $_POST['cups'],
                                          $_POST['fechafolico'],
                                          $_POST['fechaSulfato'], 
                                          $_POST['fechaCarbonato'],
                                          $_POST['fechaAntigeno'], 
                                          $_POST['resultadoAntigeno'],
                                          $_POST['fechaSerologia'],
                                          $_POST['resultadoSerologia'],
                                          $_POST['fechaAsesoria'], 
                                          $_POST['fechaTomaElisa'], 
                                          $_POST['resultadoElisa'], 
                                          $_POST['fechaHemo'],
                                          $_POST['hemo'],  
                                          $_POST['fechaConsejeria']);

        break;

        case "parto":

                require './PartoController.php';
                     
                $partoController = new PartoController();                
                $partoController->save($_POST['tipoIdentificacion'],
                                          $_POST['id'],                                                                                     
                                          $_POST['primerApellido'], 
                                          $_POST['segundoApellido'],
                                          $_POST['primerNombre'],
                                          $_POST['segundoNombre'],
                                          $_POST['etnia'],
                                          
                                          $_POST['fechaAtencion'],
                                          $_POST['finalidad'],
                                          $_POST['cups'],

                                          $_POST['toma_prueba_sifi'],
                                          $_POST['fecha_prueba_sifi'], 
                                          $_POST['resultado_sero'],

                                          $_POST['asesoria_pre_elisa'], 
                                          $_POST['fecha_ases_elisa'],
                                          $_POST['toma_prueba_vih'],
                                          $_POST['fechaPruebaVih'],
                                          $_POST['resultadoPruebaVih'], 
                                          $_POST['sumAnticonceptivo'], 
                                          $_POST['fechaAnticonceptivo']);                                           
        break;

        case "updateparto":

                require './PartoController.php';
                     
                $partoController = new PartoController();                
                $partoController->update($_POST['codigo'], $_POST['tipoIdentificacion'],
                                          $_POST['id'],                                                                                     
                                          $_POST['primerApellido'], 
                                          $_POST['segundoApellido'],
                                          $_POST['primerNombre'],
                                          $_POST['segundoNombre'],
                                          $_POST['etnia'],
                                          
                                          $_POST['fechaAtencion'],
                                          $_POST['finalidad'],
                                          $_POST['cups'],

                                          $_POST['toma_prueba_sifi'],
                                          $_POST['fecha_prueba_sifi'], 
                                          $_POST['resultado_sero'],

                                          $_POST['asesoria_pre_elisa'], 
                                          $_POST['fecha_ases_elisa'],
                                          $_POST['toma_prueba_vih'],
                                          $_POST['fechaPruebaVih'],
                                          $_POST['resultadoPruebaVih'], 
                                          $_POST['sumAnticonceptivo'], 
                                          $_POST['fechaAnticonceptivo']);                                           
        break;

        case "getMeta":
            require './RecienController.php';

            $recienController = new RecienController();
            $recienController->getMeta($_GET['id']);
        break;

              
        case "getInfoRecien":
            require './RecienController.php';

            $recienController = new RecienController();
            $recienController->getInfoRecien($_GET['id']);
        break;

        case "getInfoNinos05":
            require './RecienController.php';

            $recienController = new RecienController();
            $recienController->getInfoNinos05($_GET['id']);
        break;

         case "getInfoNinos611":
            require './RecienController.php';

            $recienController = new RecienController();
            $recienController->getInfoNinos611($_GET['id']);
        break;

        case "getInfoNinos1217":
            require './RecienController.php';

            $recienController = new RecienController();
            $recienController->getInfoNinos1217($_GET['id']);
        break;

        case "getInfoGestante":
            require './RecienController.php';

            $recienController = new RecienController();
            $recienController->getInfoGestante($_GET['id']);
        break;

        case "getInfoParto":
            require './RecienController.php';

            $recienController = new RecienController();
            $recienController->getInfoParto($_GET['id']);
        break;

         case "getListaPersona":
            require './RecienController.php';

            $recienController = new RecienController();
            $recienController->getListaPersona($_POST['tipo'], $_POST['identificacion']);
        break;


        default:
        break;
    }
}

?>