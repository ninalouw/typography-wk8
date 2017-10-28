//test my type
$(function(){
    $('#input-font').change(function(){
        var font = $(this).val();
        $('.output-text').css("font-family", font);
    });
    $("#size").change(function () {
        var size = $(this).val();
        $('.output-text').css("font-size", size + "px");
    });
    $("#style").change(function () {
        var style = $(this).val();
        if (style === 'bold'){
            $('.output-text').css("font-weight", style);
        }
        else if (style === 'normal'){
            $('.output-text').css({"font-weight": style, "font-style": style});
        } else{
            $('.output-text').css("font-style", style);
        }
    });
    $("#transform").change(function () {
        var transform = $(this).val();
        $('.output-text').css("text-transform", transform);
    });
});