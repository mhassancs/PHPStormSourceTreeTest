 angular
 	.module('angular_Cribs')
 	.controller('angular_Controller', function($scope, angular_Factory) {

	$scope.residences;
	$scope.priceInfo = {
		min:0,
		max:10000000
	}

	angular_Factory.get_Cribs().then(function(response) {
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