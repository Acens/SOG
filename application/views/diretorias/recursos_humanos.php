<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>


<div class="hero-unit-acens">
  <h1 class="text-center">Recursos Humanos</h1>
</div>

<div class="container">
<ul class="thumbnails text-center" >
  <li class="span4">
    <div class="thumbnail">
      <img data-src="holder.js/300x200" alt="">
      <h3>Membros</h3>
      <img src="<?php echo base_url(); ?>/img/logo-icon.png" class="img-circle" />
      <p>Pequena descrição do cargo</p>
	  <p class="text-center">
	    <?php echo anchor('index/membros', 'Entrar', 'class="btn btn-primary"'); ?>   
	  </p>
    </div>
  </li>
 </div>

<?php $this->load->view('includes/footer'); ?>