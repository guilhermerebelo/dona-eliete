angular.module("dona-eliete").controller("ajaxCtrl",function ($scope) {
			$scope.abrir = function(par){
				//funcao para abri e fechar utilizando ajax
				switch (par){
					case 1:
						if ($scope.abrirTorta == true) {
							$scope.abrirTorta = false;
						} else{
							$scope.abrirTorta = true;
							$scope.abrirDoce = false;
							$scope.abrirSalgado = false;
						}
						break;
					case 2:
						if ($scope.abrirDoce == true) {
							$scope.abrirDoce = false;
						} else{
							$scope.abrirDoce = true;
							$scope.abrirSalgado = false;
							$scope.abrirTorta = false;
						}
						break;
					case 3:
						if ($scope.abrirSalgado == true) {
							$scope.abrirSalgado = false;
						} else{
							$scope.abrirSalgado = true;
							$scope.abrirDoce = false;
							$scope.abrirTorta = false;
						}
						break;
				}			
			}
			//ng-mouseover="menuDropDonwOver()"
			$scope.menuDropDonwOver = function(){
				$scope.dropDonw = true;
			}
			//
			$scope.menuDropDonwLeave = function(){
				$scope.dropDonw = false;
			}

			//alterarEstilo
			$scope.alterarEstilo = function(par){
				switch(par){
					case 1:
							$scope.kit1 = "featured";
							$scope.kit2 = "";
							$scope.kit3 = "";
						break;
					case 2:
							$scope.kit1 = "";
							$scope.kit2 = "featured";
							$scope.kit3 = "";
						break;
					case 3:
							$scope.kit1 = "";
							$scope.kit2 = "";
							$scope.kit3 = "featured";
						break;
				}

			}

//fim scope
})