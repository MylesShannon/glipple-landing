// I have no idea how this works, but it does
angular.module("mainModule", [])
  .controller("emailController", function ($scope, $http)
  {

    $scope.submitData = function (e, resultVarName)
    {
      var config = {
        params: {
          e: e
        }
      };

      $http.post("email.php", null, config)
        .success(function (data, status, headers, config)
        {
          $scope[resultVarName] = data;
        })
        .error(function (data, status, headers, config)
        {
          $scope[resultVarName] = "SUBMIT ERROR";
        });
    };
  });