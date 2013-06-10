<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>

<div class="hero-unit">
  <h1 class="text-center">Bem-vindo ao SOG</h1>
  <p class="text-center">Escolha a sua Diretoria abaixo ou saiba mais sobre o <br />Sistema Online de Gestão (SOG):</p>
  <p class="text-center">
	<?php echo anchor('index/sobre_presidencia', 'Saiba mais', 'class="btn btn-primary btn-large"'); ?>      
  </p>
</div>

<ul class="thumbnails text-center" style="margin:0 auto;">
  <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Presidência</h3>
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary"'); ?>  
	    <?php echo anchor('index/sobre_presidencia', 'Sobre o cargo', 'class="btn"'); ?>    
	  </p>
    </div>
  </li>

  <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Adm-Financeiro</h3>
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary"'); ?>  
	    <?php echo anchor('index/sobre_presidencia', 'Sobre o cargo', 'class="btn"'); ?>      
	  </p>
    </div>
  </li>

   <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Gestão de Pessoas</h3>
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary"'); ?>  
	    <?php echo anchor('index/sobre_presidencia', 'Sobre o cargo', 'class="btn"'); ?>     
	  </p>
    </div>
  </li>

  <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Projetos</h3>
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary"'); ?>  
	    <?php echo anchor('index/sobre_presidencia', 'Sobre o cargo', 'class="btn"'); ?>      
	  </p>
    </div>
  </li>

  <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Marketing</h3>
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary"'); ?>  
	    <?php echo anchor('index/sobre_presidencia', 'Sobre o cargo', 'class="btn"'); ?>      
	  </p>
    </div>
  </li>     

  <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Trainees</h3>
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/sobre_presidencia', 'Entrar', 'class="btn btn-primary"'); ?>  
	    <?php echo anchor('index/sobre_presidencia', 'Sobre o cargo', 'class="btn"'); ?>    
	  </p>
    </div>
  </li>         
</ul>

<?php $this->load->view('includes/footer'); ?>