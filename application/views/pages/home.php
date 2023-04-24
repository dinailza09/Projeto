
    <main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Listagem dos clientes</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href=" <?= base_url() ?>cliente" class="btn btn-sm btn-outline-secondary"><i class="fas fa-plus-square"></i> Cliente</a>
			</div>
		</div>
	</div>

	<div class="table-responsive">
		<table class="table table-bordered table-hover">
			<thead>
				<tr>
					<th>ID</th>
					<th>Nome</th>
					<th>Telefone</th>
          <th>Email</th>
				
				</tr>
			</thead>
			<tbody>
      <?php foreach($clientes as $cliente): ?>
        <tr>
          <td><?= $cliente['id'] ?></td>
          <td><?= $cliente['nome'] ?></td>
          <td><?= $cliente['telefone'] ?></td>
          <td><?= $cliente['email'] ?></td>
          <tr>
        <?php endforeach;?>

			</tbody>
		</table>
	</div>
</main>
	