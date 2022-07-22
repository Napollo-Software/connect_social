function fetchNetworkOnProfile(type, route, token, nextURL) {
    $.ajax({
        type: "POST",
        url: route,
        data: {'type': type, _token: token},
        beforeSend: function () {
            $('.friend-grid-inner').html('<div class="col-md-12 text-center"><h1><i class="spinner-border spinner-border-large"></i></h1></div>');
        },
        success: function (data) {
            $('.friend-grid-inner').html(data);
            $('.see-all-url').html('<a href="' + nextURL + '">See All</a>');
        },
        error: function (xhr) {
            erroralert(xhr);
        }
    })
}

function updateProfilePicture(form, route) {
    swal({
        title: "Are you sure to change profile photo?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: route,
                data: form,
                dataType: "JSON",
                type: "post",
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    $('.profile_photo_preview').attr('src', data.response);
                    $('#profile_photo_input').val('');
                },
                error: function (xhr) {
                    erroralert(xhr);
                },
            });
        }
    });
}

function updateCoverPhoto(form, route) {
    swal({
        title: "Are you sure to change cover photo?",
        icon: "warning",
        buttons: true,
        dangerMode: true,
    }).then((willDelete) => {
        if (willDelete) {
            $.ajax({
                url: route,
                data: form,
                dataType: "JSON",
                type: "post",
                processData: false,
                contentType: false,
                cache: false,
                success: function (data) {
                    $('#cover_photo_preview').attr('src', data.response);
                    $('#cover_photo_input').val('');
                },
                error: function (xhr) {
                    erroralert(xhr);
                },
            });
        }
    });
}

function changeFullName(form,route) {
        $.ajax({
            type: "POST",
            url:route,
            data: form,
            dataType: 'JSON',
            processData: false,
            contentType: false,
            cache: false,
            success: function (data) {
                $('#update-name-modal').modal('hide');
                $('.full-name-of-current-user').html(data.response.fname + ' ' + data.response.lname);
            },
            error: function (xhr) {
                erroralert(xhr);
            }
        });
}