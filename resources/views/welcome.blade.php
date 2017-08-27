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
            <span class="text-info"><b>Input any command</b></span>
        </div>
        <div class="panel-body">
            <div class="form-group col-lg-6 col-lg-offset-3">
                <label for="lblMain" class="control-label">Command</label>
                <input type="text" id="lblMain" class="form-control">
            </div>
            <div class="col-lg-12">
                <input type="button" class="btn btn-success center-block" value="Submit" style="width:150px;">
            </div>
            <div class="form-group col-lg-6 col-lg-offset-3">
                <textarea style="width: 100%; margin-top: 3%; resize: none; height: 200px"></textarea>
            </div>
            <div class="form-group col-lg-6 col-lg-offset-3">
                <p>This is a test <br>
                @{{test}}</p>
            </div>
        </div>
    </div>
</div>
</body>
</html>
