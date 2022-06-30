<script>
    $(document).on('click','.open-modal',function() {
       var modal_id = $(this) .attr('data-modal');
       $(modal_id).modal('show',true);
    });

    // init Tagify
    $(document).ready(function() {
        $('#email-tags').tagsinput({});
    })
</script>