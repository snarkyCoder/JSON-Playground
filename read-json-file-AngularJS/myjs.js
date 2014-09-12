'use strict';
var showsApp = angular.module('showsApp', []);

showsApp.controller('ShowListCtrl', function ($scope, $http) {
  $http.get('show-data.json').success(function(data) {
    $scope.shows = data;
  });
});	