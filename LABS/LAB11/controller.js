var app = angular.module("mainApp", ["ngRoute"]);

app.config(function ($routeProvider) {
  $routeProvider
    .when("/", {
      templateUrl: "login.html",
    })
    .when("/registration", {
      templateUrl: "registration.html",
    })
    .otherwise({
      redirectTo: "/",
    });
});

app.controller("loginCtrl", function ($scope) {
  // alert("Test 1 - " + $scope);

  $scope.submit = function () {
    // alert("Test 2 - " + $scope.submit);
    var uname = $scope.useName;
    var password = $scope.passWd;
    // alert(uname + " " + password);
    if (uname == "19BCE7048" && password == "varaprasad") {
      alert("Logged in Succesfully!");
      window.location.href = "registration.html";
    } else {
      alert("Invalid Credentials!");
    }
  };
});
