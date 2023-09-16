var perfiles;

function listProfiles()
{
    var campos = "task=listar-perfiles";
    $.ajax({
        type: "POST",
        url: "index.php?opc=cperfil",
        data: campos,
        dataType: 'json',
        success: function (data) 
        {
            var info = "";
            $.each(data, function (index, item) 
            {
                info += '<tr class="text-center"><td>'
                +item.var_perfiles+'</td><td>'
                +item.bin_activo+'</td><td><div class="btn-group">'
                +'<a href=""  class="btn btn-warning" data-toggle="modal" onclick="editarPerfil(\''+ item.int_id_perfiles +'\',\''+ item.var_perfiles + '\')"><i class="far fa-edit"></i></a>'
                +'<a href="" class="btn btn-primary" data-toggle="modal" onclick="eliminarPerfil('+ item.int_id_perfiles +')"><i class="fas fa-check"></i></a>'
                +'</div></td></tr>';
            });
            $('#tbody-perfiles').html(info);
        },
    });
}

function clearProfile() 
{
    int_id_perfiles: $('#IDPerfiles').val("");
    var_perfiles: $('#NombrePerfil').val("");
}

function addProfile(accion, objperfiles)
{
    $.ajax({
        type: "POST",
        url: "index.php?opc=cperfil",
        data: objperfiles + accion,
        dataType: 'json',
        success: function(msg)
        {            
            if(msg)
            {                
                $('#RegistroGuardado').modal('show');
                $('#mensajeExito').html('El perfil se ha agregado con éxito');
                listProfiles();
            }
            else
            {
                $('#ErrorRegistro').modal('show');
                $('#mensajeError').html('Error al grabar el perfil')
                listProfiles();
            }
        }
    })
}

function updateProfile(accion, objperfiles) 
{
    console.log(objperfiles+accion)
    $.ajax({
        type: "POST",
        url: "index.php?opc=cperfil",
        data: objperfiles + accion,
        dataType: 'json',
        success: function(msg)
        {
            if(msg)
            {
                $('#RegistroGuardado').modal('show');
                $('#mensajeExito').html('El perfil se ha modificado con éxito');
                listProfiles();
            }
            else
            {
                $('#ErrorRegistro').modal('show');
                $('#mensajeError').html('Error al modificar la perfil. Verifique que está sucediendo')
                listProfiles();
            }
        }
    }) 
}

function deleteProfile(objperfiles) 
{
    console.log(objperfiles)
    $.ajax({
        type: "POST",
        url: "index.php?opc=cperfil",
        data: objperfiles,
        dataType: 'json',
        success: function(msg) 
        {
            if(msg)
            {
                $('#RegistroGuardado').modal('show');
                $('#mensajeExito').html('El perfil se ha modificado con éxito');
                listProfiles();
            }
            else
            {
                $('#ErrorRegistro').modal('show');
                $('#mensajeError').html('Error al modificar el perfil. Por favor comuniquese con el área encargada')
                listProfiles();
            }    
        }
    })
}

function editarPerfil(id, per)
{
    $('#modal-header').removeClass('bg-success', 'text-white');
    $('#modal-header').addClass('bg-warning', 'text-dark');
    $('#close').removeClass('text-white');
    $('#close').addClass('text-dark');
    $('#IDPerfiles').val(id);
    $('#NombrePerfil').val(per);
    $('#modalPerfiles').modal('show');
    $('#LabelModalPerfil').html("Modificar perfil");
    $('#btnModificar').css("display", "block");
    $('#btnGrabar').css("display", "none");
}

function eliminarPerfil(id) 
{
    $('#IDPer').val(id);
    $('#eliminarPer').modal('show');
}

$(document).ready(function() 
{
    listProfiles();

    $('#Add').click(function() 
    {
        $('#modal-header').removeClass('bg-warning', 'text-dark');
        $('#modal-header').addClass('bg-success', 'text-white');
        $('#close').removeClass('text-dark');
        $('#close').addClass('text-white');
        $('#LabelModalPerfil').html("Agregar Perfil");
        $('#btnModificar').css("display", "none");
        $('#btnGrabar').css("display", "block");
        clearProfile();
    })

    $('#btnGrabar').click(function()
    {
        perfiles = $('#frmPerfil').serialize();
        task = "agregar-perfiles";
        addProfile(task, perfiles);
    })         

    $('#btnModificar').click(function() 
    {
        perfiles = $('#frmPerfil').serialize();
        task = "modificar-perfiles";
        updateProfile(task, perfiles);
    })
    
    $('#btnSi').click(function() 
    {
        perfiles = $('#frmEditPerfil').serialize();
        deleteProfile(perfiles);    
    })   

});