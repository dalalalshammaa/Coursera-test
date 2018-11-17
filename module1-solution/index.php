<!doctype html>
<html lang="en" ng-app="LunchCheck" ng-controller="LunchCheckController">
  <head>
    <title>Lunch Checker</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="Styles/bootstrap.min.css">
      <link rel="stylesheet" href="Fonts/fonts.html">
   <script src="angular.min.js"></script>
    <style>
      .message { font-size: 1.3em; font-weight: bold; }
     .bottom: {margin-bottom:10vh;}
     .font
     {
      color:{{font}};
     }
     .iborder
     {
      border:{{iborder}};
     }
     .center
     {
      
      margin-top:5vh;
     }
     .header
     {
    
background-color:black;
color: white;   
     }
     .img
     {
      margin-top:10vh;
     }

    </style>
  </head>
<body align="center" class="center" >

<div class="container">
  <div class="card">
  <div class="card-header header">
<div class="row">
  <div class="col-md-5"><b>Dalal Al-Shammaa </b></div>
    <div class="col-md-6"><b >Lunch Checker</b> </div>
  <div class="col-md-1"><b>Syria</b></div>
</div>
</div>
  <div class="card-body" style="text-align: center;">
    <div class="form-inline  bottom" >
    <div class="col-md-3"><b>  <label for="email">Enter The Items Please:</label></b></div>
    <div class="col-md-6"> <input id="lunch-menu" type="text" placeholder="list comma separated dishes you usually have for lunch" ng-model="menu" class="form-control iborder" ></div>
  <div class="col-md-3">   <button class="btn btn-dark" ng-click="check()">Check If Too Much</button></div>
  </div> 
</div>
  <div class="card-footer">
    <div class="row">
      <div class="col-md-6"><b>Your Items are : {{menu}} </b></div>
      <div class="col-md-4"> </div>
    <div ng-class="col-md-2"><b class="font">{{msg}} </b> </div>
    
  
</div>
  </div>
</div>


  <div class="container img" align="center">
<img src="Styles/finish.png" width="300px" height="300px">
</div>

  <script type="text/javascript" src="app.js"></script>

</body>
</html>