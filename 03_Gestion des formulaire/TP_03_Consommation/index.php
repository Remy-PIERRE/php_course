<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>TP Consomation</title>
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css"
      integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65"
      crossorigin="anonymous"
    />
    <link rel=icon 
      href=https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@6/svgs/solid/weight-scale.svg>
  </head>

  <style>
    .bg-gris {
      background-color: #ccc;
    }
  </style>

  <body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
      <div class="container">
        <a class="navbar-brand" href="#">
         <i class="fa-solid fa-car me-3"></i>
         Voiture Conso</a>
      </div>
    </nav>

    <div class="container">
      <div class="row">
        <form class="col-4 pt-4" method="POST">
          <h1 class="h3">Calculer votre consommation</h1>

          <input
            aria-label="carburant"
            class="form-control"
            placeholder="Litres d'essence"
            name="carburant"
          />
             
          <input
            aria-label="distance"
            class="form-control mt-3 mb-3"
            placeholder="Kilomètres"
            name="distance"
          />

          <button class="btn btn-primary" type="submit">Valider</button>
          
          <div class="alert alert-success mt-4" role="alert">
           <h3>Conso  : <b>6.5</b> Litres/100km</h3>
           <p>Normal</p>
          </div>
        </form>
      </div>
    </div>

    <footer class="py-5 bg-dark">
      <div class="container px-4 px-lg-5">
        <p class="m-0 text-center text-white">
          Copyright &copy; Seven Valley 2023
        </p>
      </div>
    </footer>
  </body>

</html>