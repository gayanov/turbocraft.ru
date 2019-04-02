var date = new Date();
var day = date.getDate() + 1;
var month = date.getMonth() + 1 ;
if(day >= 32) { day = day - 1 }

var Form = $('#Form');
var elMessage = $('.alert-message');
var data = [];
//var token = $('#token');

var nickname = $('.input-nick');
var productId = $('.select-group');

$(document).ready(function(){
    nickname.on('change',function(){
        if(productId.val()){
            data['btnId'] = $(this).data('server');
            data['nicknameVal'] = $(this).val();
            console.log(data);
            //console.log(btnId);
            //check(data), 10000
        }
    });
    productId.on('change',function(){
        if(nickname.val()){
            data['btnId'] = $(this).data('server');
            data['productVal'] = $(this).val();
            console.log(data);
            //console.log(btnId);
            //check(data), 10000
        }
    });

    elMessage.fadeTo(5000, 500).slideUp(500, function(){
        elMessage.slideUp(500);
    });

    $(".row").countdown("2020/" + month + "/" + day, function(event) {
        $('.second').text(event.strftime('%H'));
        $('.third').text(event.strftime('%M'));
        $('.four').text(event.strftime('%S'));
    });
    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })
});


function check(data) {
    var elBtnForm = $('#btn-'+data['btnId']);
    console.log(data);
    /*$.post( "/order", {
        nickname: data['nickname'],
        productId: data['productId'],
        check: true
    })
        .done(function( data ) {
            elBtnForm.html('Купить за '+data.final_price+' руб').attr('disabled', false);
        })
        .fail(function(response) {
            elBtnForm.html('Купить');
            //elBtnForm.html('Введите ник').attr('disabled', true);
        });*/
}

//Метод получение онлайна
/*function getOnline() {
    htmlDoomOnline = $("#online");
    htmlDoomOnline.html('загрузка...')
    $.get( "/api/v1/online")
        .done(function( data ) {
            htmlDoomOnline.html(data.players.online+'/'+data.players.max)
        });
}

//Получение онлайна
getOnline();
//Обновление онлайна
setInterval(getOnline, 10000);*/