/**
 * Created by prasanna on 8/27/17.
 */
app.controller('mainController',['$scope',function ($scope) {
    $scope.test = 'This is prasanna god';
    $scope.onInit = function () {
        console.log('Initialization works');
    }
}]);