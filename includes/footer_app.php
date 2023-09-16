<!-- Main Footer -->
<footer class="main-footer">
    <h5 class="text-center"><strong>Copyright &copy; <?php echo date("Y"); ?> Colegiatura</strong> - todos los derechos reservados</h5>
  </footer>
</div>
<!-- ./wrapper -->


<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.min.js"></script>

<?php 
$ruta = "assets/js/" . $conf[$opcion]["modulo"] . "/" . $conf[$opcion]["archivo"] . ".js";
//  assets/js/mod_sistema/home-app.js
  //echo $ruta;
  if(file_exists($ruta)){
?>
  <script src="<?php echo $ruta . "?rdn=" . rand(0,1000); ?>" ></script>
<?php
  }
?>
</body>
</html>
