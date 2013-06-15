<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>
<?php $this->load->view('includes/breadcrumb'); ?>

<!-- Cabeçalho da página -->
<div class="hero-unit-acens">
  <h1>Diretoria da Presidencia</h1>
  <p>Ações e atividades da Diretoria.</p> 
</div>

<div class="container">
      <ul class="thumbnails text-center" >
          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Funcionalidade 1</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidade</p>
            <p class="text-center">
              <?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary btn-block"'); ?>  
            </p>
            </div>
          </li>

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Funcionalidade 2</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidade</p>
            <p class="text-center">
              <?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary btn-block"'); ?>      
            </p>
            </div>
          </li>

           <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Funcionalidade 3</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidade</p>
            <p class="text-center">
              <?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary btn-block"'); ?>     
            </p>
            </div>
          </li>

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Funcionalidade 4</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidade</p>
            <p class="text-center">
              <?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary btn-block"'); ?>    
            </p>
            </div>
          </li>

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Funcionalidade 5</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidade</p>
            <p class="text-center">
              <?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary btn-block"'); ?>     
            </p>
            </div>
          </li>     

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Funcionalidade 6</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidadeo</p>
            <p class="text-center">
              <?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary btn-block"'); ?> 
            </p>
            </div>
          </li>

        </ul>
</div>

<?php $this->load->view('includes/footer'); ?>