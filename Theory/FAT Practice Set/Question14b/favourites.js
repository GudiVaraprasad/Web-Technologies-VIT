var app = angular.module("fav", []);

app.controller("favsubject", function ($scope) {
  $scope.subnames = ["Operating Systems", "Web Technologies"];
  $scope.addSubject = function () {
    if (!$scope.addSub) {
      return;
    }
    if ($scope.subnames.indexOf($scope.addSub) == -1) {
      $scope.subnames.push($scope.addSub);
    } else {
      alert("Already added");
    }
  };

  $scope.removeSubject = function () {
    $scope.subnames.splice(-1);
  };
});

app.controller("favmovie", function ($scope) {
  $scope.movnames = ["Marvel", "Harry Potter"];
  $scope.addMovie = function () {
    if (!$scope.addMov) {
      return;
    }
    if ($scope.movnames.indexOf($scope.addMov) == -1) {
      $scope.movnames.push($scope.addMov);
    } else {
      alert("Already added");
    }
  };

  $scope.removeMovie = function () {
    $scope.movnames.splice(-1);
  };
});
