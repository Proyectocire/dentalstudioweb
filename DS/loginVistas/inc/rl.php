    <div class="jumbotron">
        <div class="container">
            <div class="row ">
             <div class="card text-center">
              <div class="card-header">
                Login
            </div>
            <div class="card-body form-group">
               <div class="login-form">
                  <form action="../loginVistas/sql/SQLLogin.php" method="post">      
                     <div class="form-group">
                        <label for="correo">Correo</label>
                        <input type="email" name="email" class="form-control" placeholder="Correo" required="required">
                    </div>
                    <div class="form-group">
                        <label for="password">Contraseña</label>
                        <input type="password" name="password" class="form-control" placeholder="Contraseña" required="required">
                    </div>
                    <div class="form-group">
                        <button type="submit" name="btn_login" class="btn btn-primary btn-block">Conectar</button>
                    </div>

                </form>
            </div>

            <label class="pull-left checkbox-inline"><input type="checkbox"> Recordarme siempre</label><hr>
            <a href="#" class="pull-right">Olvidaste la Contraseña?</a>
        </div>
        <div class="card-footer text-muted">
            <div class="clearfix">

            </div>        
        </div>
    </div>
    
    <div class="col"></div>
    <!--- DIVISION LOGIN REGISTRO ----><!--- DIVISION LOGIN REGISTRO ----><!--- DIVISION LOGIN REGISTRO ----><!--- DIVISION LOGIN REGISTRO ---->

    <div class="card text-center">
      <div class="card-header">
        Registrate
    </div>
    <div class="card-body">
        <div class="login-form">
            <form action="" method="post">      
                <div class="form-group">
                    <input type="email" class="form-control" placeholder="Correo" required="required">
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Contraseña" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Nombre" required="required">
                </div>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Apellido" required="required">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
                </div>

            </form>
        </div>

        <label class="pull-left checkbox-inline"><input type="checkbox"> No soy un robot</label>

    </div>
    <div class="card-footer text-muted">
        <div class="clearfix">
            <a href="#" class="pull-right"></a>
        </div>        
    </div>
</div>

</div>
</div>

</div>