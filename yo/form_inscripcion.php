<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" href="css/styleform.css">


    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel="shortcut icon" href="Imag/favicon.ico">

    <title>Inscripción</title>
  </head>
  
  <body style="background-color: #fff7b1;">

        <!-- PHP -->

    
    <!-- Default form register -->
<br>
<br>
    <form id="form_inscripcion" method="POST">

    <p class="h4 mb-4"><img src="Imag/sunfi.png" alt="">Formulario de Inscripción <img src="Imag/sunfi.png" alt=""><br></p>

    <div class="form-row mb-4">
        <div class="col">
            <!-- First name -->
            <input type="text" id="nombre_n" class="form-control" placeholder="Nombres">
        </div>
        <div class="col">
            <!-- Last name -->
            <input type="text" id="apellido_n" class="form-control" placeholder="Apellidos">
        </div>
        </div>

        
        <!-- Fecha -->
        Fecha de nacimiento:
        <input type="date" id="fecha_nac_n" class="form-control mb-4" >	
        <!-- direccion-->
        <input type="text" id="direccion_n" class="form-control mb-4" placeholder="Dirección">
        <!-- telefono contacto infante-->
        <input type="number" id="contacto_n" class="form-control mb-4" placeholder="Teléfono">

        <div class="form-row mb-4">
            <div class="col">
                <!-- Fecha ingreso -->
                Fecha de ingreso:
                <input type="date" id="fecha_ing_n" class="form-control">
            </div>
            <div class="col">
                <!-- Edad -->
                Edad del niñ@:
                <input type="number" id="edad_n" class="form-control" placeholder="Edad">
            </div>
            </div>

            <div class="form-group">
                <label for="exampleFormControlSelect1">Nivel</label>
                <select class="form-control" id="niv_academico_n">
                  <option>Nido</option>
                  <option>Corralito</option>
                  <option>Pre-kinder</option>
                  <option>Kinder</option>
                  <option>Pre-primario</option>
                </select>
              </div>

              <hr color="#FFCB28">

              <p class="h4 mb-4">Datos de los Padres o Tutores</p>
              <h5>Datos de la madre</h3>
            <input type="text" id="nombre_m" class="form-control mb-4" placeholder="Nombre de la madre">
              <input type="text" id="apellido_m" class="form-control mb-4" placeholder="Apellido de la madre">
              Fecha de nacimiento
              <input type="date" id="fecha_nac_m" class="form-control mb-4" >	
              <input type="number" id="cedula_m" class="form-control mb-4" placeholder="Cédula de identidad">	

              <div class="form-row mb-4">
                <div class="col">
                    <input type="text" id="trabajo_m" class="form-control" placeholder="Lugar de trabajo">
                </div>
                <div class="col">
                    <!-- Last name -->
                    <input type="text" id="act_des_m" class="form-control"  placeholder="Actividad que desempeña">
                </div>
                </div>

                <div class="form-row mb-4">
                    <div class="col">
                        <input type="text" id="niv_aca_m" class="form-control" placeholder="Nivel Académico">
                    </div>
                    <div class="col">
                        <!-- Last name -->
                        <input type="text"class="form-control" id="prof_m" placeholder="Profesión">
                    </div>
                    </div>
                    <input type="text" id="direccion_m" class="form-control mb-4" placeholder="Dirección">	
                    <div class="form-row mb-4">
                        <div class="col">
                            <input type="float" id="tel_m" class="form-control" placeholder="Teléfono">
                        </div>
                        <div class="col">
                            <!-- Last name -->
                            <input type="float" id="cel_m" class="form-control" placeholder="Celular">
                        </div>
                        </div>
                        <hr color="#FFCB28">
                        <h5>Datos del padre</h5>
<input type="text" id="nombre_p" class="form-control mb-4" placeholder="Nombre del padre">
<input type="text" id="apellido_p" class="form-control mb-4" placeholder="Apellido del padre">
Fecha de nacimiento
<input type="date" id="fecha_nac_p" class="form-control mb-4" >	
<input type="number"  class="form-control mb-4" placeholder="Cédula de identidad">	

<div class="form-row mb-4">
  <div class="col">
      <input type="text" id="trabajo_p" class="form-control" placeholder="Lugar de trabajo">
  </div>
  <div class="col">
      <!-- Trabajo -->
      <input type="text"class="form-control" id="act_des_p" placeholder="Actividad que desempeña">
  </div>
  </div>

  <div class="form-row mb-4">
      <div class="col">
          <input type="text" id="niv_aca_p"  class="form-control" placeholder="Nivel Académico">
      </div>
      <div class="col">
          <!-- Profesión -->
          <input type="text" id="prof_p" class="form-control" placeholder="Profesión">
      </div>
      </div>
      <input type="text" id="direccion_p"  class="form-control mb-4" placeholder="Dirección">	
      <div class="form-row mb-4">
          <div class="col">
              <input type="float" id="tel_p"  class="form-control" placeholder="Teléfono">
          </div>
          <div class="col">
              <!-- Celular -->
              <input type="float" id="cel_p" class="form-control" placeholder="Celular">
          </div>
          </div>
            <select class="form-control" id="est_civ_p">
                <option>Estado civil de la pareja</option>
                <option>Casados</option>
                <option>Separados</option>
                <option>Solteros</option>
                <option>Unión libre</option>
            </select>
            <br>
            <p class="h4 mb-4">Antecedentes relevantes del niño</p>
            <h5>Dificulatades en el embarazo</h5>
            <textarea name="textarea" id="dif_par" rows="5" cols="50" placeholder="Describa su tuvo alguna dificultad durante su embarazo" class="form-control"></textarea>
            <br>
            <select class="form-control" id="cat_par">
                <option>Parto</option>
                <option>Natural</option>
                <option>Cesarea</option>
                <option>De termino</option>
                <option>Prematuro</option>
            </select>
            <br>
            <select class="form-control" id="est_nac_n">
                <option>Estado del niño al nacer</option>
                <option>Normal</option>
                <option>Ictericia</option>
                <option>Convulciones</option>
            </select>
            <br>
            <div>
                <label>¿Ha sufrido golpes o caidas con perdida de conciencia?</label>
                <br>
                <label>Si<input type="radio" value="Si" name="1"></label>
                <label>No<input type="radio" value="No" name="1"></label>
            </div>
            <div>
                <label>¿Es propenso a alguna enfermedad?</label>
                <br>
                <label>Si<input type="radio" value="Si" name="2"></label>
                <label>No<input type="radio" value="No" name="2"></label>
            </div>
            <div>
                <label>¿Sufre de alergia a algun medicamento o alimento en especifico?</label>
                <br>
                <label>Si<input type="radio" value="Si" name="3"></label>
                <label>No<input type="radio" value="No" name="3"></label>
            </div>
            <div>
                <label>¿Esta en control con algun medico como neurologo, psicologo o educador diferencial?</label>
                <br>
                <label>Si<input type="radio" value="Si" name="4"></label>
                <label>No<input type="radio" value="No" name="4"></label>
            </div>
            <h5>Habitos</h5>
            <div>
                <label>¿Usa algun chupete o parecido?</label>
                <br>
                <label>Si<input type="radio" value="Si" name="5"></label>
                <label>No<input type="radio" value="No" name="5"></label>
            </div>
            <div>
                <label>¿Es propenso a alguna enfermedad?</label>
                <br>
                <label>Si<input type="radio" value="Si" name="6"></label>
                <label>No<input type="radio" value="No" name="6"></label>
            </div>
            <div>
                <label>¿Presenta trastornos en el sueño?</label>
                <br>
                <label>Si<input type="radio" value="Si" name="7"></label>
                <label>No<input type="radio" value="No" name="7"></label>
            </div>
            <div>
                <label>¿Llora frecuentemente?</label>
                <br>
                <label>Si<input type="radio" value="Si" name="8"></label>
                <label>No<input type="radio" value="No" name="8"></label>
            </div>
            <label>¿A que lo atribuye?</label>
            <br>
            <textarea id="mas_dat_n1" rows="5" cols="50" class="form-control"></textarea>
            <label>Otros antecedentes</label>
            <br>
            <textarea id="mas_dat_n2" rows="5" cols="50" class="form-control"></textarea>
            <div>
                <br>
                <label>¿Ha asistido anteriormente a alguna casa cuna o jardin infantil?</label>
                <br>
                <label>Si<input type="radio" value="Si" name="9"></label>
                <label>No<input type="radio" value="No" name="9"></label>
            </div>
            <p class="h4 mb-4">Aspectos de salud y de urgencia</p>

            <div class="form-row mb-4">
                    <div class="col">
                        <!-- num emergencia -->
                        <input type="text" id="num_emergencia" class="form-control" placeholder="Número de emergencia">
                    </div>
                    <div class="col">
                        <!-- Persona emergencia -->
                        <input type="text" id="nombre_doc_emargencia" class="form-control" placeholder="Persona de emergencia">
                        <br>
                    </div>
                </div>
            <p class="h4 mb-4">Escriba las enfermedades que ha padecido</p>
            
                     <!-- Tipo Sangre -->
                     <p class="h4 mb-4">Tipo de Sangre</p>
                     <select class="form-control" id="tipo_sangre">
                            <option>A+</option>
                            <option>A-</option>
                            <option>B+</option>
                            <option>B-</option>
                            <option>AB+</option>
                            <option>AB-</option>
                            <option>O+</option>
                            <option>O-</option>
                        </select>
            <br>
            <h5>¿En la actualidad, que malestar frecuenta?</h5>
            <input type="text" id="males_n" rows="5" cols="50" class="form-control">
            <br>
            <h5>En caso de emergencia debemos llamar a</h5>
            <br>
            <div class="form-row mb-4">
                    <div class="col">
                        <!-- persona emergencia -->
                        <input type="text" id="nom_per_emergencia" class="form-control" placeholder="Nombre">
                    </div>
                    <div class="col">
                        <!-- numero emergencia -->
                        <input type="text" id="num_per_emergencia" class="form-control" placeholder="Teléfono/Celular">
                        <br>
                    </div>
                </div>
            <h5>Pediatra del niño</h5>
            <div class="form-row mb-4">
                    <div class="col">
                        <!-- wea -->
                        <input type="text" id="nom_clinica" class="form-control" placeholder="Nombre de la clínica">
                    </div>
                    <div class="col">
                        <!-- Persona emergencia -->
                        <input type="text" id="dir_clinica" class="form-control" placeholder="Dirección de la clínica">
                        <br>
                    </div>
                </div>
            <h5>Autorizacion de medicamentos en caso de emergencia</h5>
            <textarea id="med_auto" rows="5" cols="50" class="form-control"></textarea>
            <p class="h4 mb-4">Aspectos de salud y de urgencia</p>

            En caso de emergencia, ¿a cuál de los padres se debe ubicar primero?
            <select class="form-control" id="per_emer">
                    <option>Madre</option>
                    <option>Padre</option>
                    <option>Tutor</option>
                </select>
                <br>
                ¿Qué otras personas están autorizadas para retirar el alumno?
                <input type="text" id="per_auto_per" class="form-control mb-4" placeholder="Nombre">	

            <h5> Observaciones generales</h5>
            <textarea id="mas_info" rows="5" cols="50" class="form-control"></textarea>



    <!-- Sign up button -->
    <button class="btn btn-info my-4 btn-block" type="submit">Ingresar</button>
    <hr>
</form>
<!-- Default form register -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    
  </body>
<br>
<br>
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
    <script
    src="http://code.jquery.com/jquery-3.4.1.min.js"
    integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
    crossorigin="anonymous"></script>
    <script src="js/anadir.js"></script>
</html>