app.controller('UserController',
    function($scope, $http, API_URL){
        var vm = this;

        vm.user = {
            name: '',
            email: '' ,
            password: ''
        };
        vm.userlist = {};
        vm.error = {
            isError: false,
            status: '',
            msg : ''
        };
        vm.actions = {
            getUserList: function(){
                $htp.get(API_URL + "user")
                    .success(function(response){
                       vm.userlist = response;
                    });
            },
            save: function(modalstate, id){
                var url = API_URL + 'user';
                if(modalstate === 'edit'){
                    url += "/" + id;
                }
                $http({
                    method: 'POST',
                    url: url,
                    data: $.param(vm.user),
                    headers: {'Content-Type': 'application/x-www-form-urlencoded'}
                }).success(function(response) {
                      if(response.status){
                          vm.error.isError = false; //no error
                          vm.error.status = response.status;
                      }else{
                          vm.error.isError = true;
                          vm.error.status = response.status;
                      }
                    vm.error.msg = response.message;
                }).error(function(response) {
                    console.log(response);
                    alert('This is embarassing. An error has occured. Please check the log for details');
                });
            },
            showMessage: function(msg){

            }
        }

        $http.get(API_URL + "user")
            .success(function(response){
                $scope.user = response;
            });

        //show modal form
        $scope.toggle = function(modalstate, id){
            $scope.modalstate = modalstate;
            switch (modalstate) {
                case 'add':
                    $scope.form_title = "Add New User";
                    break;
                case 'edit':
                    $scope.form_title = "User Detail";
                    $scope.id = id;
                    $http.get(API_URL + 'user/' + id)
                        .success(function(response) {
                            console.log(response);
                            $scope.user = response;
                        });
                    break;
                default:
                    break;
            }
            console.log(id);
            $('#myModal').modal('show');
        }

        //save new record / update existing record
        $scope.save = function(modalstate, id) {
            var url = API_URL + "user";

            //append user id to the URL if the form is in edit mode
            if (modalstate === 'edit'){
                url += "/" + id;
            }

            $http({
                method: 'POST',
                url: url,
                data: $scope.user,
                headers: {'Content-Type': 'application/x-www-form-urlencoded'}
            }).success(function(response) {
                console.log(response);
                location.reload();
            }).error(function(response) {
                console.log(response);
                alert('This is embarassing. An error has occured. Please check the log for details');
            });
        }

        //delete record
        $scope.confirmDelete = function(id) {
            var isConfirmDelete = confirm('Are you sure you want this record?');
            if (isConfirmDelete) {
                $http({
                    method: 'DELETE',
                    url: API_URL + 'user/' + id
                }).
                    success(function(data) {
                        console.log(data);
                        location.reload();
                    }).
                    error(function(data) {
                        console.log(data);
                        alert('Unable to delete');
                    });
            } else {
                return false;
            }
        }
})