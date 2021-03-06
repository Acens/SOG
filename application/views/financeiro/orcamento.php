<?php $this->load->view('includes/header'); ?>
<?php $this->load->view('includes/top_menu'); ?>

<?php $this->load->view('includes/breadcrumb'); ?>

<div class="hero-unit-acens">
  <h1>Orçamentos</h1>
  <p>Faça novos orçamentos e veja orçamentos passados.</p>
</div>

<div id="MyWizard" class="wizard">
  <ul class="steps">
    <li data-target="#step1" class="active"><span class="badge badge-info">1</span>Step 1<span class="chevron"></span></li>
    <li data-target="#step2"><span class="badge">2</span>Step 2<span class="chevron"></span></li>
    <li data-target="#step3"><span class="badge">3</span>Step 3<span class="chevron"></span></li>
    <li data-target="#step4"><span class="badge">4</span>Step 4<span class="chevron"></span></li>
    <li data-target="#step5"><span class="badge">5</span>Step 5<span class="chevron"></span></li>
  </ul>
  <div class="actions">
    <button type="button" class="btn btn-mini btn-prev"> <i class="icon-arrow-left"></i>Prev</button>
    <button type="button" class="btn btn-mini btn-next" data-last="Finish">Next<i class="icon-arrow-right"></i></button>
  </div>
</div>
<div class="step-content">
  <div class="step-pane active" id="step1">This is step 1</div>
  <div class="step-pane" id="step2">This is step 2</div>
  <div class="step-pane" id="step3">This is step 3</div>
  <div class="step-pane" id="step4">This is step 4</div>
  <div class="step-pane" id="step5">This is step 5</div>
</div>

<?php $this->load->view('includes/footer'); ?>