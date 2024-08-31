<div class="form-group">
    <label for="nombre">Nombre:</label>
    <input type="text" class="form-control" name="nombre" value="<?= isset($alumno) ? $alumno['nombre'] : '' ?>" required>
</div>

<div class="form-group">
    <label for="apellido">Apellido:</label>
    <input type="text" class="form-control" name="apellido" value="<?= isset($alumno) ? $alumno['apellido'] : '' ?>" required>
</div>

<div class="form-group">
    <label for="edad">Edad:</label>
    <input type="number" class="form-control" name="edad" value="<?= isset($alumno) ? $alumno['edad'] : '' ?>" required>
</div>

<div class="form-group">
    <label for="email">Email:</label>
    <input type="email" class="form-control" name="email" value="<?= isset($alumno) ? $alumno['email'] : '' ?>" required>
</div>

<button type="submit" class="btn btn-primary"><?= isset($alumno) ? 'Guardar Cambios' : 'Guardar' ?></button>
<a href="<?= base_url('index.php/alumnos') ?>" class="btn btn-secondary">Cancelar</a>
