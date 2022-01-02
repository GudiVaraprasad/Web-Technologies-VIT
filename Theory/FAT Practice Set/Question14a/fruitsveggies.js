var app = angular.module("application", []);

app.controller("fruits", function ($scope, $filter) {
  $scope.fruitnames = ["Apple", "Mango"];
  $scope.addItem = function () {
    if (!$scope.addMe) {
      return;
    }
    if ($scope.fruitnames.indexOf($scope.addMe) == -1) {
      $scope.fruitnames.push($scope.addMe);
    } else {
      alert("Already added");
    }
  };

  $scope.viewItem = function () {
    $scope.fruitnames = $filter("orderBy")($scope.fruitnames);
  };
});

app.controller("vegetables", function ($scope, $filter) {
  $scope.vegnames = ["Tomato", "Brinjal"];
  $scope.addItem2 = function () {
    if (!$scope.addMe2) {
      return;
    }
    if ($scope.vegnames.indexOf($scope.addMe2) == -1) {
      $scope.vegnames.push($scope.addMe2);
    } else {
      alert("Already added");
    }
  };

  $scope.viewItem2 = function () {
    $scope.vegnames = $filter("orderBy")($scope.vegnames);
  };
});
