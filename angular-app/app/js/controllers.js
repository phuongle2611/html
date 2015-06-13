'use strict';

angular.module('springboardApp.controllers', []).
	controller('NewMessageCtrl', ['$scope', 'ssApi', function($scope, ssApi) {

		$scope.statusMessage = '';

		$scope.create = function() {
			$scope.statusMessage = 'Saving...';

			var post = ssApi.modelFactory({
				scope: $scope,
				modelClass: 'Pages',
				fields: ['Title', 'MarkdownContent']
			});

			post.write()
				.then(
					function(result) {
						// TODO: redirect to the listing.
						$scope.statusMessage = 'Success, redirecting to your post...';
					},
					function(reason) {
						$scope.statusMessage = reason.friendlyMessage;
					}
				);
		}

	}]);
