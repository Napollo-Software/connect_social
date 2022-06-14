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

        },
        error:function (xhr) {
            var error = '';
            $.each(xhr.responseJSON.errors,function (index,value) {
                error += value[0]+' ';
            });

        }
    });
}