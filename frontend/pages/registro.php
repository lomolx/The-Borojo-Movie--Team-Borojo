<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regístrate</title>
    <link rel="stylesheet" href="../css/registro.css">
    <link rel="stylesheet" href="../css/registro2.css">
    <link rel="icon" type="image/x-icon" href="../assets/imgs/logo.png" />
   
</head>
<body>
    <header>
       
    </header>
    
 <!-- Section: Design Block -->
<section class="background-radial-gradient overflow-hidden">
    <style>
      .background-radial-gradient {
        /*background-color: hsl(218, 41%, 15%);
        background-image: radial-gradient(650px circle at 0% 0%,
            hsl(218, 41%, 35%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%),
          radial-gradient(1250px circle at 100% 100%,
            hsl(218, 41%, 45%) 15%,
            hsl(218, 41%, 30%) 35%,
            hsl(218, 41%, 20%) 75%,
            hsl(218, 41%, 19%) 80%,
            transparent 100%);*/
<<<<<<< HEAD
            background-image: url('../assets/imgs/fondo.jpg');
            background-size: auto;
=======
           background-color: #2b2b31;
>>>>>>> tonyRama
          
      }
  
      #radius-shape-1 {
        height: 220px;
        width: 220px;
        top: -60px;
        left: -130px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
  
      #radius-shape-2 {
        border-radius: 38% 62% 63% 37% / 70% 33% 67% 30%;
        bottom: -60px;
        right: -110px;
        width: 300px;
        height: 300px;
        background: radial-gradient(#44006b, #ad1fff);
        overflow: hidden;
      }
  
      .bg-glass {
<<<<<<< HEAD
        background-color: white !important;
=======
        background-color: #28282d !important;
>>>>>>> tonyRama
        backdrop-filter: saturate(200%) blur(25px);
      }
      .opacity-70 {
        font-size: 30px;
        text-align: center;
      }
      .my-5 {
        text-align: center;
      }
       .aja{
        text-align: center;
      }
<<<<<<< HEAD
=======
      .contranocoin{
        color: red;
        
      }
>>>>>>> tonyRama
    </style>
  
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0 aja" style="z-index: 10">
<<<<<<< HEAD
        <img src="../assets/imgs/logo.png" alt="logo">
=======
        <img src="../img/logo.png" alt="logo">
>>>>>>> tonyRama
          <h1 class="my-5 display-5 fw-bold ls-tight" style="color: hsl(218, 81%, 95%)">
          
            Registra tus datos <br />
           <!-- <span style="color: hsl(218, 81%, 75%)">tus datos</span> -->
          </h1>
          <p class="mb-4 opacity-70" style="color: hsl(218, 81%, 85%)">
            Para poder acceder a cualquiera las opciones que tenemos, debes registrarte 
          </p>
        </div>
  
        <div class="col-lg-6 mb-5 mb-lg-0 position-relative">
         
  
          <div class="card bg-glass">
            <div class="card-body px-4 py-5 px-md-5">
              <form action="../../backend/guardardatos.php" method="post">
                <!-- 2 column grid layout with text inputs for the first and last names -->
                <div class="row">
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
<<<<<<< HEAD
                      <input type="text" id="form3Example1" class="form-control" name="nombre" />
=======
                      <input type="text" id="form3Example1" class="form-control" name="nombre" placeholder="Nombre" />
>>>>>>> tonyRama
                      <label class="form-label" for="form3Example1">Nombre </label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
<<<<<<< HEAD
                      <input type="text" id="form3Example2" class="form-control" name="apellido" />
=======
                      <input type="text" id="form3Example2" class="form-control" name="apellido" placeholder="Apellido"/>
>>>>>>> tonyRama
                      <label class="form-label" for="form3Example2">Apellidos</label>
                    </div>
                  </div>
                </div>
                <div class="form-outline mb-4">
<<<<<<< HEAD
                    <input type="text" id="form3Example3" class="form-control" name="documento" />
=======
                    <input type="text" id="form3Example3" class="form-control" name="documento" placeholder="N° Identificación" />
>>>>>>> tonyRama
                    <label class="form-label" for="form3Example3">Documento de Identidad</label>
                  </div>
  
                <!-- Email input -->
                <div class="form-outline mb-4">
<<<<<<< HEAD
                  <input type="email" id="form3Example3" class="form-control" name="email" />
                  <label class="form-label" for="form3Example3">Correo Electrónico</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="number" id="form3Example3" class="form-control" name="phone" />
=======
                  <input type="email" id="form3Example3" class="form-control" name="email" placeholder="Email" />
                  <label class="form-label" for="form3Example3">Correo Electrónico</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="number" id="form3Example3" class="form-control" name="phone" placeholder="Teléfono" />
>>>>>>> tonyRama
                    <label class="form-label" for="form3Example3">Teléfono</label>
                  </div>

                  <div class="form-outline mb-4">
<<<<<<< HEAD
                    <input type="date" id="form3Example3" class="form-control" name="fecha" />
=======
                    <input type="date" id="form3Example3" class="form-control" name="fecha"  placeholder="Fecha"/>
>>>>>>> tonyRama
                    <label class="form-label" for="form3Example3">Fecha de Nacimiento</label>
                  </div>
  
                <!-- Password input -->
               
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
<<<<<<< HEAD
                        <input type="password" id="form3Example1" class="form-control" name="contraseña" />
=======
                        <input type="password" id="form3Example1" class="form-control" name="contraseña" placeholder="Contraseña" />
>>>>>>> tonyRama
                        <label class="form-label" for="form3Example1">Contraseña</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
<<<<<<< HEAD
                        <input type="password" id="form3Example2" class="form-control" name="contraseña2" />
=======
                        <input type="password" id="form3Example2" class="form-control" name="contraseña2" placeholder="Confirmar Contaseña"/>
>>>>>>> tonyRama
                        <label class="form-label" for="form3Example2">Confirmar contraseña</label>
                      </div>
                    </div>
                  </div>

                  <div class="contranocoin" >
<<<<<<< HEAD
                    <h5 >
=======
                    <h3 >
>>>>>>> tonyRama
                        <?php 
                    if (isset($_GET['e'])) {
                      echo"Las contraseñas no coinciden";
                       }
                     
                    ?>
<<<<<<< HEAD
                </h5>
=======
                </h3>
>>>>>>> tonyRama
                  </div>
                
  
                <!-- Checkbox -->
                
  
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Sign up
                </button>
  
                <!-- Register buttons -->
             
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

 
</body>

</html>