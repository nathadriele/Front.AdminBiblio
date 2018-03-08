<?php 
include_once('../../inc/header.php');
// require_once('arquivo-um.php');
// require_once __DIR__ . '/inc/arquivo-um.php';

include_once('../../inc/menuaside.php');
?>

<main>
	<section id="dashboard">
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
				<h1>
					Página Editar Usuário
					<small>- Editar Dados do Usuário</small>
				</h1>
			</section>

			<!-- Main content -->
			<section class="content container-fluid">
				<div class="content-crud">
					<div class="modal-header">
						<h5 class="modal-title" id="exampleModalLabel">Editar Dados do Usuário</h5>
					</div>
					<div class="modal-body my">
						<form>
							<div class="form-group">
								<label for="recipient-name" class="control-label">Nome Completo:</label>
								<input type="text" class="form-control" id="recipient-name" placeholder="Nome">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="control-label">Email:</label>
								<input type="email" class="form-control" id="recipient-name" placeholder="Email">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="control-label">Função:</label>
								<select class="form-control">
									<option>Administrador</option>
									<option>Colaborador</option>
								</select>
							</div>
							<div class="form-group">
								<label for="recipient-name" class="control-label">Status:</label>
								<select class="form-control">
									<option>Ativo</option>
									<option>Não Ativo</option>
								</select>
							</div>
							<div class="form-group">
								<label for="exampleInputFile">Foto</label>
								<input type="file" id="exampleInputFile">
							</div>
							<div class="form-group">
								<label for="recipient-name" class="control-label">Senha:</label>
								<input type="password" class="form-control" id="recipient-name" placeholder="Senha">
							</div>
						</form>
					</div>
					<div class="modal-footer">
						<button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
						<button type="button" class="btn btn-primary btn-sm">Editar Usuário</button>
					</div>
				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
	</section>
	<main>

		<?php include_once('../../inc/footer.php'); ?>