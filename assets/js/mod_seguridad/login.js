function sendForm(frm){
    var usuario = $('#usuario').val();
    var password = $('#password').val();
    var task = $('#task').val();
    var shaObj = new jsSHA(password, "ASCII");
    var clave = shaObj.getHash("SHA-512", "HEX");

    //var campos = $(frm).serialize();
    campos = "task=" + task + "&user=" + usuario + "&clave=" + clave; 

    if(usuario && clave){
        $.ajax({
            type: "POST",
            url: "index.php?opc=clogin",
            data: campos,
            dataType: 'json',
            success: function (data) {
                if(data.success){
                    window.parent.location = 'index.php?opc=vhome-app';
                } else {
                    //TODO modal botstrap Usuario o clave incorrectas
                    //alert('Usuario o clave incorrectas');
                    $('#errorModal').modal('show');
                    console.log('Login errado');
                }
            }
        });
    }

}

$(document).ready(function(){

    $("#btn_login").click(function (event) {
        event.preventDefault();
        sendForm('#frm_login');
    });

});