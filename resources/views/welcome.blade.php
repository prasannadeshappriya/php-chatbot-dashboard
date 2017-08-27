<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <title>Dashboard</title>
    <link rel="stylesheet" href="{{url('vendor/css/bootstrap.css')}}">
    <link rel="stylesheet" href="{{url('app/assets/css/main.css')}}">

    <script src="{{url('vendor/js/jquery-3.2.1.min.js')}}"></script>
    <script src="{{url('vendor/js/bootstrap.js')}}"></script>
    <script src="{{url('vendor/js/angular.js')}}"></script>

    <script src="{{url('app/app.modules.js')}}"></script>
    <script src="{{url('app/controller/main.controller.js')}}"></script>
</head>
<body ng-app="app" ng-controller="mainController" ng-init="onInit()">
<div class="container">
    <div class="panel panel-default" style="margin-top: 20px">
        <div class="panel-heading">
            <span class="text-info"><b>Verify commands and entities</b></span>
        </div>
        <div class="panel-body">
            <div class="form-group col-lg-6 col-lg-offset-3">
                <label for="lblMain" class="control-label">Command</label>
                <input type="text" id="lblMain" class="form-control" ng-model="userInput">
            </div>
            <div class="col-lg-12">
                <input type="button" class="btn btn-success center-block" value="Submit" ng-click="btnSubmitClick()" style="width:150px;">
            </div>
            <div class="form-group col-lg-6 col-lg-offset-3">
                <div ng-repeat="item in arrResponse track by $index">
                    <div ng-if="$index===0">
                        <hr>
                    </div>
                    <div ng-repeat="(key, value) in item track by $index">
                        <div ng-if="$index===0">
                            <h3 class="text-info">Entity:- @{{value}}</h3>
                        </div>
                        <div ng-if="$index!==0" style="margin-left: 10%">
                            <p>@{{key}} - @{{value}}</p>
                        </div>
                    </div>
                    <hr>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
