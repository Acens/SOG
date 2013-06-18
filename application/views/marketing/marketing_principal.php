<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>
<?php $this->load->view('includes/breadcrumb'); ?>

<div class="hero-unit-acens">
  <h1>Diretoria de Marketing</h1>
  <p>Ações e atividades da Diretoria.</p> 
</div>

<div class="container">
      <ul class="thumbnails text-center" >
          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Planos de Marketing</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidade</p>
            <p class="text-center">
              <?php echo anchor('marketing/planos_de_marketing', 'Entrar', 'class="btn btn-primary btn-block"'); ?>  
            </p>
            </div>
          </li>

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Briefings</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidade</p>
            <p class="text-center">
              <?php echo anchor('marketing/briefings', 'Entrar', 'class="btn btn-primary btn-block"'); ?>      
            </p>
            </div>
          </li>

           <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Material promocional</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidade</p>
            <p class="text-center">
              <?php echo anchor('marketing/material_promocional', 'Entrar', 'class="btn btn-primary btn-block"'); ?>     
            </p>
            </div>
          </li>

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Newsletter</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidade</p>
            <p class="text-center">
              <?php echo anchor('marketing/newsletter', 'Entrar', 'class="btn btn-primary btn-block"'); ?>    
            </p>
            </div>
          </li>

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Manual da Marca</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidade</p>
            <p class="text-center">
              <?php echo anchor('marketing/manual_da_marca', 'Entrar', 'class="btn btn-primary btn-block"'); ?>     
            </p>
            </div>
          </li>     

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Pesquisas</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidade</p>
            <p class="text-center">
              <?php echo anchor('marketing/pesquisas', 'Entrar', 'class="btn btn-primary btn-block"'); ?> 
            </p>
            </div>
          </li>

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Logos e Fontes</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidade</p>
            <p class="text-center">
              <?php echo anchor('upload', 'Entrar', 'class="btn btn-primary btn-block"'); ?>     
            </p>
            </div>
          </li>     

          <li class="span3 thumbnail-hover">
            <div class="thumbnail">
              <img data-src="holder.js/300x200" alt="">
              <h3>Funcionalidade Extra</h3>
              <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
              <p>Pequena descrição da funcinalidade</p>
            <p class="text-center">
              <?php echo anchor('marketing/pesquisas', 'Entrar', 'class="btn btn-primary btn-block"'); ?> 
            </p>
            </div>
          </li>          
        </ul>
</div>

<?php $this->load->view('includes/footer'); ?>