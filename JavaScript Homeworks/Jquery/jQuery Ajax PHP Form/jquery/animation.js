$(document).ready(function () {
    $('li.fields').filter(':nth-child(n+4)').addClass('hide');

    $('ul').on('click','li.title',function () {
        $(this).next().slideDown(200).siblings('li.fields').slideUp(200);
    });

    $('#new_comment').click(function () {
       $('#stylized').show();
       $('#cancel_comment').show();
       $('#new_comment').hide();
    });
    $('#cancel_comment').click(function () {
       $(this).hide();
       $('#stylized').hide();
       $('#new_comment').show();
    });
    $('.req').focusin(function () {
        $(this).css('background','#ccc');
    });
    $('.req').focusout(function () {
        $(this).css('background','white');
    });
    $('label').mouseenter(function () {
       $(this).find('span').show();
    });
    $('label').mouseleave(function () {
       $(this).find('span').hide();
    });
    $('#check').click(function () {
        if ($(this).is(':checked')){
            $('#btn').attr('disabled',false).css('background','#cecece');
        }
        else {
            $('#btn').attr('disabled',true);
        }
    });
});