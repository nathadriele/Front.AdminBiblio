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
					Página Usuários
					<small>- Cadastro, Edição e Exclusão</small>
				</h1>
			</section>

			<!-- Main content -->
			<section class="content container-fluid">
				<div class="btn-my-criar">
					<a href="create.php"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#criarusuario">Criar novo usuário </button></a>
				</div>

				<table class="table table-responsive-sm table-bordered">
					<thead>
						<tr class="top">
							<th scope="col"><i class="fa fa-address-book" aria-hidden="true"></i></th>
							<th scope="col">Nome</th>
							<th scope="col">Função</th>
							<th scope="col">Status</th>
							<th scope="col">Alterar/Deletar</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<th scope="row">1</th>
							<td>Victor Lima</td>
							<td>Autor</td>
							<td>Ativo</td>
							<td>
								<a href="edit.php"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editarusuario"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#excluirusuario"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<th scope="row">2</th>
							<td>Nathy Lima</td>
							<td>Administrador</td>
							<td>Ativo</td>
							<td>
								<a href="edit.php"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editarusuario"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#excluirusuario"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
							</td>
						</tr>
						<tr>
							<th scope="row">3</th>
							<td>Rogério Teixeira</td>
							<td>Autor</td>
							<td>Não Ativo</td>
							<td>
								<a href="edit.php"><button type="button" class="btn btn-primary btn-sm" data-toggle="modal" data-target="#editarusuario"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
								<button type="button" class="btn btn-danger btn-sm" data-toggle="modal" data-target="#excluirusuario"><i class="fa fa-trash-o" aria-hidden="true"></i></button>
							</td>
						</tr>
					</tbody>
				</table>

				<div class="dataTables_paginate paging_simple_numbers" id="example2_paginate">
					<ul class="pagination">
						<li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Anterior</a></li>
						<li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li>
						<li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li>
						<li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li>
						<li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Próximo</a></li>
					</ul>
				</div>
			</section>
			<!-- /.content -->

			<!-- Modal -->
		    <div class="modal fade" id="excluirusuario" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
		        <div class="modal-dialog modal-sm" role="document">
		            <div class="modal-content">
		                <div class="modal-header">
		                    <h5 class="modal-title" id="exampleModalLabel">Excluir Usuário</h5>
		                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
		                        <span aria-hidden="true"><i class="fa fa-times" aria-hidden="true"></i></span>
		                    </button>
		                </div>
		                <div class="modal-body">
		                    Você realmente deseja excluir usuário!
		                </div>
		                <div class="modal-footer">
		                    <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
		                    <button type="button" class="btn btn-danger btn-sm">Excluir Usuário</button>
		                </div>
		            </div>
		        </div>
		    </div>
		</div>
		<!-- /.content-wrapper -->
	</section>
<main>

<?php include_once('../../inc/footer.php'); ?>
