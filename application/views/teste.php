<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>
<?php $this->load->view('includes/breadcrumb'); ?>

<div class="hero-unit-acens">
  <h1>Cadastro de usuários</h1>
  <p>Cadastros e lista de usuáios da Diretoria de RH.</p> 
</div>

<div class="container-fluid btn-toolbar">
    <button class="btn btn-primary">Novo usuário</button>
	<div class="input-append pull-right"><input type="text" id="" name="" placeholder="Buscar usuário"><input type="submit" class="add-on"><i class="icon-search"></i></span></div>
</div>

<div class="container-fluid">
    <table class="table table-striped table-hover table-bordered">
      <thead>
        <tr>
          <th class="span1">#</th>
          <th class="span4">Nome</th>
          <th class="span2">Cargo</th>
          <th class="span2">Data de registro</th>
          <th class="span2">Status</th>
          <th class="span1">Opções</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <td>1</td>
          <td>Mark</td>
          <td>Presidente</td>
          <td>01/01/2000</td>
          <td><span class="label label-success">Ativo</span></td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          	  <a href="user.html"><i class="icon-eye-open"></i></a> 
          </td>
        </tr>
        <tr>
          <td>2</td>
          <td>Mark</td>
          <td>Presidente</td>
          <td>01/01/2000</td>
          <td><span class="label label-warning">Fora da empresa</span></td>     
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          	  <a href="user.html"><i class="icon-eye-open"></i></a> 
          </td>
        </tr>
        <tr>
          <td>3</td>
          <td>Mark</td>
          <td>Presidente</td>
          <td>01/01/2000</td>
          <td><span class="label label-important">Banido</span></td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
           	  <a href="user.html"><i class="icon-eye-open"></i></a> 
          </td>
        </tr>
        <tr>
          <td>4</td>
          <td>Mark</td>
          <td>Presidente</td>
          <td>01/01/2000</td>
          <td><span class="label label-success">Ativo</span></td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
          	  <a href="user.html"><i class="icon-eye-open"></i></a> 
          </td>
        </tr>
        <tr>
          <td>5</td>
          <td>Mark</td>
          <td>Presidente</td>
          <td>01/01/2000</td>
          <td><span class="label label-success">Ativo</span></td>
          <td>
              <a href="user.html"><i class="icon-pencil"></i></a>
              <a href="#myModal" role="button" data-toggle="modal"><i class="icon-remove"></i></a>
           	  <a href="user.html"><i class="icon-eye-open"></i></a> 
          </td>
        </tr>
      </tbody>
    </table>
</div>
<div class="pagination pagination-centered">
    <ul>
        <li><a href="#">Anterior</a></li>
        <li><a href="#">1</a></li>
        <li><a href="#">2</a></li>
        <li><a href="#">3</a></li>
        <li><a href="#">4</a></li>
        <li><a href="#">Próximo</a></li>
    </ul>
</div>
<div class="modal small hide fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">×</button>
        <h3 id="myModalLabel">Confirmar deleção de usuário</h3>
    </div>
    <div class="modal-body">
        <p class="error-text">Tem certeza que deseja deletar esse usuário?</p>
    </div>
    <div class="modal-footer">
        <button class="btn" data-dismiss="modal" aria-hidden="true">Cancelar</button>
        <button class="btn btn-danger" data-dismiss="modal">Deletar</button>
    </div>
</div>
        

<?php $this->load->view('includes/footer'); ?>