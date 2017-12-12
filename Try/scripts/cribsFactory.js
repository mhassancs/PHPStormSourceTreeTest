 angular
 	.module('angular_Cribs')
 	.factory('abbgular_Factory', function($http) {

 		function get_angularCribs() {
 			return $http.get('data/data.json');
 		}

 		return {
 			get_Cribs: get_angularCribs
 		}

 	});