# I.E-64693-Jos-Olaya-Balandra-2
nuevo proyecto 

<img width="354" height="372" alt="image" src="https://github.com/user-attachments/assets/d53fc02e-cf50-4470-89f1-725e12365176" />

## ACISTENCIA DE DOCENTES


## DESCRIPCIÓN DEL ESTABLECIMIENTO
NOMBRE: I.E. 6469.Jose Olaya Balandra
RUBRO: SERVICIOS EDUCATIVOS DENTRO DEL SECTOR SERVICIOS DEDICÁNDOCE A LA ENSEÑANZA, ENTRENAMIENTO Y FORMACIÓN ACADEMICA EN NIVELES INICIAL, PRIMARIA Y SECUNDARIA.
TAMAÑO: MEDIANO
JUSTIFICACIÓN: HACE FALTA UN SISTEMA DE ASISTENCIA PARA LOS DOCENTES DE NIVEL SECUNDARIA.


## PROBLEMÁTICA 
LA DIRECTORA DE LA I.E. JOSE OLAYA PRESENTA DIFICULTADES EN EL CONTROL DE ASISTENCIA DE LOS DOCENTES, YA QUE ACTUALMENTE EL REGISTRO SE REALIZA DE MANERA MANUAL MEDIANTE FIRMAS EN CUADERNOS O LISTAS.
ESTE METODO A GENERADO ERRORES EN EL REGISTRO DE TARDANZA Y INASISTENCIAS.
POSIBLES SUPLANTACIÓN DE IDENTIDAD AL FIRMAR POR OTRO DOCENTE.
PERDIDA DE TIEMPO O FALTA DE INFORMACIÓN INMEDIATA SOBRE QUE DOCENTES ASISTIERON.
POR ESTE CASO LA DIRECTORA CONSIDERA IMPLEMENTAR ESTE SISTEMA PARA MEJORAR EL CONTROL DE SUS DOCENTES.

## SOLUCIÓN
EL SOTFWARE ES PARA LA ASISTENCIA DE PROFESORES DE LA I.E JOSE
OLAYA BALANDRA POR MEDIO DE SU NUMERO DE DNI CON EL FIN DE
MEJORAR EL CONTROL DE DOCENTES EN EL AÑO ESCOLAR FOBORECIENDO
ASI SU TRABAJO Y VIENESTAR DE LA INSTITUCIÓN.

## NECESIDADES 
Registrar asistencia mediante DNI de forma rápida
Validar identidad del docente
Evitar duplicidad de registros diarios
Obtener reportes inmediatos (asistencia, tardanza, inasistencia)
Reducir tiempo administrativo en el control manual

## ESTUDIO DE VIABILIDAD

Viabilidad Técnica


Tecnologías simples (web o app básica) son suficientes
Uso de base de datos para docentes y asistencias
No requiere hardware complejo (solo PC o laptop)

Viabilidad Operativa


Fácil adopción por parte de la directora (interfaz simple)
No requiere capacitación compleja
Mejora procesos actuales sin cambiarlos radicalmente

## ALCANCE DEL SISTEMA 
Registro de asistencia mediante DNI
Validación de docentes registrados
Registro automático de fecha y hora
Control de duplicidad diaria
Visualización de historial de asistencia
Interfaz simple para uso administrativo

## DEFINICION DE REQUISISTOS 

## Requerimientos Funcionales
| Codigo | Descripcion |
|---|---|
| RF01 |el sistema debe permitir registrar asistencia de docentes mediante DNI.|
| RF02 |debe validar si el DNI pertenece a un docente registrado.|
| RF03 |puede evitar duplicidad de asistencia en el mismo día.|
| RF04 |el sistema debe registrar fecha y hora automáticamente.|
| RF05 |el sistema debe mostrar historial de asistencia.|
| RF06 |El sistema debe ser rápido menos de 10 segundos.|

## Requerimientos no Funcionales
| Codigo | Descripcion |
|---|---|
| RNF01 |Debe ser fácil de usar interfaz simple.|
| RNF02 |Debe garantizar seguridad de datos.|
| RNF03 |Debe estar disponible en horario escolar.|

## ANÁLISIS DE REQUISITOS  
es un sistema de asistencia basado en identificación por DNI que valida docentes registrados, 
evita duplicidades y almacena registros con fecha y hora automática. Se enfoca en rapidez, 
facilidad de uso y seguridad de datos, siendo un sistema sencillo pero con lógica crítica en
validación y control de registros.
## BASE DE DATOS MYSQL
CREATE DATABASE registro;
USE registro;

-- TABLA DE USUARIOS (Para el Login de la Directora)
CREATE TABLE usuarios (
    id INT AUTO_INCREMENT PRIMARY KEY,
    nombre_usuario VARCHAR(100) NOT NULL,
    usuario VARCHAR(50) NOT NULL,
    password VARCHAR(255) NOT NULL
);

-- TABLA DE DOCENTES (10 Registros)
CREATE TABLE docentes (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dni VARCHAR(8) NOT NULL,
    nombre VARCHAR(100) NOT NULL,
    especialidad VARCHAR(50) NOT NULL
);

-- TABLA DE ASISTENCIA (Relacionada con docentes)
CREATE TABLE asistencia (
    id INT AUTO_INCREMENT PRIMARY KEY,
    dni_docente VARCHAR(8) NOT NULL,
    fecha DATE NOT NULL,
    hora_entrada TIME NOT NULL,
    estado VARCHAR(20) NOT NULL
);

-- DATOS INICIALES
INSERT INTO usuarios (nombre_usuario, usuario, password) 
VALUES ('JOSE OLAYA BALANDRA', 'admin', '1234');

INSERT INTO docentes (dni, nombre, especialidad) VALUES 
('10000001', 'MIGUEL PONCE', 'MATEMATICA'),
('10000002', 'ROSA MARIEL', 'COMUNICACION'),
('10000003', 'RAUL TORRES', 'CIENCIA Y TECNOLOGIA'),
('10000004', 'ANA LUZ VALDÉS', 'INGLES'),
('10000005', 'CARLOS MENDOZA', 'EDUCACION FISICA'),
('10000006', 'ELENA GUERRA', 'ARTE Y CULTURA'),
('10000007', 'JORGE LINARES', 'HISTORIA'),
('10000008', 'SONIA QUISPE', 'RELIGION'),
('10000009', 'PEDRO ALVARADO', 'COMPUTO'),
('10000010', 'CARMEN REYES', 'CIENCIAS SOCIALES');

<img width="862" height="1356" alt="image" src="https://github.com/user-attachments/assets/8205f7e2-fac1-4461-8594-20db721d96ce" />
  ##https://www.figma.com/design/ALETE11U7srpZnlilG9nst/Sin-t%C3%ADtulo?t=NWAAj8XNfNJqXstE-1

