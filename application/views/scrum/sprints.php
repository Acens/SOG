<?php $this->load->view('includes/header') ?>
<?php $this->load->view('includes/top_menu') ?>
<?php $this->load->view('includes/breadcrumb') ?>

<div class="hero-unit-acens">
  <h1><?php echo $meu_projeto['projeto']; ?></h1>

  	<?php if($meu_projeto['percentual']<100){ ?>
	<p>Andamento do projeto: <?php echo $meu_projeto['percentual'] ?>% </p>    
    <?php } elseif($meu_projeto['percentual']==100){ ?>
    <p>Andamento do projeto: <?php echo $meu_projeto['percentual'] ?>% </p>
    <p>Projeto é para terminar hoje!</p>
    <?php }else{ ?>
    <p>Andamento do projeto: 100% </p>
    <p>Já terminou ou está atrasado!</p>
    <?php } ?>

  <div class="aparecer" style="width:80%; height:40px; margin: 0 auto; margin-top: 20px;">
  <?php if($meu_projeto['percentual']<100){ ?>
    <div class="progress progress-striped" style="border-radius:11px; height:100%;"><div class="bar" style="width:<?php echo $meu_projeto['percentual'];?>%; border-radius:10px;"></div></div>
    <?php } elseif($meu_projeto['percentual']==100){ ?>
    <div class="progress progress-striped progress-warning" style="border-radius:11px; height:100%;"><div class="bar" style="width:100%; border-radius:10px;"></div></div>
    <?php }else{ ?>
    <div class="progress progress-danger progress-striped" style="border-radius:11px; height:100%;" ><div class="bar" style="width: 100%;  border-radius:10px;"></div></div>
    <?php } ?>
  </div>

</div>
<!-- Botão de novo usuário e busca -->
<div class="container-fluid btn-toolbar">
    <button href="#myModal2" role="button" data-toggle="modal" class="btn btn-primary">Novo Sprint</button>
</div>

<div class="container">
	<ul class="thumbnails text-center" >
	  <?php for($i=0;$i<$sprint['quantidade'];$i++) 
	  	{	
	  ?>
			  <li class="span4 thumbnail-hover">
			    <div class="thumbnail">
			      <img data-src="holder.js/300x200" alt="">
			      <h3>Sprint <?php echo $sprint['resultado'][$i]['sprint_numero']; ?></h3>
			      <p><?php echo $sprint['resultado'][$i]['sprint_inicio']; ?></p>
			      <p><?php echo $sprint['resultado'][$i]['sprint_final']; ?></p>
			      <p><?php echo $sprint['resultado'][$i]['sprint_pontos']; ?></p>
			      <p><?php echo $sprint['resultado'][$i]['sprint_obs']; ?></p>
            <?php 
            echo form_open('scrum/quadro');
                ?>
                <input type='hidden' name='sprint_chave_pro' value='<?php echo $meu_projeto["sprint_chave_pro"];;?>'>
                <input type='hidden' name='sprint_numero' value='<?php echo $sprint["resultado"][$i]["sprint_numero"];?>'>
                <input type='hidden' name='sprint_inicio' value='<?php echo $sprint["resultado"][$i]["sprint_inicio"];?>'>
                <input type='hidden' name='sprint_final' value='<?php echo $sprint["resultado"][$i]["sprint_final"];?>'>

				  <p class="text-center">
				    <?php
            echo form_submit(array('class'=>'btn btn-primary','name'=>'entrar'),'Entrar');
            echo form_close();

             ?>   
				  </p>
			    </div>
			  </li>
	  <?php } ?>
	     
	</ul>
</div>

<div id="myModal2" class="modal modal-cadastro hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Novo Sprint</h3>
  </div>
  <div class="modal-body">

  	<?php 
      echo form_open('scrum/inserir_sprint');
        ?>
        <input type="hidden" name="sprint_chave_pro" value="<?php echo $meu_projeto['sprint_chave_pro']; ?>">
        <input type="hidden" name="sprint_numero" value="<?php echo $sprint['quantidade']+1; ?>">
      
      <div class="inserir_inputs">
        <?php 
        echo form_label('Data de Inicia*: ');
        echo form_input(array('name'=>'sprint_inicio'),'','autofocus');
        ?>
      </div>
      <div class="inserir_inputs">
        <?php 
        echo form_label('Data Final*: ');
        echo form_input(array('name'=>'sprint_final'),'','autofocus');
        ?>
      </div>
        <?php 
        echo form_label('Observação*: ');
        echo form_textarea(array('name' => 'sprint_obs'),'','autofocus');
        ?>
  </div>
  <div class="modal-footer">
    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
  	<?php 
      echo form_submit(array('class'=>'btn btn-primary','name'=>'cadastrar'),'Salvar');
      echo form_close();
     ?> 
  </div>

</div>

<?php $this->load->view('includes/footer') ?>