<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>
<?php $this->load->view('includes/breadcrumb'); ?>



<div class="hero-unit-acens">
  <h1>Projetos</h1>
  <p>Todos os projetos realizados ou em andamento.</p> 
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
          <th class="span3 text-center">Nome do plano</th>
          <th class="span1 text-center">Início</th>
          <th class="span1 text-center">Fim</th>
          <th class="span4 text-center">Progresso</th>
          <th class="span1 text-center">Sprint</th>
          <th class="span1 text-center">Opções</th>
        </tr>
      </thead>
      <tbody>
        <?php 
    foreach ($projetos as $linha) {
         ?>
        <tr>
          <td><?php echo $linha->pro_nome;?></td>
          <td class="text-center"><?php echo $linha->pro_inicio;?></td>
          <td class="text-center"><?php echo $linha->pro_prazo;?></td>
          <?php 
          $data_inicio = explode("/", $linha->pro_inicio);
          $data_final = explode("/", $linha->pro_prazo);
          $tempo_total = (($data_final[2]-$data_inicio[2])*365)+(($data_final[1]-$data_inicio[1])*30)+($data_final[0]+$data_inicio[0]);
          $data_hj=date("d/m/Y");
          $data_atual = explode("/", $data_hj);
          $tempo_hj = (($data_atual[2]-$data_inicio[2])*365)+(($data_atual[1]-$data_inicio[1])*30)+($data_atual[0]+$data_inicio[0]);
          $percentual = (($tempo_hj*100)/$tempo_total);
           ?>
          
          <?php if($percentual<100){ ?>
          <td class="progress progress-striped"><div class="bar" style="width:<?php echo $percentual;?>%; border-radius:10px;"></div></td>
          <?php } elseif($percentual==100){ ?>
          <td class="progress progress-striped progress-warning"><div class="bar" style="width:100%; border-radius:10px;"></div></td>
          <?php }else{ ?>
          <td class="progress progress-danger progress-striped" ><div class="bar" style="width: 100%; border-radius:10px;"></div></td>
          <?php } ?>
          <td class="text-center">
              <a href="#myModal4" role="button" data-toggle="modal" class="btn btn-info">Sprints</a>
          </td>
          <td class="text-center">
              <a href="#myModal3" role="button" data-toggle="modal"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
              <a href="user.html"><i class="icon-eye-open"></i></a> 
          </td>
        </tr>
        <?php } ?>
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

<!--Janela dos Sprints-->
<div id="myModal4" class="modal modal-cadastro hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header ">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Sprints</h3>
  </div>
  <div class="modal-body">
    <ul class="thumbnails text-center" >
      <li class="span4 thumbnail-hover">
        <div class="thumbnail">
          <img data-src="holder.js/300x200" alt="">
          <h3>Sprint 1</h3>
         <p>Pequena descrição do sprint</p>
        <p class="text-center">
          <?php echo anchor('index/presidencia', 'Entrar', 'class="btn btn-primary btn-block"'); ?><!-- Se ainda nao foi terminada -->  
          <!--<?php echo anchor('index/sobre_a_presidencia', 'Sobre o cargo', 'class="btn"'); ?><! Se ja foi terminada -->
        </p>
        </div>
      </li>
      
      <li class="span4 thumbnail-hover">
        <div class="thumbnail">
          <img data-src="holder.js/300x200" alt="">
          <h3>Sprint 2</h3>
           <p>Pequena descrição do sprint</p>
        <p class="text-center">
         <?php echo anchor('index/presidencia', 'Entrar', 'class="btn btn-primary btn-block"'); ?><!-- Se ainda nao foi terminada -->  
          <!--<?php echo anchor('index/sobre_a_presidencia', 'Sobre o cargo', 'class="btn"'); ?><! Se ja foi terminada -->
        </p>
        </div>
      </li>
      
      <li class="span4 thumbnail-hover">
        <div class="thumbnail">
          <img data-src="holder.js/300x200" alt="">
          <h3>Sprint 3</h3>
          <p>Pequena descrição do sprint</p>
        <p class="text-center">
          <?php echo anchor('index/presidencia', 'Entrar', 'class="btn btn-primary btn-block"'); ?><!-- Se ainda nao foi terminada -->  
          <!--<?php echo anchor('index/sobre_a_presidencia', 'Sobre o cargo', 'class="btn"'); ?><! Se ja foi terminada -->
        </p>
        </div>
      </li>



  </div>
  <div class="modal-footer">
    <button href="#myModal5" role="button" data-toggle="modal" class="btn btn-primary">Novo Sprint</button>
  </div>
</div>



<!-- janela de novo Sprint -->
<div id="myModal5" class="modal modal-cadastro hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
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
      echo form_open('projetos/inserir_projeto');
        ?>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Data de Inicio: ');
        echo form_input(array('name'=>'pro_nome'),'','autofocus');
      ?>
      </div>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Data de Final: ');
        echo form_input(array('class'=>'date', 'name'=>'pro_inicio'));
      ?>
      </div>
      
      <div class="inserir_inputs">
      <?php 
        echo form_label('Pontos: ');
        echo form_input(array('class'=>'date', 'name'=>'pro_prazo'));
      ?>
      </div>

      <div class="inserir_inputs">
      <?php 
        echo form_label('Observações: ');
        echo form_input(array('type'=>'textarea', 'name'=>'pro_obs'));
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
</div> <!-- Fim da janela de novo Sprint --> 




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
      echo form_open('projetos/inserir_projeto');
        ?>
      <div class="inserir_inputs">
      <?php 
        echo form_label('Nome do Projeto*: ');
        echo form_input(array('name'=>'pro_nome'),'','autofocus');
      ?>
      </div>
     <!-- 
      <div class="inserir_inputs">
        <?php 
          $opcoes_categoria = array(
                  'interno' => 'Interno',
                  'externo'  => 'Externo',   
                );
          echo form_label('Categoria*: ');
          $nome_categoria='categoria';
          echo form_dropdown('pro_'.$nome_categoria, $opcoes_categoria, 'interno');
        ?>
      </div>
      -->
      <div class="inserir_inputs">
      <?php 
        echo form_label('Data de Inicio*: ');
        echo form_input(array('class'=>'date', 'name'=>'pro_inicio'));
      ?>
      </div>
      
      <div class="inserir_inputs">
      <?php 
        echo form_label('Data a ser Entregue: ');
        echo form_input(array('class'=>'date', 'name'=>'pro_prazo'));
      ?>
      </div>
      
      <div class="inserir_inputs">
      <?php 
        echo form_label('P.O.*: ');
        echo form_input(array('name'=>'po'));
      ?>
      </div>
      
      <div class="inserir_inputs">
      <?php 
        echo form_label('Scrum Master*: ');
        echo form_input(array('name'=>'scrum'));
      ?>
      </div>

      <div class="inserir_inputs">
      <?php 
        echo form_label('Desenvolvedores*: ');
        echo form_input(array('class'=>'span5', 'name'=>'desenvolvedor'));
      ?>
      </div>
      
      <div class="inserir_inputs">
        <?php
            $opcoes_categoria = array(
              "nenhum"=>'Selecione o Membro',
            );
          
        foreach ($membros as $array) { 
          $opcoes_categoria = array(
                  $array->id => $array->username,
                );
          }
          echo form_label('Categoria*: ');
          $nome_categoria='categoria';
          echo form_dropdown('pro_'.$nome_categoria, $opcoes_categoria, 'interno');
        ?>
      </div>
      




      <div class="btn btn-success novo_desenvolvedor">+</div>

      <div class="inserir_inputs">
      <?php 
        echo form_label('Observações: ');
        echo form_input(array('type'=>'textarea', 'name'=>'pro_obs'));
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