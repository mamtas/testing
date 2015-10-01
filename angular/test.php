<!doctype html>
<html ng-app>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
	<title> AngularJS Tabs</title>
	<script src="https://ajax.googleapis.com/ajax/libs/angularjs/1.2.19/angular.min.js" ></script>
	
</head>
<body>
	 <body>

    <nav class="navbar navbar-inverse navbar-fixed-top">
      <div class="container-fluid">
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="#">Project name</a>
        </div>
        <div id="navbar" class="navbar-collapse collapse">
          <ul class="nav navbar-nav navbar-right">
            <li><a href="#">Dashboard</a></li>
            <li><a href="#">Settings</a></li>
            <li><a href="#">Profile</a></li>
            <li><a href="#">Help</a></li>
          </ul>
          <form class="navbar-form navbar-right">
            <input type="text" class="form-control" placeholder="Search...">
          </form>
        </div>
      </div>
    </nav>

<div class="container-fluid">
<div class="row">
   <div class="col-sm-9 col-sm-offset-3 col-md-10 col-md-offset-2 main">
			<div class="comppl-tabs-content">
					<div class="comppl-tabs">
							<ul ng-init="tab = 1">
								<li ng-class="{active:tab===1}"> 
								  <a href ng-click="tab = 1">Companies</a>	
								</li>
								<li ng-class="{active:tab===2}"> 
								  <a href ng-click="tab = 2">People</a> 
								</li>
								<br><br>
							</ul>	
					</div>			
					<div class="comppl-content">
							<div ng-show="tab === 1"> I eat chocolates, alive! </div>
							<div ng-show="tab === 2"> I drink pulpy orange juice, mango milk shake... </div>
					</div>	
			 </div>	
	 </div>			 
 </div>

</div>	
	</section>		
</body>
</html>