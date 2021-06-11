<!DOCTYPE html>
<html lang="en">
<head>

<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

<style>

.wrapper {
  display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}

#formContent {
  -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #fff;
  padding: 30px;
  width: 90%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}

#formFooter {
  background-color: #f6f6f6;
  border-top: 1px solid #dce8f1;
  padding: 25px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}

</style>

</head>

<body>

<div class="col-md-6">

    <div class="card text-center">
    <div class="card-header">
        <H1>Acceder</H1>
    </div>
    <div class="card-body">

    <div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Usuario</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Coloque aqui el usuario">
    </div>
    <div class="mb-3">
    <label for="formGroupExampleInput2" class="form-label">Contraseña</label>
    <input type="text" class="form-control" id="formGroupExampleInput2" placeholder="Ingrese aqui la contraseña">
    </div>

        <a href="#" class="btn btn-primary">Acceder</a>
    </div>
    <div class="card-footer text-muted">
            <a class="underlineHover" href="#">¿Olvido la contraseña?</a>
    </div>
    </div>

</div>

</body>

<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>

</html>