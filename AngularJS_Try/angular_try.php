<!doctype html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Residences</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
    <link rel="stylesheet" href="css/style.css">
  </head>
  <body ng-app="ngCribs" ng-controller="cribsController">

  	<!-- Nav Bar -->
	  <nav class="navbar navbar-default">
	    <div class="container-fluid">
	      <div class="navbar-header">
	        <a class="navbar-brand" href="#">Residences</a>
	      </div>
	    </div>
	  </nav>
		
		<div class="container">
		  <!-- Min and Max Price Selection -->
		  <div class="col-sm-12 price-form">      
				<div class="row price-form-row" ng-if="!addListing">
			    <div class="col-sm-6">
			      <div class="input-group">
			        <span class="input-group-addon">Min Price</span>
			        <select name="minPrice" id="minPrice" ng-model="priceInfo.min" class="form-control">
                        <option value="0">$0</option>
                        <option value="1000">$1,000</option>
                        <option value="2000">$2,000</option>
                        <option value="3000">$3,000</option>
                        <option value="4000">$4,000</option>
                        <option value="5000">$5,000</option>
                        <option value="6000">$6,000</option>
                        <option value="7000">$7,000</option>
                        <option value="8000">$8,000</option>
                        <option value="9000">$9,000</option>
                        <option value="10000">$10,000</option>
			        </select>
			      </div>          
			    </div>

			    <div class="col-sm-6">
			      <div class="input-group">
			        <span class="input-group-addon">Max Price</span>
			        <select name="maxPrice" id="maxPrice" ng-model="priceInfo.max" class="form-control">
			          <option value="1000">$1,000</option>
			          <option value="2000">$2,000</option>
			          <option value="3000">$3,000</option>
			          <option value="4000">$4,000</option>
			          <option value="5000">$5,000</option>
			          <option value="6000">$6,000</option>
			          <option value="7000">$7,000</option>
			          <option value="8000">$8,000</option>
			          <option value="9000">$9,000</option>
			          <option value="10000">$10,000</option>
			        </select>
			      </div>          
			    </div>
				</div>
		    <button 
		    	class="btn btn-primary" 
		    	ng-click="addListing = !addListing" 
		    	ng-show="!addListing">Add Listing
		    </button>

		    <button 
		    	class="btn btn-danger" 
		    	ng-click="addListing = !addListing" 
		    	ng-show="addListing">Close
		    </button>

		      <div class="listing-form" ng-if="addListing">

		        <h3>Add a Listing</h3>

		        <div class="row listing-form-row">
		          <div class="col-sm-4">
		            <div class="input-group">
		              <span class="input-group-addon">Address</span>
		              <input 
		              	type="text" 
		              	placeholder="Enter the address" 
		              	class="form-control" 
		              	ng-model="newListing.address">
		            </div>
		          </div>

		          <div class="col-sm-4">
		            <div class="input-group">
		              <span class="input-group-addon">Price</span>
		              <input 
		              	type="text" 
		              	placeholder="Enter the price" 
		              	class="form-control" 
		              	ng-model="newListing.price">
		            </div>
		          </div>

		          <div class="col-sm-4">
		            <div class="input-group">
		              <span class="input-group-addon">Property Type</span>
		              <select 
		              	type="select" 
		              	name="propertyType" 
		              	id="propertyType" 
		              	class="form-control" 
		              	ng-model="newListing.type">
			                <option value="Film">Film</option>
			                <option value="Nip">Nip</option>
		              </select>
		            </div>
		          </div>
		        </div>

		        <div class="row listing-form-row">
		          <div class="col-sm-4">
		            <div class="input-group">
		              <span class="input-group-addon">Description</span>
		              <textarea 
		              	type="text" 
		              	placeholder="Enter the description" 
		              	class="form-control" 
		              	ng-model="newListing.description">
		              </textarea>
		            </div>
		          </div>

		          <div class="col-sm-8">

		            <div class="col-sm-4">
		              <div class="input-group">
		                <span class="input-group-addon">Beds</span>
		                <input 
		                	type="text" 
		                	placeholder="Bedrooms" 
		                	class="form-control" 
		                	ng-model="newListing.details.bedrooms">
		              </div>
		            </div>

		            <div class="col-sm-4">
		              <div class="input-group">
		                <span class="input-group-addon">Baths</span>
		                <input 
		                	type="text" 
		                	placeholder="Bathrooms" 
		                	class="form-control" 
		                	ng-model="newListing.details.bathrooms">
		              </div>
		            </div>

		            <div class="col-sm-4">
		              <div class="input-group">
		                <span class="input-group-addon">SqFt</span>
		                <input 
		                	type="text" 
		                	placeholder="Square Footage" 
		                	class="form-control" 
		                	ng-model="newListing.details.area">
		              </div>
		            </div>

		          </div>
		        </div>
						<button 
							class="btn btn-primary listing-button"
							ng-click="addCrib(newListing)"
							ng-show="addListing">Add
						</button>
		        <pre>{{newListing | json}}</pre>
		      </div>

	        <div class="listing-form" ng-if="editListing">

	         <h3>Edit Listing</h3>

	         <div class="row listing-form-row">
	           <div class="col-sm-4">
	             <div class="input-group">
	               <span class="input-group-addon">Address</span>
	               <input 
	               	type="text"
	               	placeholder="Enter the address"
	               	class="form-control"
	               	ng-model="existingListing.address">
	             </div>
	           </div>

	           <div class="col-sm-4">
	             <div class="input-group">
	               <span class="input-group-addon">Price</span>
	               <input 
	               	type="text"
	               	placeholder="Enter the price"
	               	class="form-control"
	               	ng-model="existingListing.price">
	             </div>
	           </div>

	           <div class="col-sm-4">
	             <div class="input-group">
	               <span class="input-group-addon">Property Type</span>
	               <select 
	               	type="select"
	               	name="propertyType"
	               	id="propertyType" 
	               	class="form-control" 
	               	ng-model="existingListing.type">
	      	           <option value="Film">Film</option>
	      	           <option value="Nip">Nip</option>
	               </select>
	             </div>
	           </div>
	         </div>

	         <div class="row listing-form-row">
	           <div class="col-sm-4">
	             <div class="input-group">
	               <span class="input-group-addon">Description</span>
	               <textarea 
	               	type="text"
	               	placeholder="Enter the description"
	               	class="form-control"
	               	ng-model="existingListing.description">
	               </textarea>
	             </div>
	           </div>

	           <div class="col-sm-8">

	             <div class="col-sm-4">
	               <div class="input-group">
	                 <span class="input-group-addon">Beds</span>
	                 <input 
	                 	type="text"
	                 	placeholder="Bedrooms"
	                 	class="form-control"
	                 	ng-model="existingListing.details.bedrooms">
	               </div>
	             </div>

	             <div class="col-sm-4">
	               <div class="input-group">
	                 <span class="input-group-addon">Baths</span>
	                 <input
	                 	type="text"
	                 	placeholder="Bathrooms"
	                 	class="form-control"
	                 	ng-model="existingListing.details.bathrooms">
	               </div>
	             </div>

	             <div class="col-sm-4">
	               <div class="input-group">
	                 <span class="input-group-addon">SqFt</span>
	                 <input
	                 	type="text"
	                 	placeholder="Square Footage"
	                 	class="form-control"
	                 	ng-model="existingListing.details.area">
	               </div>
	             </div>

	           </div>

	           <button 
	           	class="btn btn-primary listing-button"
	           	ng-click="saveCribEdit()"	
	           	ng-show="editListing">Save
	           </button>

	           <button 
	           	class="btn btn-danger listing-button" 
	           	ng-click="deleteCrib(existingListing)" 
	           	ng-show="editListing">Delete
	           </button>

	           </div>

		  </div>
	  </div>

	    


	  <!-- Real Estate Listings -->
    <div class="container">
      <div class="col-sm-4" 
      	ng-repeat="crib in cribs | cribsFilter:priceInfo | orderBy: '-id'">
        <div class="thumbnail">
          <img ng-src="images/{{crib.image}}.jpg" alt="">
          <div class="caption">
            <div ng-hide="showDetails === true">
              <h3><i class="glyphicon glyphicon-tag"></i> {{crib.price | currency}}</h3>
              <h4><i class="glyphicon glyphicon-home"></i> {{crib.address}} 
                <span class="label label-primary label-sm">{{crib.type}}</span>
              </h4>

            </div>             

            <button class="btn btn-xs btn-success" 
                    ng-hide="showDetails === true" 
                    ng-click="showDetails = !showDetails">
                    Details
            </button>

            <button 
            	class="btn btn-xs btn-primary"
            	ng-show="showDetails"
            	ng-click="editCrib(crib)">Edit
            </button>

            <button class="btn btn-xs btn-danger" 
                    ng-show="showDetails === true"
                    ng-click="showDetails = !showDetails">
                    Close
            </button>

            <div class="details" ng-show="showDetails === true">
              <h4>
                <span class="label label-primary">Beds: {{crib.details.bedrooms}}</span>
                <span class="label label-primary">Baths: {{crib.details.bathrooms}}</span>
                <span class="label label-primary">SqFt: {{crib.details.area}}</span>
              </h4>
              <p>{{crib.description}}</p>              
            </div>

          </div> 
        </div>
      </div>          
    </div>

  </body>
  <script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.4.7/angular.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.13.4/ui-bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/angular-ui-bootstrap/0.13.4/ui-bootstrap-tpls.min.js"></script>
  <script src="app.js"></script>
  <script src="scripts/cribsController.js"></script>
  <script src="scripts/cribsFactory.js"></script>
  <script src="scripts/cribsFilter.js"></script>

</html>