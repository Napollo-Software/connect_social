// All Custom Scripts

// Open DropDowns

$(document).ready(function() {
    // Init Vars
    var dropdown_box = ".dropdown-box";
    var dropdown_class = ".custom-dropdown";
    
    // Open DropDown
    $(document).on('click','.open-dropdown',function() {
        var target = $(this).attr('data-target')
        if (!check_activity($(target))) {
            $(target).addClass('active');
        } else {
            $(target).removeClass('active');
        }
    });

    // Helper Function
    function check_activity(element) {
        return (element.hasClass('active')) ? true : false ;
    }

    // Close on Document Click
    $(window).click(function(event) {
        if (!$(event.target).closest(dropdown_box).length){
            $(dropdown_class).removeClass('active');
        }
    });

    // Close Search Box
    $(document).on('click','.close-recent-search',function(){
        $(".recent-searches-box").removeClass('active');
    })
});