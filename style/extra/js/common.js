$(document).ready(
function(){
    $('.add_email').click(function(){
        $(this).parent().append("<br/><div id='email_block' style='display:inline;'><input type='hidden' name='email_id[]'><input type='text' name='email[]'></div>");
    });


});
