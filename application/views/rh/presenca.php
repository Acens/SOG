<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>
<?php $this->load->view('includes/breadcrumb'); ?>



<div class="hero-unit-acens hero-unit-acens-small">
  <h1>Presença</h1>
  <p>Veja aqui as presenças dos membros e suas atividades</p> 
</div>

<div class="container">

	<ul class="nav nav-tabs" id="myTab">
		<li class="active" data-toggle="tab"><a href="#home">Individual</a></li>
		<li data-toggle="tab"><a href="#profile">Todos</a></li>
	  
	</ul>
	 
	<div class="tab-content">
	  	<div class="tab-pane active" id="home">...</div>
	  	<div class="tab-pane" id="profile">
	  		<div class="calendar_presenca">
			</div>
		</div>
	</div>


	
</div>


<?php $this->load->view('includes/footer'); ?>