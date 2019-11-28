angular.module('info',['ngRoute'])
    .config(['$routeProvider', function($routeProvider){
        $routeProvider
            .when('/disease',{template:'这是首页页面'})
            .when('/department',{template:'这是电脑分类页面'})
            .when('/hospital',{template:'这是打印机页面'})
            .otherwise({redirectTo:'/'});
    }]);
