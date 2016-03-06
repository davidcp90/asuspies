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
})
