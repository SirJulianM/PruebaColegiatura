var usuarios;

function ListUsers() 
{
    var campos="task=listar-usuarios";
    $.ajax({
        type: "POST",
        url: "index.php?opc=cusuarios",
        data: campos,
        datatype: 'json',
        success: function(data) 
        {
            var info = "";
            $.each(data, function(index, item) 
            {
                info += '<tr class="text-center"><td>' 
                + item.var_usuario + '</td><td>'
                + item.var_perfiles + '</td><td>'
                +'<div class="btn-group">'
                +'<a href=""  class="btn btn-warning" data-toggle="modal" onclick="editarUsuario(\''+ item.id +'\',\''+ item.var_departamento + '\',\'' + item.var_descripcion +'\')"><i class="far fa-edit"></i></a>'
                +'<a href="" class="btn btn-primary" data-toggle="modal" onclick="eliminarUsuario('+ item.id +')"><i class="fas fa-check"></i></a>'
                + '</div></td></tr>'   
            })
            $('#tbody-usuariocerverus').html(info);
        }
    })    
}

$(document).ready(function() 
{
    ListUsers();
})