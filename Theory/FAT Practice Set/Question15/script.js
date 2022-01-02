var app = angular
  .module("myModule", [])
  .controller("myController", function ($scope, $http, $timeout) {
    $http.get("data.php").then(function (response) {
      $scope.members = response.data;
    });

    $scope.insertData = function () {
      if (
        $scope.firstname == null ||
        $scope.lastname == null ||
        $scope.address == null
      ) {
        alert("All fields are mandatory");
      } else {
        $http
          .post("insert.php", {
            firstname: $scope.firstname,
            lastname: $scope.lastname,
            address: $scope.address,
          })
          .then(function () {
            $scope.firstname = "";
            $scope.lastname = "";
            $scope.address = "";
            $scope.getData();
          });
      }
    };

    $scope.del = function () {
      $http.post("delete.php");
      $scope.getData();
    };

    $scope.getData = function () {
      $http.get("data.php").then(function (response) {
        $scope.members = response.data;
      });
    };
  });
