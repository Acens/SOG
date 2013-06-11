<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>

<div class="hero-unit-acens">
  <h1 class="text-center">Bem-vindo ao SOG</h1>
  <p class="text-center">Escolha a sua Diretoria abaixo ou saiba mais sobre o <br />Sistema Online de Gestão (SOG):</p>
  <p class="text-center">
	<?php echo anchor('index/sobre_presidencia', 'Saiba mais', 'class="btn btn-giant"'); ?>      
  </p>
</div>

<div class="container">
<ul class="thumbnails text-center" >
  <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Presidência</h3>
      <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/presidencia_principal', 'Entrar', 'class="btn btn-primary"'); ?>  
	    <?php echo anchor('index/sobre_presidencia', 'Sobre o cargo', 'class="btn"'); ?>    
	  </p>
    </div>
  </li>

  <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Adm-Financeiro</h3>
      <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/financeiro_principal', 'Entrar', 'class="btn btn-primary"'); ?>  
	    <?php echo anchor('index/sobre_presidencia', 'Sobre o cargo', 'class="btn"'); ?>      
	  </p>
    </div>
  </li>

   <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Gestão de Pessoas</h3>
      <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/rh_principal', 'Entrar', 'class="btn btn-primary"'); ?>  
	    <?php echo anchor('index/sobre_presidencia', 'Sobre o cargo', 'class="btn"'); ?>     
	  </p>
    </div>
  </li>

  <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Projetos</h3>
      <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/projetos_principal', 'Entrar', 'class="btn btn-primary"'); ?>  
	    <?php echo anchor('index/sobre_presidencia', 'Sobre o cargo', 'class="btn"'); ?>      
	  </p>
    </div>
  </li>

  <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Marketing</h3>
      <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/marketing_principal', 'Entrar', 'class="btn btn-primary"'); ?>  
	    <?php echo anchor('index/sobre_presidencia', 'Sobre o cargo', 'class="btn"'); ?>      
	  </p>
    </div>
  </li>     

  <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Trainees</h3>
      <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/trainee_principal', 'Entrar', 'class="btn btn-primary"'); ?>  
	    <?php echo anchor('index/sobre_presidencia', 'Sobre o cargo', 'class="btn"'); ?>    
	  </p>
    </div>
  </li>    

  <li class="span12">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Informações gerais</h3>
      <p>Informações para todas as diretorias</p>
    <p class="text-center">
      <?php echo anchor('index/info_gerais', 'Entrar', 'class="btn btn-primary btn-large"'); ?>   
    </p>
    </div>
  </li>   
</ul>
</div>

<?php $this->load->view('includes/footer'); ?>