<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>
<?php $this->load->view('includes/breadcrumb'); ?>

<!-- Cabeçalho da página -->
<div class="hero-unit-acens">
  <h1>Cadastro de usuários</h1>
  <p>Cadastros e lista de membros da Acens.</p> 
</div>

<!-- Botão de novo usuário e busca -->
<div class="container-fluid btn-toolbar">
    <button href="#myModal2" role="button" data-toggle="modal" class="btn btn-primary">Novo membro</button>
</div>

<!-- Tabela de membros -->
<div class="container-fluid">
    <table id="tabela" class="table table-striped table-hover table-bordered table-filter">
      <thead>
        <tr>
          <th class="span1">#</th>
          <th class="span4">Nome</th>
          <th class="span2">Cargo</th>
          <th class="span2">Data de registro</th>
          <th class="span1 text-center">Status</th>
          <th class="span1 text-center">Opções</th>
        </tr>
      </thead>
      <tbody>
        <?php 
    foreach ($membros as $linha) {
         ?>
        <tr>
          <td><?php echo $linha->id;?></td>
          <td><?php echo $linha->nome;?></td>
          <td><?php echo $linha->cargo;?></td>
          <td><?php echo $linha->ingresso;?></td>
          <td class="text-center"><span class="label label-success">Ativo</span></td>
          <td class="text-center">
              <a href="#myModal3?id=<?php echo $linha->id;?>" role="button" data-toggle="modal"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
              <a href="user.html"><i class="icon-eye-open"></i></a> 
          </td>
        </tr>


        <tr>
          <td><?php echo $linha->id;?></td>
          <td><?php echo $linha->nome;?></td>
          <td><?php echo $linha->cargo;?></td>
          <td><?php echo $linha->ingresso;?></td>
          <td class="text-center"><span class="label label-warning">Desativado</span></td>
          <td class="text-center">
              <a href="#myModal3?id=<?php echo $linha->id;?>" role="button" data-toggle="modal"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
              <a href="user.html"><i class="icon-eye-open"></i></a> 
          </td>
        </tr>


        <?php } ?>
      </tbody>
    </table>
</div>

<!-- chamada a janela modal de cadastro e telas de confirmação -->
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Confirmar deleção de usuário</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Tem certeza que deseja deletar esse usuário?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
        <button class="btn btn-danger" data-dismiss="modal">Deletar</button>
    </div>
</div>
 
<!-- janela de cadastro -->
<div id="myModal2" class="modal modal-cadastro hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Novo usuário</h3>
  </div>
  <div class="modal-body">
    <?php 
    if ($this->session->flashdata('cadastrook')){
      echo '<div class="alert alert-success">'.$this->session->flashdata('cadastrook').'</div>';
    }

    echo validation_errors('<div class="alert alert-error">','</div>')
   ?>
    <?php 
      echo form_open('rh/inserir_membros');
        ?>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Foto: ');
      ?>
        <div>
          <a href="#myModal4" role="button" data-toggle="modal">
            <img class="thumbnail" src="<?php echo base_url(); ?>/img/user_foto.png" alt="" width="150" height="150">
          </a>
        </div>
      </div>
      <div class="inserir_inputs">
        <?php 
        echo form_label('Nome*: ');
        echo form_input(array('name'=>'nome'),'','autofocus');
        ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Senha*: ');
        echo form_password(array('name'=>'senha'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Confirme Senha*: ');
        echo form_password(array('name'=>'confirme_senha'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Data de Nascimento*: ');
        echo form_input(array('class'=>'date', 'name'=>'nascimento'));  
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Matricula da Faculdade*: ');
        echo form_input(array('name'=>'matricula'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Email pessoal*: ');
        echo form_input(array('name'=>'email_pessoal'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Email empresarial: ');
        echo form_input(array('name'=>'email_empresarial'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Telefone 1*: ');
        echo form_input(array('class'=>'phone', 'name'=>'telefone1'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Telefone 2: ');
        echo form_input(array('class'=>'phone', 'name'=>'telefone2'));
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
        echo form_input(array('class'=>'cep', 'name'=>'cep'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Ingresso na empresa*: ');
        echo form_input(array('class'=>'date', 'name'=>'ingresso'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
      $opcoes_cargos = array(
                  'padrao' => 'Escolha o cargo',
                  'presidente'  => 'Dir. Presidente',
                  'dirfinanceiro'    => 'Dir. Adm-Financeiro',
                  'dirrh'   => 'Dir. de RH',
                  'dirmarketing' => 'Dir. Marketing',
                  'dirprojetos' => 'Dir. de Projetos',
                  'assepresidente'  => 'Assessor Presidente',
                  'assefinanceiro'    => 'Assessor Adm-Financeiro',
                  'asserh'   => 'Assessor de RH',
                  'assemarketing' => 'Assessor de Marketing',
                  'asseprojetos' => 'Assessor de Projetos',
                  'trainee' => 'Trainee',
                );

        echo form_label('Cargo*: ');
        echo form_dropdown('cargo', $opcoes_cargos, 'padrao');
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
      $opcoes_status = array(
                  'ativo' => 'Ativo',
                  'inativo'  => 'Inativo',
                );

        echo form_label('Status*: ');
        echo form_dropdown('Status*', $opcoes_status, 'ativo');
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
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
  <?php 
      echo form_submit(array('class'=>'btn btn-primary','name'=>'cadastrar'),'Cadastrar');
      echo form_close();
     ?> 
  </div>
</div> <!-- Fim da janela de cadastro -->        

<!-- JANELA DE UPDATE -->

<div id="myModal3" class="modal modal-cadastro hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <?php $id=$_GET['id']; ?>
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Editar usuário</h3>
  </div>
  <div class="modal-body">
    <?php 
    if ($this->session->flashdata('cadastrook')){
      echo '<div class="alert alert-success">'.$this->session->flashdata('cadastrook').'</div>';
    }

    echo validation_errors('<div class="alert alert-error">','</div>')
   ?>
    <?php 
      echo form_open('rh/inserir_membros');
        ?>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Foto: ');
      ?>
        <div>
          <a href="#myModal4" role="button" data-toggle="modal">
            <img class="thumbnail" src="<?php echo base_url(); ?>/img/user_foto.png" alt="" width="150" height="150">
          </a>
        </div>
      </div>
      <div class="inserir_inputs">
        <?php 
        echo form_label('Nome*: ');
        echo form_input(array('name'=>'nome'),'','autofocus');
        ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Senha*: ');
        echo form_password(array('name'=>'senha'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Confirme Senha*: ');
        echo form_password(array('name'=>'confirme_senha'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Data de Nascimento*: ');
        echo form_input(array('name'=>'nascimento'));  
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Matricula da Faculdade*: ');
        echo form_input(array('name'=>'matricula'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Email pessoal*: ');
        echo form_input(array('name'=>'email_pessoal'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Email empresarial: ');
        echo form_input(array('name'=>'email_empresarial'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Telefone 1*: ');
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
        echo form_label('Ingresso na empresa*: ');
        echo form_input(array('name'=>'ingresso'));
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
      $opcoes_cargos = array(
                  'padrao' => 'Escolha o cargo',
                  'presidente'  => 'Dir. Presidente',
                  'dirfinanceiro'    => 'Dir. Adm-Financeiro',
                  'dirrh'   => 'Dir. de RH',
                  'dirmarketing' => 'Dir. Marketing',
                  'dirprojetos' => 'Dir. de Projetos',
                  'assepresidente'  => 'Assessor Presidente',
                  'assefinanceiro'    => 'Assessor Adm-Financeiro',
                  'asserh'   => 'Assessor de RH',
                  'assemarketing' => 'Assessor de Marketing',
                  'asseprojetos' => 'Assessor de Projetos',
                  'trainee' => 'Trainee',
                );

        echo form_label('Cargo*: ');
        echo form_dropdown('cargo', $opcoes_cargos, 'padrao');
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
      $opcoes_status = array(
                  'ativo' => 'Ativo',
                  'inativo'  => 'Inativo',
                );

        echo form_label('Status*: ');
        echo form_dropdown('Status*', $opcoes_status, 'ativo');
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
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
  <?php 
      echo form_submit(array('class'=>'btn btn-primary','name'=>'cadastrar'),'Cadastrar');
      echo form_close();
     ?> 
  </div>
</div><!-- Fim da JANELA DE UPDATE -->  

<!-- Upload de fotos -->
<div id="myModal4" class="modal hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Upload de foto</h3>
  </div>
  <div class="modal-body">
    <?php
    echo form_open('rh/inserir_membros');
    echo form_upload(array('class'=>'membro_nome', 'name'=>'foto'),'','autofocus');
    echo form_close();
    ?>
  </div>
</div>
       
<?php $this->load->view('includes/footer'); ?>
<?php $this->load->view('includes/scripts_formularios'); ?>