<script>
    $(document).on('click','.open-modal',function() {
       var modal_id = $(this) .attr('data-modal');
       $(modal_id).modal('show',true);
    });
    $(".top-open-menu").click(function () {
        var data_menu_class = $(this).attr("data-target");
        $(data_menu_class).toggle();
    });
    $(function () {
        $('#email-tags').tagsinput({});

        // Show Post
        $(document).on('click','.show-post-pop-up',function() {
            $('body').addClass('show-post');
            $('.single-post-pop-up').show(500);
        });
        // Close PopUp
        $(document).on('click','.close-post-popup',function() {
            $('body').removeClass('show-post');
            $('.single-post-pop-up').hide(500);
        });

        // Show DropDown
        $(document).on('click','.open-dropdown',function() {
            var dropdown_class = $(this).attr('data-target')
            $(dropdown_class).show();
        })
        // Show PopOver
        $(document).on('click','.show-popover',function() {
            var popover_class = $(this).attr('data-popover');
            $(popover_class).show();
            setTimeout(function() {
                $(popover_class).hide();
            },1000);
            $('#referral-link-text').select();
            document.execCommand("copy");
        });
        $(document).on('click','#send-invite-link-btn',function () {
            $.ajax({
                type: "POST",
                url: "{{route('send.invite.for.referral')}}",
                dataType: "JSON",
                data: {'email': $('#email-tags').val(), _token: '{{csrf_token()}}'},
                beforeSend: function () {
                    $('#send-invite-link-btn').html('<i class="fa fa-spin fa-spinner"></i> Processing');
                },
                success: function (data) {
                    $('#send-invite-link-btn').html('Send');
                    swal("Success!", data.success, "success").then(function () {
                        $('#Send-InvitationModal').modal('hide');
                    });
                },
                error: function (xhr) {
                    $('#send-invite-link-btn').html('Send');
                    erroralert(xhr);
                }
            }) ;
        });
    });
    setInterval(function () {
        offset = $(".profile-navigation").offset();
        var w = $(window);
        if (offset.top - w.scrollTop() == 0) {
            $(".to-show-sticky").show();
            $('.profile-navigation-ul-outer').removeClass("full-show");
            $('.profile-navigation-nav').addClass('aligned');
        } else {
            $(".to-show-sticky").hide();
            $('.profile-navigation-nav').removeClass('aligned');
            $('.profile-navigation-ul-outer').addClass("full-show");
        }
    }, 100);

</script>