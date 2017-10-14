 angular
 	.module('angular_Cribs')
 	.controller('angular_Controller', function($scope, cribsFactory) {

	$scope.residences;

	cribsFactory.get_Cribs().then(function(response) {
			$scope.residences = response.data;
		}).catch(function(response) {
			console.error('Recidences error', response.status, response.data);
		})
		.finally(function() {
			console.log("finally finished gists");
		});

	$scope.sayHello = function() {
		console.log("Hello!");
	}

 	});