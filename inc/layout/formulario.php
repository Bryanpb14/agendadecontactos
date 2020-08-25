<?php $url = $_SERVER['PHP_SELF']; ?>
 
<div class="campos">
     <div class="campo">
          <label for="nombre">Nombre:</label>
          <?php if ($url == '/agendacontactos/editar.php') { ?>
               <input type="text" placeholder="Nombre Contacto" id="nombre" value="<?php echo ($contacto['nombre']) ? $contacto['nombre'] : '';  ?>">
          <?php } else { ?>
               <input type="text" placeholder="Nombre Contacto" id="nombre" value="">
          <?php } ?>
     </div>
     <div class="campo">
          <label for="empresa">Empresa:</label>
          <?php if ($url == '/agendacontactos/editar.php') { ?>
               <input type="text" placeholder="Nombre Empresa" id="empresa" value="<?php echo ($contacto['empresa']) ? $contacto['empresa'] : '';  ?>">
          <?php } else { ?>
               <input type="text" placeholder="Nombre Empresa" id="empresa" value="">
          <?php } ?>
     </div>
     <div class="campo">
          <label for="telefono">Teléfono:</label>
          <?php if ($url == '/agendacontactos/editar.php') { ?>
               <input type="tel" placeholder="Teléfono Contacto" id="telefono" value="<?php echo ($contacto['telefono']) ? $contacto['telefono'] : '';  ?>">
          <?php } else { ?>
               <input type="text" placeholder="Teléfono Contacto" id="telefono" value="">
          <?php } ?>
     </div>
</div>
<div class="campo enviar">
     <?php
     $textoBtn = ($url == '/agendacontactos/editar.php') ? 'Guardar' : 'Añadir';
     $accion = ($url == '/agendacontactos/editar.php') ? 'editar' : 'crear';
     ?>
     <input type="hidden" id="accion" value="<?php echo $accion; ?>">
     <?php if (isset($contacto['id'])) { ?>
          <input type="hidden" id="id" value="<?php echo $contacto['id']; ?>">
     <?php } ?>
     <input type="submit" value="<?php echo $textoBtn; ?>">
</div>