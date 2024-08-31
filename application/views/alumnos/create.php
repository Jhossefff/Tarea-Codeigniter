<?php $this->load->view('layout/header'); ?>

<h2>Agregar Nuevo Alumno</h2>
<form action="<?= base_url('index.php/alumnos/store') ?>" method="post">
    <div class="form-group">
        <label for="nombre">Nombre:</label>
        <input type="text" class="form-control" name="nombre" required>
    </div>
    
    <div class="form-group">
        <label for="apellido">Apellido:</label>
        <input type="text" class="form-control" name="apellido" required>
    </div>
    
    <div class="form-group">
        <label for="edad">Edad:</label>
        <input type="number" class="form-control" name="edad" required>
    </div>
    
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="email" class="form-control" name="email" required>
    </div>
    
    <button type="submit" class="btn btn-primary">Guardar</button>
    <a href="<?= base_url('index.php/alumnos') ?>" class="btn btn-secondary">Cancelar</a>
</form>

<?php $this->load->view('layout/footer'); ?>
