

angular.module('newsApp',[])
.controller('newsCtrl',function($scope, $http){
  $scope.api = '7a1d06ea8df842a299a14199578e46ff';

  $http ({
              method: 'GET',
              url: 'https://newsapi.org/v1/articles?source=ars-technica&sortBy=top&apiKey=' + $scope.api  })
  .then(function(response) {
    $scope.arstinfo = response.data.articles;
    $scope.arstsou = response.data;
  },
   function(error) {
     displayError('Something went wrong');
   });

   $http ({
               method: 'GET',
               url: 'https://newsapi.org/v1/articles?source=hacker-news&sortBy=top&apiKey=' + $scope.api  })
   .then(function(response) {
     $scope.hacktinfo = response.data.articles;
     $scope.hacktsou = response.data;
   },
    function(error) {
      displayError('Something went wrong');
    });

    $http ({
                method: 'GET',
                url: 'https://newsapi.org/v1/articles?source=techcrunch&sortBy=top&apiKey=' + $scope.api  })
    .then(function(response) {
      $scope.techctinfo = response.data.articles;
      $scope.techctsou = response.data;
    },
     function(error) {
       displayError('Something went wrong');
     });

     $http ({
                 method: 'GET',
                 url: 'https://newsapi.org/v1/articles?source=techradar&sortBy=latest&apiKey=' + $scope.api  })
     .then(function(response) {
       $scope.techrtinfo = response.data.articles;
       $scope.techrtsou = response.data;
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
      document.getElementById("Technology").style.marginLeft= "250px";
      document.getElementById("anchors").style.display= "block";
}
  else
    {
    document.getElementById("leftSidenav").style.width = "0px";
    document.getElementById("Technology").style.marginLeft= "100px";
    document.getElementById("anchors").style.display= "none";
    }
}


  function loadfun() {
    var xyz;
    xyz = setTimeout(yougotit, 3000);
  }

  function yougotit() {
    document.getElementById("loader").style.display = "none";
    document.getElementById("Technology").style.display = "block";
    document.getElementById("leftSidenav").style.display = "block";
  }
