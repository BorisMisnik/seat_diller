function AncetsCtrl($scope, $rootScope, $http){
	// date picker
	$scope.dt = new Date();
	$scope.dt2 = new Date();
	$scope.format = 'dd-MMMM-yyyy';
	$scope.dateOptions = {
		'year-format': "'yy'",
		'starting-day': 1
	};

	$scope.minDate = $scope.dt;

	$scope.open = function($event) {
		$event.preventDefault();
		$event.stopPropagation();
		$scope.opened = true;
	};

	$scope.open_second = function($event){
		$event.preventDefault();
		$event.stopPropagation();
		$scope.opened2 = true;
	};

	$scope.selectDate = function(){
		$scope.minDate = $scope.dt;
	};

	// model
	$scope.model = '';
	$scope.models = ['Ibiza', 'New Leon','Freetrack 4x4', 'Alhambra'];

	// modifications
	$scope.modifications = {
		'New Leon' : ['New Leon SC', 'New Leon ST'],
		'Ibiza' : ['Ibiza SC', 'Ibiza ST'],
		'' : []	
	};

	$scope.modification = $scope.modifications[$scope.model];
	$scope.chooseModel = function(){
		$scope.modification = $scope.modifications[$scope.model];
	};

	// diller
	$scope.dillers = [''];
	$http({method:'GET', url:'scripts/admin-methods.php', params:{dillers : 'dillers'}}).success(function(res){
		for (var i = 0; i < res.length; i++) {
			$scope.dillers.push(res[i].diller);
		};
	});
	// pagenations
	$scope.ancetsShow = 1;
	$scope.currentPage = 1;
	$scope.totalItems  = 0;

	// ancets
	$scope.ancets = [];
	$http({method:'GET', url:'scripts/admin-methods.php', params:{ancets : 'ancets'}}).success(function(res){
		$scope.ancets = res;
		$scope.totalItems = res.length;
	});

	// choose filter
	$scope.enableFilter = function(){
		var filters = {
			diller : $scope.diller,
			processing : $scope.processing ? 'Да' : ""
		}
		var array = _.filter($scope.ancets, function(obj){
			if( !filters.diller ) return true;
			return filters.diller === obj.diller;
		});

	 	array = _.filter($scope.ancets, function(obj){
			return filters.processing === obj.processing;
		});

		$scope.totalItems = array.length;
	};
}; 