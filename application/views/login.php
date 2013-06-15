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
		<!--
    	<form method="POST" action="" accept-charset="UTF-8">
			<input type="text" id="username" class="span4" name="username" placeholder="Usuário">
			<input type="password" id="password" class="span4" name="password" placeholder="Senha">
            <label class="checkbox">
            	<input type="checkbox" name="remember" value="1"> Lembrar
            </label>
			<button type="submit" name="submit" class="btn btn-primary btn-block">Login</button>
			</form>    
		--><?php 
      echo form_open('index/login');
      echo form_input(array('id'=>'username', 'class'=>'span4', 'name'=>'username', 'placeholder'=>'Usuário'),'','autofocus');
      echo form_password(array('id'=>'password', 'class'=>'span4', 'name'=>'senha', 'placeholder'=>'Senha'),'','');
      echo form_submit(array('class'=>'btn btn-primary','name'=>'Login'),'Login');
      echo form_close();
      ?>
    </div>
	</div>
</div>

<div class="thumbnail center well well-small text-center">
  <h2>Contato</h2>
    
  <p>Caso seja um novo membros e não tenha acesso ou está com dificuldades, envie um e-mail pedindo ajuda.</p>
    
  <form action="" method="post">
    <div class="input-prepend"><span class="add-on"><i class="icon-envelope"></i></span>
        <input type="text" id="" name="" placeholder="seuemail@acens.com.br">
    </div>
    <br />
    <input type="submit" value="Enviar" class="btn btn-large" />
  </form>
</div>
<?php $this->load->view('includes/footer'); ?>
