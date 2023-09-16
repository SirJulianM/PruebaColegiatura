<main class="content-wrapper">
    <article class="container-fluid">
        <section class="row my-2 justify-content-center" id="principal">
            <div class="col-lg-11">
                <h1 class="text-center my-3">Estudiantes</h1>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th colspan="4">
                                    <a href="" id="Add" class="btn btn-success" data-toggle="modal" data-target="#modalEstudiante">Nuevo</a>
                                </th>
                            </tr>
                            <tr class="text-center">
                                <th>Nombres</th>
                                <th>Apellidos</th>
                                <th>Activo</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-estudiantes">

                        </tbody>
                    </table>
                </div>
            </div>
        </section>
    </article>
    <div class="modal fade" id="modalEstudiante" tabindex="-1" aria-labelledby="LabelModalMateria" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" id="modal-header">
                    <h5 class="modal-title" id="LabelModalMateria"></h5>
                    <button class="close" id="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="frmMateria" method="POST">
                        <div class="my-3">
                            <input type="hidden" name="int_id_materia" id="IDMateria" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Nombre del Materia: </label>
                            <input type="text" name="var_materia" id="NombreMateria" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Descripción: </label>
                            <textarea name="var_descripcion" id="Descripcion" rows="5" class="form-control"></textarea>
                        </div>
                        <div class="my-3">
                            <input type="hidden" name="task" id="task" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success" name="btnGrabar" id="btnGrabar" data-dismiss="modal">Agregar</button>
                    <button type="submit" class="btn btn-warning" name="btnModificar" id="btnModificar" data-dismiss="modal">Modificar</button>
                    <button type="submit" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="eliminarMat" tabindex="-1" aria-labelledby="idAdvertenciaDep" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="idAdvertenciaDep">Advertencia</h5>
                    <button type="button" class="close text-white" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="frmEditMateria">
                        <div class="my-3">
                            <input type="hidden" name="int_id_materia" id="IDMat">
                        </div>
                        <div class="my-3">
                            <input type="hidden" name="task" id="Accion" value="desactivar-materias">
                        </div>
                        <p class="text-center mt-1">
                            ¿Está seguro que desea eliminar este registro?
                        </p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-primary" id="btnSi" data-dismiss="modal">Si</button>
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
</main>