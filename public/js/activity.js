/**
 * Created by shino on 2016/10/23.
 */
$(function () {

    $('.item').click(function () {
       $(this).next('.detail').toggle();
    });

    $('.button_collapse').click(function () {
        $(this).parents('.detail').hide();
    });


    /*$('.button_in_out').click(function () {
     $(this).toggleClass('button_in');
     $(this).toggleClass('button_out');
     if(Boolean($(this).attr('in'))){
     $(this).text('参与活动');
     $(this).attr('in','');
     }else{
     $(this).text('取消参与');
     $(this).attr('in','out');
     }
     });*/


});
