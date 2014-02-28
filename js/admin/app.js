var ang = angular.module('admin', ['ngRoute', 'ui.bootstrap'])
ang.config(['$routeProvider', function($routeProvider){
	$routeProvider
		.when('/', {
			templateUrl : 'js/admin/templates/main.html'
		})
		.when('/ancets', {
			templateUrl : 'js/admin/templates/ancets.html',
			controller : AncetsCtrl
		})
}]);
ang.filter('startFrom', function() {
	return function(input, start){
		start = +start;
		return input.slice(start);
	}
});
ang.filter('processingFilter', function(){
	return function(input, processing){
		var processing = processing ? 'Да' : '';
		var array = _.filter(input, function(obj){
			return obj.processing === processing;
		});
		return array;
	}
})