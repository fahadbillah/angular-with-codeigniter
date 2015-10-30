angular.module('ngci')
.directive('menuActive', ['$location',function ($location) {
	return {
		restrict: 'A',
		link: function (scope, iElement, iAttrs) {
			var allLinks = iElement.find('li');
			scope.$on('$routeChangeSuccess', function(event, current, previous) {
				var path = $location.path();
				angular.forEach(allLinks, function(e,i) {
					var anchor = e.querySelector('a');
					if (anchor.href.match('#' + path + '(?=\\?|$)')) {
						angular.element(e).addClass('active');
					} else {
						angular.element(e).removeClass('active');
					}
				});
			})
		}
	};
}])