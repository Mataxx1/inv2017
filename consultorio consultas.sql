select p.nombre as nombre_p, p.apaterno, p.amaterno, p.telefono, p.email,p.estado, p.municipio, p.localidad, p.domicilio, TIMESTAMPDIFF(YEAR, p.fecha_nacimiento, NOW()) as edad, ic.nombre as nombre_i, ic.domicilio as dom_ic from pastor as p inner join iglesia_cristiana as ic on ic.id = p.iglesia_cristiana_id;
SELECT p.id, p.nombre as nombre_p, p.apaterno, p.amaterno,  TIMESTAMPDIFF(YEAR, p.fecha_nacimiento, NOW()) as edad, p.telefono as telefono_p, p.estado, p.municipio, p.localidad, p.calle, p.desicion, p.evangelio, p.sexo, i.nombre as nombre_i, d.nombre as nombre_d from paciente as p inner join iglesia as i on p.iglesia_id = i.id inner join diagnostico as d on p.diagnostico_id = d.id ;
select nombre from paciente where id = 1 or 1=1;
select c.nombre, c.tel_casa, c.tel_celular, ic.nombre, ic.domicilio, ic.municipio, ic.localidad, ic.telefono from contacto as c inner join iglesia_cristiana as ic;


select a.nombre, a.apaterno, a.amaterno, a.telefono, a.estado, a.municipio, a.domicilio, a.localidad, a.desicion, a.evangelio, a.sexo from acompanante as a inner join paciente on a.paciente_id = paciente.id;

select paciente.id, paciente.nombre as 'nom_pac', paciente.apaterno as 'ap_pac', paciente.amaterno as 'am_pac', paciente.telefono, cita.numero, cita.fecha_inicio, medico.nombre as 'nom_med', medico.apaterno as 'ap_med', medico.amaterno as 'am_med', es.nombre as 'n_esp'
from paciente inner join cita on paciente.id = cita.paciente_id inner join medico on medico.cedula = cita.medico_cedula inner join medico_has_especialidad on medico.cedula = medico_has_especialidad.medico_cedula inner join especialidad as es on es.idespecialidad = medico_has_especialidad.especialidad_idespecialidad;


select e.nombre as n_e, t_e.nombre as tipo_eq, p.fecha_prestamo,p.fecha_devolucion,p.id_prestamo,p.estado, pac.nombre, pac.apaterno, pac.amaterno, pac.id, pac.telefono, pac.calle, pac.localidad, pac.municipio
FROM tipo_equipo as t_e inner join equipo as e on e.tipo_equipo_idtipo_equipo = t_e.idtipo_equipo inner join equipo_prestamo on equipo_prestamo.equipo_idequipo = e.idequipo inner join prestamo as p on p.id_prestamo = equipo_prestamo.prestamo_id_prestamo
inner join paciente as pac on p.paciente_id = pac.id WHERE p.estado='activo'; 

select * from paciente where sexo = 'Mujer';
select * from colaborador WHERE estado <> 'EUA';