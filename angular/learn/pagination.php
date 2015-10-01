<!DOCTYPE html>
<html ng-app="todos">

  <head>
    <link data-require="bootstrap-css@2.3.2" data-semver="2.3.2" rel="stylesheet" href="//netdna.bootstrapcdn.com/twitter-bootstrap/2.3.2/css/bootstrap-combined.min.css" />
    <script data-require="angular.js@1.1.5" data-semver="1.1.5" src="http://code.angularjs.org/1.1.5/angular.min.js"></script>
    <script data-require="angular-ui-bootstrap@0.3.0" data-semver="0.3.0" src="http://angular-ui.github.io/bootstrap/ui-bootstrap-tpls-0.3.0.min.js"></script>
    <link rel="stylesheet" href="style.css" />
    <script src="script.js"></script>
  </head>

  <body ng-controller="TodoController">
    <h1>Todos</h1>
    <h4>{{todos.length}} remain</h4>
	<button ng-click="makeTodos(0,10)" value="getValue">adasd</button>
    <ul ng-init="test=0">
      <li ng-repeat="todo in todos">{{todo.text}}</li>
    </ul>
	<div ng-show="test">
		<div data-pagination="" data-num-pages="numPages()" 
		  data-current-page="currentPage" data-max-size="maxSize"  
		  data-boundary-links="true"></div>
	  </div>
  </body>
<script>
var todos = angular.module('todos', ['ui.bootstrap']);

todos.controller('TodoController', function($scope) {
	
	$scope.criterias = [{text:'todo1',done:false},
						{text:'todo2',done:false},
						{text:'todo3',done:false},
						{text:'todo4',done:false},
						{text:'todo5',done:false},
						{text:'todo6',done:false},
						{text:'todo7',done:false},
						{text:'todo8',done:false},
						{text:'todo9',done:false},
						{text:'todo10',done:false},
						{text:'todo11',done:false},
						{text:'todo12',done:false},
						{text:'todo13',done:false},
						{text:'todo14',done:false},
						{text:'todo15',done:false},
						{text:'todo16',done:false},
						{text:'todo17',done:false},
						{text:'todo18',done:false},
						{text:'todo19',done:false},
						{text:'todo20',done:false},
						{text:'todo21',done:false},
						{text:'todo22',done:false},
						{text:'todo23',done:false},
						{text:'todo24',done:false},
						{text:'todo25',done:false},
						{text:'todo26',done:false},
						{text:'todo27',done:false},
						{text:'todo28',done:false},
						{text:'todo29',done:false},
						{text:'todo30',done:false},
						{text:'todo31',done:false},
						{text:'todo32',done:false},
						{text:'todo33',done:false},
						{text:'todo34',done:false},
						{text:'todo35',done:false},
						{text:'todo36',done:false},
						{text:'todo37',done:false},
						{text:'todo38',done:false},
						{text:'todo39',done:false},
						{text:'todo40',done:false},
						{text:'todo41',done:false},
						{text:'todo42',done:false},
						{text:'todo43',done:false},
						{text:'todo44',done:false},
						{text:'todo45',done:false},
						{text:'todo46',done:false},
						{text:'todo48',done:false},
						{text:'todo49',done:false},
						{text:'todo50',done:false}];
   $scope.filteredTodos = []
  ,$scope.currentPage = 1
  ,$scope.numPerPage = 10
  ,$scope.totalPages = 50
  ,$scope.maxSize = 5;
   $scope.todos = [];
  $scope.makeTodos = function(begin,end) {	  
    $scope.todos = [];	
    for (i=begin;i<end;i++) {
		if($scope.criterias[i]){
      $scope.todos.push($scope.criterias[i]);
		}
    }	
	 $scope.test=1;
  };
  
  //$scope.makeTodos(); 
  
  $scope.numPages = function () {
    return Math.ceil($scope.totalPages / $scope.numPerPage);
  };
  $scope.$watch('test', function() {
    var begin = (($scope.currentPage - 1) * $scope.numPerPage)
    , end = begin + $scope.numPerPage;
    $scope.makeTodos(begin,end);
    //$scope.filteredTodos = $scope.todos.slice(begin, end);
  });
  $scope.$watch('currentPage', function() {
    var begin = (($scope.currentPage - 1) * $scope.numPerPage)
    , end = begin + $scope.numPerPage;
     $scope.makeTodos(begin,end);
    //$scope.filteredTodos = $scope.todos.slice(begin, end);
  });
});
</script>
</html>