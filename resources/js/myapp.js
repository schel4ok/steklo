angular.module('myapp', ['ngMessages', 'angularFileUpload'])

  .controller('callbackController', function($scope, FileUploader, $http, $timeout) {

    $scope.outerScope = {};
    $scope.formData = {};
    $scope.uploader = new FileUploader();
    $scope.url = '/';
    $scope.submittext = 'Отправить';

    $scope.submit = function(isValid) {
      if (isValid) {
          $scope.submittext = 'Отправляем...';
          $http.post($scope.url, 
            {
              "formname": "callback", 
              "name": $scope.name, 
              "tel": $scope.tel, 
              "time": $scope.time, 
              "email": $scope.email, 
              "msg": $scope.msg,
            }).
                        success(function(data, status) {
                            console.log(data);
                            $scope.status = status;
                            $scope.data = data;
                            $scope.result = data;
                        });
              $timeout(function() {  
                $('#callback').modal('hide');
                $scope.submittext = 'Отправить';
                $scope.name = null;
                $scope.tel = null;
                $scope.time = null;
                $scope.email = null;
                $scope.msg = null;
                $scope.callback.$setPristine();
                $scope.callback.$setUntouched();
              },    1000);

      } else {
              $('.errors').modal('show');
            }

        }

  })


.controller('SaunaDoorCalcController', function($scope, $http, $timeout) {

    $scope.outerScope = {};
    $scope.formData = {};

    $scope.sizeswitch = [           
      { label: 'Стандартный', value: 'standard'},
      { label: 'Нестандартный', value: 'special'}
    ];
    $scope.selectedSizeSwitch = $scope.sizeswitch[0].label; // Default is Стандартный

    $scope.standardsizes = [           
      { label: '585х1880', price:5600 },
      { label: '685x1880', price:3600 },
      { label: '685x1980', price:5600 },
      { label: '685x2080', price:5600 },
      { label: '685x2180', price:6600 },
      { label: '785x1880', price:5600 },
      { label: '785x1980', price:5600 },
      { label: '785x2080', price:5600 },
      { label: '785x2180', price:6600 }
    ];
    $scope.selectedStandardSize = $scope.standardsizes[1];  
    // Default is 685x1880 - second array element. First element index is 0.

    $scope.glass = [           
      { label: 'Прозрачное (стандарт)', price:0 },
      { label: 'Матовое (Matelux)', price:1000 },
      { label: 'Бронза (Bronze)', price:1500 },
      { label: 'Матовая Бронза (Matelux Bronze)', price:2000 },
      { label: 'Черное', price:4000 }
    ];
    $scope.selectedGlass = $scope.glass[0]; 

    $scope.korobka = [           
      { label: 'Липа (стандарт)', price:1000 },
      { label: 'Лиственница', price:2000 },
      { label: 'Бук', price:3000 },
      { label: 'Дуб', price:6000 }
    ];
    $scope.selectedKorobka = $scope.korobka[0]; 

    $scope.petli = [           
      { label: 'Хром (стандарт)', price:900 },
      { label: 'Бронза', price:1900 },
      { label: 'Золото', price:2000 }
    ];
    $scope.selectedPetli = $scope.petli[0]; 

    $scope.dekor = [           
      { label: 'Нет', price:0 },
      { label: 'Пескоструйный рисунок', price:1000 },
      { label: 'Лазерная гравировка', price:1500 },
      { label: 'Фотопечать', price:2000 },
      { label: 'Пескоструйный рисунок с фьюзингом', price:3000 }
    ];
    $scope.selectedDekor = $scope.dekor[0]; 

    $scope.dostavka = [           
      { label: 'Нет', price:0 },
      { label: 'в пределах МКАД', price:1500 },
      { label: 'за МКАД', price:1500 }
    ];
    $scope.selectedDostavka = $scope.dostavka[0]; 
    $scope.montazh = 0;

    $scope.url = '/izdeliya-iz-stekla/steklyannye-dveri/steklyannye-dveri-dlya-sauny';

  
    $scope.getDoorSize = function() {
        if ($scope.selectedSizeSwitch == $scope.sizeswitch[0].label) {
         return $scope.selectedSizeSwitch + ', ' + $scope.selectedStandardSize.label;
        } else {
         return $scope.selectedSizeSwitch + ', ' + ($scope.DoorSizeB || 0) + 'x' + ($scope.DoorSizeH || 0);
        }
    };

    $scope.getBasePrice = function() {
        if ($scope.selectedSizeSwitch == $scope.sizeswitch[0].label) {
         return $scope.selectedStandardSize.price;
        } else {
         return $scope.DoorSizeB * $scope.DoorSizeH * 5000 / 1000000 ;
        }
    };

    $scope.getFullPrice = function() {
        if ($scope.selectedSizeSwitch == $scope.sizeswitch[0].label) {
         return $scope.selectedStandardSize.price + $scope.selectedGlass.price + $scope.selectedKorobka.price + $scope.selectedPetli.price + $scope.selectedDekor.price + $scope.selectedDostavka.price + $scope.montazh;
        } else {
         return $scope.DoorSizeB * $scope.DoorSizeH * 5000 / 1000000 + $scope.selectedGlass.price + $scope.selectedKorobka.price + $scope.selectedPetli.price + $scope.selectedDekor.price + $scope.selectedDostavka.price + $scope.montazh;
        }
    };


    $scope.submit = function(isValid) {
      if (isValid) {
          $http.post($scope.url, 
            {
              "formname": "saunadoor", 
              "doorsize": $scope.getDoorSize(),            
              "baseprice": $scope.getBasePrice(), 
              "glass": $scope.selectedGlass, 
              "korobka": $scope.selectedKorobka, 
              "petli": $scope.selectedPetli, 
              "dekor": $scope.selectedDekor, 
              "dostavka": $scope.selectedDostavka,
              "montazh": $scope.montazh, 
              "fullprice": $scope.getFullPrice(), 
              "name": $scope.name, 
              "tel": $scope.tel, 
              "email": $scope.email, 
              "msg": $scope.msg, 
            }).
                        success(function(data, status) {
                            console.log(data);
                            $scope.status = status;
                            $scope.data = data;
                            $scope.result = data;
                        });
              $timeout(function() {  
                $('.order-success').modal('show');
                $scope.name = null;
                $scope.tel = null;
                $scope.email = null;
                $scope.msg = null;
                $scope.DoorSizeB = null;
                $scope.DoorSizeH = null;
                $scope.calculator.$setPristine();
                $scope.calculator.$setUntouched();
              },    1000);
              $timeout(function() {  
                $('.order-success').modal('hide');
              },    2500);

            }
      else{
        $('.errors').modal('show');; 
      }

    }

})