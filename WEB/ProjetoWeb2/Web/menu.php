<?php
	function printMenu($menuAtivo) { ?>
		<!-- Menu -->
		<div id="linhaMenu" class="container-fluid">
			<div class="navbar navbar-inverse navbar-fixed-top" role="navigation">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand active" href="#">SOAEI</a>
					</div>

					<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
						<ul class="nav navbar-nav">
							<li>
								<a data-toggle="modal" data-target="#modalMedicoes" class="hidden-md hidden-lg">Acompanhamento de Medições</a>
							</li>
							<li <?php if($menuAtivo == 1) {echo 'class="active"';} ?>>
								<a href="#">Histórico de Medições</a>
							</li>
							<li<?php if($menuAtivo == 2) {echo 'class="active"';} ?>>
								<a data-toggle="modal" data-target="#modalSitesUteis">Sites Uteis</a>
							</li>
							<li<?php if($menuAtivo == 3) {echo 'class="active"';} ?>>
								<a href="page-previsao_tempo.php">Previsão do Tempo</a>
							</li>
							<li <?php if($menuAtivo == 4) {echo 'class="active"';} ?>
								<a href="#">Link</a>
							</li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Dropdown <span class="caret"></span></a>
								<ul class="dropdown-menu" role="menu">
									<li>
										<a href="#">Action</a>
									</li>
									<li>
										<a href="#">Another action</a>
									</li>
									<li>
										<a href="#">Something else here</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">Separated link</a>
									</li>
									<li class="divider"></li>
									<li>
										<a href="#">One more separated link</a>
									</li>
								</ul>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
			
<?php } ?>