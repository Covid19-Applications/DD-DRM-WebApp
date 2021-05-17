

angular.module('newsApp',[])
.controller('newsCtrl',function($scope, $http){
  $scope.api = '7a1d06ea8df842a299a14199578e46ff';

  $http ({
              method: 'GET',
              url: 'https://newsapi.org/v1/articles?source=bbc-sport&sortBy=top&apiKey=' + $scope.api  })
  .then(function(response) {
    $scope.bbcstinfo = response.data.articles;
    $scope.bbcstsou = response.data;
  },
   function(error) {
     displayError('Something went wrong');
   });

   $http ({
               method: 'GET',
               url: 'https://newsapi.org/v1/articles?source=espn&sortBy=top&apiKey=' + $scope.api  })
   .then(function(response) {
     $scope.espntinfo = response.data.articles;
     $scope.espntsou = response.data;
   },
    function(error) {
      displayError('Something went wrong');
    });

    $http ({
                method: 'GET',
                url: 'https://newsapi.org/v1/articles?source=espn-cric-info&sortBy=top&apiKey=' + $scope.api  })
    .then(function(response) {
      $scope.crictinfo = response.data.articles;
      $scope.crictsou = response.data;
    },
     function(error) {
       displayError('Something went wrong');
     });

     $http ({
                 method: 'GET',
                 url: 'https://newsapi.org/v1/articles?source=the-sport-bible&sortBy=latest&apiKey=' + $scope.api  })
     .then(function(response) {
       $scope.sbtinfo = response.data.articles;
       $scope.sbtsou = response.data;
     },
      function(error) {
        displayError('Something went wrong');
      });

      $http ({
                  method: 'GET',
                  url: 'https://newsapi.org/v1/articles?source=fox-sports&sortBy=top&apiKey=' + $scope.api  })
      .then(function(response) {
        $scope.foxtinfo = response.data.articles;
        $scope.foxtsou = response.data;
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
      document.getElementById("Sports").style.marginLeft= "250px";
      document.getElementById("anchors").style.display= "block";
}
  else
    {
    document.getElementById("leftSidenav").style.width = "0px";
    document.getElementById("Sports").style.marginLeft= "100px";
    document.getElementById("anchors").style.display= "none";
    }
}


  function loadfun() {
    var xyz;
    xyz = setTimeout(yougotit, 3000);
  }

  function yougotit() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("Sports").style.display = "block";
    document.getElementById("leftSidenav").style.display = "block";
  }
