
ion.sound({
    sounds: [
        {
            name: "case_scroll"
        }
    ],
    volume: 0.5,
    path: "sounds/",
    preload: false
});

$(document).ready(function () {
    // for (i = 0; i < 3; i++) {
    //     $(".list li").clone().appendTo(".list");
    // }
    $('.button').click(function () {
        $('.window').css({
            right: "0"
        });
        $('.list li').css({
            border: '0'
        });
        $('.list').html('');
        function selfRandom(min, max) {
            return Math.floor(Math.random() * (max - min + 1)) + min;
        }
        $.get('test/open').done((r)=>{
            console.log(r);
            //var obj = JSON.parse(r);
            for (var i = 0; i < r.items.length; i++){
                console.log(r.items[i]);
                $(".list").append("<li> <img src='"+r.items[i].image+"' alt=''></li>");
            }
            var x = r.win_slot;
            $('.list li:eq('+x+')').css({
                border:'1px solid #00ba00'
            })
            $('.window').animate({
                right: ((x*138)+(x/2-17)-119)
            }, 7000);
        });

    });
});
