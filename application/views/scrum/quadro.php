<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>

<style type="text/css">
	body{background-color: lightgray;}
</style>


<div class="scrum-container-opcao">
	<div class="opcao-scrum-title">
		Projeto 1 
	</div>
	<div class="opcao-scrum-subtitle">
		Sprint 1
	</div>
</div>

<?php $this->load->view('includes/breadcrumb'); ?>



<div class="scrum-all">
	<div class="scrum-menu-left">
		<div class="scrum-menu-left-title">
			<div class="sdsd" style="position:relative;">
			</div>
		</div>
		<div class="s-o-b">
			<div class="opcao_box"><div class="post-it post-it-mini post-red"></div>A</div>
			<div class="opcao_box"><div class="post-it post-it-mini post-blue"></div>B</div>
			<div class="opcao_box"><div class="post-it post-it-mini post-roxo"></div>C</div>
			<div class="opcao_box"><div class="post-it post-it-mini post-verde"></div>D</div>
			<div class="opcao_box"><div class="post-it post-it-mini post-musgo"></div>E</div>
			<div class="opcao_box"><div class="post-it post-it-mini post-ouro"></div>F</div>
			<div class="opcao_box"><div class="post-it post-it-mini post-amarelo"></div>G</div>
			<!-- Link que receberá o evento do popover ao ser clicado.-->
			
		</div>
	</div>




	<div class="scrum_container">
		<div class="scrum_categoria">
			<div class="scrum_top">Fazer</div>
			<div class="scrum-box">
				<div class="post-it post-red"><div class="post-fundo">A</div>Teste</div>
				<div class="post-it post-blue"><div class="post-fundo">B</div>Teste</div>
				<div class="post-it post-roxo"><div class="post-fundo">C</div>Teste</div>
				<div class="post-it post-amarelo"><div class="post-fundo">G</div>Teste</div>
			</div>
		</div>
		<div class="scrum_categoria">
			<div class="scrum_top">Fazendo</div>
			<div class="scrum-box">
				<div class="post-it post-musgo"><div class="post-fundo">E</div>Teste</div>
				<div class="post-it post-amarelo"><div class="post-fundo">G</div>Teste</div>
				<div class="post-it post-roxo"><div class="post-fundo">C</div>Teste</div>
				<div class="post-it post-verde"><div class="post-fundo">D</div>Teste</div>
			</div>
		</div>
		<div class="scrum_categoria">
			<div class="scrum_top">Feito</div>
			<div class="scrum-box">
				<div class="post-it post-amarelo"><div class="post-fundo">G</div>Teste</div>
				<div class="post-it post-musgo"><div class="post-fundo">E</div>Teste</div>
				<div class="post-it post-red"><div class="post-fundo">A</div>Teste</div>
				<div class="post-it post-ouro"><div class="post-fundo">F</div>Teste</div>
			</div>
		</div>



<!--
	<div class="post-it post-red"><div class="post-fundo">A</div>Teste</div>
	<div class="post-it post-blue"><div class="post-fundo">B</div>Teste</div>
	<div class="post-it post-roxo"><div class="post-fundo">C</div>Teste</div>
	<div class="post-it post-verde"><div class="post-fundo">D</div>Teste</div>
	<div class="post-it post-musgo"><div class="post-fundo">E</div>Teste</div>
	<div class="post-it post-ouro"><div class="post-fundo">F</div>Teste</div>
-->
	</div>

	<div class="scrum-menu">
		<button href="#myModal4" role="button" data-toggle="modal" class="btn btn-primary" style="margin: 5% 0 0 17%; width:70%;">Burndown</button>
		<a href="#" id="a-popover" class="btn btn-success" style="margin: 55% 0 0 17%; width:54%;">Novo Post-it</a>



		<div id="div-popover" class="hide" style="width:800px;">
		   	<?php 
		      echo form_open('projetos/inserir_projeto');
		      echo form_label('Titulo do Post-it: ');
		      echo form_input(array('name'=>'postit_titulo'),'','autofocus');
		      echo form_label('Prioridade: ');
		    ?>
		    
			  
			<div class="btn-group" data-toggle="buttons-radio">
			    <button type="button" data-toggle="button" class="escolher-post"><i class="post-it post-it-mini post-red" style="width:50%;"></i>A</button>
				<button type="button" data-toggle="button" class="escolher-post"><i class="post-it post-it-mini post-blue" style="width:50%;"></i>B</button>
				<button type="button" data-toggle="button" class="escolher-post"><i class="post-it post-it-mini post-roxo" style="width:50%;"></i>C</button>
				<button type="button" data-toggle="button" class="escolher-post"><i class="post-it post-it-mini post-verde" style="width:50%;"></i>D</button>
				<button type="button" data-toggle="button" class="escolher-post"><i class="post-it post-it-mini post-musgo" style="width:50%;"></i>E</button>
				<button type="button" data-toggle="button" class="escolher-post"><i class="post-it post-it-mini post-ouro" style="width:50%;"></i>F</button>
				<button type="button" data-toggle="button" class="escolher-post"><i class="post-it post-it-mini post-amarelo" style="width:50%;"></i>G</button>
			</div>
		  	
		    <?php
		      echo form_label('Quantas Horas*: ');
		      echo form_input(array('name'=>'postit_horas'));
		      echo form_label('Conteudo*: ');
		      echo form_input(array('name'=>'postit_conteudo'));
		      echo form_submit(array('class'=>'btn btn-primary','name'=>'cadastrar'),'Salvar');
		      ?>
		      <button id="btn-fechar" class="btn btn-danger" data-dismiss="clickover">Fechar</button>
		      <?php
		      echo form_close();
		     ?> 
		   <!-- Botão dentro do popover responsável por abrir o modal. 
		   <button id="btn-modal" class="btn btn-primary">Abrir modal</button>
		   <Botão dentro do popover responsável por fechar o popover. 
		   <button id="btn-fechar" class="btn btn-danger" data-dismiss="clickover">Fechar</button>-->
		</div>
			<!-- Div oculta utilizada para montar o modal. -->
		<div class="modal hide" id="div-modal">
		   <div class="modal-header">
		      <button type="button" class="close" data-dismiss="modal">×</button>
		      <h3>Título modal</h3>
		   </div>
		   <div class="modal-body">
		      Conteúdo do modal.
		   </div>
		   <div class="modal-footer">
		     <!-- Botão dentro do modal responsável por fechar o modal. -->
		     <button class="btn" data-dismiss="modal">Fechar modal</button>
		   </div>
		</div>

		
	<!--
		<div class="opcao_box">
			<div class="post-it post-it-mini post-red"></div>
			A
		</div>
	
		<div class="opcao_box">
			<div class="post-it post-it-mini post-blue"></div>
			B
		</div>
	
		<div class="opcao_box">
			<div class="post-it post-it-mini post-roxo"></div>
			C
		</div>
	
		<div class="opcao_box">
			<div class="post-it post-it-mini post-verde"></div>
			D
		</div>
	
		<div class="opcao_box">
			<div class="post-it post-it-mini post-musgo"></div>
			E
		</div>
	
		<div class="opcao_box">
			<div class="post-it post-it-mini post-ouro"></div>
			F
		</div>
	-->
	</div>
</div>

<div id="myModal4" class="modal modal-cadastro hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-header">
    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
    <h3 id="myModalLabel">Burndown</h3>
  </div>
  <div class="modal-body">
  	<div class="burndown"></div>
  </div>
</div>

<?php $this->load->view('includes/footer'); ?>