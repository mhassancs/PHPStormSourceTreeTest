<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
		<title>ng-Cribs</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
	    <link rel="stylesheet" href="angular_css/style.css">
    </head>
	<body ng-app="angular_Cribs" ng-controller="cribsController">

        <!-- Nav bar-->
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" herf="#">Residences</a>
                </div>
            </div>
        </nav>

        <!-- Real Estate Listing -->
        <div class="container">
            <div class="col-sm-4" ng-repeat="residence in residences">
                <div class="thumbnail">
                    <img ng-src="images/{{residence.image}}.jpg" alt="">
                    <div class="caption">
                        <div ng-hide="showDetails === true">
                            <h3>
                                <i class="glyphicon glyphicon-tag"></i>
                                {{ residence.price | currency }}
                            </h3>
                            <h4>
                                <i class="glyphicon glyphicon-home"></i>{{ residence.address }}
                                <span class="label label-primary label-sm">{{ residence.type }}</span>
                            </h4>
                        </div>

                        <button class="btn btn-xs btn-success"
                                ng-hide="showDetails === true"
                                ng-click="showDetails = !showDetails">
                                Details
                        </button>

                        <button class="btn btn-xs btn-danger"
                                ng-show="showDetails === true"
                                ng-click="showDetails = !showDetails">
                                Close
                        </button>

                        <div class="details" ng-show="showDetails === true">
                            <h4>
                                <span class="label label-primary">
                                    Beds:{{residence.details.bedrooms}}
                                </span>
                                <span class="label label-primary">
                                    Baths:{{residence.details.bathrooms}}
                                </span>
                                <span class="label label-primary">
                                    SqFt:{{residence.details.area}}
                                </span>
                            </h4>
                            <p>{{residence.description}}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!--
        <button ng-click="showMessage = !showMessage">Toggle Secret Message</button>
        <h2 ng-show="showMessage == true">My Password is 123456789!</h2>

        <input type="text" placeholder="Leave a message" ng-model = "message">
        <h2>{{ message }}</h2>

        <div class="well" ng-repeat="residence in residences">
			
			<h3>{{ residence.address }}</h3>
            <p><strong>Type: </strong>{{ residence.type }}</p>
            <p><strong>Description: </strong>{{ residence.description }}</p>
			<p><strong>Price: </strong>{{ residence.price | currency }}</p>
		</div>
		-->
	</body>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.6.6/angular.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/2.5.0/ui-bootstrap-tpls.min.js"></script>
	<script src="app.js"></script>
	<script src="scripts/cribsController.js"></script>
	<script src="scripts/cribsFactory.js"></script>
</html>	