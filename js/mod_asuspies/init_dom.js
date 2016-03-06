define(function  (require) {
    'use strict';

    var $ = require('jquery');
    $("#photo").change(function(){
        readURL(this);
    });
    function readURL(input) {

        if (input.files && input.files[0]) {
            var reader = new FileReader();

            reader.onload = function (e) {
                $('#upload-photo').attr('src', e.target.result);
            }

            reader.readAsDataURL(input.files[0]);
        }
    }
    $('.pop-share').click(function (event) {
        event.preventDefault();
        window.open($(this).attr("href"), "popupWindow", "width=480,height=300,scrollbars=yes");
    });
    function fixedBar(doit){
                var el=$('#fix-head-title');
                var visible=el.hasClass('go-darker');
                if (!visible) {
                    el.fadeOut(100).addClass('go-darker').fadeIn(1000);
                }
                else{
                    if(!doit){
                        el.fadeOut(100).removeClass('go-darker').fadeIn(1000);
                    }
                }

            };
    $(window).scroll(function(){
                var visible=$('#fix-head-title').hasClass('go-darker');
                    var y_scroll_pos = window.pageYOffset;
                    var element_position = $('.container-fluid').offset().top;
                    var scroll_pos_test = element_position;
                    if(y_scroll_pos > scroll_pos_test) {
                        if (!visible) {
                            fixedBar(true);
                        }
                    }
                    else{
                        if (visible) {
                            fixedBar(false);
                        }
                    }

            });


})
