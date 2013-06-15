<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>
<?php $this->load->view('includes/breadcrumb'); ?>

<div class="hero-unit-acens">
  <h1>Briefings</h1>
  <p>Texto</p> 
</div>

<!-- Botão de novo briefing e busca -->
<div class="container-fluid btn-toolbar">
    <button href="#myModal2" role="button" data-toggle="modal" class="btn btn-primary">Criar novo</button>
</div>

<!-- Tabela de briefings -->
<div class="container-fluid">
    <table class="table table-striped table-hover table-bordered table-filter">
      <thead>
        <tr>
          <th class="span3">Cliente</th>
          <th class="span3">E-mail</th>
          <th class="span3">Projeto</th>
          <th class="span1 text-center">Data de envio</th>
          <th class="span1 text-center">Status</th>
          <th class="span1 text-center">Opções</th>
        </tr>
      </thead>
      <tbody>
        <?php /*
    foreach ($membros as $linha) {
         */?>
        <tr>
          <td>Acens</td>
          <td>contato@acens.com.br</td>
          <td>Sistema SOG</td>
          <td class="text-center">15/06/2013</td>
          <td class="text-center"><span class="label label-warning">Pendente</span></td>
          <td class="text-center">
              <a href="#myModal3" role="button" data-toggle="modal"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
              <a href="user.html"><i class="icon-eye-open"></i></a> 
          </td>
        </tr>

        <tr>
          <td>Acens</td>
          <td>contato@acens.com.br</td>
          <td>Sistema SOG</td>
          <td class="text-center">15/06/2013</td>
          <td class="text-center"><span class="label label-success">Recebido</span></td>
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

<!-- chamada a janela modal de cadastro e telas de confirmação -->
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Confirmar deleção de briefing</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Tem certeza que deseja deletar esse briefing?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
        <button class="btn btn-danger" data-dismiss="modal">Deletar</button>
    </div>
</div>
 
<!-- janela de criação de briefing -->
<div id="myModal2" class="modal modal-cadastro hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Novo briefing</h3>
  </div>
  <div class="modal-body">
    <?php 
    if ($this->session->flashdata('cadastrook')){
      echo '<div class="alert alert-success">'.$this->session->flashdata('cadastrook').'</div>';
    }

    echo validation_errors('<div class="alert alert-error">','</div>')
   ?>
    <?php echo form_open('rh/inserir_membros'); ?>
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
      echo form_submit(array('class'=>'btn btn-primary','name'=>'cadastrar'),'Enviar');
      echo form_close();
     ?> 
  </div>
</div> <!-- Fim da janela de criação de briefing -->        

<?php $this->load->view('includes/footer'); ?>