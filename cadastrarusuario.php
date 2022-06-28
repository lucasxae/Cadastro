<?php
header("Content-type:text/html; charset=utf8");
require_once "classes/usuarios.php";
$Usuarios = new usuarios();

if(isset($_POST["salvar"])){

     $result = $Usuarios->inserir();

     if($result == '1'){
         header('location: cadastrarusuario.php');
     }
}
?>



<!DOCTYPE html>
<html lang="pt-br">
	<head><base href="">
		<title>Cartonearte</title>
		<meta charset="utf-8" />
		<meta property="og:locale" content="en_US" />
		<meta property="og:type" content="article" />
		<meta property="og:title" content="Metronic - Bootstrap 5 HTML, VueJS, React, Angular &amp; Laravel Admin Dashboard Theme" />
		<meta property="og:url" content="https://keenthemes.com/metronic" />
		<meta property="og:site_name" content="Keenthemes | Metronic" />
		<link rel="canonical" href="Https://preview.keenthemes.com/metronic8" />
		<link rel="shortcut icon" href="assets/media/logos/favicon.ico" />
		<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
		<link href="assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
		<link href="assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
	</head>
	<body id="kt_body" class="sidebar-enabled">
		<div class="d-flex flex-column flex-root">
			<div class="page d-flex flex-row flex-column-fluid">
				<div id="kt_aside" class="aside py-9" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="{default:'200px', '300px': '250px'}" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_toggle">
					<div class="aside-logo flex-column-auto px-9 mb-9" id="kt_aside_logo">
						<h1>Cartunearte</h1>
					</div>
					<div class="aside-menu flex-column-fluid ps-5 pe-3 mb-9" id="kt_aside_menu">
						<div class="w-100 hover-scroll-overlay-y d-flex pe-2" id="kt_aside_menu_wrapper" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-wrappers="#kt_aside, #kt_aside_menu, #kt_aside_menu_wrapper" data-kt-scroll-offset="100">
							<div class="menu menu-column menu-rounded fw-bold my-auto" id="#kt_aside_menu" data-kt-menu="true">
								<div class="menu-item">
									<a class="menu-link" href="principal.php">
										<span class="menu-icon">
											<span class="svg-icon svg-icon-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
												</svg>
											</span>
										</span>
										<span class="menu-title">Início</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="cadastrarproduto.php">
										<span class="menu-icon">
											<span class="svg-icon svg-icon-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
												</svg>
											</span>
										</span>
										<span class="menu-title">Cadastrar produto</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="cadastrarusuario.php">
										<span class="menu-icon">
											<span class="svg-icon svg-icon-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
												</svg>
											</span>
										</span>
										<span class="menu-title">Cadastrar usuário</span>
									</a>
								</div>
								<div class="menu-item">
									<a class="menu-link" href="cadastrarvendas.php">
										<span class="menu-icon">
											<span class="svg-icon svg-icon-5">
												<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
													<path d="M14.4 11H3C2.4 11 2 11.4 2 12C2 12.6 2.4 13 3 13H14.4V11Z" fill="black" />
													<path opacity="0.3" d="M14.4 20V4L21.7 11.3C22.1 11.7 22.1 12.3 21.7 12.7L14.4 20Z" fill="black" />
												</svg>
											</span>
										</span>
										<span class="menu-title"> </span>
									</a>
								</div>
								
											
										
								
							
							</div>
						</div>
					</div>
				</div>
				<div class="wrapper d-flex flex-column flex-row-fluid" id="kt_wrapper">
					<div id="kt_header" class="header">
						<div class="container d-flex align-items-center justify-content-between" id="kt_header_container">
							<div class="page-title d-flex flex-column align-items-start justify-content-center flex-wrap me-lg-2 pb-5 pb-lg-0" data-kt-swapper="true" data-kt-swapper-mode="prepend" data-kt-swapper-parent="{default: '#kt_content_container', lg: '#kt_header_container'}">
								<h1 class="d-flex flex-column text-dark fw-bolder my-0 fs-1">Cadastrar</h1>
							</div>
						</div>
					</div>
					<div class="content d-flex flex-column flex-column-fluid" id="kt_content">
						<div class="container" id="kt_content_container">
							<div class="card">
								<div class="card-body p-0">
									<div class="card-px text-center py-20 my-10">
										<h2 class="fs-2x fw-bolder mb-10">Usuário</h2>
										<p class="text-gray-400 fs-4 fw-bold mb-10">Faça seu cadastro aqui !!</p>
										<a href="listarusuarios.php" class="btn btn-primary">LISTAR</a>
										<a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_add_customer">CADASTRAR</a>
									</div>
									<div class="text-center px-4">
										<img class="mw-100 mh-300px" alt="" src="assets/media/illustrations/dozzy-1/2.png" />
									</div>
								</div>
							</div>
							<div class="modal fade" id="kt_modal_add_customer" tabindex="-1" aria-hidden="true">
								<div class="modal-dialog modal-dialog-centered mw-650px">
									<div class="modal-content">
										<form class="form" action="cadastrarusuario.php" method="POST" id="kt_modal_add_customer_form" data-kt-redirect="../../demo3/dist/apps/customers/list.html">
											<div class="modal-header" id="kt_modal_add_customer_header">
												<h2 class="fw-bolder">Usuário</h2>
												<div id="kt_modal_add_customer_close" class="btn btn-icon btn-sm btn-active-icon-primary">
													<span class="svg-icon svg-icon-1">
													</span>
												</div>
											</div>
											<div class="modal-body py-10 px-lg-17">
												<div class="scroll-y me-n7 pe-7" id="kt_modal_add_customer_scroll" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-max-height="auto" data-kt-scroll-dependencies="#kt_modal_add_customer_header" data-kt-scroll-wrappers="#kt_modal_add_customer_scroll" data-kt-scroll-offset="300px">
													<div class="fv-row mb-7">
														<label class="required fs-6 fw-bold mb-2">Email</label>
														<input type="text" class="form-control form-control-solid" placeholder="" name="email" />
													</div>												
													<div class="fv-row mb-7">
														<label class="required fs-6 fw-bold mb-2">Senha</label>
														<input type="password" class="form-control form-control-solid" placeholder="" name="senha" />
													</div>												
													<div class="fv-row mb-7">
														<label class="required fs-6 fw-bold mb-2">Nome</label>
														<input type="text" class="form-control form-control-solid" placeholder="" name="nome" />
													</div>												
													<div class="fv-row mb-7">
														<label class="required fs-6 fw-bold mb-2">Cpf</label>
														<input type="text" class="form-control form-control-solid" placeholder="" name="cpf" />
													</div>												
													<div class="fv-row mb-7">
														<label class="required fs-6 fw-bold mb-2">Tipo</label>
														<input type="text" class="form-control form-control-solid" placeholder="" name="tipo" />
													</div>																					
													<div class="fv-row mb-7">
														<label class="required fs-6 fw-bold mb-2">Cidade</label>
														<input type="text" class="form-control form-control-solid" placeholder="" name="cidade" />
													</div>																					
													<div class="fv-row mb-7">
														<label class="required fs-6 fw-bold mb-2">Estado</label>
														<input type="text" class="form-control form-control-solid" placeholder="" name="estado" />
													</div>																					
													<div class="fv-row mb-7">
														<label class="required fs-6 fw-bold mb-2">Bairro</label>

														<input type="text" class="form-control form-control-solid" placeholder="" name="bairro" />
													</div>																					
													<div class="fv-row mb-7">
														<label class="required fs-6 fw-bold mb-2">Rua</label>
														<input type="text" class="form-control form-control-solid" placeholder="" name="rua" />
													</div>																					
													<div class="fv-row mb-7">
														<label class="required fs-6 fw-bold mb-2">Número</label>
														<input type="text" class="form-control form-control-solid" placeholder="" name="numero" />
													</div>																					
													<div class="fv-row mb-7">
														<label class="required fs-6 fw-bold mb-2">Cep</label>
														<input type="text" class="form-control form-control-solid" placeholder="" name="cep" />
													</div>																					
																																
												</div>
											</div>
											<div class="modal-footer flex-center">
												<button type="submit" name="salvar" id="kt_modal_add_customer_cancel" class="btn btn-light me-3">SALVAR</button>
											</div>
										</form>
									</div>
								</div>
							</div>
						</div>
					</div>			
				</div>
			</div>
		</div>
		<div id="kt_scrolltop" class="scrolltop" data-kt-scrolltop="true">
			<span class="svg-icon">
				<svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none">
					<rect opacity="0.5" x="13" y="6" width="13" height="2" rx="1" transform="rotate(90 13 6)" fill="black" />
					<path d="M12.5657 8.56569L16.75 12.75C17.1642 13.1642 17.8358 13.1642 18.25 12.75C18.6642 12.3358 18.6642 11.6642 18.25 11.25L12.7071 5.70711C12.3166 5.31658 11.6834 5.31658 11.2929 5.70711L5.75 11.25C5.33579 11.6642 5.33579 12.3358 5.75 12.75C6.16421 13.1642 6.83579 13.1642 7.25 12.75L11.4343 8.56569C11.7467 8.25327 12.2533 8.25327 12.5657 8.56569Z" fill="black" />
				</svg>
			</span>
		</div>
		<script src="assets/plugins/global/plugins.bundle.js"></script>
		<script src="assets/js/scripts.bundle.js"></script>
		<script src="assets/js/custom/apps/customers/add.js"></script>
		<script src="assets/js/custom/widgets.js"></script>
		<script src="assets/js/custom/apps/chat/chat.js"></script>
		<script src="assets/js/custom/modals/create-app.js"></script>
		<script src="assets/js/custom/modals/upgrade-plan.js"></script>
	</body>
</html>