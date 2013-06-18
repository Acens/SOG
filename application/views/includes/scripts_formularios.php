<script src="<?php echo base_url(); ?>/js/jquery.maskedinput.min.js"></script>

<script type="text/javascript">
    $(function() {
        $.mask.definitions['~'] = "[+-]";
        $(".date").mask("99/99/9999");
        $(".phone").mask("(99) 9999-9999");
        $(".cep").mask("99999-999");

        $("input").blur(function() {
            $(".info").html("Unmasked value: " + $(this).mask());
        }).dblclick(function() {
            $(this).unmask();
        });
    });
	
</script>