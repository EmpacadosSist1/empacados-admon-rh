<?php
// PuestoSup
// puestoId
// usuarioId 

  $user = Consultas::listPositionImage($conn);
  $userlvl0 = Consultas::listPositionByLevel($conn);

  // Función recursiva para obtener subordinados de un supervisor
  function getSubordinates($userId, $user) {
      $subordinates = [];
      
      // Filtramos los usuarios cuyo supervisor sea el 'userId' actual
      foreach ($user as $u) {
          if ($u['PuestoSup'] == $userId) {
              // Creamos el nodo del subordinado
              $subordinate = [
                  'id' => $u['numEmpleado'], 
                  'name' => $u['puestoId'],
                  'name' => $u['puesto'],
                  'description' => $u['funciones'],
                  'parent_id' => $u['PuestoSup'],
                  'staff_department' => '',
                  'manager_id' => $u['numEmpleado'],
                  'children' => getSubordinates($u['puestoId'], $user) // Recursión para obtener subordinados de este subordinado
              ];

              $subordinates[] = $subordinate;
          }
      }
      
      return $subordinates;
  }

?>

<script>
  var INPUT_DATA = {
    api_version: '2.0',
    chart:

    <?php foreach ($userlvl0 as $un0) { ?>
      {
        id: "<?= $un0['numEmpleado'] ?>",
        name: "<?= $un0['puestoId'] ?>",
        name: "<?= $un0['puesto'] ?>",
        description: "<?= $un0['funciones'] ?>",
        parent_id: '',
        staff_department: '',
        manager_id: "<?= $un0['numEmpleado'] ?>",
        children: <?= json_encode(getSubordinates($un0['puestoId'], $user)) ?>, // Aquí llamamos a la función recursiva para obtener subordinados
        showChildren: true,
      },
    <?php } ?>

    people: [
      <?php foreach ($user as $usuario) { ?>
        {
          id: "<?= $usuario['numEmpleado'] ?>",
          name: "<?= $usuario['nombre'] . " " . $usuario['apellido1'] . " " . $usuario['apellido2'] ?>",
          photo: "<?= $usuario['ruta'] ?>",
        },
      <?php } ?>
    ],
  };

  var UPDATED_ON = '13-09-2020';
</script>
