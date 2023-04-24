<main role="main" class="col-md-9 ml-sm-auto col-lg-10 px-4">
	<div class="d-flex justify-content-between flex-wrap flex-md-nowrap align-items-center pt-3 pb-2 mb-3 border-bottom">
		<h1 class="h2">Cadastro de cliente</h1>
		<div class="btn-toolbar mb-2 mb-md-0">
			<div class="btn-group mr-2">
				<a href=" <?= base_url() ?>home" class="btn btn-sm btn-outline-secondary">Voltar</a>
			</div>
		</div>
	</div>


			<div class="col-md-12">
					
					<form action=" <?= base_url() ?>cliente/store" method="post">
					
					<div class="col-md-6">
						<div class="form-group">
							<label for="nome">Nome</label>
							<input type="text" class="form-control" name="nome" id="nome" placeholder="Nome" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="telefone">Telefone</label>
							<input type="text" class="form-control" name="telefone" id="telefone" placeholder="Telefone" value="" required>
						</div>
					</div>

					<div class="col-md-6">
						<div class="form-group">
							<label for="email">Email</label>
							<input type="text" class="form-control" name="email" id="email" placeholder="Email" value="" required>
						</div>
					</div>

					<div class="col-md-6">
							<button type="submit" class="btn btn-success btn-xs"><i class="fas fa-check"></i> Save</button>
							<a href="" class="btn btn-danger btn-xs"><i class="fas fa-times"></i> Cancel</a>
						</div>
					</div>
				</form>
			</div>

    </main>
  </div>
</div>
