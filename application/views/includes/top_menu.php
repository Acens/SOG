<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container">
      <a class="brand" href="<?php echo site_url('index')?>"><img src="<?php echo base_url(); ?>img/acens.png"></a>
      <ul class="nav">
        <li class="divider-vertical"></li>
        <li id="nav-add"><?php echo anchor('index', 'Adicionar'); ?></li>
        <li class="divider-vertical"></li>
        <li id="nav-delete"><?php echo anchor('index', 'Deletar'); ?></li>
        <li class="divider-vertical"></li>
        <li id="nav-edit"><?php echo anchor('index', 'Editar'); ?></li>
        <li class="divider-vertical"></li>
      </ul>

      <div class="pull-right">
          <ul class="nav pull-right">
              <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bem-vindo, <? echo anchor('index', $this->session->userdata('email')); ?> <b class="caret"></b></a>
                  <ul class="dropdown-menu">
                      <li><a href="#"><i class="icon-cog"></i> Perfil</a></li>
                      <li><a href="#"><i class="icon-envelope"></i> Contato</a></li>
                      <li class="divider"></li>
                      <li><a href="#"><i class="icon-off"></i> Logout</a></li>
                  </ul>
              </li>
          </ul>
        </div>

    </div>
  </div>
</div>