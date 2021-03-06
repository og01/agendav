<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
/*
 * Copyright 2011 Jorge López Pérez <jorge@adobo.org>
 *
 *  This file is part of AgenDAV.
 *
 *  AgenDAV is free software: you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation, either version 3 of the License, or
 *  any later version.
 *
 *  AgenDAV is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  You should have received a copy of the GNU General Public License
 *  along with AgenDAV.  If not, see <http://www.gnu.org/licenses/>.
 */

/*
 * Spanish master language file
 */

$labels = array();
$messages = array();

// Labels

$labels['format_date_strftime'] = '%a %e de %B de %Y'; // Just date with no time, strftime format

// Fullcalendar labels 
// (http://arshaw.com/fullcalendar/docs/utilities/formatDate/)
$labels['format_column_month'] = 'ddd'; 
$labels['format_column_week'] = 'ddd d'; 
$labels['format_column_day'] = 'ddd d \'de\' MMMM'; 

$labels['format_title_month'] = 'MMMM yyyy';
$labels['format_title_week'] = "d[ MMM][ yyyy]{ '&#8212;'d MMM yyyy}";
$labels['format_title_day'] = 'dddd d \'de\' MMMM \'de\' yyyy';

$labels['username'] = 'Nombre de usuario';
$labels['password'] = 'Contraseña';
$labels['months_long'] = array('enero', 'febrero', 'marzo', 'abril',
		'mayo', 'junio', 'julio', 'agosto', 'septiembre', 'octubre',
		'noviembre', 'diciembre');
$labels['months_short'] = array('ene', 'feb', 'mar', 'abr', 'may', 'jun',
		'jul', 'ago', 'sep', 'oct', 'nov', 'dic');
$labels['daynames_long'] = array('domingo', 'lunes', 'martes', 'miércoles',
		'jueves', 'viernes', 'sábado');
$labels['daynames_short'] = array('dom', 'lun', 'mar', 'mié', 'jue', 'vie',
		'sáb');

$labels['today'] = 'Hoy';
$labels['month'] = 'mes';
$labels['week'] = 'semana';
$labels['day'] = 'día';
$labels['allday'] = 'día completo';
$labels['choose_date'] = 'Elegir una fecha';

$labels['calendar'] = 'Calendario';
$labels['location'] = 'Lugar';
$labels['description'] = 'Descripción';

$labels['displayname'] = 'Nombre';
$labels['internalname'] = 'Nombre interno';
$labels['optional'] = '(opcional)';
$labels['color'] = 'Color';

$labels['summary'] = 'Título';
$labels['startdate'] = 'Fecha de inicio';
$labels['enddate'] = 'Fecha de fin';
$labels['starttime'] = 'Hora de inicio';
$labels['endtime'] = 'Hora de finalización';
$labels['alldayform'] = 'Día completo';

$labels['repetitionexceptions'] = 'Excepciones a eventos repetitivos';

$labels['repeat'] = 'Repetir';
$labels['repeatno'] = 'Sin repeticiones';
$labels['repeatdaily'] = 'Cada día';
$labels['repeatweekly'] = 'Cada semana';
$labels['repeatmonthly'] = 'Cada mes';
$labels['repeatyearly'] = 'Cada año';

$labels['repeatcount'] = 'Número de repeticiones';
$labels['repeatuntil'] = 'Hasta';

$labels['explntimes'] = '%n veces';
$labels['expluntil'] = 'hasta la fecha %d';

$labels['privacy'] = 'Privacidad';
$labels['public'] = 'Público';
$labels['private'] = 'Privado';
$labels['confidential'] = 'Confidencial';

$labels['transp'] = 'Consideración de tiempo';
$labels['opaque'] = 'Ocupado';
$labels['transparent'] = 'Libre';

$labels['generaloptions'] = 'General';
$labels['repeatoptions'] = 'Repetición';
$labels['workgroupoptions'] = 'Trabajo en grupo';
$labels['shareoptions'] = 'Compartir';

$labels['newcalendar'] = 'Nuevo calendario';
$labels['modifycalendar'] = 'Modificar calendar';

$labels['createevent'] = 'Crear evento';
$labels['editevent'] = 'Editar evento';
$labels['deleteevent'] = 'Borrar evento';
$labels['deletecalendar'] = 'Borrar calendario';
$labels['calendars'] = 'Calendarios';
$labels['refresh'] = 'Refrescar';
$labels['delete'] = 'Borrar';
$labels['close'] = 'Cerrar';
$labels['save'] = 'Guardar';
$labels['create'] = 'Crear';
$labels['login'] = 'Acceder';
$labels['modify'] = 'Modificar';
$labels['cancel'] = 'Cancelar';
$labels['next'] = 'siguiente';
$labels['previous'] = 'anterior';
$labels['yes'] = 'Sí';

$labels['untitled'] = 'Sin título';

$labels['sharewith'] = 'Compartir con';
$labels['publicurl'] = 'URL para clientes de escritorio';

// Messages
$messages['error_auth'] = 'Nombre de usuario o contraseña inválidos';
$messages['error_invaliddate'] = 'Fecha inválida en el campo %s';
$messages['error_invalidtime'] = 'Hora inválida en el campo %s';
$messages['error_denied'] = 'El servidor rechazó la petición (acceso no permitido)';
$messages['error_notimplemented'] = 'La siguiente característica no está aún implementada: %feature';
$messages['error_startgreaterend'] = 'La fecha de fin debe ser igual o posterior a la fecha de inicio';
$messages['error_bogusrepeatrule'] = 'Error, compruebe los parámetros de repetición';
$messages['error_internalgen'] = 'Error interno de generación de calendario';
$messages['error_internalcalnameinuse'] = 'El nombre interno ya está en uso';

$messages['info_confirmcaldelete'] = '¿Está seguro de querer borrar el siguiente calendario?';
$messages['info_confirmeventdelete'] = '¿Está seguro de querer borrar el siguiente evento?';
$messages['info_permanentremoval'] = 'La información se perderá con carácter
permanente';
$messages['info_repetitivedeleteall'] = 'Todas las repeticiones de este evento se borrarán';
$messages['info_sharedby'] = 'Tiene acceso a este calendario porque %user lo comparte con usted';
$messages['info_shareexplanation'] = 'Puede compartir este calendario con
otros usuarios para que ellos también puedan modificarlo. Separe con
espacios o comas los nombres de los usuarios. ';
$messages['error_sessexpired'] = 'Su sesión ha caducado';
$messages['error_loginagain'] = 'Por favor, autentíquese de nuevo';

$messages['error_modfailed'] = 'La modificación falló';
$messages['error_loadevents'] = 'Error cargando los eventos del calendario %cal';
$messages['error_sessrefresh'] = 'Error refrescando su sesión';
$messages['error_internal'] = 'Error interno';
$messages['error_genform'] = 'Error generando el formulario';
$messages['error_invalidinput'] = 'El valor no se aceptó';
$messages['error_caldelete'] = 'Error borrando calendario';

$messages['overlay_synchronizing'] = 'Sincronizando eventos...';
$messages['overlay_loading_dialog'] = 'Cargando ventana...';
$messages['overlay_sending_form'] = 'Enviando formulario...';
$messages['overlay_loading_calendar_list'] = 'Cargando lista de calendarios...';
$messages['error_loading_dialog'] = 'Error cargando ventana';

$messages['error_oops'] = 'Ups. Ocurrió un error inesperado';
$messages['error_interfacefailure'] = 'Error de la interfaz web';
$messages['error_current_event_not_loaded'] = 'El evento actual no está cargado en la interfaz';

$messages['error_event_not_deleted'] = 'Error borrando el evento';
$messages['error_loading_calendar_list'] = 'Error cargando la lista de
calendarios';
$messages['notice_no_calendars'] = 'No tiene calendarios';
$messages['info_repetition_human'] = 'Este evento se repite %explanation';
$messages['info_repetition_unparseable'] = 'Este evento tiene reglas de
repetición asociadas que la aplicación no puede entender. Definición:';
$messages['error_calendarnotfound'] = 'Calendario inválido %calendar';
$messages['error_eventnotfound'] = 'Objeto no encontrado';
$messages['error_eventchanged'] = 'El objeto fue modificado mientras lo estaba editando. Por favor, recargue';
$messages['error_unknownhttpcode'] = 'Error desconocido, código HTTP %res';
$messages['error_internalcalnamemissing'] = 'Nombre interno no especificado';
$messages['error_calname_missing'] = 'Nombre del calendario no especificado';
$messages['error_calcolor_missing'] = 'Debe indicar un color';
$messages['error_mkcalendar'] = 'El servidor rechazó la petición de creación
del calendario. Por favor, revise los parámetros';
$messages['error_shareunknownusers'] = 'Alguno de los usuarios que indicó no
existen';
