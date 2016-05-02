app.service('LoginServices',
    function($http, $q, HOSTNAME){

        var vm = this;

        vm.ajaxSend = function(){
            var service = arguments[0],
                method  = arguments[1],
                data    = arguments[2];
              return $http({
                    url     : HOSTNAME + service,
                    method  : method,
                    headers : {'Content-Type': 'application/x-www-form-urlencode'},
                    data    : data
            });


        };

        vm.actions = {
            login: function(oParams){
                return vm.ajaxSend('users/login', 'POST', oParams);
            }
        };

        return (vm.actions);

})