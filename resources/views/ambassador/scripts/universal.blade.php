<script>
    $(document).on('click','.open-modal',function() {
       var modal_id = $(this) .attr('data-modal');
       $(modal_id).modal('show',true);
    });

    // init Tagify
    $(document).ready(function() {
        $('#email-tags').tagsinput({});

        // Show PopOver
        $(document).on('click','.show-popover',function() {
            var popover_class = $(this).attr('data-popover');
            $(popover_class).show();
            setTimeout(function() {
                $(popover_class).hide();
            },500);
        })
    })
</script>