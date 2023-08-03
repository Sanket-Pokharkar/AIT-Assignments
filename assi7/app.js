// Define the custom module
angular.module('myApp', [])

// Define the controller
.controller('DateTimeController', function($scope) {
    // Get the current date and time
    var currentDate = new Date();
    $scope.currentDateTime = currentDate.toString();
});
