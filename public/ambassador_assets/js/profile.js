$(document).ready(function(){
    $('.upload-selector').click(function(){
        var target = $(this).attr('data-target');
        $(target).trigger('click');
    });

    // Will Open Editor for About
    $(".edit-button").click(function() {
        var type = $(this).attr('data-type');
        if (type == 'div') {
            var target = $(this).attr('data-target');
            var class_hide = $(this).attr('data-hide');
            $(class_hide).hide();
            $(target).show();
        }
    });

    // Will Open all Privacy DropDown
    $('.open-dropdown').click(function () {
        var target = $(this).attr('data-target');
        $(target).toggle();
    });



    // Open Post Editor

    $('.open-post-editor').click(function() {
        var target = $(this).attr("data-target");
        var hide_close = $(this).attr("data-close");
        $(hide_close).hide();
        $(target).show();
    });

    // $("#exampleModal").modal('show',true);
});