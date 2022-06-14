function submit(b,m,r,d,n) {
    var previous= b.text();
    b.attr('disabled','disabled').html('<span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span> Processing ...');
    $.ajax({
        type:m,
        url:r,
        data: d,
        dataType:'JSON',
        processData: false,
        contentType: false,
        cache: false,
        success:function(data) {
            b.attr('disabled',null).html(previous);
            if (n['type']=='form-reset'){
                n['target'].trigger("reset");
            }
            if (n['type']=='reload'){
                window.location.reload();
            }

            swal("Success!", data.success, "success");
        },
        error:function (xhr) {
            b.attr('disabled',null).html(previous);
            var error = '';
            $.each(xhr.responseJSON.errors,function (index,value) {
                error += value[0]+' ';
            });
            if (n['message']=='modal'){
               var modal= n['modal-target'];
               modal.modal('show');
               var message= modal.find('#message');
               message.html(error);
            }else{
                swal("Failed!", error, "error");
            }
        }
    });
}