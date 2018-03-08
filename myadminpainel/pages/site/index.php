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
					Página Ínicial do Site
					<small>- Edição da Home do Site</small>
				</h1>
			</section>

			<!-- Main content -->
			<section class="content container-fluid">
				<div class="nav-tabs-custom content-crud">
					<ul class="nav nav-tabs">
						<li class="active"><a href="#tab_1" data-toggle="tab" aria-expanded="true">Topo</a></li>
						<li class=""><a href="#tab_2" data-toggle="tab" aria-expanded="false">Banner Slide</a></li>
						<li class=""><a href="#tab_3" data-toggle="tab" aria-expanded="false">Informativo</a></li>
						<li class=""><a href="#tab_4" data-toggle="tab" aria-expanded="false">Extras</a></li>
						<li class=""><a href="#tab_5" data-toggle="tab" aria-expanded="false">Rodapé</a></li>
					</ul>
					<div class="tab-content">
						<div class="tab-pane active" id="tab_1">
							<div class="box-x">
								<!-- /.box-header -->
								<!-- form start -->
								<form role="form">
									<div class="box-body">
										<div class="form-group">
											<label for="exampleInputEmail1">Aqui Email</label>
											<input type="email" class="form-control" id="exampleInputEmail1" placeholder="email">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Aqui Telefone</label>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="telefone">
										</div>
										<div class="form-group">
											<label for="exampleInputFile">Aqui Logo</label>
											<input type="file" id="exampleInputFile">

											<p class="help-block">140px X 55px</p>
										</div>
									</div>
									<!-- /.box-body -->

									<div class="box-footer">
										<button type="submit" class="btn btn-primary">Atualizar</button>
									</div>
								</form>
							</div>
						</div>

						<!-- /.tab-pane -->
						<div class="tab-pane" id="tab_2">
							<div class="box-x">
								<!-- /.box-header -->
								<!-- form start -->
								<form role="form">
									<div class="box-body">
										<div class="form-group">
											<label for="exampleInputEmail1">Aqui Título do Banner</label>
											<input type="text" class="form-control" id="exampleInputEmail1" placeholder="título">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Aqui Texto do Banner</label>
											<textarea class="form-control" rows="3"></textarea>
										</div>
										<div class="form-group">
											<label for="exampleInputFile">Aqui Imagem do Banner</label>
											<input type="file" id="exampleInputFile">

											<p class="help-block">1400px X 550px</p>
										</div>
									</div>
									<!-- /.box-body -->

									<div class="box-footer">
										<button type="submit" class="btn btn-primary">Atualizar</button>
									</div>
								</form>
							</div>
						</div>

						<!-- /.tab-pane -->
						<div class="tab-pane" id="tab_3">
							<div class="box-x">
								<!-- /.box-header -->
								<!-- form start -->
								<form role="form">
									<div class="box-body">
										<div class="form-group">
											<label for="exampleInputEmail1">Aqui Título do Informativo</label>
											<input type="text" class="form-control" id="exampleInputEmail1" placeholder="título">
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Aqui Texto do Informativo</label>
											<textarea class="form-control" rows="3"></textarea>
										</div>
										<div class="form-group">
											<label for="exampleInputFile">Aqui Imagem do Informativo</label>
											<input type="file" id="exampleInputFile">

											<p class="help-block">800px X 350px</p>
										</div>
									</div>
									<!-- /.box-body -->

									<div class="box-footer">
										<button type="submit" class="btn btn-primary">Atualizar</button>
									</div>
								</form>
							</div>
						</div>

						<!-- /.tab-pane -->
						<div class="tab-pane" id="tab_4">

							<h2 class="h22">Sessão Extras</h2>

							<div class="nav-tabs-custom my">
								<ul class="nav nav-tabs">
									<li class="active"><a href="#tab_101" data-toggle="tab">Dicas</a></li>
									<li><a href="#tab_202" data-toggle="tab">Curiosidades</a></li>
									<li><a href="#tab_303" data-toggle="tab">Listas</a></li>
									<li><a href="#tab_404" data-toggle="tab">Outras Mais</a></li>
								</ul>

								<div class="tab-content">
									<div class="tab-pane active" id="tab_101">
										<h2>Texto Dicas</h2>
										<textarea class="form-control" rows="4"></textarea>
										<div class="box-footer my">
											<button type="submit" class="btn btn-primary">Atualizar</button>
										</div>
									</div>
									<!-- /.tab-pane -->
									<div class="tab-pane" id="tab_202">
										<h2>Texto Curiosidades</h2>
										<textarea class="form-control" rows="4"></textarea>
										<div class="box-footer my">
											<button type="submit" class="btn btn-primary">Atualizar</button>
										</div>
									</div>
									<!-- /.tab-pane -->
									<div class="tab-pane" id="tab_303">
										<h2>Texto Listas</h2>
										<textarea class="form-control" rows="4"></textarea>
										<div class="box-footer my">
											<button type="submit" class="btn btn-primary">Atualizar</button>
										</div>
									</div>
									<!-- /.tab-pane -->
									<div class="tab-pane" id="tab_404">
										<h2>Texto Outras Mais</h2>
										<textarea class="form-control" rows="4"></textarea>
										<div class="box-footer my">
											<button type="submit" class="btn btn-primary">Atualizar</button>
										</div>
									</div>
									<!-- /.tab-pane -->
								</div>
								<!-- /.tab-content -->
							</div>
						</div>
						<!-- /.tab-pane -->

						<div class="tab-pane" id="tab_5">
							<div class="box-x">
								<!-- /.box-header -->
								<!-- form start -->
								<form role="form">
									<div class="box-body">
										<div class="form-group">
											<label for="exampleInputEmail1">Aqui Texto</label>
											<textarea class="form-control" rows="3"></textarea>
										</div>
										<div class="form-group">
											<label for="exampleInputPassword1">Aqui Links Úteis</label>
											<br>
											<br>
											<label for="exampleInputPassword1">Links 1</label>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="nome do link um - Ex: Prefeitura Municipal de Marília"><br>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="link um - Ex: http://www.marilia.sp.gov.br/prefeitura/">

											<br>
											<label for="exampleInputPassword1">Links 2</label>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="nome do link"><br>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="link">

											<br>
											<label for="exampleInputPassword1">Links 3</label>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="nome do link"><br>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="link">

											<br>
											<label for="exampleInputPassword1">Links 4</label>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="nome do link"><br>
											<input type="text" class="form-control" id="exampleInputPassword1" placeholder="link">
										</div>
									</div>
									<!-- /.box-body -->

									<div class="box-footer">
										<button type="submit" class="btn btn-primary">Atualizar</button>
									</div>
								</form>
							</div>
						</div>
						<!-- /.tab-pane -->
					</div>
					<!-- /.tab-content -->
				</div>
			</section>
			<!-- /.content -->
		</div>
		<!-- /.content-wrapper -->
	</section>
<main>

<?php include_once('../../inc/footer.php'); ?>