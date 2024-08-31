<?php $this->load->view('layout/header'); ?>

<div class="container mt-5">
    <h2>Editar Alumno</h2>
    <form action="<?= base_url('index.php/alumnos/update/'.$alumno['id']) ?>" method="post">
        <div class="form-group">
            <label for="nombre">Nombre:</label>
            <input type="text" class="form-control" name="nombre" value="<?= $alumno['nombre'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="apellido">Apellido:</label>
            <input type="text" class="form-control" name="apellido" value="<?= $alumno['apellido'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="edad">Edad:</label>
            <input type="number" class="form-control" name="edad" value="<?= $alumno['edad'] ?>" required>
        </div>
        
        <div class="form-group">
            <label for="email">Email:</label>
            <input type="email" class="form-control" name="email" value="<?= $alumno['email'] ?>" required>
        </div>
        
        <button type="submit" class="btn btn-primary">Guardar Cambios</button>
        <a href="<?= base_url('index.php/alumnos') ?>" class="btn btn-secondary">Cancelar</a>
    </form>
</div>

<?php $this->load->view('layout/footer'); ?>
