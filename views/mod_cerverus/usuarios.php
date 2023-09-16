<main class="content-wrapper">
    <div class="modal fade" id="RegistroGuardado" tabindex="-1" aria-labelledby="#LabelRegistroGuardado" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-success text-white">
                    <h5 class="modal-title" id="LabelRegistroGuardado">
                        <i class="fas fa-check-square"></i>
                    </h5>
                    <button class="close text-white" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center" id="mensajeExito"></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ErrorRegistro" tabindex="-1" aria-labelledby="#LabelErrorRegistro" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="#LabelErrorRegistro">
                        <i class="fas fa-exclamation-triangle"></i>
                    </h5>
                    <button class="close text-white" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <p class="text-center" id="mensajeEerror"></p>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" data-dismiss="modal">Aceptar</button>
                </div>
            </div>
        </div>
    </div>
    <article class="container-fluid">
        <section class="row justify-content-center">
            <div class="col-lg-11">
                <h1 class="text-center my-3">Usuarios</h1>
                <div class="table-responsive">
                    <table class="table table-hover">
                        <thead class="thead-dark">
                            <tr class="text-center">
                                <th>
                                    <a href="" class="btn btn-success" data-toggle="modal" data-target="#ModalUsuarios">Nuevo</a>
                                </th>
                                <th colspan="2">
                                    <div class="input-group">
                                        <input type="text" name="" id="" class="form-control">
                                        <div class="input-group-append">
                                            <button class="btn btn-secondary" data-toggle="modal" data-target="#ModalBusqueda">
                                                <i class="fas fa-search"></i>
                                            </button>
                                        </div>
                                    </div>
                                </th>
                            </tr>
                            <tr class="text-center">
                                <th>Usuario</th>
                                <th>Perfil</th>
                                <th>Opciones</th>
                            </tr>
                        </thead>
                        <tbody id="tbody-usuariocerverus">

                        </tbody>
                    </table>
                </div>                
            </div>
        </section>
    </article>
    <div class="modal fade" id="ModalUsuarios" tabindex="-1" aria-labelledby="#LabelModalUsuarios" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header" id="modal-header">
                    <h5 class="modal-title" id="LabelModalUsuarios"></h5>
                    <button class="close" id="close" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="frm">
                        <div class="my-3">
                            <input type="hidden" name="id" id="" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Perfil</label>
                            <input list="perfiles" class="form-control">
                            <datalist id="perfiles">
                                <option>Administrador</option>
                                <option>Profesor</option>
                                <option>Estudiante</option>
                            </datalist>
                        </div>
                        <div class="my-3">
                            <label for="">Usuario</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                       
                        <div class="my-3">
                            <label for="">Clave</label>
                            <input type="password" name="" id="" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Tipo Usuario</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="my-3">
                            <input type="hidden" name="task" id="task" class="form-control">
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-success" id="btnGrabar" data-dismiss="modal">Aceptar</button>
                    <button class="btn btn-warning" id="btnModificar" data-dismiss="modal">Modificar</button>
                    <button class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalEditarUsuario" aria-labelledby="#LabelModalEditarUsuario" aria-hidden="true"> 
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header bg-danger text-white">
                    <h5 class="modal-title" id="LabelModalEditarUsuario">Advertencia</h5>
                    <button class="close text-white" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="" id="frm">
                        <div class="my-3">
                            <label for="">ID</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <div class="my-3">
                            <label for="">Task</label>
                            <input type="text" name="" id="" class="form-control">
                        </div>
                        <p class="text-center">¿Estas seguro que deseas eliminar este usuario?</p>
                    </form>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-primary" id="btnSi" data-dismiss="modal">Si</button>                    
                    <button class="btn btn-secondary" data-dismiss="modal">No</button>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="ModalBusqueda" tabindex="-1" data-backdrop="static" aria-labelledby="#LabelModalBusqueda" aria-hidden="true">
        <div class="modal-dialog modal-dialog scrollable modal-xl">
            <div class="modal-content">
                <div class="modal-header bg-secondary text-white">
                    <h5 class="modal-title" id="LabelModalBusqueda">
                        Resultado de la busqueda
                    </h5>
                    <button class="close text-white" data-dismiss="modal" aria-label="close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-resposive">
                        <table class="table table-hover">
                            <thead class="thead-dark">
                                <tr class="text-center">
                                    <th>Usuario</th>
                                    <th>Perfil</th>
                                    <th>Opciones</th>
                                </tr>
                            </thead>
                            <tbody id="tbody-busqueda">

                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                </div>
            </div>
        </div>
    </div>
</main>