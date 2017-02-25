/**
 * Created by shino on 2016/10/23.
 */

$(function () {
    $('#signup').hide();

    $('#to_login').click(function () {
        $('#signup').hide("normal");
        $('#login').show("normal");
    });

    $('#to_signup').click(function () {
        $('#login').hide("normal");
        $('#signup').show("normal");
    });

});

