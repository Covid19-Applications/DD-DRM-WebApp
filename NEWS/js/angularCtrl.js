var newapp = angular.module('newsApp', [])
 .controller('newsCtrl', function($scope, $http) {
   $scope.api = '7a1d06ea8df842a299a14199578e46ff';

   $http ({
     method: 'GET',
     url: 'https://newsapi.org/v1/articles?source=the-times-of-india&sortBy=top&apiKey=' + $scope.api })
     .then(function(response) {
       $scope.toitinfo = response.data.articles;
       $scope.toitsou = response.data;
     },
     function(error) {
                 displayError("Something went wrong");
   });

   $http ({
     method: 'GET',
     url: 'https://newsapi.org/v1/articles?source=the-hindu&sortBy=top&apiKey=' + $scope.api })
     .then(function(response) {
       $scope.hindutinfo = response.data.articles;
       $scope.hindutsou = response.data;
     },
     function(error) {
                 displayError("Something went wrong");
   });

   $http ({
     method: 'GET',
     url: 'https://newsapi.org/v1/articles?source=the-times-of-india&sortBy=latest&apiKey=' + $scope.api })
     .then(function(response) {
       $scope.toilinfo = response.data.articles;
       $scope.toilsou = response.data;
     },
     function(error) {
                 displayError("Something went wrong");
   });

   $http ({
     method: 'GET',
     url: 'https://newsapi.org/v1/articles?source=the-hindu&sortBy=latest&apiKey=' + $scope.api })
     .then(function(response) {
       $scope.hindulinfo = response.data.articles;
       $scope.hindulsou = response.data;
     },
     function(error) {
                 displayError("Something went wrong");
   });


      $http ({
        method: 'GET',
        url: 'https://newsapi.org/v1/articles?source=bbc-news&sortBy=top&apiKey=' + $scope.api })
        .then(function(response) {
          $scope.bbclinfo = response.data.articles;
          $scope.bbclsou = response.data;
        },
        function(error) {
                    displayError("Something went wrong");
      });


      $http ({
        method: 'GET',
        url: 'https://newsapi.org/v1/articles?source=cnn&sortBy=top&apiKey=' + $scope.api })
        .then(function(response) {
          $scope.cnnlinfo = response.data.articles;
          $scope.cnnlsou = response.data;
        },
        function(error) {
                    displayError("Something went wrong");

        });

        $http ({
          method: 'GET',
          url: 'https://newsapi.org/v1/articles?source=cnbc&sortBy=top&apiKey=' + $scope.api })
          .then(function(response) {
            $scope.cnbclinfo = response.data.articles;
            $scope.cnbclsou = response.data;
          },
          function(error) {
                      displayError("Something went wrong");

          });

          $http ({
            method: 'GET',
            url: 'https://newsapi.org/v1/articles?source=time&sortBy=top&apiKey=' + $scope.api })
            .then(function(response) {
              $scope.dailytinfo = response.data.articles;
              $scope.dailytsou = response.data;
            },
            function(error) {
                        displayError("Something went wrong");

            });

            $http ({
              method: 'GET',
              url: 'https://newsapi.org/v1/articles?source=time&sortBy=latest&apiKey=' + $scope.api })
              .then(function(response) {
                $scope.dailylinfo = response.data.articles;
                $scope.dailylsou = response.data;
              },
              function(error) {
                          displayError("Something went wrong");

              });

              $http ({
                method: 'GET',
                url: 'https://newsapi.org/v1/articles?source=buzzfeed&sortBy=top&apiKey=' + $scope.api })
                .then(function(response) {
                  $scope.buzztinfo = response.data.articles;
                  $scope.buzztsou = response.data;
                },
                function(error) {
                            displayError("Something went wrong");

                });

                $http ({
                  method: 'GET',
                  url: 'https://newsapi.org/v1/articles?source=buzzfeed&sortBy=latest&apiKey=' + $scope.api })
                  .then(function(response) {
                    $scope.buzzlinfo = response.data.articles;
                    $scope.buzzlsou = response.data;
                  },
                  function(error) {
                              displayError("Something went wrong");

                  });



 });




  function opencloseleftNav() {
    var leftSide = document.getElementById("leftSidenav");

      if(leftSide.style.width == "0px")
      {
        document.getElementById("leftSidenav").style.width = "250px";
        document.getElementById("maintopnews").style.marginLeft= "250px";
        document.getElementById("anchors").style.display= "block";
  }
  	else
      {
      document.getElementById("leftSidenav").style.width = "0px";
      document.getElementById("maintopnews").style.marginLeft= "100px";
      document.getElementById("anchors").style.display= "none";
      }
  }


  function loadfun() {
    var xyz;
    xyz = setTimeout(yougotit, 2000);
  }

  function yougotit() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("maintopnews").style.display = "block";
    document.getElementById("leftSidenav").style.display = "block";
  }
