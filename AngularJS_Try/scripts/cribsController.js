angular
	.module('ngCribs')
	.controller('cribsController', function($scope, cribsFactory) {

		$scope.Residences;

		$scope.priceInfo = {
			min: 0,
			max: 1000000
		}

		$scope.newListing = {};

		$scope.addCrib = function(newListing) {
			newListing.image = 'default-crib';
			$scope.Residences.push(newListing);
			$scope.newListing = {};
		}

		$scope.editCrib = function(crib) {
			$scope.editListing = true;
			$scope.existingListing = crib;
		}

		$scope.saveCribEdit = function() {
			$scope.existingListing = {};
			$scope.editListing = false;
		}

		$scope.deleteCrib = function(listing) {
			var index = $scope.Residences.indexOf(listing);
			$scope.Residences.splice(index, 1);
			$scope.existingListing = {};
			$scope.editListing = false;
		}

		cribsFactory.getResidences().success(function(data) {
			$scope.Residences = data;
		}).error(function(error) {
			console.log(error);
		});

	});