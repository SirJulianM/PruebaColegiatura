<!-- /.login-logo -->
<div class="card">
    <div class="card-body login-card-body">
      <p class="login-box-msg">Bienvenido</p>

      <form id="frm_login">
        <div class="input-group mb-3">
          <input type="text" class="form-control" placeholder="Usuario" id="usuario" name="usuario">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-users"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" class="form-control" placeholder="Contraseña" id="password" name="password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <div class="row">
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" class="btn btn-dark btn-block" id="btn_login">Iniciar sesión</button>
          </div>
          <!-- /.col -->
        </div>
        <input type="hidden" id="task" value="login">
      </form>
      <!-- /.social-auth-links -->
      <p class="my-4 text-center">
        <a href="index.php?opc=volvideclave" class="btn btn-link-dark">Olvide mi contraseña.</a>
      </p>
    </div>
    <!-- /.login-card-body -->
  </div>
</div>
<!-- /.login-box -->