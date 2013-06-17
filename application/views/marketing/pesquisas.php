<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>
<?php $this->load->view('includes/breadcrumb'); ?>

<div class="hero-unit-acens">
  <h1>Pesquisas</h1>
  <p>Pesquisas de satisfação pré e pós venda e pesquisa de imagem</p> 
</div>


<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#tab1" data-toggle="tab">Pré-Venda</a></li>
    <li><a href="#tab2" data-toggle="tab">Pós-Venda</a></li>
    <li><a href="#tab2" data-toggle="tab">Pesquisa de imagem</a></li>
  </ul>
  <div class="tab-content">

  	<!-- tab 1 - Pesquisa Pré-venda -->
 	<?php $this->load->view('marketing/pesquisa_pre_venda'); ?>

    <!-- tab 2 - Pesquisa Pós-venda -->
 	<?php $this->load->view('marketing/pesquisa_pos_venda'); ?>

    <!-- tab 3 - Pesquisa de imagem -->
  	<?php $this->load->view('marketing/pesquisa_imagem'); ?>
  </div>
</div>

<?php $this->load->view('includes/footer'); ?>