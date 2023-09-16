<!-- jQuery -->
<script src="assets/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="assets/js/adminlte.min.js"></script>

<script src="assets/js/libs/jsSHA/src/sha512.js"></script>
<?php

$ruta = "assets/js/" . $conf[$opcion]["modulo"] . "/" . $conf[$opcion]["archivo"] . ".js";
if (file_exists($ruta)) {
?>
    <script src="<?php echo $ruta . "?rdn=" . rand(0, 1000); ?>"></script>
<?php
}
?>

</body>

</html>