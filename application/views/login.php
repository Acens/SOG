<?php $this->load->view('includes/header'); ?>

<div class="page-header text-center">
  <h1>S.O.G.<br><small>Sistema Online de Gestão - Acens</small></h1>
</div>

<div class="container">
	<div class="row">
		<div class="span4 offset4 well">
			<legend>Login</legend>
          	<div class="alert alert-error">
                <a class="close" data-dismiss="alert" href="#">×</a>Usuário ou senha incorretos!
            </div>
      <?php 
      echo form_open('index/login');
      echo form_input(array('id'=>'username', 'class'=>'span4', 'name'=>'username', 'placeholder'=>'Usuário'),'','autofocus');
      echo form_password(array('id'=>'password', 'class'=>'span4', 'name'=>'senha', 'placeholder'=>'Senha'),'','');
      echo form_submit(array('class'=>'btn btn-primary','name'=>'Login'),'Login');
      echo form_close();
      ?>
    </div>
	</div>
</div>

<?php $this->load->view('includes/footer'); ?>
