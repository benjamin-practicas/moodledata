<?php
// This file is part of Moodle - https://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.

/**
 * Strings for component 'plagiarism_compilatio', language 'es', version '3.10'.
 *
 * @package     plagiarism_compilatio
 * @category    string
 * @copyright   1999 Martin Dougiamas and contributors
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['account_expire_soon_title'] = 'Su suscripción a Compilatio.net expirará pronto';
$string['activate_compilatio'] = 'Activar el plugin Compilatio';
$string['admin_disabled_reports'] = 'El administrador no permite que los profesores muestren los informes de similitudes a los estudiantes.';
$string['admin_goto_helpcenter'] = 'Visite el centro de ayuda Compilatio para acceder a los artículos relativos a la administración del plugin en Moodle.';
$string['allow_teachers_to_show_reports'] = 'Autorizar a los profesores para poner los informes de análisis a disposición de los estudiantes.';
$string['analysing'] = 'Analizando documento';
$string['analysis_completed'] = 'Análisis terminado : {$a}% de similitudes.';
$string['analysis_date'] = 'Fecha de análisis (sólo lanzamiento programado)';
$string['analysis_started'] = '{$a} análisis solicitado(s).';
$string['analysis_type'] = 'Inicio de análisis';
$string['analysis_type_help'] = '<p>Tiene tres opciones :</p>
<ul>
<li><strong>Inmediato :</strong> El documento es enviado a Compilatio y está analizado inmediatamente.</li>
<li><strong>Manual :</strong> El documento es enviado a Compilatio, pero el profesor tiene que activar los análisis de los documentos manualmente.</li>
<li><strong>Programado :</strong> El documento es enviado a Compilatio y analizado en la hora/fecha elegida(s).</li></ul>
<p>Para que todos los documentos sean comparados entre ellos durante los análisis, activa los análisis sólo cuando todos los documentos estén enviados a la tarea.</p>';
$string['analysistype_manual'] = 'Manual';
$string['analysistype_prog'] = 'Programado';
$string['analyze'] = 'Analizar';
$string['analyzing'] = 'Analizando';
$string['api_key_not_tested'] = 'No se pudo verificar la clave API porque falló la conexión con el servicio Compilatio.net.';
$string['api_key_not_valid'] = 'La clave API registrada no es válida. Es propia a la plataforma utilizada. Se puede obtener una contactando con <a href=\'mailto:ent@compilatio.net\'>ent@compilatio.net</a>.';
$string['api_key_valid'] = 'La clave API registrada es válida.';
$string['assign_statistics'] = 'Estadísticas de la tareas';
$string['auto_diagnosis_title'] = 'Auto-diagnóstico';
$string['average'] = 'Media';
$string['average_similarities'] = 'El grado de similitudes medio para esta tarea es de {$a}%.';
$string['compilatio'] = 'Plugin de detección de plagio Compilatio';
$string['compilatio:enable'] = 'Autorizar al profesor para activar/desactivar Compilatio en una actividad';
$string['compilatio:resetfile'] = 'Autorizar al profesor para enviar de nuevo el fichero a Compilatio después de un error';
$string['compilatio:triggeranalysis'] = 'Autorizar al profesor para activar el análisis manualmente';
$string['compilatio:viewreport'] = 'Autorizar al profesor para consultar el informe completo desde Compilatio';
$string['compilatio_display_student_report'] = 'Mostrar al estudiante el informe de análisis';
$string['compilatio_display_student_report_help'] = 'El informe de análisis de un documento presenta un desglose de las partes del envío que fueron detectadas como plagio y la localización de las fuentes detectadas.';
$string['compilatio_display_student_score'] = 'Hacer que el porcentaje de similitudes sea visible para los estudiantes';
$string['compilatio_display_student_score_help'] = 'El porcentaje de similitudes indica la cantidad de texto en el documento que se encontró en otros documentos.';
$string['compilatio_draft_submit'] = 'Cuando el fichero debe ser enviado a Compilatio';
$string['compilatio_help_assign'] = 'Obtener ayuda sobre el plugin Compilatio';
$string['compilatio_studentemail'] = 'Enviar un e-mail al estudiante';
$string['compilatio_studentemail_help'] = 'Se enviará un e-mail al alumno cuando un fichero ha sido tratado para informarle de que el informe está disponible.';
$string['compilatioapi'] = 'Dirección de la API Compilatio';
$string['compilatioapi_help'] = 'Se trata de la dirección de la API Compilatio';
$string['compilatiodefaults'] = 'Valores predeterminados para Compilatio';
$string['compilatioenableplugin'] = 'Activar Compilatio para {$a}';
$string['compilatioexplain'] = 'Para obtener información adicional sobre este plugin vea: <a href="http://compilatio.net" target="_blank">compilatio.net</a>';
$string['compilatiopassword'] = 'Clave API';
$string['compilatiopassword_help'] = 'Código personal provisto por Compilatio para acceder a la API';
$string['context'] = 'Contexto';
$string['cron_check'] = 'CRON se ejecutó por última vez el {$a}.';
$string['cron_check_never_called'] = 'CRON no ha sido ejecutado desde la activación del plugin. Puede que esté mal configurado.';
$string['cron_check_not_ok'] = 'No ha sido ejecutado en la última hora.';
$string['cron_frequency'] = 'Parece que se ejecuta cada {$a} minutos.';
$string['cron_recommandation'] = 'Recomendamos utilizar un plazo inferior a 15 minutos entre cada ejecución de CRON.';
$string['defaults_desc'] = 'Los parámetros siguientes son utilizados como valores por defecto en las actividades de Moodle que integran Compilatio.';
$string['defaultupdated'] = 'Los valores predeterminados han sido actualizados';
$string['disclaimer_data'] = 'Con la activación de Compilatio, acepta que información relativa a la configuración de su plataforma Moodle sea recogida con el fin de facilitar el soporte y mantenimiento del servicio.';
$string['display_notifications'] = 'Mostrar las notificaciones';
$string['display_stats'] = 'Mostrar las estadísticas de esta tarea';
$string['documents_analyzed'] = '{$a->countAnalyzed} documento(s) de {$a->documentsCount} han sido analizados.';
$string['documents_analyzed_between_thresholds'] = '{$a->documentsBetweenThresholds} documento(s) entre {$a->greenThreshold}% y {$a->redThreshold}%.';
$string['documents_analyzed_higher_red'] = '{$a->documentsAboveRedThreshold} documento(s) superior(es) a {$a->redThreshold}%.';
$string['documents_analyzed_lower_green'] = '{$a->documentsUnderGreenThreshold} documento(s) inferior(es) a {$a->greenThreshold}%.';
$string['documents_analyzing'] = '{$a} documento(s) están siendo analizados.';
$string['documents_in_queue'] = '{$a} documento(s) en espera de ser analizados.';
$string['documents_number'] = 'Documentos analizados';
$string['enable_javascript'] = 'Por favor, active JavaScript para aprovechar todas las funcionalidades del plugin Compilatio. <br/> Aquí puede encontrar las<a href=\'http://www.enable-javascript.com/es/\' target=\'_blank\'> instrucciones para activar JavaScript en su navegador Web</a>.';
$string['enabledandworking'] = 'El plugin Compilatio está activado y funcionando.';
$string['error'] = 'Error';
$string['errors'] = 'Errores :';
$string['export_csv'] = 'Exportar los datos de esta tarea en formato CSV';
$string['export_global_csv'] = 'Haga clic aquí para exportar estos datos en formato CSV';
$string['export_raw_csv'] = 'Haga clic aquí para exportar los datos brutos en formato CSV';
$string['failedanalysis'] = 'Compilatio falló al analizar su documento:';
$string['filename'] = 'Nombre del fichero';
$string['filereset'] = 'Un fichero ha sido reiniciado para reenviarlo a Compilatio';
$string['firstname'] = 'Nombre';
$string['get_scores'] = 'Recupera los grados de similitudes de Compilatio.net';
$string['global_statistics'] = 'Estadísticas globales';
$string['goto_helpcenter'] = 'Haga clic en el signo de interrogación para abrir una nueva ventana y conectarse al centro de ayuda Compilatio.';
$string['green_threshold'] = 'Verde hasta';
$string['help_compilatio_format_content'] = 'Compilatio.net es compatible con la mayoría de los formatos utilizados en procesadores de texto y en Internet. Se aceptan los formatos siguientes :';
$string['hide_area'] = 'Ocultar las informaciones Compilatio';
$string['immediately'] = 'Inmediatamente';
$string['indexed_document'] = 'Documento indexado a la biblioteca de referencias';
$string['indexing_state'] = 'Añadir el documento a la biblioteca de referencias';
$string['indexing_state_help'] = 'El contenido de los documentos es indexado a la biblioteca de referencias. Sirve como base de comparación para los próximos análisis.';
$string['information_settings'] = 'Informaciones';
$string['lastname'] = 'Apellido';
$string['loading'] = 'Cargando, un momento por favor...';
$string['manual_analysis'] = 'El análisis de este documento debe ser activado manualmente.';
$string['manual_send_confirmation'] = '{$a} fichero(s) enviado(s) a Compilatio.';
$string['max_attempts_reach_files'] = 'El análisis de ha interrumpido para los siguientes ficheros. Se han enviado análisis demasiadas veces, no puede reiniciarlos más veces:';
$string['max_file_size_allowed'] = 'Tamaño máximo de los documentos : <strong>{$a->Mo} MB</strong>';
$string['maximum'] = 'Tasa máxima';
$string['minimum'] = 'Tasa mínima';
$string['news_analysis_perturbated'] = 'Compilatio.net - Análisis perturbado';
$string['news_incident'] = 'Incidente Compilatio.net';
$string['news_maintenance'] = 'Mantenimiento Compilatio.net';
$string['news_update'] = 'Actualización Compilatio.net';
$string['no_document_available_for_analysis'] = 'Ningún documento estaba disponible para el análisis.';
$string['no_documents_available'] = 'Ningún documento está disponible para analizar en esta tarea.';
$string['no_statistics_yet'] = 'No se ha analizado ningún documento todavía.';
$string['not_analyzed'] = 'Los documentos siguientes no pueden ser analizados :';
$string['not_analyzed_unextractable'] = '{$a} documento(s) no fue(ron) analizado(s) porque no contenían suficiente texto.';
$string['not_analyzed_unsupported'] = '{$a} documento(s) no fue(ron) analizado(s) porque su formato es incompatible.';
$string['not_indexed_document'] = 'El documento no está indexado en la biblioteca de referencias';
$string['numeric_threshold'] = 'El umbral tiene que ser numérico.';
$string['orange_threshold'] = 'Naranja hasta';
$string['owner_file'] = 'RGPD y propiedad de la tarea';
$string['owner_file_school'] = 'El centro es el propietario de las tareas';
$string['owner_file_school_details'] = 'En caso de solicitud de supresión de los datos personales de un alumno, el contenido de las tareas e informes se conservará y estará disponible para una futura comparación con nuevas tareas. Al vencimiento del contrato con Compilatio, todos los datos personales de su centro, incluidas las tareas, se suprimen en los plazos previstos contractualmente.';
$string['owner_file_student'] = 'El alumno es el único propietario de su tarea';
$string['owner_file_student_details'] = 'En caso de solicitud de supresión de los datos personales de un alumno, sus tareas e informes se suprimirán de la plataforma Moodle y de la biblioteca de referencias Compilatio. Las tareas dejarán de estar disponibles para una comparación con nuevos documentos.';
$string['pending'] = 'Fichero en espera de envío a Compilatio.';
$string['pending_status'] = 'Espera';
$string['planned'] = 'Planificado';
$string['plugin_disabled'] = 'El plugin no está activado en la plataforma Moodle.';
$string['plugin_disabled_assign'] = 'El plugin no está activado para tareas.';
$string['plugin_disabled_forum'] = 'El plugin no está activado para foros.';
$string['plugin_disabled_workshop'] = 'El plugin no está activado para talleres.';
$string['plugin_enabled'] = 'El plugin está activado en la plataforma Moodle.';
$string['plugin_enabled_assign'] = 'El plugin está habilitado para tareas.';
$string['plugin_enabled_forum'] = 'El plugin está habilitado para foros.';
$string['plugin_enabled_workshop'] = 'El plugin está habilitado para talleres.';
$string['pluginname'] = 'Plugin de detección de plagio Compilatio';
$string['previouslysubmitted'] = 'Enviado anteriormente como';
$string['privacy:metadata:core_files'] = 'Archivos almacenados o creados desde un campo de entrada de datos';
$string['privacy:metadata:core_plagiarism'] = 'Este plugin es operado por el subsistema de detección de plagio de Moodle';
$string['privacy:metadata:external_compilatio_document'] = 'Información en cuanto a documentos en la base de datos de Compilatio';
$string['privacy:metadata:external_compilatio_document:email_adress'] = 'Dirección de correo electrónico del usuario Compilatio que ha enviado el archivo - atención: este usuario es aquel que está vinculado con la clave API Compilatio en la plataforma Moodle (generalmente es el administrador de la plataforma)';
$string['privacy:metadata:external_compilatio_document:filename'] = 'El nombre del envío';
$string['privacy:metadata:external_compilatio_document:firstname'] = 'Nombre de pila del usuario Compilatio que ha enviado el archivo - atención: este usuario es aquel que está vinculado con la clave API Compilatio en la plataforma Moodle (generalmente es el administrador de la plataforma)';
$string['privacy:metadata:external_compilatio_document:id'] = 'El identificador del envío en la base de datos de Compilatio';
$string['privacy:metadata:external_compilatio_document:indexed'] = 'El estado de indexación del envío (si se utiliza como documento de referencia durante los análisis)';
$string['privacy:metadata:external_compilatio_document:lastname'] = 'Apellido del usuario Compilatio que ha enviado el archivo - atención: este usuario es aquel que está vinculado con la clave API Compilatio en la plataforma Moodle (generalmente es el administrador de la plataforma)';
$string['privacy:metadata:external_compilatio_document:upload_date'] = 'La hora a la que el archivo se guardó en la base de datos Compilatio';
$string['privacy:metadata:external_compilatio_document:user_id'] = 'El identificador del usuario Compilatio que ha enviado el archivo - atención: este usuario es aquel que está vinculado con la clave API Compilatio en la plataforma Moodle (generalmente es el administrador de la plataforma)';
$string['privacy:metadata:external_compilatio_report'] = 'Información en cuanto al informe de análisis en la base de datos de Compilatio (únicamente si el documento ha sido analizado)';
$string['privacy:metadata:external_compilatio_report:doc_id'] = 'El identificador Compilatio del documento que ha sido analizado';
$string['privacy:metadata:external_compilatio_report:end'] = 'La fecha del final del análisis';
$string['privacy:metadata:external_compilatio_report:id'] = 'El identificador Compilatio del informe de análisis';
$string['privacy:metadata:external_compilatio_report:plagiarism_percent'] = 'El porcentaje de similitudes encontradas para este envío';
$string['privacy:metadata:external_compilatio_report:start'] = 'La fecha de inicio del análisis';
$string['privacy:metadata:external_compilatio_report:state'] = 'El estado de análisis del envío (Analizado, En espera, Tiempo sobrepasado…)';
$string['privacy:metadata:external_compilatio_report:user_id'] = 'El identificador del usuario Compilatio que ha enviado el archivo - atención: este usuario es aquel que está vinculado con la clave API Compilatio en la plataforma Moodle (generalmente es el administrador de la plataforma)';
$string['privacy:metadata:plagiarism_compilatio_files'] = 'Información en cuanto a los archivos enviados a Compilatio en la base de datos del plugin';
$string['privacy:metadata:plagiarism_compilatio_files:attempt'] = 'El número de veces que un usuario intentó iniciar el análisis de un envío';
$string['privacy:metadata:plagiarism_compilatio_files:cm'] = 'El identificador del módulo del curso donde se encuentra el envío';
$string['privacy:metadata:plagiarism_compilatio_files:errorresponse'] = 'La respuesta en caso de que hubiese un error - realmente este campo ya no se utiliza y aparece automáticamente como «NULL»';
$string['privacy:metadata:plagiarism_compilatio_files:externalid'] = 'El identificador del envío en la base de datos de Compilatio';
$string['privacy:metadata:plagiarism_compilatio_files:filename'] = 'El nombre (posiblemente autogenerado) del envío';
$string['privacy:metadata:plagiarism_compilatio_files:id'] = 'El identificador del envío en la base de datos de Moodle';
$string['privacy:metadata:plagiarism_compilatio_files:identifier'] = 'La contenthash del envío';
$string['privacy:metadata:plagiarism_compilatio_files:reporturl'] = 'La dirección URL del informe de análisis';
$string['privacy:metadata:plagiarism_compilatio_files:similarityscore'] = 'El porcentaje de similitudes encontradas para este envío';
$string['privacy:metadata:plagiarism_compilatio_files:statuscode'] = 'El estado de análisis del envío (Analizado, En espera, Tiempo sobrepasado…)';
$string['privacy:metadata:plagiarism_compilatio_files:timesubmitted'] = 'La hora a la que el archivo se guardó en la base de datos Moodle del plugin';
$string['privacy:metadata:plagiarism_compilatio_files:userid'] = 'El identificador del usuario de Moodle que ha realizado el envío';
$string['processing_doc'] = 'Compilatio está analizando este fichero.';
$string['programmed_analysis_future'] = 'Compilatio analizará los documentos el {$a}.';
$string['programmed_analysis_past'] = 'Los documentos se han enviado para su análisis a Compilatio en {$a}.';
$string['progress'] = 'Progreso :';
$string['queue'] = 'Cola';
$string['queued'] = 'El documento está ahora en la cola y pronto será analizado por Compilatio';
$string['red_threshold'] = 'de lo contrario rojo';
$string['report'] = 'informe';
$string['reset'] = 'Reiniciar';
$string['restart_failed_analysis'] = 'Reiniciar los análisis interrumpidos';
$string['restart_failed_analysis_title'] = 'Reiniciar los análisis interrumpidos :';
$string['results'] = 'Resultados :';
$string['saved_config_failed'] = '<strong>La combinación dirección - clave API es incorrecta. El plugin está desactivado, por favor inténtelo de nuevo.<br/> La página de <a href="autodiagnosis.php">auto-diagnóstico</a> le puede ayudar a configurar este plugin.';
$string['savedconfigsuccess'] = 'Parámetros de detección de plagio guardados';
$string['send_files'] = 'Sube los ficheros a Compilatio.net para detectar plagio';
$string['showwhenclosed'] = 'Cuando la actividad esté cerrada';
$string['similarities'] = 'Similitudes';
$string['similarities_disclaimer'] = 'Puedes analizar las similitudes en los documentos de esta tarea con <a href=\'http://www.compilatio.net/en/\' target=\'_blank\'>Compilatio</a>.<br/> Ten cuidado: las similitudes encontradas durante el análisis no implican necesariamente plagio. El informe de análisis te ayuda a identificar si las similitudes son citas apropiadas o plagio.';
$string['similarity_percent'] = '% de similitudes';
$string['start_analysis_title'] = 'Inicio de análisis';
$string['startallcompilatioanalysis'] = 'Analizar todos los documentos';
$string['startanalysis'] = 'Empezar análisis';
$string['statistics_title'] = 'Estadísticas';
$string['studentdisclosuredefault'] = 'Todos los ficheros subidos aquí serán enviados al servicio de detección de plagio Compilatio';
$string['studentemailcontent'] = 'El fichero entregado a {$a->modulename} en {$a->coursename} ha sido tratado por la herramienta de detección de plagio Compilatio {$a->modulelink}';
$string['studentemailsubject'] = 'Fichero tratado por Compilatio';
$string['students_disclosure'] = 'Mensaje de prevención para los estudiantes';
$string['students_disclosure_help'] = 'Este texto será visible para todos los estudiantes en la página de carga de ficheros.';
$string['submitondraft'] = 'Enviar un fichero cuando se suba por primera vez';
$string['submitonfinal'] = 'Enviar un fichero cuando un estudiante lo envía para calificar';
$string['subscription_state'] = '<strong>Su suscripción a Compilatio.net expirará al final de {$a->end_date}. Este mes, ha analizado el equivalente a {$a->used} documento(s) de menos de 5000 palabras.</strong>';
$string['tabs_title_help'] = 'Ayuda';
$string['tabs_title_notifications'] = 'Notificaciones';
$string['tabs_title_stats'] = 'Estadísticas';
$string['teacher'] = 'Profesor';
$string['thresholds_description'] = 'Indique los umbrales que desea utilizar, para facilitar la localización de los informes de análisis (% de similitudes) :';
$string['thresholds_settings'] = 'Límites :';
$string['timesubmitted'] = 'Enviado a Compilatio el';
$string['toolarge'] = 'El fichero es demasiado grande para ser tratado por Compilatio. Tamaño máximo : {$a->Mo} MB';
$string['trigger_timed_analyses'] = 'Ejecutar los análisis de detección de plagio programados';
$string['unextractable'] = 'No se pudo extraer el contenido de este documento';
$string['unextractable_files'] = 'Compilatio no pudo analizar el(los) fichero(s) siguiente(s). No contenían bastantes palabras o no se pudo extraer su contenido correctamente :';
$string['unextractablefile'] = 'Su documento no tiene bastantes palabras o no se pudo extraer el texto correctamente.';
$string['unknownlang'] = 'Atención, el idioma de algunos pasajes de este documento no fue reconocido.';
$string['unknownwarning'] = 'Un error ocurrió durante el envío del fichero a Compilatio.';
$string['unsent_documents'] = 'Documento(s) no enviado(s)';
$string['unsent_documents_content'] = 'Esta tarea contiene documento(s) no enviado(s) a Compilatio.';
$string['unsupported'] = 'Documento incompatible';
$string['unsupported_files'] = 'Compilatio no pudo analizar el(los) fichero(s) siguiente(s) porque su formato es incompatible :';
$string['unsupportedfiletype'] = 'Este tipo de fichero no es compatible con Compilatio.';
$string['update_in_progress'] = 'Actualización de la información';
$string['update_meta'] = 'Realiza las tareas programadas de Compilatio.net';
$string['updatecompilatioresults'] = 'Actualizar las informaciones';
$string['updated_analysis'] = 'Los resultados del análisis Compilatio han sido actualizados.';
$string['use_compilatio'] = 'Permitir la detección de similitudes con Compilatio';
$string['webservice_not_ok'] = 'El servidor no pudo conectar con el servicio web. Puede que su cortafuegos esté bloqueando la conexión.';
$string['webservice_ok'] = 'El servidor puede conectar con el servicio web.';
$string['webservice_unreachable_content'] = 'El servicio Compilatio.net no está disponible actualmente. Le pedimos disculpas por las molestias ocasionadas.';
$string['webservice_unreachable_title'] = 'Compilatio.net no está disponible.';
