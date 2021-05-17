var newapp = angular.module('newsApp', [])
 .controller('newsCtrl', [  '$scope', '$http', function($scope, $http) {
   $scope.api = '7a1d06ea8df842a299a14199578e46ff';
   $http ({
     method: 'GET',
     url: 'https://newsapi.org/v1/articles?source=buzzfeed&sortBy=top&apiKey=7a1d06ea8df842a299a14199578e46ff' })
     .then(function(response) {
       $scope.buzztinfo = response.data.articles;
       $scope.buzztsou = response.data;
     },
     function(error) {
                 displayError("Something went wrong");
   });

   $http ({
     method: 'GET',
     url: 'https://newsapi.org/v1/articles?source=entertainment-weekly&sortBy=top&apiKey=7a1d06ea8df842a299a14199578e46ff' })
     .then(function(response) {
       $scope.enterwtinfo = response.data.articles;
       $scope.enterwtsou = response.data;
     },
     function(error) {
                 displayError("Something went wrong");
   });

   $http ({
     method: 'GET',
     url: 'https://newsapi.org/v1/articles?source=new-scientist&sortBy=top&apiKey=7a1d06ea8df842a299a14199578e46ff' })
     .then(function(response) {
       $scope.scitinfo = response.data.articles;
       $scope.scitsou = response.data;
     },
     function(error) {
                 displayError("Something went wrong");
   });
 }]);


 function opencloseleftNav() {
   var leftSide = document.getElementById("leftSidenav");

     if(leftSide.style.width == "0px")
     {
       document.getElementById("leftSidenav").style.width = "250px";
       document.getElementById("EntertainMent").style.marginLeft= "250px";
       document.getElementById("anchors").style.display= "block";
 }
   else
     {
     document.getElementById("leftSidenav").style.width = "0px";
     document.getElementById("EntertainMent").style.marginLeft= "100px";
     document.getElementById("anchors").style.display= "none";
     }
 }

 function loadfun() {
   var xyz;
   xyz = setTimeout(yougotit, 3000);
 }

 function yougotit() {
   document.getElementById("loader").style.display = "none";
   document.getElementById("EntertainMent").style.display = "block";
   document.getElementById("leftSidenav").style.display = "block";
 }
