<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel = "stylesheet" type = "text/css" href = "<?php echo base_url(); ?>css/style.css">
	<title>CRUD</title>
</head>
<body>
	<div class="container">
		<br>
		<div class="row">
			<h2>CRUD</h2>
		</div>
		<br><br>
		<div class="row">
			<div class="card col-12">
				<div class="card-header">
					<h4>Tabla de Personas</h4>
				</div>
				<div class="card-body">
				<table class="table">
					<thead>
						<tr>
						<th scope="col">#</th>
						<th scope="col">Nombre</th>
						<th scope="col">Primer Apellido</th>
						<th scope="col">Segundo Apellido</th>
						<th scope="col">Fecha de Nacimiento</th>
						<th scope="col">Genero</th>
						<th scope="col">DPI</th>
						<th scope="col">Teléfono</th>
						<th scope="col">Correo Electrónico</th>
						<th scope="col">Eliminar</th>
						<th scope="col">Editar</th>
						</tr>
					</thead>
					<tbody class="table-group-divider">
						<?php 
							$count = 0;
							foreach ($personas as $persona){
								echo '
									<tr>
										<th scope="row">'.++$count.'</th>
										<td>'.$persona->nombre.'</td>
										<td>'.$persona->ap.'</td>
										<td>'.$persona->am.'</td>
										<td>'.$persona->fn.'</td> 
										<td>'.$persona->genero.'</td>
										<td>'.$persona->DPI.'</td>
										<td>'.$persona->Telefono.'</td>
										<td>'.$persona->correo_electronico.'</td>		
										<td><button id="btn-id" onclick="clicked('.$persona->id.')" class="btn btn-danger"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-trash" viewBox="0 0 16 16">
										<path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
										<path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
									  	</svg></button></td>
										<td><button type="button" class="btn btn-warning" onclick="llenar_datos('.$persona->id.',`'.$persona->nombre.'`, `'.$persona->ap.'`, `'.$persona->am.'`, `'.$persona->fn.'`, `'.$persona->genero.'`, `'.$persona->DPI.'`, `'.$persona->Telefono.'`, `'.$persona->correo_electronico.'`)"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-pencil-square" viewBox="0 0 16 16">
										<path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
										<path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
										</svg></button></td>
									</tr>
								';
							}
						?>
					</tbody>
					</table>
				</div>
			</div>
		</div><br><br><br>
		<div class="mb-5">
		<?php echo form_open('crud_ci\agregar', ['id' => 'form-persona']); ?>
			<div class="row">
				<div class="form-group col-sm-4">
					<label for="">Nombre</label>
					<input type="text" name="nombre" class="form-control" required placeholder="Nombre" id="nombre">
				</div>
				<div class="form-group col-sm-4">
					<label for="">Primer Apellido</label>
					<input type="text" name="ap" class="form-control" required placeholder="Primer Apellido" id="ap">
				</div>
				<div class="form-group col-sm-4">
					<label for="">Segundo Apellido</label>
					<input type="text" name="am" class="form-control" required placeholder="Segundo Apellido" id="am">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-4">
					<label for="">Fecha de Nacimiento</label>
					<input type="date" name="fn" class="form-control" required id="fn">
				</div>
				<div class="form-group col-sm-4">
					<label for="">Genero</label>
					<input type="text" name="genero" class="form-control" required placeholder="M/F" id="genero">
				</div>
			</div>
			<div class="row">
				<div class="form-group col-sm-4">
					<label for="">DPI</label>
					<input type="text" name="DPI" pattern="[0-9]{4}-[0-9]{5}-[0-9]{4}" class="form-control" required placeholder="DPI" id="DPI" maxlength = "15">
				</div>
				<div class="form-group col-sm-4">
					<label for="">Teléfono</label>
					<input type="tel" name="Telefono" pattern="[0-9]{8}" class="form-control" required placeholder="Teléfono" id="Telefono" maxlength = "8">
				</div>
				<div class="form-group col-sm-4">
					<label for="">Correo Electrónico</label>
					<input type="email" name="correo_electronico" class="form-control" required placeholder="example@correo.com" id="correo_electronico">
				</div>
			</div>
			<br>
			<button type="submit" class="btn btn-primary btn-block">Guardar</button>
		<?php echo form_close(); ?>
		</div>
	</div>
	<script>
		let url = "<?php echo base_url('crud_ci/editar'); ?>"
		const llenar_datos = (id, nombre, ap, am, fn, genero, DPI, Telefono, correo_electronico) =>{
			let path = url + "/" + id;
			document.getElementById('form-persona').setAttribute('action', path);
			document.getElementById('nombre').value = nombre;
			document.getElementById('ap').value = ap;
			document.getElementById('am').value = am;
			document.getElementById('fn').value = fn;
			document.getElementById('genero').value = genero;
			document.getElementById('DPI').value = DPI;
			document.getElementById('Telefono').value = Telefono;
			document.getElementById('correo_electronico').value = correo_electronico;
		}
	</script>
	<script src="<?php echo base_url(); ?>js/sw.js"></script>
	<script>
		const clicked = (id) => {
			swal({
				title: "¿Estas seguro?",
				text: "Una vez eliminado, no podras recuperar este elemento...",
				icon: "warning",
				buttons: true,
				dangerMode: true,
				})
				.then((willDelete) => {
				if (willDelete) {
					swal("Presiones OK para proceder.", {
					icon: "success",
					}).then((willDelete1) => {
						if (willDelete1) {
							location.replace("crud_ci/eliminar/"+id);
						}
					});
				} else {
					swal("No se ha eliminado nada.");
				}
				});
		}
	</script>
</body>
</html>