
//Create angular app and define dependencies
//
angular.module('formApp', ['ngAnimate', 'ui.router'])

.config(function($stateProvider, $urlRouterProvider){

	$stateProvider

		.state('build', {
			url: '/build',
			templateUrl: 'js/form.html',
			controller: 'FormController'
		})

		.state('build.intro', {
			url: '/intro',
			templateUrl: 'js/form-intro.html',
			controller: 'FormController'
		})

		.state('build.balance', {
			url: '/balance',
			templateUrl: 'js/form-balance.html',
			controller: 'FormController'
		})

		.state('build.essentials', {
			url: '/essentials',
			templateUrl: 'js/form-essentials.html'
		})

		.state('build.necessities', {
			url: '/necessities',
			templateUrl: 'js/form-necessities.html'
		});


		$urlRouterProvider.otherwise('/build/intro');

	})

.controller('FormController', function($scope) {
		$scope.formData = {};

		$scope.saveBudget = function(){
			var data = $scope.formData.budget;
			$http({
				method: 'POST',
				url:  'http://budgettracker.loc/savebudget',
				headers: { 'Content-Type' : 'application/x-www-form-urlencoded'},

				data: $.param(data)
		
			});
		}
})
		

		

		




