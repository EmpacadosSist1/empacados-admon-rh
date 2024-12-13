<?php 
  require_once('layout/session.php');
  require_once('helpers/utils.php'); 
  Utils::redirectSinPermiso(1);
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Indicadores</title>
  <link href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">

  <!-- jQuery -->
  <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script> 

</head>

<?php require 'layout/libreriasdatatable.php';?>
<script src="https://cdnjs.cloudflare.com/ajax/libs/animate/4.0.0/animate.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
<?php require 'nav.php'; ?>
<?php require_once('layout/sidebar.php'); ?>

<?php $indicadores=Consultas::listIndicator($conn); ?>
<?php $formatos = Consultas::listValueTypes($conn); ?>
<?php $reglas = Consultas::listBonusRules($conn); ?>
<?php $areas = Consultas::listAreas($conn); ?>

<style>
/* Estilos para reducir el tamaño de la tabla */


/* Estilos adicionales para hacer la tabla más compacta */
.table-rule {
  font-size: 12px;
}

.table-rule th,
.table-rule td {
  text-align: center;
}

.st {
  position: sticky;
  left: 0px;
  background-color: white;
  z-index: 2;
}

.st1 {
  position: sticky;
  left: 50px;
  background-color: white;
  z-index: 2;
}

th {
  background-color: #222;
  color: white;
  padding: 2px;
  position: -webkit-sticky;
  position: sticky;
  top: 2px;
}
</style>

<body>
<main id="main" class="main">

  <div class="pagetitle">
    <h1>INDICADORES</h1>
    <hr>
  </div><!-- End Page Title -->


    <div class="container mt-4 contenedor-form" style="display: none;">

      <div class="row mt-3">
        <div class="col">
          <label for="indicatorName">Nombre de indicador:</label>
          <input class="form-control" type="text" id="indicatorName" name="indicatorName" maxlength="100">
          <span id="error_indicatorName" class="text-danger"></span>
        </div>
        <!--

              <div class="col">
                <label for="valueTypeId">Formato:</label>
              <select id="valueTypeId" name="valueTypeId" class="form-select" required>
                <?php 
                //for ($i=0; $i < count($formatos); $i++) { ?>
                  <option value="<?php //echo $formatos[$i]['id']?>"><?php //echo $formatos[$i]['nombreFormato']?></option>
                  <?php 
                //}
                ?>
              </select>
            </div>
          -->

      </div>
      <!--
            <div class="row mt-3">
              <div class="col">
              <label for="realValue">Real:</label>
              <input class="form-control" type="number" id="realValue" name="realValue">
              <span id="error_realValue" class="text-danger"></span>
            </div>
            <div class="col">
              <label for="targetValue">Objetivo:</label>
              <input class="form-control" type="number" id="targetValue" name="targetValue">
              <span id="error_targetValue" class="text-danger"></span>
            </div>
          </div>
          
          <div class="row mt-3">
            <div class="col-6">              
              
              </div>
              <div class="col">
                <div class="form-check">
                  <input class="form-check-input" type="checkbox" id="checkAllYear">
                  <label class="form-check-label" for="checkAllYear">
                    Establecer objetivo para todo el año
                  </label>
                </div>
              </div>
            </div>
          -->

      <div class="row mt-3">
        <div class="col">
          <label for="comments">Comentarios (Opcional):</label>
          <textarea id="comments" name="comments" class="form-control" maxlength="255" required></textarea>
        </div>
      </div>

      <div class="row mt-3">
        <div class="col-6">
          <label for="calcType">Tipo de cálculo:</label>
          <select class="form-select" name="calcType" id="calcType">
            <option value="0">Cálculo de porcentaje de completado</option>
            <option value="1">Cálculo de objetivo</option>
            <option value="2">Cálculo de diferencia</option>
          </select>     
        </div>
        <div class="col">
        <label for="areaId">Área:</label>
              <select id="areaId" name="areaId" class="form-select" required>
                <option value="">- Seleccione -</option>
                  <?php 
                    for ($i=0; $i < count($areas); $i++) { ?>
                  <option value="<?=$areas[$i]['areaId']?>">
                    <?=$areas[$i]['nombreArea']?>
                  </option>
                  <?php 
                    }
                    ?>
              </select>
        </div>
      </div>

      <input type="hidden" id="indicatorId" value="0">
      <div class="row mt-3">
        <table class="table table-rule">
          <thead>
            <tr>
              <th>Regla bono</th>
              <th>Agregar</th>
              <th>GyD</th>
              <th>SyL</th>
            </tr>
          </thead>
          <tbody>
          <?php 
                for ($i=0; $i < count($reglas); $i++) { 
                  if($reglas[$i]['tipoCalculo']=='0'):
              ?>
                  <tr data-id="<?=$reglas[$i]['id']?>" class="lista-reglas type_0">
                    <td>
                      <?php
                        $mid="-";
                        if($reglas[$i]['minimo']=='T'||$reglas[$i]['maximo']=='T'){
                          $mid="";
                        } 
                        if($reglas[$i]['minimo']=='T'){
                          echo "Menor o igual a";
                        }else{
                          echo $reglas[$i]['minimo']."% ";
                        }
                        echo $mid;
                        if($reglas[$i]['maximo']=='T'){
                          echo "o más";
                        }else{
                          echo " ".$reglas[$i]['maximo']."%";
                        }
                        echo " = ";
                        if($reglas[$i]['bonus']=='T'){
                          echo "Proporcional";
                        }else{
                          echo $reglas[$i]['bonus']."%";
                        }
                      ?>
                    </td>
                    <td><input type="checkbox" class="agregar"></td>
                    <td><input type="checkbox" class="gyd" disabled></td>
                    <td><input type="checkbox" class="syl" disabled></td>                    
                  </tr>
              <?php 
                elseif($reglas[$i]['tipoCalculo']=='1'):
              ?>
                  <tr data-id="<?=$reglas[$i]['id']?>" class="lista-reglas type_1" style="display: none;">
                    <td>
                      <?php
                        $mid="a";
                        if($reglas[$i]['minimo']=='T'||$reglas[$i]['maximo']=='T'){
                          $mid="";
                        } 
                        if($reglas[$i]['minimo']=='T'){
                          echo "Menor o igual a";
                        }else{
                          echo $reglas[$i]['minimo']." ";
                        }
                        echo $mid;
                        if($reglas[$i]['maximo']=='T'){
                          echo "o más";
                        }else{
                          echo " ".$reglas[$i]['maximo'];
                        }
                        echo " = ";
                        if($reglas[$i]['bonus']=='T'){
                          echo "Proporcional";
                        }else{
                          echo $reglas[$i]['bonus']."%";
                        }
                      ?>
                    </td>
                    <td><input type="checkbox" class="agregar"></td>
                    <td><input type="checkbox" class="gyd" disabled></td>
                    <td><input type="checkbox" class="syl" disabled></td>                    
                  </tr>              
              <?php 
                else:
                  ?>
                      <tr data-id="<?=$reglas[$i]['id']?>" class="lista-reglas type_2" style="display: none;">
                        <td>
                          <?php
                            $mid="a";
                            if($reglas[$i]['minimo']=='T'||$reglas[$i]['maximo']=='T'){
                              $mid="";
                            } 
                            if($reglas[$i]['minimo']=='T'){
                              echo "Menor o igual a";
                            }else{
                              echo $reglas[$i]['minimo']." ";
                            }
                            echo $mid;
                            if($reglas[$i]['maximo']=='T'){
                              echo "o más";
                            }else{
                              echo " ".$reglas[$i]['maximo'];
                            }
                            echo " = ";
                            if($reglas[$i]['bonus']=='T'){
                              echo "Proporcional";
                            }else{
                              echo $reglas[$i]['bonus']."%";
                            }
                          ?>
                        </td>
                        <td><input type="checkbox" class="agregar"></td>
                        <td><input type="checkbox" class="gyd" disabled></td>
                        <td><input type="checkbox" class="syl" disabled></td>                    
                      </tr>              
                  <?php 
                      endif;
                }
              ?>
          </tbody>
        </table>
      </div>

      <div class="row mt-3">
        <div class="col-3"></div>
        <div class="col-6">
          <button class="btn btn-primary form-control" id="btnActualizarIndicador">Actualizar</button>
        </div>
        <div class="col-3"></div>
      </div>
    </div>

    <div class="container mt-4">
      <div class="row mt-3">
        <div class="col">
        </div>
        <div class="col text-center">
          <a class="btn btn-success" href="Manageraddindicatoradmon.php">Agregar indicador</a>
        </div>
        <div class="col">
        </div>
      </div>

      <div class="row mt-3 mb-3">
        <div class="col">
          <select class="form-select" name="area" id="area">
            <option value="">Todas las áreas</option>
            <?php for ($a=0; $a < count($areas); $a++) {  ?>
            <option value="<?=$areas[$a]['areaId']?>"><?=$areas[$a]['nombreArea']?></option>  
            <?php } ?>
          </select>
        </div>        
        <div class="col">          
        </div>
        <div class="col"></div>
      </div>

      <!-- Pestañas -->
      <ul class="nav nav-tabs" id="pestanas" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="pestaña1" data-toggle="tab" href="#contenido1" role="tab"
            aria-controls="contenido1" aria-selected="true">Indicadores</a>
        </li>

        <!-- Agrega más pestañas según sea necesario -->
      </ul>

      <!-- Contenido de las pestañas -->
      <div class="tab-content" id="contenidoPestanas">
        <!-- Contenido de la Pestaña 1 -->
        <div class="tab-pane fade show active" id="contenido1" role="tabpanel" aria-labelledby="pestaña1">
          <div class="table-responsive">
            <table class="table table-striped table-bordered" id="tablaPestana1">
              <!-- Contenido de la tabla -->
              <thead>
                <tr>
                  <th class="st">Id</th>
                  <th class="st1">Nombres</th>
                  <th>Área</th>
                  <th>Reglas Bonos GyD</th>
                  <th>Reglas Bonos SyL</th>
                  <th>Comentarios</th>
                  <th></th>
                  <th></th>
                  <!-- Agrega más columnas según tus necesidades -->
                </tr>
              </thead>
              <tbody>
                <?php 
            for ($i=0; $i < count($indicadores); $i++) { 
              $indicadoresReglaGyD=Consultas::listBonusRuleByIndicatorId($conn,$indicadores[$i]['id'],0);
              $indicadoresReglaSyL=Consultas::listBonusRuleByIndicatorId($conn,$indicadores[$i]['id'],1);
              //$porcCumplimiento= Utils::porcCumplimiento($indicadores[$i]['real'],$indicadores[$i]['objetivo']);             
              ?>
                <tr class="<?=$indicadores[$i]['areaId']?>" data-id="<?=$indicadores[$i]['id']?>" data-nombreInd="<?=$indicadores[$i]['nombreIndicador']?>"
                  data-comentarios="<?=$indicadores[$i]['comentarios']?>" data-calculo="<?=$indicadores[$i]['calculo']?>" data-areaId="<?=$indicadores[$i]['areaId']?>">
                  <td class="st" style="min-width: 50px;"><?=$indicadores[$i]['id']?></td>
                  <td class="st1" style="min-width: 100px;"><?=$indicadores[$i]['nombreIndicador']?></td>
                  <td><?=$indicadores[$i]['nombreArea']?></td>
                  <td style="min-width: 300px;">
                    <!---->
                    <?=Utils::mostrarReglas($indicadoresReglaGyD)?>
                  </td>
                  <td style="min-width: 300px;">
                    <!---->
                    <?=Utils::mostrarReglas($indicadoresReglaSyL)?>
                  </td>
                  <td style="min-width: 300px;"><?=$indicadores[$i]['comentarios']?></td>
                  <td>
                    <a class="btn btn-primary editar-ind" href="#">
                      <i class="bi bi-pencil-square"></i>
                    </a>
                  </td>
                  <td>
                    <button type="button" class="btn btn-danger eliminar-ind">
                      <i class="bi bi-trash-fill"></i>
                    </button>
                  </td>
                </tr>
                <?php 
                }
                ?>
              </tbody>
            </table>
          </div>
        </div>

        <!-- Agrega más contenidos de pestañas según sea necesario -->

      </div>
    </div>

    </div>
    <div class="modal fade" id="modalEliminar1" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <!-- Contenido del modal para eliminar -->
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Eliminar Empleado</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
          </div>
          <div class="modal-body">
            <p>¿Estás seguro de que deseas eliminar al empleado "Unity Pugh"?</p>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
            <button type="button" class="btn btn-danger">Eliminar</button>
          </div>
        </div>
      </div>
    </div>


    <!--<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>-->
    <!-- Template Main JS File -->
    <script src="assets/js/main.js"></script>


    <script>
    let arrIndRules = [];
    let oldArrRules = [];
    $(document).ready(function() {

    });

    $(".editar-ind").click(function() {
      $(".contenedor-form").show();
      let id = $(this).parent().parent().attr('data-id');
      let nombre = $(this).parent().parent().attr('data-nombreInd');
      let comentarios = $(this).parent().parent().attr('data-comentarios');
      let calculo = $(this).parent().parent().attr('data-calculo');
      let areaId = $(this).parent().parent().attr('data-areaId');

      $("#indicatorId").val(id);
      $("#indicatorName").val(nombre);
      $("#comments").val(comentarios);
      console.log(areaId);
      $("#areaId").val(areaId);
      $("#calcType").val(calculo);
      switch (calculo) {
        case '0':
          $(".type_0").show();
          $(".type_1").hide();
          $(".type_2").hide();
        break;
        case '1':
          $(".type_0").hide();
          $(".type_1").show();
          $(".type_2").hide();
        break;
        case '2':
          $(".type_0").hide();
          $(".type_1").hide();
          $(".type_2").show();        
        break;                        
        default:
          return false;
        break;
      }

      cargar_reglas(id);
      //console.log({id, nombre, comentarios});
    })

    $("#calcType").on('change', function(){
      //arrayRules($(this), 'syl');
      //console.log($(this).is(':checked'));
      let agregado=$(".agregar");
      let gyd= $(".gyd");
      let syl= $(".syl");
      agregado.prop('checked', false);
      gyd.prop('checked', false);
      syl.prop('checked', false);
      
      gyd.prop('disabled', true);
      syl.prop('disabled', true);
      
      let type = $(this).val();
      switch (type) {
        case '0':
          $(".type_0").show();
          $(".type_1").hide();
          $(".type_2").hide();
        break;
        case '1':
          $(".type_0").hide();
          $(".type_1").show();
          $(".type_2").hide();
        break;
        case '2':
          $(".type_0").hide();
          $(".type_1").hide();
          $(".type_2").show();        
        break;                        
        default:
          return false;
        break;
      }
    });    


    $("#btnActualizarIndicador").click(function() {
      let arrRules = [];
      let arrEliminadosRules = [];
      let indicadorId = $("#indicatorId").val();
      let nombreInd = $("#indicatorName").val();
      let comments = $("#comments").val();
      let areaId = $("#areaId").val();
      //let calculationType=$("#checkCalcType").is(':checked');    
      let calculationType = $("#calcType").val();

      $(".lista-reglas").each(function() {
        if ($(this).find('.agregar').prop('checked')) {
          let bonusRuleId = $(this).attr('data-id');
          let gyd = $(this).find('.gyd').prop('checked');
          let syl = $(this).find('.syl').prop('checked');

          if (gyd) {
            arrRules.push({
              rule: bonusRuleId,
              type: 0
            });
          }
          if (syl) {
            arrRules.push({
              rule: bonusRuleId,
              type: 1
            });
          }
        }
      })

      /* 
      if(arrRules.length>0){
        for(let key in arrRules){
          //console.log(arrRules[key].rule);
          //asignar_regla(data.indId, arrRules[key].rule, arrRules[key].type);
        }
      }
      */
      //arrIndRules['nombreInd']=nombreInd;
      //arrIndRules['comments']=comments;
      //arrIndRules['rules']=arrRules;      

      //const array1 = [5, 12, 8, 130, 44];
      //const found = array1.find((element) => element == 130);

      //console.log(arrRules, oldArrRules);
      //old son las reglas anteriores

      //recorrer array de reglas que estan en la bd
      for (let key in oldArrRules) {
        //en caso de que el tipo sea 2 (o sea que sean 0 y 1) se buscan manualmente el 0 y el 1. en caso de que no se encuentren
        //devuelve undefined el find, y metemos en un arreglo los que se van a eliminar
        if (oldArrRules[key]['tipo'] == '2') {
          const found = arrRules.find((element) => ((element['rule'] == oldArrRules[key]['id']) && (element[
            'type'] == '0')));
          if (found === undefined) {
            let id = oldArrRules[key]['id'];
            let tipo = '0';
            arrEliminadosRules.push({
              id,
              tipo
            })
          }
          const found2 = arrRules.find((element) => ((element['rule'] == oldArrRules[key]['id']) && (element[
            'type'] == '1')));
          if (found2 === undefined) {
            let id = oldArrRules[key]['id'];
            let tipo = '1';
            arrEliminadosRules.push({
              id,
              tipo
            })
          }
        } else {
          const found = arrRules.find((element) => ((element['rule'] == oldArrRules[key]['id']) && (element[
            'type'] == oldArrRules[key]['tipo'])));
          if (found === undefined) {
            let id = oldArrRules[key]['id'];
            let tipo = oldArrRules[key]['tipo'];
            arrEliminadosRules.push({
              id,
              tipo
            })
          }
        }
      }
      //se ejecuta funcionalidad de actualizacion del indicador con sus rules
      //console.log(arrRules, arrEliminadosRules, indicadorId, nombreInd, comments, calculationType)
      actualizar_indicador(arrRules, arrEliminadosRules, indicadorId, nombreInd, comments, calculationType, areaId)
    })

    $(".agregar").on('change', function() {
      let ruleId = $(this).parent().parent().attr('data-id');
      let agregado = $(this).is(':checked');
      let gyd = $(this).parent().parent().find('.gyd');
      let syl = $(this).parent().parent().find('.syl');
      if (agregado) {
        gyd.prop('disabled', false);
        syl.prop('disabled', false);
      } else {
        gyd.prop('disabled', true);
        syl.prop('disabled', true);
        gyd.prop('checked', false);
        syl.prop('checked', false);
        //arrRules = arrRules.filter(function (el) { return (el.rule != ruleId); });
      }
    });


    $("#area").on("change", function(){
      // Declaramos el array vacío
      let valores = [];
      let valActual = $(this).val();

      $('#area option').each(function() {
        let valComp=$(this).val();
        if(valComp!=''){
          $("."+valComp).show();

        }
      });

      // Seleccionamos todas las opciones dentro del select con id "anio"
      $('#area option').each(function() {
        let valComp=$(this).val();

        if(valActual!=valComp && valComp!='' && valActual!=""){
          $("."+valComp).hide();
        }
      });
    });


    const cargar_reglas = (indicatorId) => {
      fetch('helpers/cargar_reglas_bono.php?indicatorId=' + indicatorId, {
          method: "GET"
        })
        .then(response => {
          return response.ok ? response.json() : Promise.reject(response);
        })
        .then(data => {
          oldArrRules = data.reglas;
          console.log(oldArrRules);
          $(".lista-reglas").each(function() {
            let bonusRuleId = $(this).attr('data-id');
            //console.log(bonusRuleId);
            //console.log(data.reglas);
            $(this).find('.agregar').prop('checked', false);
            $(this).find('.gyd').prop('disabled', true);
            $(this).find('.syl').prop('disabled', true);
            $(this).find('.gyd').prop('checked', false);
            $(this).find('.syl').prop('checked', false);
            let reglasSize = data.reglas.length;
            for (let i = 0; i < reglasSize; i++) {
              if (data.reglas[i]['id'] == bonusRuleId) {
                $(this).find('.agregar').prop('checked', true);
                $(this).find('.gyd').prop('disabled', false);
                $(this).find('.syl').prop('disabled', false);

                switch (data.reglas[i]['tipo']) {
                  case '0':
                    $(this).find('.gyd').prop('checked', true);
                    break;
                  case '1':
                    $(this).find('.syl').prop('checked', true);
                    break;
                  case '2':
                    $(this).find('.gyd').prop('checked', true);
                    $(this).find('.syl').prop('checked', true);
                    break;
                }

              }
            }
            /*
             */

          })
        })
        .catch(err => {
          let message = err.statusText || "Ocurrió un error";
          console.log(err);
        })
    }

    const actualizar_indicador = (arrRules, arrEliminadosRules, indicatorId, indicatorName, comments, calculationType, areaId) => {
      $(".loader").show();
      let fd = new FormData();

      fd.append('indicatorId', indicatorId);
      fd.append('indicatorName', indicatorName);
      fd.append('comments', comments);
      fd.append('calculationType', calculationType);
      fd.append('areaId', areaId);      

      fetch('cambios/actualizar_indicador.php', {
          method: "POST",
          body: fd
        })
        .then(response => {
          return response.ok ? response.json() : Promise.reject(response);
        })
        .then(data => {
          //console.log(data.indId);
          //asignar_regla(data.indId, );
          if (arrRules.length > 0) {
            for (let key in arrRules) {
              //console.log(arrRules[key].rule);
              let tipo = 'gyd';
              if (arrRules[key].type == '1') {
                tipo = 'syl';
              }
              asignar_regla(indicatorId, arrRules[key].rule, tipo);
            }
          }

          if (arrEliminadosRules.length > 0) {
            for (let key in arrEliminadosRules) {
              //console.log(arrRules[key].rule);
              let tipo = 'gyd';
              if (arrEliminadosRules[key].tipo == '1') {
                tipo = 'syl';
              }
              quitar_regla(indicatorId, arrEliminadosRules[key].id, tipo);
            }
          }

        })
        .then(data => {
          setTimeout(() => {
            location.reload();
          }, 2000);

        })
        .catch(err => {
          let message = err.statusText || "Ocurrió un error";
          console.log(err);
        })

    }

    const asignar_regla = (indicadorId, bonusRuleId, type) => {
      let fd = new FormData();

      fd.append('indicatorId', indicadorId);
      fd.append('bonusRuleId', bonusRuleId);
      //se debe recibir el parametro type como string: gyd o syl
      fd.append('type', type);

      fetch('altas/subir_regla_bono_indicador.php', {
          method: "POST",
          body: fd
        })
        .then(response => {
          return response.ok ? response.json() : Promise.reject(response);
        })
        .then(data => {
          console.log(data);
        })
        .catch(err => {
          let message = err.statusText || "Ocurrió un error";
          console.log(err);
        })
    }

    const quitar_regla = (indicadorId, bonusRuleId, type) => {
      let fd = new FormData();
      fd.append('indicatorId', indicadorId);
      fd.append('bonusRuleId', bonusRuleId);
      //se debe recibir el parametro type como string: gyd o syl
      fd.append('type', type);

      fetch('bajas/eliminar_enlace_regla.php', {
          method: "POST",
          body: fd
        })
        .then(response => {
          return response.ok ? response.json() : Promise.reject(response);
        })
        .then(data => {
          console.log(data);
        })
        .catch(err => {
          let message = err.statusText || "Ocurrió un error";
          console.log(err);
        })
    }
    </script>
    </main>
    <?php require 'layout/footer.php';?>
  </body>

</html>