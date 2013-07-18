<!-- estrutura do footer -->
<footer class="well-footer">
	<h5>2013 - Sistema Online de Gestão</h5>	
	Desenvolvido por <strong>Acens</strong>.
</footer>

<!-- import dos javascripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.dataTables.js"></script>

<script type="text/javascript">
     cont=0;
	$(document).ready(function(){
	    $('.table-filter').dataTable(
	    	
	    );
	});

    // Associa o evento do popover ao clicar no link.
      $('#a-popover').popover({
         trigger: 'manual',
         placement:'left',
         html: true,
         title: 'Novo Post-it',
         content: $('#div-popover').html() // Adiciona o conteúdo da div oculta para dentro do popover.
      }).click(function (e) {
         e.preventDefault();
         // Exibe o popover.
         $(this).popover('toggle');
      });
 
      $('#btn-fechar').live('click', function (e) {
         // Oculta o popover ao clicar no botão fechar.
         $('#a-popover').popover('hide');
      });
 
      $('#btn-modal').live('click', function (e) {
         // Oculta o popover ao clicar no botão abrir modal.
         $('#a-popover').popover('hide');
         // Abre o modal.
         $('#div-modal').modal();
      });



	$(function ()  
	{ $("#infoCompeten, #infoQualific").popover({trigger: 'hover'});  
	});  

	$.extend( $.fn.dataTableExt.oStdClasses, {
    "sSortAsc": "header headerSortDown",
    "sSortDesc": "header headerSortUp",
    "sSortable": "header"
	} );
</script>