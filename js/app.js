var app = angular.module('Multilingual', ['pascalprecht.translate','ngCookies']);

app.config(['$translateProvider', function($translateProvider) {

  $translateProvider
  .useUrlLoader('local.php')
  .preferredLanguage('fr')
  .useLocalStorage()
  .useMissingTranslationHandlerLog();

}]);

app.controller('LanguageSwitchController', ['$scope', '$rootScope', '$translate',
  function($scope, $rootScope, $translate) {
    $scope.changeLanguage = function(langKey) {
      $translate.use(langKey);
    };

    $rootScope.$on('$translateChangeSuccess', function(event, data) {
      var language = data.language;

      $rootScope.lang = language;

      /*$rootScope.default_direction = language === 'ar' ? 'rtl' : 'ltr';
      $rootScope.opposite_direction = language === 'ar' ? 'ltr' : 'rtl';

      $rootScope.default_float = language === 'ar' ? 'right' : 'left';
      $rootScope.opposite_float = language === 'ar' ? 'left' : 'right';*/
    });
}]);