define(function(require) {
    'use strict';

    return angular.module('mod_asuspies.services', [])
        .factory('AsuspiesService', ['$http', '$q',
            function($http, $q) {
                function getMembers() {
                    var deferred = $q.defer();
                    $http({
                        method: 'GET',
                        url: 'getPeople',
                    }).success(function(data) {
                        deferred.resolve(data);
                    });
                    return deferred.promise;
                }
                return {
                    getMembers: getMembers,
                }
            }

        ])
});