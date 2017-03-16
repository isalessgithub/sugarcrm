<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');
/*
 * Your installation or use of this SugarCRM file is subject to the applicable
 * terms available at
 * http://support.sugarcrm.com/Resources/Master_Subscription_Agreements/.
 * If you do not agree to all of the applicable terms or do not have the
 * authority to bind the entity as an authorized representative, then do not
 * install or use this SugarCRM file.
 *
 * Copyright (C) SugarCRM Inc. All rights reserved.
 */
 
$mod_strings = array (
	'LBL_MODULE_NAME' => 'Calendário',
	'LBL_MODULE_NAME_SINGULAR' => 'Calendário',
	'LBL_MODULE_TITLE' => 'Calendário',
	'LNK_NEW_CALL' => 'Criar Nova Chamada',
	'LNK_NEW_MEETING' => 'Criar Nova Reunião',
	'LNK_NEW_APPOINTMENT' => 'Criar Novo Compromisso',
	'LNK_NEW_TASK' => 'Criar Nova Tarefa',
	'LNK_CALL_LIST' => 'Chamadas Telefónicas',
	'LNK_MEETING_LIST' => 'Reuniões',
	'LNK_TASK_LIST' => 'Tarefas',
	'LNK_VIEW_CALENDAR' => 'Hoje',
	'LNK_IMPORT_CALLS' => 'Importar Chamadas Telefónicas',
	'LNK_IMPORT_MEETINGS' => 'Importar Reuniões',
	'LNK_IMPORT_TASKS' => 'Importar Tarefas',
	'LBL_MONTH' => 'Mês',
	'LBL_DAY' => 'Dia',
	'LBL_YEAR' => 'Ano',
	'LBL_WEEK' => 'Semana',
	'LBL_PREVIOUS_MONTH' => 'Mês Anterior',
	'LBL_PREVIOUS_DAY' => 'Dia Anterior',
	'LBL_PREVIOUS_YEAR' => 'Ano Anterior',
	'LBL_PREVIOUS_WEEK' => 'Semana Anterior',
	'LBL_NEXT_MONTH' => 'Próximo Mês',
	'LBL_NEXT_DAY' => 'Próximo Dia',
	'LBL_NEXT_YEAR' => 'Próximo Ano',
	'LBL_NEXT_WEEK' => 'Na Próxima Semana',
	'LBL_AM' => 'AM',
	'LBL_PM' => 'PM',
	'LBL_SCHEDULED' => 'Agendada',
	'LBL_BUSY' => 'Ocupado',
	'LBL_CONFLICT' => 'Conflito',
	'LBL_USER_CALENDARS' => 'Calendários do Utilizador',
	'LBL_SHARED' => 'Partilhado',
	'LBL_PREVIOUS_SHARED' => 'Anterior',
	'LBL_NEXT_SHARED' => 'Próximo',
	'LBL_SHARED_CAL_TITLE' => 'Calendário Partilhado',
	'LBL_USERS' => 'Utilizador',
	'LBL_REFRESH' => 'Actualizar',
	'LBL_EDIT_USERLIST' => 'Lista de Utilizadores',
	'LBL_SELECT_USERS' => 'Selecione utilizadores para exibir o calendário',
	'LBL_FILTER_BY_TEAM' => 'Filtrar lista de utilizadores por equipa:',
	'LBL_ASSIGNED_TO_NAME' => 'Atribuído a',
	'LBL_DATE' => 'Data e Hora de Início',  
	'LBL_CREATE_MEETING' => 'Agendar Nova Reunião',
	'LBL_CREATE_CALL' => 'Registo de Chamada Telefónica',
	'LBL_HOURS_ABBREV' => 'h',
	'LBL_MINS_ABBREV' => 'm',


	'LBL_YES' => 'Sim',
	'LBL_NO' => 'Não',
	'LBL_SETTINGS' => 'Definições',
	'LBL_CREATE_NEW_RECORD' => 'Criar Atividade',
    'LBL_CREATE_NEW_CALL' => 'Criar Chamada',
    'LBL_CREATING_NEW_ACTIVITY' => 'Está a criar uma nova reunião. Quer <a href="javascript:void(0);" data-action="create-task">Criar uma tarefa</a> ou <a href="javascript:void(0);" data-action="schedule-call">Agendar uma chamada</a>',
	'LBL_LOADING' => 'A carregar ...',
	'LBL_SAVING' => 'A Gravar...',
	'LBL_SENDING_INVITES' => 'A Enviar Convites .....',
	'LBL_CONFIRM_REMOVE' => 'Tem a certeza que quer remover o registo?',
	'LBL_CONFIRM_REMOVE_ALL_RECURRING' => 'Tem a certeza que quer remover todos os registos recorrentes?',
	'LBL_EDIT_RECORD' => 'Editar Atividade',
    'LBL_EDIT_CALL' => 'Editar Chamada',
	'LBL_ERROR_SAVING' => 'Erro ao gravar',
    'LBL_NO_ACCESS' => 'Você não tem acesso',
	'LBL_ERROR_LOADING' => 'Erro ao carregar',
	'LBL_GOTO_DATE' => 'Ir para Data',
	'NOTICE_DURATION_TIME' => 'Tempo de duração deve ser maior que 0',
	'LBL_STYLE_BASIC' => 'Básica',
	'LBL_STYLE_ADVANCED' => 'Avançada',

	'LBL_INFO_TITLE' => 'Detalhes Adicionais',
	'LBL_INFO_DESC' => 'Descrição',
	'LBL_INFO_START_DT' => 'Data e Tempo de Início',
	'LBL_INFO_DUE_DT' => 'Data e Tempo de Fim',
	'LBL_INFO_DURATION' => 'Duração',
	'LBL_INFO_NAME' => 'Assunto',
	'LBL_INFO_RELATED_TO' => 'Relacionado a',

	'LBL_NO_USER' => 'Não há correspondências para o campo: Atribuído a',
	'LBL_SUBJECT' => 'Assunto',
	'LBL_DURATION' => 'Duração',
	'LBL_STATUS' => 'Estado',
	'LBL_DATE_TIME' => 'Data e Hora',


	'LBL_SETTINGS_TITLE' => 'Definições',
	'LBL_SETTINGS_DISPLAY_TIMESLOTS' => 'Mostrar faixas de tempo nas vistas de Dia e Semana:',
	'LBL_SETTINGS_TIME_STARTS'=>'Hora de Início:', 
	'LBL_SETTINGS_TIME_ENDS'=>'Hora de Fim:', 
	'LBL_SETTINGS_CALLS_SHOW' => 'Mostrar Chamadas:',
	'LBL_SETTINGS_TASKS_SHOW' => 'Mostrar Tarefas:', 

	'LBL_SAVE_BUTTON' => 'Gravar',
	'LBL_DELETE_BUTTON' => 'Eliminar',
	'LBL_APPLY_BUTTON' => 'Aplica',
	'LBL_SEND_INVITES' => 'Enviar convites',
	'LBL_CANCEL_BUTTON' => 'Cancelar',
	'LBL_CLOSE_BUTTON' => 'Fechar',

	'LBL_GENERAL_TAB' => 'Detalhes',
	'LBL_PARTICIPANTS_TAB' => 'Convidados',
	'LBL_REPEAT_TAB' => 'Repetir',	
	
	'LBL_REPEAT_TYPE' => 'Repetir',
	'LBL_REPEAT_INTERVAL' => 'Intervalo',
	'LBL_REPEAT_END' => 'Fim',	
	'LBL_REPEAT_END_AFTER' => 'Depois',
	'LBL_REPEAT_OCCURRENCES' => 'ocorrências',
	'LBL_REPEAT_END_BY' => 'Por',	
	'LBL_REPEAT_DOW' => 'Em',	
	'LBL_REPEAT_UNTIL' => 'Repetir Até',
	'LBL_REPEAT_COUNT' => 'Número de Ocorrências',
	'LBL_RECURRING_LIMIT_ERROR' => 'Este(a) $moduleTitle não pode ser agendado(a) porque excede o limite $limit máximo permitido de ocorrências.',
	
	'LBL_EDIT_ALL_RECURRENCES' => 'Editar Todas as Recorrências',
	'LBL_REMOVE_ALL_RECURRENCES' => 'Remover Todas as Recorrências',

	'LBL_DATE_END_ERROR' => 'A data de fim é anterior à data de início',
	'ERR_YEAR_BETWEEN' => 'Pedimos desculpa, o calendário não consegue utilizar o ano pedido<br>O ano terá que ser entre 1970 e 2037',
	'ERR_NEIGHBOR_DATE' => 'get_neighbor_date_str: não definido para esta visualização',

    'LBL_CALENDAR_EVENT_LIMIT_EXCEEDED' => "A contagem do evento {0} recorrente excedeu o limite",
    'LBL_CALENDAR_EVENT_NOT_A_RECURRING_EVENT' => "{0} não é um evento recorrente",
    'LBL_CALENDAR_EVENT_NOT_A_PARENT_OCCURRENCE' => "{0} não é uma recorrência pai",
    'LBL_CALENDAR_EVENT_RECURRENCE_MODULE_NOT_SUPPORTED' => "{0} não é um modulo de evento recorrente conhecido",

);

$mod_list_strings = array(
	'dom_cal_weekdays'=>
		array(
			"Sun",
			"Mon",
			"Tue",
			"Wed",
			"Thu",
			"Fri",
			"Sat",
		),
	'dom_cal_weekdays_long'=>
		array(
			"Sunday",
			"Monday",
			"Tuesday",
			"Wednesday",
			"Thursday",
			"Friday",
			"Saturday",
		),
	'dom_cal_month'=>
		array(
			"",
			"Jan",
			"Feb",
			"Mar",
			"Apr",
			"May",
			"Jun",
			"Jul",
			"Aug",
			"Sep",
			"Oct",
			"Nov",
			"Dec",
		),
	'dom_cal_month_long'=>
		array(
			"",
			"January",
			"February",
			"March",
			"April",
			"May",
			"June",
			"July",
			"August",
			"September",
			"October",
			"November",
			"December",
		),
);
