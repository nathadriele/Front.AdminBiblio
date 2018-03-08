<?php 
include_once('../../inc/header.php');
// require_once('arquivo-um.php');
// require_once __DIR__ . '/inc/arquivo-um.php';

include_once('../../inc/menuaside.php'); ?>

<main>
	<section id="dashboard">
		<!-- Content Wrapper. Contains page content -->
		<div class="content-wrapper">
			<!-- Content Header (Page header) -->
			<section class="content-header">
                <h1>
                    Página Blog Post Criar
                    <small>- Blog e Informações</small>
                </h1>
            </section>

			<!-- Main content -->
			<section class="content container-fluid">
			<!-- Modal -->
                <div class="content-crud">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Criar Novo Post</h5>
                    </div>
                    <div class="modal-body my">
                        <form>
                            <div class="form-group">
                                <label for="exampleInputFile">Imagem</label>
                                <input type="file" id="exampleInputFile">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Título:</label>
                                <input type="text" class="form-control" id="recipient-name" placeholder="Aqui o título">
                            </div>
                            <div class="form-group">
                                <label for="recipient-name" class="control-label">Texto:</label>
                                <textarea class="form-control" rows="3"></textarea>
                            </div>
                        </form>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary btn-sm" data-dismiss="modal">Cancelar</button>
                        <button type="button" class="btn btn-primary btn-sm">Criar Post</button>
                    </div>
                </div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
	</section>
<main>

<?php include_once('../../inc/footer.php'); ?>
