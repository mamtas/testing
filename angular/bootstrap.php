<!DOCTYPE html>
<html lang="en" > 
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="icon" href="../../favicon.ico">

    <title>Dashboard Template for Bootstrap</title>

    <!-- Bootstrap core CSS -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<title> AngularJS Tabs</title>
<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.min.js" ></script>
    <!-- Custom styles for this template -->
    <link href="dashboard.css" rel="stylesheet">

    <!-- Just for debugging purposes. Don't actually copy these 2 lines! -->
    <!--[if lt IE 9]><script src="../../assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
    <script src="../../assets/js/ie-emulation-modes-warning.js"></script>

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>

   <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        
        <div class="navbar-collapse collapse" id="navbar">
          <ul class="nav navbar-nav navbar-left">
            <li><a href="#">Connect</a></li>
            <li><a href="#">Enrich</a></li>
            <li><a href="#">Analyze</a></li>
            <li><a href="#">Rules</a></li>
          </ul>
          
        </div>
      </div>
    </nav>

    <div class="container-fluid" ng-app="myAwesomeApp">
      <div class="row" ng-controller="MyFormCtrl as ctrl">
        <div class="col-sm-3 col-md-2 col-lg-2">
          <ul class="nav nav-sidebar">
            <li class="active"><a href="#">Search <span class="sr-only">(current)</span></a></li>
            <li><a href="#">Build a List</a></li>
            <li><a href="#">Manage Lisy</a></li>
            <li><a href="#">Export History</a></li>
          </ul>
         
        </div>
        <div class="col-sm-9 col-md-10 co-lg-10 main">
					<h1 class="page-header">Dashboard</h1>
					<div class="row">
								<div class="comppl-tabs-content col-xs-12 col-sm-12 col-md-6 col-lg-6">
										<div class="comppl-tabs">
											<ul ng-init="tab = 1">
											<li ng-class="{active:tab===1}" ng-click="tab = 1"> 
											<a href >Companies</a>	
											</li>
											<li ng-class="{active:tab===2}" ng-click="tab = 2"> 
											<a href >People</a> 
											</li>
											<br><br>
											</ul>	
										</div>			
										<div class="comppl-content">
											<div ng-show="tab === 1">
											<form ng-submit="submit()" >

											<input type="text" ng-model="text" required="number" name="text" />
											<input type="submit" id="submit" value="Submit" />
											<!--<pre>list={{list}}</pre>-->
											</form>
											</div>
											<div ng-show="tab === 2"> I drink pulpy orange juice, mango milk shake... </div>
										</div>
										<div class="row">
											<div class="comppl-search-result col-sm-6">
											<div class="">Search Result</div>
											<ul>
											<li ng-repeat="x in names">
											{{ x.Name + ', ' + x.Country }}
											</li>
											</ul>
											</div>	
										</div>								
								</div>

								


								<div class="col-lg-offset-1 col-md-offset-1  comppl-tabs-content  col-xs-12 col-sm-12 col-md-5 col-lg-4">
                                     <div class="heading-blue"> Wells Fargo & Co.</div>
									 <div class="col-sm-10 col-lg-10 topbottom font12">
									     Wells Fargo & Co.<span class="san-well">San Francisco, CA<span>
									 </div>
									 <div class="col-sm-2 col-lg-2 topbottom font12"><img src=""/></div>
									 <div  class="right_bar_tab col-sm-12 col-lg-12">
									     <div>										    
										     <ul class="righttabul" ng-init="righttab = 1">
                                                     <li ng-click="righttab=1" ng-class="{active:righttab===1}">Company Profile</li>
													 <li ng-click="righttab=2" ng-class="{active:righttab===2}">Executives</li>
													 <li ng-click="righttab=3" ng-class="{active:righttab===3}">All People</li>
                                             </ul>											 
										 </div>
										 <div class=" col-xs-12 col-sm-20 col-lg-12">
										     <div ng-show="righttab===1">
											   <table class="table table-hover righttab-table">
											   <tr><td>Co Type:</td><td>Public</td><td>Ticker:WFCNP</td></tr>
											   <tr><td>Industry:</td><td>Banks</td><td></td></tr>
											   <tr><td>Sub-Industry:</td><td>Commercial Banking</td><td></td></tr>
											   <tr><td>Revenue:</td><td>$84,374M</td><td></td></tr>
											   <tr><td>Emplayees:</td><td>254,500</td><td></td></tr>
											   <tr><td>Founded:</td><td>January 1,1852 </td><td></td></tr>
											   <tr><td>Email Domain:</td><td>wellsfargo.com</td><td></td></tr>
										
											   </table>
											 </div>
											 <div ng-show="righttab===2">
											    righttab2
											 </div>
											 <div ng-show="righttab===3">
											    righttab3
											 </div>
										 <div>
									 
									 </div>
								</div>
					</div>	
		</div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="../../dist/js/bootstrap.min.js"></script>
    <!-- Just to make our placeholder images work. Don't actually copy the next line! -->
    <script src="../../assets/js/vendor/holder.min.js"></script>
    <!-- IE10 viewport hack for Surface/desktop Windows 8 bug -->
    <script src="../../assets/js/ie10-viewport-bug-workaround.js"></script>
  </body>
  
  <script>
  
  angular.module('myAwesomeApp', [])
    .controller('MyFormCtrl', function($scope, $http) {
      $scope.list = [];
      $scope.text = 'hello';     
     $scope.submit = function() {
		   $http({
          url: 'https://apistage.dealsignal.com/api/v0/contact_watchlists/366?api_key=CtxY3Kpc7ZDL8VDfLmPt9wss&is_smart=true',
          method: 'PATCH',
          params: {'add_contact_ids':[228730,295200]}
         })
         .success(function (response) {
          console.log(response);
         }).
         error(function (response) {
         console.log(response);
          return false;          
         });
        if ($scope.text) {	
				$http.get("customers.php", {cname: $scope.text})
				  .success(function(response) {$scope.names = response.records;});
          /* $scope.list.push(this.text);
          $scope.text = ''; */
        }
      };
    });
</script>

               
</html>
