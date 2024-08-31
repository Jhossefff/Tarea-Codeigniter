<?php $this->load->view('layout/header'); ?>
<!-- Incluir CSS de SweetAlert2 -->
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">

<!-- Incluir JS de SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>


<h2>Listado de Alumnos</h2>
<a href="<?= base_url('index.php/alumnos/create') ?>" class="btn btn-success mb-3">Agregar Alumno</a>

<table class="table table-striped">
    <thead>
        <tr>
            <th>ID</th>
            <th>Nombre</th>
            <th>Apellido</th>
            <th>Edad</th>
            <th>Email</th>
            <th>Acciones</th>
        </tr>
    </thead>
    <tbody>
        <?php if (!empty($alumnos)): ?>
            <?php foreach ($alumnos as $alumno): ?>
            <tr>
                <td><?= $alumno['id'] ?></td>
                <td><?= $alumno['nombre'] ?></td>
                <td><?= $alumno['apellido'] ?></td>
                <td><?= $alumno['edad'] ?></td>
                <td><?= $alumno['email'] ?></td>
                <td>
                    <a href="<?= base_url('index.php/alumnos/edit/'.$alumno['id']) ?>" class="btn btn-warning btn-sm">Editar</a>
                    <a href="javascript:void(0);" onclick="confirmDelete(<?= $alumno['id'] ?>)" class="btn btn-danger btn-sm">Eliminar</a>

                </td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td colspan="6">No hay alumnos registrados.</td>
            </tr>
        <?php endif; ?>
    </tbody>
</table>

<!-- SweetAlert2 Script -->
<script>
    function confirmDelete(id) {
        // Construye la URL correctamente evitando duplicaciones
        let deleteUrl = '<?= site_url('alumnos/delete/') ?>' + id;
        Swal.fire({
            title: '¿Estás seguro?',
            text: "¡No podrás revertir esto!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Sí, eliminarlo!'
        }).then((result) => {
            if (result.isConfirmed) {
                window.location.href = deleteUrl;
            }
        });
    }
</script>




<?php $this->load->view('layout/footer'); ?>
