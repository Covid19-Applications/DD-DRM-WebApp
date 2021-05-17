angular.module('newsApp',[])
.controller('newsCtrl',function($scope, $http) {
  $scope.api = '7a1d06ea8df842a299a14199578e46ff';

  $http ({
              method: 'GET',
              url: 'https://newsapi.org/v1/articles?source=the-economist&sortBy=top&apiKey=' + $scope.api  })
  .then(function(response){
              $scope.ecotinfo = response.data.articles;
              $scope.ecotsou = response.data;
            },
            function(error) {
                displayError('Something went wrong');
            });

            $http ({
                        method: 'GET',
                        url: 'https://newsapi.org/v1/articles?source=the-economist&sortBy=latest&apiKey=' + $scope.api  })
            .then(function(response){
                        $scope.ecolinfo = response.data.articles;
                        $scope.ecolsou = response.data;
                      },
                      function(error) {
                          displayError('Something went wrong');
                      });


              $http ({
                                  method: 'GET',
                                  url: 'https://newsapi.org/v1/articles?source=business-insider-uk&sortBy=top&apiKey=' + $scope.api  })
                      .then(function(response){
                                  $scope.uktinfo = response.data.articles;
                                  $scope.uktsou = response.data;
                                },
                                function(error) {
                                    displayError('Something went wrong');
                                });

                $http ({
                                            method: 'GET',
                                            url: 'https://newsapi.org/v1/articles?source=business-insider&sortBy=top&apiKey=' + $scope.api  })
                                .then(function(response){
                                            $scope.insidetinfo = response.data.articles;
                                            $scope.insidetsou = response.data;
                                          },
                                          function(error) {
                                              displayError('Something went wrong');
                                  });

                  $http ({
                                                      method: 'GET',
                                                      url: 'https://newsapi.org/v1/articles?source=focus&sortBy=top&apiKey=' + $scope.api  })
                                          .then(function(response){
                                                      $scope.ftinfo = response.data.articles;
                                                      $scope.ftsou = response.data;
                                                    },
                                                    function(error) {
                                                        displayError('Something went wrong');
                                });

                                $http ({
                                            method: 'GET',
                                            url: 'https://newsapi.org/v1/articles?source=fortune&sortBy=top&apiKey=' + $scope.api  })
                                .then(function(response){
                                            $scope.fortinfo = response.data.articles;
                                            $scope.fortsou = response.data;
                                          },
                                          function(error) {
                                              displayError('Something went wrong');
                      });
                      $http ({
                                  method: 'GET',
                                  url: 'https://newsapi.org/v1/articles?source=financial-times&sortBy=top&apiKey=' + $scope.api  })
                      .then(function(response){
                                  $scope.fttinfo = response.data.articles;
                                  $scope.fttsou = response.data;
                                },
                                function(error) {
                                    displayError('Something went wrong');
                                });

});

function opencloseleftNav() {
  var leftSide = document.getElementById("leftSidenav");

    if(leftSide.style.width == "0px")
    {
      document.getElementById("leftSidenav").style.width = "250px";
      document.getElementById("Business").style.marginLeft= "250px";
      document.getElementById("anchors").style.display= "block";
}
  else
    {
    document.getElementById("leftSidenav").style.width = "0px";
    document.getElementById("Business").style.marginLeft= "100px";
    document.getElementById("anchors").style.display= "none";
    }
}


  function loadfun() {
    var xyz;
    xyz = setTimeout(yougotit, 3000);
  }

  function yougotit() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("Business").style.display = "block";
    document.getElementById("leftSidenav").style.display = "block";
  }
