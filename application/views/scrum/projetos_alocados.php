<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>
<?php $this->load->view('includes/breadcrumb'); ?>

<div class="hero-unit-acens">
  <h1>Meus Projetos</h1>
  <p>Esses são os projetos onde você esta alocado</p>
  
</div>

<div class="container">
      <ul class="thumbnails text-center" >
          <li class="span3 thumbnail-hover">
            <div class="thumbnail" style="overflow:hidden;">
              <img data-src="holder.js/300x200" alt="">
              <div class="todo" style="width:100%; height:100%; float:left; position:relative;">
              <h3>Projeto 1</h3>
              <!--<img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              --><p>Pequena descrição do projeto</p>
            <!--<p class="text-center">-->
            	<?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary"'); ?>
            	<div class="btn mostrar_sprint">Sprints</div>  
	    		<!--<?php echo anchor('index/sobre_a_presidencia', 'Sprints', 'class="btn mostrar_sprint"'); ?> 
            </p>-->
              </div>
              <div class="aparecer" style="border:1px solid; 
  float:left;
  height:100%;
  height:100%;
  position:relative;
  width:75%;">
                <div class="thumbnail" style="height:100%; position:relative; float:left; ">Sprint 1</div>
                <div class="thumbnail" style="height:100%; position:relative; float:left; ">Sprint 1</div>
                <div class="thumbnail" style="height:100%; position:relative; float:left; ">Sprint 1</div>
              </div>
            </div>
          </li>

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <div class="todo" style="width:100%; height:100%;">
              <h3>Projeto 2</h3>
              <!--<img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              -->
              <p>Pequena descrição do projeto</p>
            <!--<p class="text-center">-->
             	<?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary"'); ?>
             	<div class="btn mostrar_sprint">Sprints</div> 
	    		<!--<?php echo anchor('index/sobre_a_presidencia', 'Sprints', 'class="btn mostrar_sprint"'); ?>      
            </p>-->
              </div>
            </div>
          </li>

           <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <div class="todo" style="width:100%; height:100%;">
              <h3>Projeto 3</h3>
              <!--<img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              -->
              <p>Pequena descrição do projeto</p>
            <!--<p class="text-center">-->
            	<?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary"'); ?>
            	<div class="btn mostrar_sprint">Sprints</div> 
	    		<!--<?php echo anchor('index/sobre_a_presidencia', 'Sprints', 'class="btn mostrar_sprint"'); ?>     
            </p>-->
              </div>
            </div>
          </li>

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <div class="todo" style="width:100%; height:100%;">
              <h3>Projeto 4</h3>
              <!--<img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              -->
              <p>Pequena descrição do projeto</p>
            <!--<p class="text-center">-->
            	<?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary"'); ?>
            	<div class="btn mostrar_sprint">Sprints</div>   
	    		<!--<?php echo anchor('index/sobre_a_presidencia', 'Sprints', 'class="btn mostrar_sprint"'); ?>  
            </p>-->
              </div>
            </div>
          </li>

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <div class="todo" style="width:100%; height:100%;">
              <h3>Projeto 5</h3>
              <!--<img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              -->
              <p>Pequena descrição do projeto</p>
            <!--<p class="text-center">-->
            	<?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary"'); ?>
            	<div class="btn mostrar_sprint">Sprints</div>     
	    		<!--<?php echo anchor('index/sobre_a_presidencia', 'Sprints', 'class="btn mostrar_sprint"'); ?> 
            </p>-->
              </div>
            </div>
          </li>     

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <div class="todo" style="width:100%; height:100%;">
              <h3>Projeto 6</h3>
              <!--<img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              -->
              <p>Pequena descrição da funcinalidadeo</p>
            <!--<p class="text-center">-->
            	<?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary"'); ?>
            	<div class="btn mostrar_sprint">Sprints</div> 
		    	<!--<?php echo anchor('index/sobre_a_presidencia', 'Sprints', 'class="btn mostrar_sprint"'); ?> 
            </p>-->
              </div>
            </div>
          </li>

        </ul>

</div><!-- /.container-->


<?php $this->load->view('includes/footer'); ?>