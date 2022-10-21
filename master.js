$(function (){
    $('.datepicker').change(function(){
        $.ajax({
            url: "ajax.php?datepicker=" + $(this).val(),
            success: function(results){
                $(".results").html(results);
            },
            error: function(){
                $(".results").html("Error");
            }
        })
    });

});