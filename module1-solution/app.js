app = angular.module('LunchCheck', [])


app.controller('LunchCheckController', LunchCheckController); 
LunchCheckController.$inject=['$scope'];
function LunchCheckController($scope)
{
$scope.check=function()
{       
		if($scope.menu == null||$scope.menu.length == '')
		{

			$scope.msg='Please Enter Data First';
		    $scope.font='red';
		    $scope.iborder='3px solid red';
		}
		else
		{
	var items = $scope.menu.split(','); 
      if(items.length <=3)
      {
       $scope.msg='Enjoy!';

      }
      else
      {
      $scope.msg='Too much!';
      }
      $scope.font='green';
      $scope.iborder='3px solid green';
			
		}
		   
	}


}

