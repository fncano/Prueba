<!DOCTYPE html>
<html>
  <head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <title>Prueba OPA</title>
  </head>
  <body>
    <div class="media container mt-3 border">
      <img class="align-self-end mr-3" src="tecno.jpg" alt="" height="50px" width="100px" >
      <div class="media-body">
        <h5 class="mt-0">Fabio Nelson Cano</h5>
      </div>
    </div>
    <div class="container border">
      <p>Este programa te permite saber dentreo si en un determinado rango, hay numeros naturales perfectos, <br>
        recuerda que los numeros naturales perfectos son aquellos cuya suma de divisores da como resusltado <br>
        su mismo valor. <a href="https://es.wikipedia.org/wiki/N%C3%BAmero_perfecto" target="_blank"> Saber Más..</a>
      </p>
      <hr>
      <h5>Por favor ingresa un rango de busqueda entre 1 y n</h5>
      <form action="" method="POST">
        <div class="row">
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label for="num1">ingresa primer numero del rango</label>
              <input type="number" name="num1" class="form-control" required placeholder="inicio de rango" autocomplete="off" >
            </div>
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 col-xs-12">
            <div class="form-group">
              <label for="num2">ingresa segundo numero del rango</label>
              <input type="number" name="num2" class="form-control" required placeholder="fin del rango" autocomplete="off" >
            </div>
          </div>
          <div class="form-group px-3">
            <input type="submit" class="btn btn-success">
          </div>
        </div>
      </form>
      <hr>
    </div>
    <div class="container border">
      <?php 
        if (isset($_REQUEST['num1']) AND isset($_REQUEST['num2'])) { //validacion para que no se envien datos vacios
        	$inicio = $_REQUEST['num1']; //numero inicial para calcular los numeros
        	$fin = $_REQUEST['num2']; // numero de terminacion del rango
        
        	for($np=$inicio;$np<$fin;$np++){//evalua el rango ingresado
        		$con=0; // alamcenar los datos con residuo en 0 cero
        		for($a=1;$a<$np;$a++){ //calcula las diviciones desde el rango de incio al rango final
        			$ope = $np%$a; //operacion para optener los reciduos en cero
        			if($ope==0){// se evalua que se cumpla la condicion 
        				$con = $con+$a;
        			}
        		}
        		if($con==$np){// si el contador es igual al valor recorido en el primer ciclo entonses es un numero perfecto
        			echo "<li class='border mt-3'>"."$np es un numero natural perfecto"."</li>"."<br>";
        		}
        	}
        }	
        ?>
      <hr>
    </div>
    <footer class="main-footer container">
      <div class="pull-right hidden-xs">
        <b>Version</b> 1.0.0
      </div>
      <strong>Copyright &copy; 2018 <a href="">By fabio nelson cano</a>.</strong> All rights reserved.
    </footer>
  </body>
</html>