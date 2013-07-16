///**
// * Created with JetBrains PhpStorm.
// * User: chillwalker
// * Date: 13.07.13
// * Time: 23:47
// * To change this template use File | Settings | File Templates.
// */
//$(document).ready(function(){
//
//    var element = $('#slider-1').attr('id');
//
//    function createNameFields(element){
//        //for-schleife
//
//
//        for(i=1; i < element; i++){
//            var template = '<label for="text-basic">Name Spieler ' + i + ':</label><input type="text" name="text-basic" id="text-basic" value="">';
//            document.append(template);
//            alert('habe ' + element + ' gemacht :D');
//        }
//    }
// });

$(document).ready(function() {
    $('#slider-1').change(function(){
        var asd = $(this).val();
        console.log(asd);
        // do whatever you want with that value...
    });

//    var sdf = document.find('#slider-1').attributes("aria-valuetext");
//    console.log(sdf);

    var weuhf = $('#slider-1').attr("aria-valuetext");
    console.log(weuhf);
});