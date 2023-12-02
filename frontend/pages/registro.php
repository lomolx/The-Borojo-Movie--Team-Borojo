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
           background-color: #2b2b31;
          
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
        background-color: #28282d !important;
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
      .contranocoin{
        color: red;
        
      }
    </style>
  
    <div class="container px-4 py-5 px-md-5 text-center text-lg-start my-5">
      <div class="row gx-lg-5 align-items-center mb-5">
        <div class="col-lg-6 mb-5 mb-lg-0 aja" style="z-index: 10">
        <img src="../img/logo.png" alt="logo">
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
                      <input type="text" id="form3Example1" class="form-control" name="nombre" placeholder="Nombre" />
                      <label class="form-label" for="form3Example1">Nombre </label>
                    </div>
                  </div>
                  <div class="col-md-6 mb-4">
                    <div class="form-outline">
                      <input type="text" id="form3Example2" class="form-control" name="apellido" placeholder="Apellido"/>
                      <label class="form-label" for="form3Example2">Apellidos</label>
                    </div>
                  </div>
                </div>
                <div class="form-outline mb-4">
                    <input type="text" id="form3Example3" class="form-control" name="documento" placeholder="N° Identificación" />
                    <label class="form-label" for="form3Example3">Documento de Identidad</label>
                  </div>
  
                <!-- Email input -->
                <div class="form-outline mb-4">
                  <input type="email" id="form3Example3" class="form-control" name="email" placeholder="Email" />
                  <label class="form-label" for="form3Example3">Correo Electrónico</label>
                </div>
                <div class="form-outline mb-4">
                    <input type="number" id="form3Example3" class="form-control" name="phone" placeholder="Teléfono" />
                    <label class="form-label" for="form3Example3">Teléfono</label>
                  </div>

                  <div class="form-outline mb-4">
                    <input type="date" id="form3Example3" class="form-control" name="fecha"  placeholder="Fecha"/>
                    <label class="form-label" for="form3Example3">Fecha de Nacimiento</label>
                  </div>
  
                <!-- Password input -->
               
                  <div class="row">
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="password" id="form3Example1" class="form-control" name="contraseña" placeholder="Contraseña" />
                        <label class="form-label" for="form3Example1">Contraseña</label>
                      </div>
                    </div>
                    <div class="col-md-6 mb-4">
                      <div class="form-outline">
                        <input type="password" id="form3Example2" class="form-control" name="contraseña2" placeholder="Confirmar Contaseña"/>
                        <label class="form-label" for="form3Example2">Confirmar contraseña</label>
                      </div>
                    </div>
                  </div>

                  <div class="contranocoin" >
                    <h3 >
                        <?php 
                    if (isset($_GET['e'])) {
                      echo"Las contraseñas no coinciden";
                       }
                     
                    ?>
                </h3>
                  </div>
                
  
                <!-- Checkbox -->
                
  
                <!-- Submit button -->
                <button type="submit" class="btn btn-primary btn-block mb-4">
                  Inscribirse
                </button>
  
                <!-- Register buttons -->

             
              </form>
              <br>
                <span class="sign__text"><a href="../index.php"><button >volver atras</button></a></span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <!-- Section: Design Block -->

 
</body>

</html>