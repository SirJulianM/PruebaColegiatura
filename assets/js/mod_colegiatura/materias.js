var materia;

function listSubjects()
{
    var campos = "task=listar-materias";
    $.ajax({
        type: "POST",
        url: "index.php?opc=cmaterias",
        data: campos,
        dataType: 'json',
        success: function (data) 
        {
            var info = "";
            $.each(data, function (index, item) 
            {
                info += '<tr class="text-center"><td>'
                +item.var_materias+'</td><td>'
                +item.var_descripcion+'</td><td>'
                +item.bin_activo+'</td><td><div class="btn-group">'
                +'<a href=""  class="btn btn-warning" data-toggle="modal" onclick="editarMateria(\''+ item.int_id_materia +'\',\''+ item.var_materias + '\',\'' + item.var_descripcion +'\')"><i class="far fa-edit"></i></a>'
                +'<a href="" class="btn btn-primary" data-toggle="modal" onclick="eliminarMateria('+ item.int_id_materia +')"><i class="fas fa-check"></i></a>'
                +'</div></td></tr>';
            });
            $('#tbody-materia').html(info);
        },
    });
}

function clearSubject() 
{
    int_id_materia: $('#IDMateria').val("");
    var_materias: $('#NombreMateria').val("");
    var_descripcion: $('#Descripcion').val("");
}

function addSubjects(accion, objmaterias)
{
    $.ajax({
        type: "POST",
        url: "index.php?opc=cmaterias",
        data: objmaterias + accion,
        dataType: 'json',
        success: function(msg)
        {            
            if(msg)
            {                
                $('#RegistroGuardado').modal('show');
                $('#mensajeExito').html('La materia se ha agregado con éxito');
                listSubjects();
            }
            else
            {
                $('#ErrorRegistro').modal('show');
                $('#mensajeError').html('Error al grabar la materia')
                listSubjects();
            }
        }
    })
}

function updateSubject(accion, objmaterias) 
{
    console.log(objmaterias+accion)
    $.ajax({
        type: "POST",
        url: "index.php?opc=cmaterias",
        data: objmaterias + accion,
        dataType: 'json',
        success: function(msg)
        {
            if(msg)
            {
                $('#RegistroGuardado').modal('show');
                $('#mensajeExito').html('La materia se ha modificado con éxito');
                listSubjects();
            }
            else
            {
                $('#ErrorRegistro').modal('show');
                $('#mensajeError').html('Error al modificar la materia. Verifique que está sucediendo')
                listSubjects();
            }
        }
    }) 
}

function deleteSubject(objmaterias) 
{
    $.ajax({
        type: "POST",
        url: "index.php?opc=cmaterias",
        data: objmaterias,
        dataType: 'json',
        success: function(msg) 
        {
            if(msg)
            {
                $('#RegistroGuardado').modal('show');
                $('#mensajeExito').html('la materia se ha modificado con éxito');
                listSubjects();
            }
            else
            {
                $('#ErrorRegistro').modal('show');
                $('#mensajeError').html('Error al modificar la materia. Por favor comuniquese con el área encargada')
                listSubjects();
            }    
        }
    })
}

function editarMateria(id, mater, desc)
{
    $('#modal-header').removeClass('bg-success', 'text-white');
    $('#modal-header').addClass('bg-warning', 'text-dark');
    $('#close').removeClass('text-white');
    $('#close').addClass('text-dark');
    $('#IDMateria').val(id);
    $('#NombreMateria').val(mater);
    $('#Descripcion').val(desc);
    $('#modalMateria').modal('show');
    $('#LabelModalMateria').html("Modificar materia");
    $('#btnModificar').css("display", "block");
    $('#btnGrabar').css("display", "none");
}

function eliminarMateria(id) 
{
    $('#IDMat').val(id);
    $('#eliminarMat').modal('show');
}

$(document).ready(function() 
{
    listSubjects();

    $('#Add').click(function() 
    {
        $('#modal-header').removeClass('bg-warning', 'text-dark');
        $('#modal-header').addClass('bg-success', 'text-white');
        $('#close').removeClass('text-dark');
        $('#close').addClass('text-white');
        $('#LabelModalMateria').html("Agregar materia");
        $('#btnModificar').css("display", "none");
        $('#btnGrabar').css("display", "block");
        clearSubject();
    })

    $('#btnGrabar').click(function()
    {
        materia = $('#frmMateria').serialize();
        task = "agregar-materias";
        addSubjects(task, materia);
    })         

    $('#btnModificar').click(function() 
    {
        materia = $('#frmMateria').serialize();
        task = "modificar-materias";
        updateSubject(task, materia);
    })
    
    $('#btnSi').click(function() 
    {
        materia = $('#frmEditMateria').serialize();
        deleteSubject(materia);    
    })   

});