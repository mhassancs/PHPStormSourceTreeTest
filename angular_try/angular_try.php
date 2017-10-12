<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ng-Cribs</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	</head>
	<body ng-app="angular_Cribs" ng-controller="angular_Controller">
		<div class="well" ng-repeat="residence in residences">
			
			<h3>{{ residence.type }}</h3>
			<p><strong>Price: </strong>{{ residence.price | currency }}</p>
			<p><strong>Address: </strong>{{ residence.address }}</p>
			<p><strong>Description: </strong>{{ residence.description }}</p>
		</div>
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js"></script>
	<script src="app.js"></script>
	<script src="scripts/cribsController.js"></script>
	<script src="scripts/cribsFactory.js"></script>
</html>	