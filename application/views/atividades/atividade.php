<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>
<?php $this->load->view('includes/breadcrumb'); ?>



<div class="hero-unit-acens" style="padding:20px 30px;">
  <h1>Registro de Atividades</h1>
  <p>Registre aqui todas as suas atividades</p> 
</div>
<div class="container">

	<?php 
	  echo form_open('#');
	  ?>
	  <div class="incluir-all">
		  <?php
	//	  echo form_label('Digite toda a sua atividade','',array('class' => 'incluir'));
		  echo form_textarea(array('class' => 'incluir-textarea','name' => 'atividade'),'','autofocus');
		  ?>
	  
	  <?php
	  echo form_submit(array('class'=>'btn  btn-primary','name'=>'cadastrar'),'Salvar');
	  echo form_close();
	 ?> 
	
	 </div>
	 <div class="calendar">
	 </div>


</div>
<?php $this->load->view('includes/footer'); ?>

