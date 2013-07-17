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
		</div>
	</div>




	<div class="scrum_container">
		<div class="scrum_categoria">
			<div class="scrum_top">Fazer</div>
			<div class="scrum-box">
				<div class="post-it post-red"><div class="post-fundo">A</div>Teste</div>
				<div class="post-it post-blue"><div class="post-fundo">B</div>Teste</div>
				<div class="post-it post-roxo"><div class="post-fundo">C</div>Teste</div>
			</div>
		</div>
		<div class="scrum_categoria">
			<div class="scrum_top">Fazendo</div>
			<div class="scrum-box">
				<div class="post-it post-musgo"><div class="post-fundo">E</div>Teste</div>
				<div class="post-it post-roxo"><div class="post-fundo">C</div>Teste</div>
				<div class="post-it post-verde"><div class="post-fundo">D</div>Teste</div>
			</div>
		</div>
		<div class="scrum_categoria">
			<div class="scrum_top">Feito</div>
			<div class="scrum-box">
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
		<div class="scrum-menu-title">
			Borndown
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

<?php $this->load->view('includes/footer'); ?>