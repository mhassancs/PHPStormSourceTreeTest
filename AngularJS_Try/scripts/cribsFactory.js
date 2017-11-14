angular
	.module('ngCribs')
	.factory('cribsFactory', function($http) {

		function getResidences() {
			return $http.get('data/data.json');
		}

		return {
			getResidences: getResidences
		}
	});