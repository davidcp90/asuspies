define(function (require){
  'use strict';
  var angular = require('angular');
  return angular.module('mod_asuspies.controllers', []).
  controller('AsuspiesController', ['$scope', 'AsuspiesService',
    function($scope, AsuspiesService){
      var s=$scope;
      $('form').trigger('reset');
      function scrollToAnchor(target_id){
        var aTag = $(target_id);
        var y= aTag.offset().top-70;
        $('html,body').animate({scrollTop: y},'slow');
      }
      function throwError(){
        $('#error').fadeIn('fast').removeClass('hidden');
        scrollToAnchor('#error');
        setTimeout(function(){
          $('#error').fadeOut('fast').addClass('hidden');
        }, 15000);
      }
      s.joinAsuspies=function(){
        var isValid=$('form').parsley().isValid({group: 'i-grow', force: true});
        if (isValid){
          $('form').submit();
        }
        else{
          throwError();
        }

      }
      s.resetApp=function(){
        $('#thanks').fadeOut('fast').addClass('hidden');
        $('#intro').fadeIn('slow').removeClass('hidden');
      }
      s.goNext=function(origen,destino,nav,checkform){
        var origenObj=$('#'+origen);
        if(checkform){
          var isValid=$('form').parsley().isValid({group: origen, force: true});
        }
        else{
          var isValid=true;
        }
//        isValid=true;
if(isValid){
  origenObj.fadeOut('fast',function(){
    if(nav){
      $('.navbar').transition({ y: '95px' });
    }
    $('#'+destino).fadeIn('slow').removeClass('hidden');
  }).addClass('hidden');
}
else{
  throwError();
}
}
}])
  .controller('ListaAsuspiesController', ['$scope', 'AsuspiesService',
    function($scope, AsuspiesService){
      var s=$scope;
      s.committeeName=function(comite){
        comite=parseInt(comite);
        switch(comite) {
          case 1:
            return 'Alabanza';
            break;
          case 2:
            return 'Pastoreo y Discipulado';
            break;
          case 3:
            return 'Evangelismo';
            break;
          case 4:
            return 'Enseñanza';
            break;
          case 5:
            return 'Oración';
            break;
          case 6:
            return 'Logistica';
            break;
          case 7:
            return 'Actividades';
            break;
          case 8:
            return 'Artes y comunicaciones';
            break;
          default:
            return 'Jovenes a sus pies';
        }
      }
      AsuspiesService.getMembers().then(function  (data) {
        s.members=data;
        console.log(data);
      });
    }]);

})