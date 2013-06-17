   <div class="tab-pane" id="tab2">
      	<!-- Botão de nova pesquisa de pré-venda -->
		<div class="container-fluid btn-toolbar">
		    <button href="#myModal2" role="button" data-toggle="modal" class="btn btn-primary">Criar novo</button>
		    <button href="#myModal2" role="button" data-toggle="modal" class="btn">Ver estatísticas</button>
		</div>

		<!-- Tabela de pesquisas enviadas -->
		<div class="container-fluid">
		    <table class="table table-striped table-hover table-bordered table-filter">
		      <thead>
		        <tr>
		          <th class="span3">Cliente</th>
		          <th class="span3">Projeto</th>
		          <th class="span1 text-center">Data</th>
		          <th class="span1">Status</th>
		          <th class="span1 text-center">Opções</th>
		        </tr>
		      </thead>
		      <tbody>
		        <?php /*
		    foreach ($membros as $linha) {
		         */?>
		        <tr>
		          <td>Acens</td>
		          <td>Sistema SOG</td>
		          <td class="text-center">20/07/2013</td>
		          <td class="text-center"><span class="label label-success">Enviado</span></td>
		          <td class="text-center">
		              <a href="#myModal3" role="button" data-toggle="modal"><i class="icon-pencil"></i></a>
		              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
		              <a href="user.html"><i class="icon-eye-open"></i></a> 
		          </td>
		        </tr>
		        <?php /*}*/ ?>
		      </tbody>
		    </table>
		</div>

		<!-- chamada a janela modal de cadastro e telas de confirmação -->
		<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		    <div class="modal-header">
		        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		        <h3 id="myModalLabel">Confirmar deleção de pesquisa</h3>
		    </div>
		    <div class="modal-body">
		        <p class="error-text">Tem certeza que deseja deletar essa pesquisa?</p>
		    </div>
		    <div class="modal-footer">
		        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
		        <button class="btn btn-danger" data-dismiss="modal">Deletar</button>
		    </div>
		</div>
		 
		<!-- janela de criação de novo -->
		<div id="myModal2" class="modal modal-cadastro hide fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
		  <div class="modal-header">
		    <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
		    <h3 id="myModalLabel">Nova pesquisa pré-venda</h3>
		  </div>
		  <div class="modal-body">
		    <?php 
		    if ($this->session->flashdata('cadastrook')){
		      echo '<div class="alert alert-success">'.$this->session->flashdata('cadastrook').'</div>';
		    }

		    echo validation_errors('<div class="alert alert-error">','</div>')
		   ?>
		    <?php echo form_open('rh/inserir_membros'); ?>

		      <div class="inserir_inputs">
		        <?php 
		        echo form_label('Nome*: ');
		        echo form_input(array('name'=>'nome'),'','autofocus');
		        ?>
		      </div>
		      <div class="inserir_inputs">
		      <?php 
		        echo form_label('Senha*: ');
		        echo form_password(array('name'=>'senha'));
		      ?>
		      </div>
		  </div>
		  <div class="modal-footer">
		    <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
		  <?php 
		      echo form_submit(array('class'=>'btn btn-primary','name'=>'cadastrar'),'Enviar');
		      echo form_close();
		     ?> 
		  </div>
		</div> <!-- Fim da janela de criação de novo -->  
    </div>