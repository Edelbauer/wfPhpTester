/**
 * Created by Praktikant.STTINSM on 12.07.2016.
 */
/**
 * Test
 */
function test(){
    alert();
}



$('#myButton').on('click', function () {
    var $btn = $(this).button('loading')
    // business logic...
    $btn.button('reset')
})
