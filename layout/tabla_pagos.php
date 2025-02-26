<?php require_once('../helpers/consultas.php'); ?>
<?php require_once('../helpers/utils.php'); ?>
<?php require_once('../conexion/conexion.php');
  $areaId=isset($_POST['areaId']) ? $_POST['areaId'] : ""; 
  $positionId=isset($_POST['positionId']) ? $_POST['positionId'] : "0"; 
  
  
  if($areaId==""){
    $indicadores=Consultas::listIndicator($conn); 
  }else{
    $indicadores=Consultas::listIndicator($conn); 
    //$indicadores=Consultas::listIndicatorByArea($conn,$areaId);
  }

  //consulta para ver un solo usuario con el id  


  $isInd=isset($_POST['indiv']) ? true : false;
  $userId=isset($_POST['userId']) ? $_POST['userId'] : false;
  $currentUserId=isset($_POST['currentUserId']) ? $_POST['currentUserId'] : "";  
  $month=isset($_POST['month']) ? $_POST['month'] : "";    
  $year=isset($_POST['year']) ? $_POST['year'] : "";      
  $validacion="";  
  $cantValidados=false;

  $month = $month != "" ? $month : date('m');
  $year = $year != "" ? $year : date('Y');

  /*
  if($month=="1"){
    $month="12";
    $year=date('Y')-1;
  }else{
    $month=date('m')-1;
    //$month=$month-1;
  }    
  */

  if($isInd){
    $usuarios=Consultas::listOneUser($conn, $userId);
    $validacion=Consultas::isValidated($conn, $month, $year, '11');   
    $cantValidados=$validacion[0]['cantValidados'];
  }else{
    //$usuarios=Consultas::listUsers($conn);
    $usuarios=Consultas::listUsersBySupervisor($conn, $currentUserId);
  }
  //$month = 4;

/*
if($month=="13"){
  $month="1";
  $year=date('Y')+1;
}
*/

  
?>
<?php if(($isInd==false) || ($isInd==true && $cantValidados!=false && $cantValidados>0)): ?>
<table class="table table-striped table-bordered table-sm" id="tablaPestana2" data-month="<?=$month?>" data-year="<?=$year?>">
  <?php //var_dump($cantValidados) ?>
  <!-- Contenido de la tabla -->
  <thead>
    <tr>
      <th class="st">Número de empleado</th>
      <th class="st1">Nombre</th>
      <th>Puesto</th>
      <th>Area</th>
      <th>Ceco</th>
      <th>$ Variable</th>
      <!-- <th>Nivel en estructura</th> -->
      <?php 
                for($i=0; $i<count($indicadores); $i++){
                  $indicadorIdth=$indicadores[$i]['id'];
                  $puestoIdth= $positionId;
                  $porcentajeth=Consultas::paymentVar($conn, $puestoIdth, $indicadorIdth);
                  $valorPorcentajeth= isset($porcentajeth[0]) ? $porcentajeth[0]['porcentaje'] : 0; 
                  if(!$isInd || $valorPorcentajeth>0)
                  {
              ?>
      <th class="columna<?=$indicadores[$i]['areaId']?>"><?=$indicadores[$i]['id']?> - <?=$indicadores[$i]['nombreIndicador']?></th>
      <?php        }       
                }
              ?>
      <th>Total</th>
      <th></th>
      <!-- Agrega más columnas según tus necesidades -->
    </tr>
  </thead>
  <tbody>
    <?php 
                                $arrIds2=[];
                                $paramIds2="";
                                $checkChildren2=false;
            for($k=0;$k<count($usuarios);$k++){
              $sumaPagos=0;
              $usuariosArr=$usuarios[$k];
              array_push($arrIds2,$usuariosArr['usuarioId']);
            ?>
    <tr class="<?=$usuariosArr['areaId']?>" data-user-id="<?=$usuariosArr['usuarioId']?>" data-pos-id="<?=$usuariosArr['puestoId']?>">
      <td class="st" style="min-width: 100px;"><?=$usuariosArr['numEmpleado']?></td>
      <td class="st1" style="min-width: 300px;">
        <?=$usuariosArr['nombre']." ".$usuariosArr['apellido1']." ".$usuariosArr['apellido2']?></td>
      <td style="min-width: 300px;"><?=$usuariosArr['puesto']?></td>
      <td style="min-width: 100px;"><?=$usuariosArr['area']?></td>
      <td style="min-width: 100px;"><?=$usuariosArr['ceco']?></td>
      <td style="min-width: 200px;">
        $ <?=$usuariosArr['variable']?>
      </td>
      <!--
                    <td style="min-width: 100px;"><?php //$usuariosArr['nivel']?></td>
                  -->

      <?php for($j=0;$j<count($indicadores);$j++){ 
                          $indicadorId=$indicadores[$j]['id'];
                          $porcentaje=Consultas::paymentVar($conn, $usuariosArr['puestoId'], $indicadorId);
                          $valorPorcentaje= isset($porcentaje[0]) ? $porcentaje[0]['porcentaje'] : 0; 
                          //var_dump($muestra); 
                          $indicadoresReglaGyD=Consultas::listBonusRuleByIndicatorId($conn,$indicadores[$j]['id'],0);
                          $indicadoresReglaSyL=Consultas::listBonusRuleByIndicatorId($conn,$indicadores[$j]['id'],1);
                          
                          $indicadorValores=Consultas::listIndicatorVPMIndiv($conn,$indicadores[$j]['id'],$month,$year);
                          $real=(isset($indicadorValores[0]['real'])&&$indicadorValores[0]['real']!="") ? $indicadorValores[0]['real'] : "0";
                          $objetivo=(isset($indicadorValores[0]['objetivo'])&&$indicadorValores[0]['objetivo']!="") ? $indicadorValores[0]['objetivo'] : "0";
                          $formatoId=(isset($indicadorValores[0]['formatoId'])&&$indicadorValores[0]['formatoId']!="") ? $indicadorValores[0]['formatoId'] : "0";

                          $porcCumplimiento= Utils::porcCumplimiento($real,$objetivo);

                          $diffPorc = Utils::diffPorc($real,$objetivo); 

                          if($formatoId=='4' || $formatoId=='5' || $formatoId=='6'){
                            $porcCumplimiento= Utils::porcCumplimiento($objetivo, $real);
                            $diffPorc = Utils::diffPorc($objetivo, $real);
                          }                          
                  
                if(!$isInd || $valorPorcentaje>0)
                          {
                  ?>

      <td class="columna<?=$indicadores[$j]['areaId']?>" style="min-width: 150px;">
        <?php
                  $totalpago=0; 
                  $valorGyD=Utils::calcularPorc($indicadoresReglaGyD,$porcCumplimiento,$indicadores[$j]['calculo'],$real,$diffPorc);
                  $valorSyL=Utils::calcularPorc($indicadoresReglaSyL,$porcCumplimiento,$indicadores[$j]['calculo'],$real,$diffPorc);
                    
                  if($usuariosArr['nivel']=='1'||$usuariosArr['nivel']=='2'){
                    $totalpago=$valorPorcentaje/100 * $valorGyD/100;
                  }else{
                    $totalpago=$valorPorcentaje/100 * $valorSyL/100;
                  }

                  $totalpago=$totalpago*$usuariosArr['variable'];
                  $sumaPagos+=round($totalpago, 0, PHP_ROUND_HALF_UP);
                  echo "$ ".round($totalpago, 0, PHP_ROUND_HALF_UP);
                  ?>
      </td>

      <?php } } ?>

      <td style="min-width: 100px;">$ <?=$sumaPagos?></td> <!-- Agrega más filas según tus necesidades -->
      <td style="min-width: 100px;"><?php 
                  if($usuariosArr['variable']!=0){
                    echo round((($sumaPagos/$usuariosArr['variable'])*100), 0, PHP_ROUND_HALF_UP);

                  }else{
                    echo "0";
                  }
                  
                  ?> %</td>
    </tr>
    <?php } ?>

    <?php 
                      if(count($arrIds2)>0){
                        $checkChildren2=true;
                        $paramIds2=implode(",", $arrIds2);
                      }
                      //var_dump($paramIds);
                    ?>

    <?php 
                  while($checkChildren2){
                    $arrIds2=[];
                    $usuariosChildren=[];
                    if(!$isInd){
                      $usuariosChildren=Consultas::listUsersBySupervisor($conn, $paramIds2);

                    }
                ?>

    <?php 
            for($l=0;$l<count($usuariosChildren);$l++){
              $sumaPagos=0;
              $usuariosArr=$usuariosChildren[$l];
              array_push($arrIds2,$usuariosArr['usuarioId']);
            ?>
    <tr class="<?=$usuariosArr['areaId']?>" data-user-id="<?=$usuariosArr['usuarioId']?>" data-pos-id="<?=$usuariosArr['puestoId']?>">
      <td class="st" style="min-width: 100px;"><?=$usuariosArr['numEmpleado']?></td>
      <td class="st1" style="min-width: 300px;">
        <?=$usuariosArr['nombre']." ".$usuariosArr['apellido1']." ".$usuariosArr['apellido2']?></td>
      <td style="min-width: 300px;"><?=$usuariosArr['puesto']?></td>
      <td style="min-width: 100px;"><?=$usuariosArr['area']?></td>
      <td style="min-width: 100px;"><?=$usuariosArr['ceco']?></td>
      <td style="min-width: 200px;">
        $ <?=$usuariosArr['variable']?>
      </td>
      <!--
                    <td style="min-width: 100px;"><?php //$usuariosArr['nivel']?></td>
                  -->

      <?php for($j=0;$j<count($indicadores);$j++){ 
                          $indicadorId=$indicadores[$j]['id'];
                          $porcentaje=Consultas::paymentVar($conn, $usuariosArr['puestoId'], $indicadorId);
                          $valorPorcentaje= isset($porcentaje[0]) ? $porcentaje[0]['porcentaje'] : 0; 
                          //var_dump($muestra); 
                          $indicadoresReglaGyD=Consultas::listBonusRuleByIndicatorId($conn,$indicadores[$j]['id'],0);
                          $indicadoresReglaSyL=Consultas::listBonusRuleByIndicatorId($conn,$indicadores[$j]['id'],1);
                          
                          $indicadorValores=Consultas::listIndicatorVPMIndiv($conn,$indicadores[$j]['id'],$month,$year);
                          //$real=isset($indicadorValores[0]['real']) ? $indicadorValores[0]['real'] : "";
                          //$objetivo=isset($indicadorValores[0]['objetivo']) ? $indicadorValores[0]['objetivo'] : "";
                          //$formatoId=isset($indicadorValores[0]['formatoId']) ? $indicadorValores[0]['formatoId'] : "0";
                          $real=(isset($indicadorValores[0]['real'])&&$indicadorValores[0]['real']!="") ? $indicadorValores[0]['real'] : "0";
                          $objetivo=(isset($indicadorValores[0]['objetivo'])&&$indicadorValores[0]['objetivo']!="") ? $indicadorValores[0]['objetivo'] : "0";
                          $formatoId=(isset($indicadorValores[0]['formatoId'])&&$indicadorValores[0]['formatoId']!="") ? $indicadorValores[0]['formatoId'] : "0";                          

                          $porcCumplimiento= Utils::porcCumplimiento($real,$objetivo);

                          $diffPorc = Utils::diffPorc($real,$objetivo); 

                          if($formatoId=='4' || $formatoId=='5' || $formatoId=='6'){
                            $porcCumplimiento= Utils::porcCumplimiento($objetivo, $real);
                            $diffPorc = Utils::diffPorc($objetivo, $real);
                          }                           

                  ?>
      <td class="columna<?=$indicadores[$j]['areaId']?>" style="min-width: 150px;">
        <?php
                  $totalpago=0; 
                  $valorGyD=Utils::calcularPorc($indicadoresReglaGyD,$porcCumplimiento,$indicadores[$j]['calculo'],$real,$diffPorc);
                  $valorSyL=Utils::calcularPorc($indicadoresReglaSyL,$porcCumplimiento,$indicadores[$j]['calculo'],$real,$diffPorc);
                    
                  if($usuariosArr['nivel']=='1'||$usuariosArr['nivel']=='2'){
                    $totalpago=$valorPorcentaje/100 * $valorGyD/100;
                  }else{
                    $totalpago=$valorPorcentaje/100 * $valorSyL/100;
                  }

                  $totalpago=$totalpago*$usuariosArr['variable'];
                  $sumaPagos+=round($totalpago, 0, PHP_ROUND_HALF_UP);
                  echo "$ ".round($totalpago, 0, PHP_ROUND_HALF_UP);
                  ?>
      </td>
      <?php } ?>

      <td style="min-width: 100px;">$ <?=$sumaPagos?></td> <!-- Agrega más filas según tus necesidades -->
      <td style="min-width: 100px;"><?php 
                  if($usuariosArr['variable']!=0){
                    echo round((($sumaPagos/$usuariosArr['variable'])*100), 0, PHP_ROUND_HALF_UP);

                  }else{
                    echo "0";
                  }
                  
                  ?> %</td>
    </tr>
    <?php } ?>

    <?php
                    if(count($arrIds2)>0){
                      $paramIds2=implode(",", $arrIds2);
                    }else{
                      $checkChildren2=false;
                    } 
                  }
                ?>
  </tbody>
</table>
<?php else: ?>
  <div class="container mt-4">
        <div class="row">
          <div class="col-2">

          </div>
          <div class="col" style="text-align: center;">
            <h2>Pagos en proceso de autorización</h2>

          </div>
          <div class="col-2"></div>
        </div>
      </div>  
<?php endif; ?>