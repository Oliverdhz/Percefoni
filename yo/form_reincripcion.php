<!DOCTYPE html>
<html lang="en">
        <head>
                <!-- Required meta tags -->
                <meta charset="utf-8">
                <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
            
                <!-- Bootstrap CSS -->
                <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
                <link rel="shortcut icon" href="Imag/favicon.ico">
                <link rel="stylesheet" href="css/styleform.css">
                <link rel="stylesheet" href="css/style.css">


            
                <title>Reinscripción</title>
              </head>
         <body style="background-color: #fff7b1;">
            <form class="text-center border border-light p-5" action="#!">
                <?php
                $conn = new mysqli("localhost", "root", "", "bd_guarderia_sunflower");
                if($conn -> connect_error){
                    die("Erorr en la conexion".$conn->connect_error);
                }
                if (!empty($_POST[''])) {
                    # code...
                }
                ?>

                
                <br>
                <p class="h4 mb-4"<br><img src="Imag/sunfi.png" alt=""> Formulario de Reinscripción <img src="Imag/sunfi.png" alt=""><br></p>
            
                <div class="form-row mb-4">
                    <div class="col">
                        <!-- First name -->
                        <input type="text" id="defaultRegisterFormFirstName" name="nombre_n" class="form-control" placeholder="Nombres">
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <input type="text" id="defaultRegisterFormLastName" name= "apellido_n"class="form-control" placeholder="Apellidos">
                    </div>
                    </div>
            
                    
                    <!-- Fecha -->
                    Fecha de nacimiento:
                    <input type="date" id="defaultRegisterFormFirstName"  name = "fecha_nacimiento_n"class="form-control mb-4" >	
                    <!-- direccion-->
                    <input type="text" id="defaultRegisterFormEmail" name= "direccion_n" class="form-control mb-4" placeholder="Dirección">
                    <!-- telefono contacto infante-->
                    <input type="number" id="defaultRegisterFormEmail" name = "telefono_n"class="form-control mb-4" placeholder="Teléfono">
            
                    <div class="form-row mb-4">
                        <div class="col">
                            <!-- Fecha ingreso -->
                            Fecha de ingreso:
                            <input type="date" id="defaultRegisterFormFirstName" name= "ingreso_n" class="form-control">
                        </div>
                        <div class="col">
                            <!-- Edad -->
                            Edad del niñ@:
                            <input type="number" id="defaultRegisterFormLastName" name = "edad_n" class="form-control" placeholder="Edad">
                        </div>
                        </div>
            
                        <div class="form-group">
                            <label for="exampleFormControlSelect1">Nivel</label>
                            <select class="form-control" id="exampleFormControlSelect1">
                              <option>Nido</option>
                              <option>Corralito</option>
                              <option>Pre-kinder</option>
                              <option>Kinder</option>
                              <option>Pre-primario</option>
                            </select>
                          </div>
            
                          <hr color="#FFCB28">
            
                          <p class="h4 mb-4">Datos de los Padres o Tutores</p>
                          <input type="text" id="defaultRegisterFormFirstName" name="nombre_m" class="form-control mb-4" placeholder="Nombre la madre">
                          Fecha de nacimiento
                          <input type="date" id="defaultRegisterFormFirstName" name="fecha_de_nacimiento_m" class="form-control mb-4" >	
                          <input type="number"  class="form-control mb-4" name="cedula_m" placeholder="Cédula de identidad">	
            
                          <div class="form-row mb-4">
                            <div class="col">
                                <input type="text" class="form-control" name="lugar_trabajo_m" placeholder="Lugar de trabajo">
                            </div>
                            <div class="col">
                                <!-- Last name -->
                                <input type="text"class="form-control" name="actividad_desempena_m" placeholder="Actividad que desempeña">
                            </div>
                            </div>
            
                            <div class="form-row mb-4">
                                <div class="col">
                                    <input type="text"  class="form-control" name="nivel_academico_m" placeholder="Nivel Académico">
                                </div>
                                <div class="col">
                                    <!-- Last name -->
                                    <input type="text"class="form-control" name="profesion_m" placeholder="Profesión">
                                </div>
                                </div>
                                <input type="text"  class="form-control mb-4" name="direccion_m" placeholder="Dirección">	
                                <div class="form-row mb-4">
                                    <div class="col">
                                        <input type="float"  class="form-control" name="telefono_m" placeholder="Teléfono">
                                    </div>
                                    <div class="col">
                                        <!-- Last name -->
                                        <input type="float"class="form-control" name="celular_m" placeholder="Celular">
                                    </div>
                                    </div>
                                    <hr color="#FFCB28">
                                    <input type="text" id="defaultRegisterFormFirstName" class="form-control mb-4" name="nombre_p" placeholder="Nombre del padre">
Fecha de nacimiento
<input type="date" id="defaultRegisterFormFirstName" name="fecha_de_nacimiento_p" class="form-control mb-4" >	
<input type="number"  class="form-control mb-4" name="cedula_p" placeholder="Cédula de identidad">	

<div class="form-row mb-4">
  <div class="col">
      <input type="text"  class="form-control" name="trabajo_p" placeholder="Lugar de trabajo">
  </div>
  <div class="col">
      <!-- Last name -->
      <input type="text"class="form-control" name="actividad_desempena_p" placeholder="Actividad que desempeña">
  </div>
  </div>

  <div class="form-row mb-4">
      <div class="col">
          <input type="text"  class="form-control" name="nivel_academico_p" placeholder="Nivel Académico">
      </div>
      <div class="col">
          <!-- Last name -->
          <input type="text"class="form-control" name="profesion_p" placeholder="Profesión">
      </div>
      </div>
      <input type="text"  class="form-control mb-4" name="direccion_p" placeholder="Dirección">	
      <div class="form-row mb-4">
          <div class="col">
              <input type="float"  class="form-control" name="telefono_p" placeholder="Teléfono">
          </div>
          <div class="col">
              <!-- Last name -->
              <input type="float"class="form-control" name="cedula_p" placeholder="Celular">
          </div>
          </div>
            <select class="form-control" id="exampleFormControlSelect1">
                <option>Estado civil de la pareja</option>
                <option>Casado</option>
                <option>Soltero</option>
                <option>Unión libre</option>
            </select>

            <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Ingresar</button>
    <a href="#" class="mx-2" role="button"><i class="fab fa-facebook-f light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-twitter light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-linkedin-in light-blue-text"></i></a>
    <a href="#" class="mx-2" role="button"><i class="fab fa-github light-blue-text"></i></a>

    <hr>
</form>
<br>
</body>
<!-- Footer -->
<footer>
    <div class="footer" id="footer">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-6 col-sm-6 col-xs-6">
                    <img width="200" src="imag/logo2.png" alt="">
                </div>
                <div class="col-lg-3 col-sm-2 col-xs-3">     <center>
                    <h3> Contactos </h3>
                    <ul>
                        <li><a class="email"href="mailto:Sunflowerdaycare@gmail.com"><ion-icon name="mail" class="mini-icon"></ion-icon>
                          Sunflowerdaycare@gmail.com</a></li>
                        <br/>
                   
                        <li> <p> <ion-icon name="pin" class="mini-icon"></ion-icon>
                          Av. Hispanoamericana km. 1 </p> </li>
                        <li> <p> <ion-icon name="call" class="mini-icon"></ion-icon > 849-888-8888 </p> </li>
                          <br>
                          <a href="#"> <ion-icon name="logo-facebook" class="custom-icon" ></ion-icon></a>
                          <a href="#"> <ion-icon name="logo-instagram" class="custom-icon"></ion-icon></a>
                          <a href="#"> <ion-icon name="logo-whatsapp" class="custom-icon"></ion-icon></a>
                         </center>
                    </ul>
                </div>
                <div class="col-lg-3 col-sm-2 col-xs-3">
                    <ul>
                        <li> <h5> <a href="nosotros.html" style="margin-top: 2em"> Nosotros</a> <h5></li>
                        <li> <h5><a href="contactos.html"> Contactos </a> <h5></li>
                        <li> <h5><a href="padres.html"> Padres </a> <h5></li>
                    </ul>
                </div>
               
            <!--/.row--> 
        </div>
        <!--/.container--> 
    </div>
    <!--/.footer-->
                          
    <div class="footer-bottom">
        <div class="container">
            <p class="pull-left copyright"> Copyright © Sandy Taveras. All right reserved. </p>
       
        </div>
    </div>
    <!--/.footer-bottom--> 
</footer>

</html>