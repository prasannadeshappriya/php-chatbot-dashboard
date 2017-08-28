/**
 * Created by prasanna on 8/27/17.
 */
app.controller('mainController',[
    '$scope', '$http',
    function ($scope, $http) {
    let version = '20170307';

    $scope.arrResponse = {};
    $scope.arrEntities = [];
    $scope.arrWitEntities = [];

    $scope.onInit = async function () {
        try {
            let request = await $http({
                method: "GET",
                url: 'https://api.wit.ai/entities?v=20170307',
                headers: {
                    Authorization: 'Bearer 6PN2II4QPW5UYG3VPR6EXWFRU6MTTFBH',
                }
            });
            if(request){
               let data = request.data;
               data.forEach(function (value) {
                   let tmpObj = {}; let con = true;
                   for(let i=0; i<value.length; i++){
                       if(value[i]==='$'){
                           tmpObj.entity = value.slice(0, i) + '/' + value.slice(i+1);
                           con=false; break;
                       }
                   }
                   if(con) {
                       tmpObj.wit = false; tmpObj.entity = value;
                       $scope.arrEntities.push(tmpObj);
                   }else{
                       tmpObj.wit = true;
                       $scope.arrWitEntities.push(tmpObj);
                   }
               });
               $scope.$apply();
            }
        }catch (err){
            console.log(err);
        }
    };

    $scope.btnSubmitClick = async function () {
        try {
            let request = await $http({
                method: "GET",
                url: 'https://api.wit.ai/message?v=' + version + '&q=' + $scope.userInput,
                headers: {
                    Authorization: 'Bearer 6PN2II4QPW5UYG3VPR6EXWFRU6MTTFBH'
                }
            });
            if(request){
                let entities = request.data.entities;
                let retObj = [];
                Object.keys(entities)
                    .forEach(function eachKey(key) {
                        let item = entities[key];
                        for(let j=0; j<Object.keys(item).length; j++){
                            let entity_item = item[Object.keys(item)[j]];
                            let tmpObj = {};
                            tmpObj['entity_name'] = key;
                            Object.keys(entity_item)
                                .forEach(function eachKey(key) {
                                    tmpObj[key] = entity_item[key];
                                });
                            retObj.push(tmpObj);
                        }
                    });
                $scope.arrResponse = retObj;
                console.log(retObj);
                $scope.$apply();
            }
        }catch (err){
            console.log(err);
        }
    };
}]);