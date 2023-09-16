-- Seguridad

Create table Usuarios(
	int_ID_usuario serial primary key,
	var_usuario varchar(20) not null,
	int_fk_ID_Perfil int not null,
	var_clave varchar(128) not null,
	int_FK_TipoUsuario int not null,
	bin_Activo boolean not null
);

Create table Opciones(
	int_ID_opciones serial primary key,
	var_descripcion text not null,
	var_icono varchar(20) not null,
	var_modulo varchar(50) not null,
	var_archivo varchar(50) not null,
	var_menu varchar(20) not null,
	var_layout varchar(20) not null
);

Create table Perfiles(
	int_id_Perfiles serial primary key,
	var_perfiles varchar(50) not null,
	bin_activo boolean not null
);

Create table Opciones_Perfiles(
	int_id_opcionesperfiles serial primary key,
	int_fk_idopciones int not null,
	int_fk_idperfiles int not null
);

Create table TiposUsuario(
	int_id_tiposuaurio serial primary key,
	var_tipousuario varchar(50) not null,
	int_fk_id_materia int not null,
	bin_activo boolean not null
);

-- Estudiantes

Create table Materias(
	int_id_materia serial primary key,
	var_materias varchar(20) not null,
	var_descripcion text not null,
	bin_activo boolean not null
);

Create table Estudiantes(
	int_id_estudiante serial primary key,
	var_nombre varchar(20) not null,
	var_apellidos text not null,
	bin_activo boolean not null
);

Create table Materia_Estudiante(
	int_id_materiaEstudiante serial primary key,
	int_fk_id_materia int not null,
	int_fk_id_estudiante int not null
);

Create table Notas(
	int_id_nota serial primary key,
	double_notaEstudiante float not null,
	double_notaFinalEstudiante float not null,
	int_fk_id_materiaestudiante int not null
);

-- Uniones

ALTER TABLE Opciones_Perfiles
ADD FOREIGN KEY (int_fk_idperfiles) REFERENCES Perfiles(int_id_Perfiles);

ALTER TABLE Opciones_Perfiles
ADD FOREIGN KEY (int_fk_idopciones) REFERENCES Opciones(int_id_Opciones);

ALTER TABLE Usuarios
ADD FOREIGN KEY (int_fk_tipousuario) REFERENCES TiposUsuario(int_id_tiposuaurio);

ALTER TABLE Usuarios
ADD FOREIGN KEY (int_fk_id_perfil) REFERENCES Perfiles(int_id_Perfiles);

ALTER TABLE TiposUsuario
ADD FOREIGN KEY (int_fk_id_materia) REFERENCES Materias (int_id_materia);

ALTER TABLE Materia_Estudiante
ADD FOREIGN KEY (int_fk_id_materia) REFERENCES Materias(int_id_materia);

ALTER TABLE Materia_Estudiante
ADD FOREIGN KEY (int_fk_id_estudiante) REFERENCES Estudiantes(int_id_estudiante);

ALTER TABLE Notas
ADD FOREIGN KEY (int_fk_id_materiaestudiante) REFERENCES Materia_Estudiante(int_id_materiaEstudiante);

-- Insert
INSERT INTO PERFILES(var_perfiles, bin_activo) VALUES ('Administrador', true)

INSERT INTO USUARIOS(var_usuario, int_fk_id_perfil, var_clave, int_FK_TipoUsuario, bin_activo) VALUES
('Angela',1, 
 'b66ced2386dae117060f3eb889c4fa1c512cbbdfb2a602fcfba8e956ab2f7d86614f16e275c316b967d48513e5355ce819a81e5da98836cec820da3aaacdad76', 
 1, true)
 
 