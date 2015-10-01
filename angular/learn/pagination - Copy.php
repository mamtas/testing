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
    <ul>
      <li ng-repeat="todo in filteredTodos">{{todo.text}}</li>
    </ul>
    <div data-pagination="" data-num-pages="numPages()" 
      data-current-page="currentPage" data-max-size="maxSize"  
      data-boundary-links="true"></div>
  </body>
<script>
var todos = angular.module('todos', ['ui.bootstrap']);

todos.controller('TodoController', function($scope) {
   $scope.filteredTodos = []
  ,$scope.currentPage = 1
  ,$scope.numPerPage = 10
  ,$scope.maxSize = 5;
  
  $scope.makeTodos = function() {
    $scope.todos = [];
    for (i=1;i<=1000;i++) {
      $scope.todos.push({ text:'todo '+i, done:false});
    }
  };
  $scope.makeTodos(); 
  
  $scope.numPages = function () {
    return Math.ceil($scope.todos.length / $scope.numPerPage);
  };
  
  $scope.$watch('currentPage + numPerPage', function() {
    var begin = (($scope.currentPage - 1) * $scope.numPerPage)
    , end = begin + $scope.numPerPage;
    
    $scope.filteredTodos = $scope.todos.slice(begin, end);
  });
});
</script>
</html>