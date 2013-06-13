<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>

<?php $this->load->view('includes/breadcrumb'); ?>

<div class="hero-unit-acens">
  <h1>Orçamento</h1>
  <p>Faça novos orçamentos e veja orçamentos passados.</p>
</div>

<div class="container">
<table class="table table-striped table-hover table-bordered">
  <tr>
    <th class="span6">Competências <a href="#" id="infoCompeten" rel="popover" data-content="Qualidades pessoais desejadas para o cargo." data-original-title="Info: Competências"><i class="icon-question-sign"></i></a></th>
    <th class="span6">Qualificações <a href="#" id="infoQualific" rel="popover" data-content="Conhecimentos básicos para a gestão." data-original-title="Info: Qualificações"><i class="icon-question-sign"></i></a></th>
  </tr>
  <tr>
    <td>Boa comunicação</td>
    <td>Google Docs(principalmente 
    Document e Spreadsheet)</td>
  </tr> 
  <tr>
    <td>Liderança</td>
    <td>Skype e Google Hangout</td>
  </tr>

  <tr>
    <td>Comprometimento</td>
    <td>Dropbox</td>
  </tr>

  <tr>
    <td>Pensamento Estratégico</td>
    <td>Trello</td>
  </tr>

  <tr>
    <td>Ética</td>
    <td></td>
  </tr>

  <tr>
    <td>Profissionalismo</td>
    <td></td>
  </tr>

  <tr>
    <td>Organização</td>
    <td></td>
  </tr> 
</table>
</div>

<?php $this->load->view('includes/footer'); ?>