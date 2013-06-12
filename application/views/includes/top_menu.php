<div class="navbar navbar-static-top">
  <div class="navbar-inner">
    <div class="container-fluid">
      <a class="brand hidden-desktop" href="<?php echo site_url('index')?>"><img src="<?php echo base_url(); ?>img/acens.png"></a>
      <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
       <span class="icon-bar"></span>
      </a>
      <div class="nav-collapse collapse">
          <a class="brand hidden-phone hidden-tablet" href="<?php echo site_url('index')?>"><img src="<?php echo base_url(); ?>img/acens.png"></a>
          <ul class="nav nav-collapse">
            <li class="divider-vertical"></li>
            <li id="nav-add"><a href="#" class="button-inserir">Adicionar</a><!--<?php echo anchor('index', 'Adicionar'); ?>--></li>
            <li class="divider-vertical"></li>
            <li id="nav-delete"><?php echo anchor('index', 'Deletar'); ?></li>
            <li class="divider-vertical"></li>
            <li id="nav-edit"><?php echo anchor('index', 'Editar'); ?></li>
            <li class="divider-vertical"></li>
            <li id="nav-edit"><?php echo anchor('index/teste', 'Página de testes'); ?></li>
            <li class="divider-vertical"></li>            
          </ul>

          <div class="pull-right hidden-phone hidden-tablet">
              <ul class="nav pull-right">
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bem-vindo, <? echo anchor('index', $this->session->userdata('email')); ?> <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo site_url('index/sobre_presidencia'); ?>"><i class="icon-cog"></i> Perfil</a></li>
                          <li><a href="<?php echo site_url('index/sobre_presidencia'); ?>"><i class="icon-pencil"></i> Registrar atividades</a></li>
                          <li><a href="<?php echo site_url('index/projetos_alocados'); ?>"><i class="icon-briefcase"></i> Meus projetos</a></li>
                          <li class="divider"></li>
                          <li><a href="<?php echo site_url('index/sobre_presidencia'); ?>"><i class="icon-off"></i> Logout</a></li>
                      </ul>
                  </li>
              </ul>
            </div>

          <div class="hidden-desktop">
              <ul class="nav pull-right">
                  <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown">Bem-vindo, <? echo anchor('index', $this->session->userdata('email')); ?> <b class="caret"></b></a>
                      <ul class="dropdown-menu">
                          <li><a href="<?php echo site_url('index/sobre_presidencia'); ?>"><i class="icon-cog"></i> Perfil</a></li>
                          <li><a href="<?php echo site_url('index/sobre_presidencia'); ?>"><i class="icon-pencil"></i> Registrar atividades</a></li>
                          <li><a href="<?php echo site_url('index/projetos_alocados'); ?>"><i class="icon-briefcase"></i> Meus projetos</a></li>
                          <li class="divider"></li>
                          <li><a href="<?php echo site_url('index/sobre_presidencia'); ?>"><i class="icon-off"></i> Logout</a></li>
                      </ul>
                  </li>
              </ul>
            </div>            
        </div><!-- /.nav-collapse -->
    </div><!-- /.container -->
  </div><!-- /.navbar-inner -->
</div><!-- /.navbar -->