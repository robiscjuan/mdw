<head>
    <title>form</title>
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery-form-validator/2.3.26/jquery.form-validator.min.js"></script>

</head>


<link rel="stylesheet" href="css/app.css"/>
<div class="container">
    <h2>Registro</h2>
    {{--<form action="" name="registration">--}}
    <form class="form-horizontal">
            <div class="col-sm-offset-2 col-sm-10">
        <div class="form-group">
            <div class="col-sm-2">
                <label for="id">NIF</label>
                <input type="id" name="id" id="id" placeholder="<NIF>" class="form-control"
                       data-validation="length alphanumeric"
                       data-validation-length="max10"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-4">
                <label for="firstname">Nombre</label>
                <input type="text" name="firstname" id="firstname" placeholder="<Nombre>" class="form-control"/>
            </div>
        </div>

        <div class="form-group">
            <div class="col-sm-4">
                <label for="lastname">Apellidos</label>
                <input type="text" name="lastname" id="lastname" placeholder="<Apellidos>" class="form-control"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-8">
                <label for="adress">Dirección</label>
                <input type="adress" name="adress" id="<Dirección>" placeholder="<Dirección>" class="form-control"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-3">
                <label for="email">Email</label>
                <input type="email" name="email" id="email" placeholder="<Email>" class="form-control"
                       data-validation="email"/>
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-2">
                <label for="phone">Teléfono</label>
                <input type="phone" name="phone" id="phone" placeholder="<Teléfono>" class="form-control"/>
            </div>
        </div>
                <div class="col-sm-offset-3 col-sm-10">
                <button type="submit">Registrar</button>
                </div>
        </div>
    </form>
</div>
<script>
    $.validate({
        lang: 'es'
    });
</script>