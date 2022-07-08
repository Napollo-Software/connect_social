(function( $ ){
    $.fn.Itrigger = function() {
       console.log($(this));
       var element = $(this);
       if(element.length > 0){
            var trigger_name = $(this).attr('data-trigger');
            var target_element = $(this).attr('data-target');
            var action = $(this).attr('data-action');
            var action_array = action.split('.');
            var action_triggr = action_array[0];
            var action_property = action_array[1];
            console.log(target_element);
            $(this).on(trigger_name,function(){
                if(action_property == 'html') {
                    $(target_element).html(element.val());
                }

                if(action_property == 'focus') {
                    $(target_element).focus().click();
                }
            })
       }
       return this;
    }; 
 })( jQuery );