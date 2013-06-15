<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>
<?php $this->load->view('includes/breadcrumb'); ?>

<div class="hero-unit-acens">
  <h1>Planos de Marketing</h1>
  <p>Criação dos planos de marketing com estratégias para promoções e outras ações. A barra de status diz como
  	o plano está indo. Vai ter data de inicio e fim e podemos ver o plano, deletar ou modificar.</p> 
</div>

<!-- Botão de novo plano -->
<div class="container-fluid btn-toolbar">
    <button href="#myModal2" role="button" data-toggle="modal" class="btn btn-primary">Criar novo</button>
</div>

<!-- Tabela de planos -->
<div class="container-fluid">
    <table class="table table-striped table-hover table-bordered table-filter">
      <thead>
        <tr>
          <th class="span4">Nome do plano</th>
          <th class="span1 text-center">Início</th>
          <th class="span1 text-center">Fim</th>
          <th class="span4">Progresso</th>
          <th class="span1 text-center">Opções</th>
        </tr>
      </thead>
      <tbody>
        <?php /*
    foreach ($membros as $linha) {
         */?>
        <tr>
          <td>Plano para o Black Friday</td>
          <td class="text-center">25/08/2013</td>
          <td class="text-center">25/08/2013</td>
          <td class="progress progress-striped"><div class="bar" style="width: 20%;"></div></td>
          <td class="text-center">
              <a href="#myModal3" role="button" data-toggle="modal"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
              <a href="user.html"><i class="icon-eye-open"></i></a> 
          </td>
        </tr>
        <?php /*}*/ ?>
      </tbody>
    </table>
</div>

<!-- chamada a janela modal de novo e telas de confirmação -->
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Confirmar deleção de plano</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Tem certeza que deseja deletar esse plano de Marketing?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
        <button class="btn btn-danger" data-dismiss="modal">Deletar</button>
    </div>
</div>
 
<!-- janela de novo plano -->
<div id="myModal2" class="modal modal-cadastro hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Novo plano</h3>
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
        echo form_label('Nome do plano: ');
        echo form_input(array('name'=>'nome'),'','autofocus');
      ?>
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
 
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
  <?php 
      echo form_submit(array('class'=>'btn btn-primary','name'=>'cadastrar'),'Salvar');
      echo form_close();
     ?> 
  </div>
</div> <!-- Fim da janela de novo plano -->        

<?php $this->load->view('includes/footer'); ?>