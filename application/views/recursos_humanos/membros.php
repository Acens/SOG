<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>


<div class="hero-unit-acens">
  <h1 class="text-center">Membros</h1>
</div>
  
  <div class="inserir">
    <div class="inserir_top">
        <p class="text-center">Inserir</p>
    </div>
    <div class="inserir_content">
    <?php 
      echo form_open('index/inserir_membros');
        ?>
      <div class="inserir_inputs">
      <?php 
        echo form_label('foto: ');
        echo form_input(array('class'=>'membro_nome', 'name'=>'foto', 'style'=>'display:none;'),'','autofocus');
      ?>
        <div><img class="thumbnail" src="<?php echo base_url(); ?>/img/user_foto.png" alt="" width="150" height="150"></div>
      </div>
      <div class="inserir_inputs">
        <?php 
        echo form_label('Nome: ');
        echo form_input(array('name'=>'nome'),'','autofocus');
        ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Senha: ');
        echo form_password(array('name'=>'senha'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Confirme Senha: ');
        echo form_password(array('name'=>'confirme_senha'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Data de Nascimento: ');
        echo form_input(array('name'=>'nascimento'));  
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Matricula da Faculdade: ');
        echo form_input(array('name'=>'matricula'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Email pessoal: ');
        echo form_input(array('name'=>'email_pessoal'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Email empresarial: ');
        echo form_input(array('name'=>'email_empresa'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Telefone 1: ');
        echo form_input(array('name'=>'telefone1'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Telefone 2: ');
        echo form_input(array('name'=>'telefone2'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Bairro: ');
        echo form_input(array('name'=>'bairro'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Rua: ');
        echo form_input(array('name'=>'rua'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Numero: ');
        echo form_input(array('name'=>'numero'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('CEP: ');
        echo form_input(array('name'=>'cep'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Ingresso na empresa: ');
        echo form_input(array('name'=>'ingresso'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Cargo: ');
        echo form_input(array('name'=>'cargo'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Skype: ');
        echo form_input(array('name'=>'skype'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Github: ');
        echo form_input(array('name'=>'github'));
      ?>
      </div>
        <?php 
      echo form_submit(array('class'=>'btn btn-primary inserir_inputs','name'=>'cadastrar,'),'Cadastrar');
      echo form_close();
      ?>      
    </div>
  </div>

<div class="container">
<ul class="thumbnails text-center" >
  <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Membros</h3>
      <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary"'); ?>   
	  </p>
    </div>
  </li>
 </div>

<?php $this->load->view('includes/footer'); ?>