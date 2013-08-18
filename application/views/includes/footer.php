<!-- estrutura do footer -->
<footer class="well-footer">
	<h5>2013 - Sistema Online de Gestão</h5>	
	Desenvolvido por <strong>Acens</strong>.
</footer>

<!-- import dos javascripts -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/bootstrap.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/jquery.dataTables.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/datepicker.js"></script>
<script type="text/javascript" src="<?php echo base_url(); ?>/js/datepicker_novo.js"></script>

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

      $('.escolher-post').button();

      //
      $('#myTab a[href="#profile"]').tab('show'); // Select tab by name
      $('#myTab a:first').tab('show'); // Select first tab
      $('#myTab a:last').tab('show'); // Select last tab
      $('#myTab li:eq(2) a').tab('show'); // Select third tab (0-indexed)


      //calendario
      var data = new Date();
      var day = data.getDate();
      var month = data.getMonth()+1;
      var year = data.getFullYear();
      var dat = day + '/' + month + '/' + year;
    //  $(".calendar").text(dat);

      $('.calendar').DatePicker({
        flat: true,
        format:'d/m/Y',
        date: dat,
        current: dat,
        calendars: 1,
        starts: 1
      });

      $('.calendar_presenca').DatePickerNovo({
        flat: true,
        format:'d/m/Y',
        date: dat,
        current: dat,
        calendars: 1,
        starts: 1
      });


      //termina calendario

	$(function ()  
	{ $("#infoCompeten, #infoQualific").popover({trigger: 'hover'});  
	});  

	$.extend( $.fn.dataTableExt.oStdClasses, {
    "sSortAsc": "header headerSortDown",
    "sSortDesc": "header headerSortUp",
    "sSortable": "header"
	} );
</script>