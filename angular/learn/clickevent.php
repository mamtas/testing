<!DOCTYPE html>
<html>
<script src="http://ajax.googleapis.com/ajax/libs/angularjs/1.3.14/angular.min.js"></script>
<body>
<div ng-app="app" >
    <div ng-controller="ctrl" global-events>
	<ul>
        <li ng-repeat="person in personArray">
            <label>
                <input type="checkbox" ng-value="person"  />
                {{person.name}} - {{person.optvalue}}
            </label>
        </li>
    <ul>    
        <hr/>
        <input type="text" id="asdf" value="asasdsadsa">
    </div>
</div>

</body>
<script>
var ngApp = angular.module('app', []);
 
ngApp.controller('ctrl',function($scope){
   $scope.personArray =[{name:'All',optvalue:'All'},
												{name:'1-10',optvalue:'1-10'},
												{name:'11-50',optvalue:'11-50'},
												{name:'51-200',optvalue:'51-200'},  
												{name:'201-500',optvalue:'201-500'},
												{name:'501-1000',optvalue:'501-1000'},
												{name:'1001-5000',optvalue:'1001-5000'},
												{name:'5001-1000',optvalue:'5001-1000'},
												{name:'10,000+',optvalue:'10000+'}];
    
});
    .directive('globalEvents', function(News) {
    return function(scope, element, attrs) {
    element.bind('click', function(e){
    // Do something
    })
    }
    })
</script>
</html>