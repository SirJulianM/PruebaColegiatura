
function listSubjects() 
{
    var campos = "task=listar-botones";
    $.ajax({
        type: "POST",
        url: "index.php?opc=cadmin",
        data: campos,
        datatype: "json",
        success: function(data) 
        {
            var info = "";
            $.each(data, function(index, item) 
            {
                info += '<div class="col-lg-4">'
                +'<div class="card my-3">'
                +'<img src="" alt="" class="card-image-top">'
                +'<div class="card-body">'
                +'<div class="d-flex justify-content-center align-items-center">'
                +'<a href="index.php?opc=vmaterias&id='+ item.int_id_materias
                +'" class="btn btn-link text-dark">'
                + item.var_materias
                +'</a>'
                +'</div></div></div></div>';
            })
            $('#rowButtons').html(info);
        }
    })
}

$(document).ready(function() 
{
    listSubject();
})