<?php
if(!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');


/*********************************************************************************
 * By installing or using this file, you are confirming on behalf of the entity
 * subscribed to the SugarCRM Inc. product ("Company") that Company is bound by
 * the SugarCRM Inc. Master Subscription Agreement (“MSA”), which is viewable at:
 * http://www.sugarcrm.com/master-subscription-agreement
 *
 * If Company is not bound by the MSA, then by installing or using this file
 * you are agreeing unconditionally that Company will be bound by the MSA and
 * certifying that you have authority to bind Company accordingly.
 *
 * Copyright (C) 2004-2013 SugarCRM Inc.  All rights reserved.
 ********************************************************************************/

	

$mod_strings = array (
  'CHART_COUNT_PATTERN' => '{count} {module} onde {group_label} é {group_text}',
  'CHART_MINMAX_PATTERN' => '{count} {module} {numerical_function} {numerical_label} é {numerical_value}{thousands} onde {group_label} é {group_text}',
  'CHART_SUMAVG_PATTERN' => '{count} {module} {numerical_function} {numerical_label} de {currency_symbol}{numerical_value}{thousands} onde {group_label} é {group_text}',
  'DEFAULT_REPORT_TITLE_1' => 'Previsão Atual do Trimestre',
  'DEFAULT_REPORT_TITLE_10' => 'Novos Casos Por Mês',
  'DEFAULT_REPORT_TITLE_11' => 'Pipeline Por Tipo Por Equipe',
  'DEFAULT_REPORT_TITLE_12' => 'Pipeline Por Tipo Por Usuário',
  'DEFAULT_REPORT_TITLE_13' => 'Tarefas Por Equipe Por Usuário',
  'DEFAULT_REPORT_TITLE_14' => 'Chamadas Por Equipe Por Usuário',
  'DEFAULT_REPORT_TITLE_15' => 'Reuniões Por Equipe Por Usuário',
  'DEFAULT_REPORT_TITLE_16' => 'Contas Por Tipo Por Indústria',
  'DEFAULT_REPORT_TITLE_17' => 'Oportunidades Ganhas Por Origem de Potencial',
  'DEFAULT_REPORT_TITLE_18' => 'Potenciais Clientes Por Origem de Lead',
  'DEFAULT_REPORT_TITLE_19' => 'Minhas Métricas de Utilização (Hoje)',
  'DEFAULT_REPORT_TITLE_2' => 'Previsão Detalhada',
  'DEFAULT_REPORT_TITLE_20' => 'Minhas Métricas de Utilização (Últimos 7 Dias)',
  'DEFAULT_REPORT_TITLE_21' => 'Minhas Métricas de Utilização (Últimos 30 Dias)',
  'DEFAULT_REPORT_TITLE_22' => 'Minha Utilização de Módulo (Hoje)',
  'DEFAULT_REPORT_TITLE_23' => 'Minha Utilização de Módulo (Últimos 7 Dias)',
  'DEFAULT_REPORT_TITLE_24' => 'Minha Utilização de Módulo (Últimos 30 Dias)',
  'DEFAULT_REPORT_TITLE_25' => 'Métricas de Utilização dos Usuários (Últimos 7 Dias)',
  'DEFAULT_REPORT_TITLE_26' => 'Métricas de Utilização dos Usuários (Últimos 30 Dias)',
  'DEFAULT_REPORT_TITLE_27' => 'Módulos Utilizados Pelos Meus Relatórios Directos (Últimos 30 Dias)',
  'DEFAULT_REPORT_TITLE_28' => 'Queries Lentas',
  'DEFAULT_REPORT_TITLE_29' => 'Os Meus registros Modificados (Últimos 7 Dias)',
  'DEFAULT_REPORT_TITLE_3' => 'Lista de Contas Parceiras',
  'DEFAULT_REPORT_TITLE_31' => 'Os Meus registros Modificados Recentemente (Últimos 30 Dias)',
  'DEFAULT_REPORT_TITLE_32' => 'registros Modificados Pelos Meus Relatórios Directos (Últimos 30 Dias)',
  'DEFAULT_REPORT_TITLE_33' => 'Utilização de Modelo',
  'DEFAULT_REPORT_TITLE_34' => 'Máximo de Sessões Por Dia (Últimos 7 Dias)',
  'DEFAULT_REPORT_TITLE_35' => 'Pedido Por Dia (Últimos 7 Dias)',
  'DEFAULT_REPORT_TITLE_36' => 'Logins Por Dia (Últimos 7 Dias)',
  'DEFAULT_REPORT_TITLE_37' => 'Queries Por Dia (Últimos 7 Dias)',
  'DEFAULT_REPORT_TITLE_38' => 'Ficheiros Por Dia (Últimos 7 Dias)',
  'DEFAULT_REPORT_TITLE_39' => 'Usuários Por Dia (Últimos 7 Dias)',
  'DEFAULT_REPORT_TITLE_4' => 'Lista de Contas Clientes',
  'DEFAULT_REPORT_TITLE_40' => 'Utilização de Memória Por Dia (Últimos 7 Dias)',
  'DEFAULT_REPORT_TITLE_41' => 'Sessões de Usuário Activas (Últimos 7 Dias)',
  'DEFAULT_REPORT_TITLE_42' => 'Sumário de Sessões de Usuário (Últimos 7 Dias)',
  'DEFAULT_REPORT_TITLE_43' => 'Donos de Contas',
  'DEFAULT_REPORT_TITLE_44' => 'As minhas novas Contas',
  'DEFAULT_REPORT_TITLE_45' => 'Oportunidades por Estágio de Vendas',
  'DEFAULT_REPORT_TITLE_46' => 'Oportunidades por Tipo',
  'DEFAULT_REPORT_TITLE_47' => 'ligações em aberto',
  'DEFAULT_REPORT_TITLE_48' => 'Reuniões em aberto',
  'DEFAULT_REPORT_TITLE_49' => 'Tarefas em aberto',
  'DEFAULT_REPORT_TITLE_5' => 'Lista de ligações por Data do Último Contato',
  'DEFAULT_REPORT_TITLE_50' => 'Oportunidades ganhas por Conta',
  'DEFAULT_REPORT_TITLE_51' => 'Oportunidades ganhas por Usuário',
  'DEFAULT_REPORT_TITLE_52' => 'Oportunidades em Aberto',
  'DEFAULT_REPORT_TITLE_53' => 'Oportunidades Fechadas',
  'DEFAULT_REPORT_TITLE_6' => 'Oportunidades por Origem de Potencial',
  'DEFAULT_REPORT_TITLE_7' => 'Casos Abertos Por Usuário Por Estado',
  'DEFAULT_REPORT_TITLE_8' => 'Casos Abertos Por Mês Por Usuário',
  'DEFAULT_REPORT_TITLE_9' => 'Casos Abertos Por Prioridade Por Usuário',
  'DROPDOWN_SCHEDULE_INTERVALS' => 
  array (
    3600 => 'De Hora a Hora',
    21600 => 'De 6 em 6 Horas',
    43200 => 'De 12 em 12 Horas',
    86400 => 'Diariamente',
    604800 => 'Semanalmente',
    1209600 => 'De 2 em 2 Semanas',
    2419200 => 'De 4 em 4 Semanas',
  ),
  'ERR_REPORT_INVALID' => 'definiCNao do relatório "{0}" contém campos inválidos {1}',
  'ERR_REPORT_INVALID_SUBJECT' => 'Relatório inválido',
  'ERR_SELECT_COLUMN' => 'Por favor selecione primeiro uma coluna para exibir',
  'LBL_1X2' => '1 X 2',
  'LBL_1_REPORT_ON' => '1. Relatório Sobre',
  'LBL_2X1' => '2 X 1',
  'LBL_2_FILTER' => '2. Filtrar',
  'LBL_3_CHOOSE' => '3. Escolher Colunas de Exibição',
  'LBL_3_GROUP' => '3. Grupo',
  'LBL_4_CHOOSE' => '4. Escolher Colunas de Exibição',
  'LBL_5_CHART_OPTIONS' => '5. Opções Gráficas',
  'LBL_ACCOUNT' => 'Conta',
  'LBL_ACCOUNTS' => 'Contas',
  'LBL_ACCOUNT_REPORTS' => 'Relatórios de Contas',
  'LBL_ACTIVITIES_REPORTS' => 'Relatórios de Atividades',
  'LBL_ADDED_FAVORITES' => 'relatório(s) adicionados aos Meus Relatórios Favoritos.',
  'LBL_ADD_BTN_HELP' => 'Clique para adicionar um novo Grupo de Filtro. Utilize grupos para aplicar a lógica E/OU a conjuntos de filtros.',
  'LBL_ADD_COLUMN' => 'Adicionar coluna',
  'LBL_ADD_FILTER_TO' => 'Adicionar Filtro A',
  'LBL_ADD_GROUP' => 'Adicionar Grupo de Filtros',
  'LBL_ADD_NEW_FILTER' => 'Adicionar um novo Filtro',
  'LBL_ADD_RELATE' => 'Adicionar Relacionado',
  'LBL_ADVANCED_FILTERS' => 'Filtros Avançados',
  'LBL_AFTER' => 'Depois',
  'LBL_ALERT_CANT_ADD' => 'Não pode adicionar um módulo relacionado antes de ter selecionado uma tabela que possa relacionar. selecione um módulo no dropdown à esquerda do botão \\"Adicionar Relacionado\\" que clicou.',
  'LBL_ALL' => 'Pelo menos',
  'LBL_ALL_PUBLISHED_REPORTS' => 'Todos os Relatórios Publicados',
  'LBL_ALL_REPORTS' => 'Ver Relatórios',
  'LBL_ALT_INFORMATION' => 'Informação',
  'LBL_ALT_SHOW' => 'Mostrar',
  'LBL_AND' => 'e',
  'LBL_ANY' => 'Qualquer',
  'LBL_ANY_ONE_OF' => 'Qualquer Um',
  'LBL_ASCENDING' => 'Ascendente',
  'LBL_ASSIGNED_TO_NAME' => 'Atribuído A:',
  'LBL_AT_LEAST_ONE_DISPLAY_COLUMN' => 'selecione pelo menos uma coluna de exibição.',
  'LBL_AT_LEAST_ONE_SUMMARY_COLUMN' => 'Pelo menos uma coluna de sumários',
  'LBL_AVAILABLE_FIELDS' => 'Campos Disponíveis',
  'LBL_AVG' => 'Média',
  'LBL_BASIC_FILTERS' => 'Filtros Básicos',
  'LBL_BEFORE' => 'Antes',
  'LBL_BUG_REPORTS' => 'Relatórios de Bugs',
  'LBL_BY_DAY' => 'Por Dia',
  'LBL_BY_MONTH' => 'Por Mês',
  'LBL_BY_QUARTER' => 'Por Trimestre',
  'LBL_BY_YEAR' => 'Por Ano',
  'LBL_CALL_LIST_BY_LAST_DATE_CONTACTED' => 'Lista de ligações por data do último Contato',
  'LBL_CALL_REPORTS' => 'Relatórios de ligações',
  'LBL_CANCEL' => 'Cancelar',
  'LBL_CANNOT_BE_EMPTY' => 'não pode estar vazio.',
  'LBL_CASE_REPORTS' => 'Relatórios de Ocorrências',
  'LBL_CHANGE' => 'Alterar',
  'LBL_CHART_DATA_HELP' => 'selecione o Sumário a ser exibido no gráfico',
  'LBL_CHART_DESCRIPTION' => 'Descrição do Gráfico',
  'LBL_CHART_OPTIONS' => 'Opções de Gráfico',
  'LBL_CHART_TYPE' => 'Tipo de Gráfico',
  'LBL_CHOOSE_COLUMNS' => 'Escolha as colunas a exibir',
  'LBL_CHOOSE_DISPLAY_COLS' => 'Escolher Colunas de Exibição',
  'LBL_CHOOSE_SUMMARIES' => 'Escolha os sumários a exibir',
  'LBL_CLEAR' => 'Limpar',
  'LBL_COLUMN_NAME' => 'Nome de Coluna',
  'LBL_COMBO_TYPE_AHEAD' => 'Pesquisar por Nome de Campo',
  'LBL_CONTACT' => 'Contato',
  'LBL_CONTACTS' => 'Contatos',
  'LBL_CONTACT_REPORTS' => 'Relatórios de Contatos',
  'LBL_CONTAINS' => 'Contém',
  'LBL_CONTENT' => 'Conteúdo',
  'LBL_CONTRACT_REPORTS' => 'Relatórios de Contratos',
  'LBL_COUNT' => 'Contador',
  'LBL_CREATE_CUSTOM_REPORT' => 'Novo Relatório Personalizado',
  'LBL_CREATE_REPORT' => 'Novo Relatório',
  'LBL_CSV_TIMESTAMP' => 'A_m_d_H_i_s',
  'LBL_CURRENT_QUARTER_COMMITTED_DEALS' => 'Negócios Registados do Trimestre Atual',
  'LBL_CURRENT_QUARTER_FORECAST' => 'Previsão Atual do Trimestre',
  'LBL_CURRENT_USER' => 'Usuário Atual',
  'LBL_CUSTOMER_ACCOUNT_LIST' => 'Lista de Contas Clientes',
  'LBL_DATE' => 'Data de Início',
  'LBL_DATE_BASED_FILTERS' => 'Os Filtros de Datas são relativos à Zona Horária do Usuário atribuído ao Relatório',
  'LBL_DAY' => 'Dia',
  'LBL_DCE_LICENSING_REPORT' => 'Relatório de Licenciamento',
  'LBL_DEFINE_FILTERS' => 'Definir Filtros',
  'LBL_DELETE' => 'eliminar',
  'LBL_DELETED_FIELD_IN_REPORT1' => 'O seguinte campo deste relatório não é mais válido:',
  'LBL_DELETED_FIELD_IN_REPORT2' => 'Por favor Edite o relatório e certifique-se que os outros parâmetros ainda são relevantes.',
  'LBL_DELETE_ERROR' => 'Apenas os proprietários dos relatórios ou Administradores podem eliminar relatórios.',
  'LBL_DEL_THIS' => 'Remover',
  'LBL_DESCENDING' => 'Descendente',
  'LBL_DETAILED_FORECAST' => 'Previsão Detalhada',
  'LBL_DISPLAY_COLS_HELP_DESC' => '<b>Etapas para Escolher Colunas de Exibição:</b><br/><br/>1) Clique num Módulo no painel <b>Módulos Relacionados</b> que pretende utilizar para exibir dados no seu relatório. Por defeito, o módulo primário (nó do topo na vista de árvore) que escolhe durante o passo &#39;selecionar Módulo&#39; é selecionado.<br/><br/> Você pode selecionar campos de um módulo relacionado (nó descendente na vista de árvore) clicando no módulo. Módulos correspondentes aos módulos relacionados com o módulo primário também podem ser selecionados. O módulo que selecionar determina os campos reportáveis a aparecerem no painel <b>Campos Disponíveis</b>.<br/><br/> 2) Clique num Campo no painel <b>Campos Disponíveis</b> para exibir os dados de campo nos registros no seu relatório. Você pode também procurar o campo, digitando-o na caixa de texto no painel.<br/><br/> Após selecionar um número qualquer de campos a partir do módulo selecionado no painel <b>Módulos Relacionados</b>, você pode escolher um módulo diferente a partir do qual pode selecionar campos adicionais. Pode selecionar um número qualquer de campos, mas o relatório é gerado mais lentamente e torna-se cada vez menos legível quando adiciona mais campos que os necessários ao relatório.<br/> <br/> Você pode alterar a ordem dos campos, arrastando-os e soltando-os para a posição desejada. Alterar a ordem dos campos modifica a ordem pela qual as colunas são exibidas nos resultados.',
  'LBL_DISPLAY_COLUMNS' => 'Exibir Colunas',
  'LBL_DISPLAY_SUMMARIES' => 'Exibir sumários',
  'LBL_DISPLAY_SUMMARY_HELP_DESC' => '<b>Etapas para Escolher Sumários de Exibição:</b><br/><br/>1) Clique num Módulo no painel <b>Módulos Relacionados</b> que pretende utilizar para os sumários no seu relatório. Por defeito, o módulo primário (nó do topo na vista de árvore) é selecionado.<br/><br/> Você pode selecionar um módulo relacionado (nó descendente na vista de árvore) clicando no módulo. Expanda o nó para visualizar módulos adicionais correspondentes com o módulo relacionado. O módulo que seleciona determina que campos reportáveis aparecem no painel <b>Campos Disponíveis</b>.<br/><br/> 2) Clique num Campo no painel <b>Campos Disponíveis</b> para selecionar sumários para o seu relatório.<br/><br/>Para Relatórios Matriz, pode selecionar mais do que um campo para exibir valores múltiplos numa célula singular no seu relatório.',
  'LBL_DOES_NOT_CONTAIN' => 'Não Contém',
  'LBL_DOES_NOT_EQUAL' => 'Diferente de',
  'LBL_DOWN' => 'Para baixo',
  'LBL_DO_ROUND' => 'Arredondar Números Acima de 100000',
  'LBL_DO_ROUND_HELP' => 'Números acima de 100000 serão arredondados nos gráficos.<br>Exemplo: 350000 será abreviado para 350K.',
  'LBL_DUPLICATE_AS_MATRIX' => 'Como Matriz',
  'LBL_DUPLICATE_AS_ORIGINAL' => 'Como Tipo Original',
  'LBL_DUPLICATE_AS_ROWS_AND_COLS' => 'Como Linhas e Colunas',
  'LBL_DUPLICATE_AS_SUMMATION_DETAILS' => 'Como Totais com Detalhes',
  'LBL_DUPLICATE_AS_SUMMATON' => 'Como Totais',
  'LBL_EDIT' => 'Editar',
  'LBL_EDITLAYOUT' => 'Editar Layout',
  'LBL_EMAIL_REPORTS' => 'Relatórios de E-mail',
  'LBL_ENDS_WITH' => 'Termina com',
  'LBL_END_DATE' => 'Data de Fim',
  'LBL_EQUALS' => 'Igual a',
  'LBL_EXACT' => 'Exacto',
  'LBL_EXPORT' => 'Exportar',
  'LBL_FAILURE_REPORT' => 'FALHOU: Relatório',
  'LBL_FAVORITE' => 'Favorito',
  'LBL_FAVORITES_TITLE' => 'Relatórios: Os Meus Relatórios Favoritos',
  'LBL_FAVORITE_REPORTS' => 'Os Meus Relatórios Favoritos',
  'LBL_FAVORITE_REPORTS_TITLE' => 'Relatórios',
  'LBL_FIELDS_PANEL_HELP_DESC' => 'Todos os campos reportáveis do módulo selecionado em <B>Módulos Relacionados</B> aparecem aqui. selecione um campo.',
  'LBL_FIELD_NAME' => 'Nome de Campo',
  'LBL_FILTER' => 'Filtro',
  'LBL_FILTERS' => 'Filtros',
  'LBL_FILTERS_END' => 'dos seguintes filtros.',
  'LBL_FILTERS_HELP_DESC' => '<b>Etapas para Definir Filtros</b><br/><br/>1) Clique no Módulo no painel <b>Módulos Relacionados</b> que pretende utilizar para definir filtros. Por defeito, o módulo primário (nó do topo na vista de árvore) é selecionado. <br/><br/>Você pode selecionar um módulo relacionado (nó descendente na vista de árvore) clicando no módulo. Expandir para visualizar módulos adicionais relacionados com o módulo correspondente. O módulo que você selecionar determina quais os campos reportáveis a aparecer no painel <b>Campos Disponíveis</b><br/><br/>2) Clique num Campo no painel <b>Campos Disponíveis</b> para adicioná-lo aos filtros. Você pode também procurar o campo, digitando-o na caixa de texto no painel.<br/><br/> Após selecionar um número qualquer de campos a partir do módulo selecionado no painel <b>Módulos Relacionados</b>, você pode escolher um módulo diferente a partir do qual pode selecionar quaisquer campos a serem utilizados como filtros.<br/><br/> 3) Escolha <b>E</b> ou <b>OU</b> para designar se todos ou alguns filtros, respectivamente, são utilizados para procurar respostas para o relatório.<br/><br/> 4) [Opcional] Clique em <b>Adicionar Grupo de Filtro</b> para criar grupos de filtros. Você pode ter um número qualquer de grupos de filtros e de filtros dentro dos grupos para criar filtros encapsulados. <br/> <br/> 5) [Opcional] selecione a opção Run-time para um Filtro para permitir aos Usuários usarem-no para personalizar ainda mais os resultados dos relatórios enquanto visualizam o relatório.',
  'LBL_FILTER_AND' => 'TODOS',
  'LBL_FILTER_CONDITIONS' => 'selecione registros que satisfaçam',
  'LBL_FILTER_DATE_RANGE_FINISH' => 'Para',
  'LBL_FILTER_DATE_RANGE_START' => 'De',
  'LBL_FILTER_OR' => 'ALGUM',
  'LBL_FORECAST_REPORTS' => 'Relatórios de Previsão',
  'LBL_FUNNEL' => 'Funil',
  'LBL_GRAND_TOTAL' => 'Total Geral',
  'LBL_GREATER_THAN' => 'Maior que',
  'LBL_GROUP_BY' => 'Agrupar por',
  'LBL_GROUP_BY_HELP_DESC' => '<b>Etapas para Definir Por Grupo:</b><br/><br/>1) Clique num Módulo no painel <b>Módulos Relacionados</b> que pretende utilizar para agrupar registros no seu relatório. Por defeito, o módulo primário (nó do topo na vista de árvore) é selecionado. <br/><br/> Você pode selecionar um módulo relacionado (nó descendente na vista de árvore) clicando no módulo. Expanda o nó para visualizar módulos adicionais relacionados com o módulo correspondente. O módulo que você selecionar determina quais os campos reportáveis a aparecer no painel <b>Campos Disponíveis</b>.<br/><br/> 2) Clique num Campo no painel <b>Campos Disponíveis</b> para agrupar registros por campo no seu relatório. Você pode também procurar o campo, digitando-o na caixa de texto no painel.<br/><br/> Após selecionar um número qualquer de campos a partir do módulo selecionado no painel <b>Módulos Relacionados</b>, você pode escolher um módulo diferente a partir do qual pode selecionar quaisquer campos a serem utilizados para agrupar registros. Contudo, o relatório torna-se cada vez menos legível quando o agrupa por vários campos.<br/> <br/> Você pode alterar a ordem dos campos, arrastando-os e soltando-os para a posição desejada. Alterar a ordem afeta a maneira como os resultados são exibidos.<br/><br/> Para Relatórios Matriz, pode utilizar um máximo de três campos para agrupar registros.',
  'LBL_GROUP_BY_REQUIRED' => 'Um Relatório de Sumários com uma coluna de Agrupamento e uma coluna Sumária é necessário para construir o Gráfico',
  'LBL_HELLO' => 'Olá',
  'LBL_HELP' => 'Ajuda',
  'LBL_HIDE_COLUMNS' => 'Esconder Colunas',
  'LBL_HIDE_SUMMARIES' => 'Esconder sumários',
  'LBL_HORIZ_BAR' => 'Barras Horizontais',
  'LBL_IS' => 'É',
  'LBL_IS_BETWEEN' => 'Entre',
  'LBL_IS_EMPTY' => 'Está Vazio',
  'LBL_IS_NOT' => 'Não é',
  'LBL_IS_NOT_EMPTY' => 'Não Está Vazio',
  'LBL_IS_NOT_ONE_OF' => 'Não é um de',
  'LBL_IS_PUBLISHED' => 'É Publicado',
  'LBL_LABEL' => 'Rótulo',
  'LBL_LAST_30_DAYS' => 'Os Últimos 30 Dias',
  'LBL_LAST_7_DAYS' => 'Últimos 7 Dias',
  'LBL_LAST_MONTH' => 'Mês Passado',
  'LBL_LAST_QUARTER' => 'Trimestre Passado',
  'LBL_LAST_WEEK' => 'Semana Passada',
  'LBL_LAST_YEAR' => 'Ano Passado',
  'LBL_LEAD' => 'Potencial',
  'LBL_LEADS' => 'Potenciais',
  'LBL_LEAD_REPORTS' => 'Relatórios de potenciais',
  'LBL_LEFT' => 'Esquerda',
  'LBL_LESS_THAN' => 'Menor que',
  'LBL_LINE' => 'Linha',
  'LBL_LIST_FORM_TITLE' => 'Relatórios',
  'LBL_LIST_PUBLISHED' => 'Publicada',
  'LBL_MATRIX_LAYOUT' => 'Opções de Layout:',
  'LBL_MATRIX_REPORT' => 'Relatório Matriz',
  'LBL_MATRIX_REPORT_DESC' => 'Criar um relatório de totais que que exiba resultados num formato de grelha e agrupados num máximo de três campos.',
  'LBL_MAX' => 'Máximo',
  'LBL_MAXIMUM_3_GROUP_BY' => 'Um Relatório Matriz não pode ter mais de 3 cláusulas por grupo.',
  'LBL_MEETING_REPORTS' => 'Relatórios de Reuniões',
  'LBL_MIN' => 'Mínimo',
  'LBL_MINIMUM_2_GROUP_BY' => 'Um Relatório Matriz tem de ter no mínimo 2 cláusulas por grupo.',
  'LBL_MISSING_FIELDS' => 'Campos em falta',
  'LBL_MISSING_INPUT_VALUE' => 'em falta a introdução de um valor.',
  'LBL_MISSING_SECOND_INPUT_VALUE' => 'Em falta a introdução de um segundo valor.',
  'LBL_MODULE' => 'Módulo',
  'LBL_MODULE_CHANGE_PROMPT' => 'Alterar o módulo selecionado pode resultar numa perda de filtros, colunas de exibição, etc. Pretende continuar?',
  'LBL_MODULE_NAME' => 'Relatórios',
  'LBL_MODULE_NAME_SAVED' => 'Nome do Módulo',
  'LBL_MODULE_TITLE' => 'Relatórios: Principal',
  'LBL_MODULE_VIEWER_TITLE' => 'Visualizador de Relatórios: Principal',
  'LBL_MONTH' => 'Mês',
  'LBL_MORE' => 'Mais',
  'LBL_MY_ACCOUNT_REPORTS' => 'Os Meus Relatórios de Contas',
  'LBL_MY_BUG_REPORTS' => 'Os Meus Relatórios de Bugs',
  'LBL_MY_CALL_REPORTS' => 'Os Meus Relatórios de ligações',
  'LBL_MY_CASE_REPORTS' => 'Os Meus Relatórios de Ocorrências',
  'LBL_MY_CONTACT_REPORTS' => 'Os Meus Relatórios de Contatos',
  'LBL_MY_CONTRACT_REPORTS' => 'Os Meus Relatórios de Contratos',
  'LBL_MY_EMAIL_REPORTS' => 'Os Meus Relatórios de Email',
  'LBL_MY_FORECAST_REPORTS' => 'Os Meus Relatórios de Previsões',
  'LBL_MY_LEAD_REPORTS' => 'Os Meus Relatórios de Leads',
  'LBL_MY_MEETING_REPORTS' => 'Os Meus Relatórios de Reuniões',
  'LBL_MY_OPPORTUNITY_REPORTS' => 'Os Meus Relatórios de Oportunidades',
  'LBL_MY_PROJECT_TASK_REPORTS' => 'Os Meus Relatórios de Tarefas de Projetos',
  'LBL_MY_PROSPECT_REPORTS' => 'Os Meus Relatórios de Targets',
  'LBL_MY_QUOTE_REPORTS' => 'Os Meus Relatórios de Cotações',
  'LBL_MY_REPORTS' => 'Os Meus Relatórios',
  'LBL_MY_SAVED_REPORTS' => 'Os Meus Relatórios Gravados',
  'LBL_MY_TASK_REPORTS' => 'Os Meus Relatórios de Tarefas',
  'LBL_MY_TEAMS_REPORTS' => 'Os Relatórios da Minha Equipe',
  'LBL_MY_TEAM_ACCOUNT_REPORTS' => 'Os Relatórios de Contas da Minha Equipe',
  'LBL_MY_TEAM_BUG_REPORTS' => 'Os Relatórios de Bugs da Minha Equipe',
  'LBL_MY_TEAM_CALL_REPORTS' => 'Os Relatórios de ligações da Minha Equipe',
  'LBL_MY_TEAM_CASE_REPORTS' => 'Os Relatórios de Ocorrências da Minha Equipe',
  'LBL_MY_TEAM_CONTACT_REPORTS' => 'Os Relatórios de Contatos da Minha Equipe',
  'LBL_MY_TEAM_CONTRACT_REPORTS' => 'Os Relatórios de Contratos da Minha Equipe',
  'LBL_MY_TEAM_EMAIL_REPORTS' => 'Os Relatórios de E-mail da Minha Equipe',
  'LBL_MY_TEAM_FORECAST_REPORTS' => 'Os Relatórios de Previsão da Minha Equipe',
  'LBL_MY_TEAM_LEAD_REPORTS' => 'Os Relatórios de Leads da Minha Equipe',
  'LBL_MY_TEAM_MEETING_REPORTS' => 'Os Relatórios de Reuniões da Minha Equipe',
  'LBL_MY_TEAM_OPPORTUNITY_REPORTS' => 'Os Relatórios de Oportunidades da Minha Equipe',
  'LBL_MY_TEAM_PROJECT_TASK_REPORTS' => 'Os Relatórios de Tarefas de Projeto da Minha Equipe',
  'LBL_MY_TEAM_PROSPECT_REPORTS' => 'Os Relatórios de Objetivos da Minha Equipe',
  'LBL_MY_TEAM_QUOTE_REPORTS' => 'Os Relatórios de Cotações da Minha Equipe',
  'LBL_MY_TEAM_TASK_REPORTS' => 'Os Relatórios de Tarefas da Minha Equipe',
  'LBL_NEXT' => 'Próximo >',
  'LBL_NEXT_30_DAYS' => 'Os Próximos 30 Dias',
  'LBL_NEXT_7_DAYS' => 'Próximos 7 Dias',
  'LBL_NEXT_MONTH' => 'Próximo Mês',
  'LBL_NEXT_QUARTER' => 'Próximo Trimestre',
  'LBL_NEXT_RUN' => 'Próximo E-mail',
  'LBL_NEXT_WEEK' => 'Próxima Semana',
  'LBL_NEXT_YEAR' => 'Próximo Ano',
  'LBL_NONE' => '-- nenhum --',
  'LBL_NONE_STRING' => 'Nenhum',
  'LBL_NOTHING_WAS_SELECTED' => 'nada foi selecionado.',
  'LBL_NOT_ON' => 'Não em',
  'LBL_NO_ACCESS' => 'Não pode acessar a este relatório devido a restrições de permissões.',
  'LBL_NO_CHART' => 'Não tem Gráfico',
  'LBL_NO_CHART_DRAWN_MESSAGE' => 'Gráfico não pode ser gerado devido à insuficiência de dados',
  'LBL_NO_FILTERS' => 'não tem filtros.',
  'LBL_NO_IMAGE' => 'Nenhuma Imagem',
  'LBL_NO_REPORTS' => 'Nenhuns resultados.',
  'LBL_OF' => 'de',
  'LBL_ON' => 'Em',
  'LBL_ONE_OF' => 'Um de',
  'LBL_OPPORTUNITIES' => 'Oportunidades',
  'LBL_OPPORTUNITIES_BY_LEAD_SOURCE' => 'Oportunidades por Origem do potencial',
  'LBL_OPPORTUNITY' => 'Oportunidade',
  'LBL_OPPORTUNITY_REPORTS' => 'Relatórios de Oportunidades',
  'LBL_OPTIONAL_HELP' => 'selecione esta caixa para exibir os registros de módulos principais mesmo que os registros de módulos relacionados não existam. Quando esta caixa não é selecionada, os registros de módulos principais irão exibir apenas quando houver um ou mais registros de módulos relacionados.',
  'LBL_OPTIONAL_MODULES' => 'Módulos Opcionais',
  'LBL_ORDER_BY' => 'Ordenar Por',
  'LBL_OUTER_JOIN_CHECKBOX' => 'Relações Opcionais',
  'LBL_OWNER' => 'Atribuído a:',
  'LBL_PARTNER_ACCOUNT_LIST' => 'Lista de Contas Parceiras',
  'LBL_PDF_TIMESTAMP' => 'A_m_d_H_i',
  'LBL_PIE' => 'Tarte',
  'LBL_PREVIEW_REPORT' => 'Prever',
  'LBL_PREVIOUS' => '< Anterior',
  'LBL_PROJECT_TASK_REPORTS' => 'Relatórios de Tarefas de Projetos',
  'LBL_PROSPECT_REPORTS' => 'Relatórios de Targets',
  'LBL_PUBLISH' => 'publicar',
  'LBL_PUBLISHED_ACCOUNT_REPORTS' => 'Relatórios de Contas Publicados',
  'LBL_PUBLISHED_BUG_REPORTS' => 'Relatórios de Bugs Publicados',
  'LBL_PUBLISHED_CALL_REPORTS' => 'Relatórios de ligações Publicados',
  'LBL_PUBLISHED_CASE_REPORTS' => 'Relatórios de Ocorrências Publicados',
  'LBL_PUBLISHED_CONTACT_REPORTS' => 'Relatórios de Contatos Publicados',
  'LBL_PUBLISHED_CONTRACT_REPORTS' => 'Os Relatórios de Contratos Publicados',
  'LBL_PUBLISHED_EMAIL_REPORTS' => 'Relatórios de E-mail Publicados',
  'LBL_PUBLISHED_FORECAST_REPORTS' => 'Relatórios de Previsões Publicados',
  'LBL_PUBLISHED_LEAD_REPORTS' => 'Relatórios de Leads Publicados',
  'LBL_PUBLISHED_MEETING_REPORTS' => 'Relatórios de Reuniões Publicados',
  'LBL_PUBLISHED_OPPORTUNITY_REPORTS' => 'Relatórios de Oportunidades Publicados',
  'LBL_PUBLISHED_PROJECT_TASK_REPORTS' => 'Relatórios de Tarefas de Projetos Publicados',
  'LBL_PUBLISHED_PROSPECT_REPORTS' => 'Relatórios de Objetivos Publicados',
  'LBL_PUBLISHED_QUOTE_REPORTS' => 'Relatórios de Cotações Publicados',
  'LBL_PUBLISHED_TASK_REPORTS' => 'Relatórios de Tarefas Publicados',
  'LBL_QUARTER' => 'Trimestre',
  'LBL_QUARTER_ABBREVIATION' => 'Q',
  'LBL_QUERY' => 'Query',
  'LBL_QUOTE_REPORTS' => 'Relatórios de Cotações',
  'LBL_RELATED' => 'Relacionado com:',
  'LBL_RELATED_MODULES' => 'Módulos Relacionados',
  'LBL_RELATED_MODULES_PANEL_HELP_DESC' => 'O módulo principal e todos os módulos relacionados aparecem aqui. selecione um módulo.',
  'LBL_RELATED_TABLE_BLANK' => 'Por favor selecione um módulo para relacionar.',
  'LBL_REMOVE' => 'Remover',
  'LBL_REMOVED_FAVORITES' => 'relatório(s) removidos dos Meus Relatórios Favoritos.',
  'LBL_REMOVE_BTN_HELP' => 'Clique para remover este Grupo de Filtro.',
  'LBL_REMOVE_GROUP' => 'Remover Grupo de Filtros',
  'LBL_REPORTS' => 'Relatórios',
  'LBL_REPORT_ATT_MODULES' => 'Módulos',
  'LBL_REPORT_ATT_NAME' => 'Nome',
  'LBL_REPORT_COLLAPSE_ALL' => 'Comprimir Tudo',
  'LBL_REPORT_DATA_COLUMN_ORDERS' => 'Este relatório contém dados pela seguinte ordem de colunas:',
  'LBL_REPORT_DETAILS' => 'Detalhes de Relatório',
  'LBL_REPORT_EXPAND_ALL' => 'Expandir Tudo',
  'LBL_REPORT_FILTER_MODIFIED_MESSAGE' => 'Filtros de relatório foram modificados desde a última execução.',
  'LBL_REPORT_GRAND_TOTAL' => 'Total Geral',
  'LBL_REPORT_GROUP_BY' => 'Grupo Por',
  'LBL_REPORT_HIDE_CHART' => 'Ocultar Gráfico',
  'LBL_REPORT_HIDE_DETAILS' => 'Ocultar Detalhes',
  'LBL_REPORT_LAST_RUN_DATE' => 'Acessado Em',
  'LBL_REPORT_MODIFIED_MESSAGE' => 'Relatório foi modificado desde a última execução.',
  'LBL_REPORT_MODULES' => 'Módulo de Relatórios',
  'LBL_REPORT_MODULE_VIEWER_TITLE' => 'Visualizador de Relatórios',
  'LBL_REPORT_NAME' => 'Nome do Relatório',
  'LBL_REPORT_RESET_FILTER' => 'Reiniciar',
  'LBL_REPORT_RESULTS' => 'Resultados',
  'LBL_REPORT_RESULTS_MESSAGE' => 'Clique em Executar Relatório para ver resultados',
  'LBL_REPORT_RUN_WITH_FILTER' => 'Aplicar Filtros',
  'LBL_REPORT_SCHEDULE_TITLE' => 'Agendamento',
  'LBL_REPORT_SHOW_CHART' => 'Mostrar Gráfico',
  'LBL_REPORT_SHOW_DETAILS' => 'Mostrar Detalhes',
  'LBL_REPORT_TYPE' => 'Tipo de Relatório',
  'LBL_REPORT__ATT_TYPE' => 'Tipo',
  'LBL_RIGHT' => 'Direita',
  'LBL_ROLLOVER' => 'Passe o mouse por cima da barra para obter mais detalhes.',
  'LBL_ROLLOVER_SQUARE' => 'Passe o mouse por cima de um quadrado para obter mais detalhes.',
  'LBL_ROLLOVER_WEDGE' => 'Passe o mouse por cima de uma extremidade para obter mais detalhes.',
  'LBL_ROWS_AND_COLUMNS_REPORT' => 'Relatório de Linhas e Colunas',
  'LBL_ROWS_AND_COLUMNS_REPORT_DESC' => 'Criar um relatório tabulado que contenha os valores de campos de exibição selecionados para os registros que preencham os critérios especificados.',
  'LBL_RUNTIME_FILTERS' => 'Filtros Runtime',
  'LBL_RUNTIME_HELP' => 'selecione esta caixa para permitir aos Usuários poderem modificar o valor de filtro antes de executarem o relatório.',
  'LBL_RUN_BUTTON_TITLE' => 'Executar Relatório [Alt+R]',
  'LBL_RUN_REPORT_BUTTON_KEY' => 'R',
  'LBL_RUN_REPORT_BUTTON_LABEL' => 'Executar Relatório',
  'LBL_RUN_TIME_LABEL' => 'Run-time',
  'LBL_SAVED_SEARCH' => 'Pesquisa Gravada & Layout',
  'LBL_SAVE_AS' => 'Gravar como',
  'LBL_SAVE_RUN' => 'Gravar e Executar',
  'LBL_SCHEDULED_REPORT_MSG_BODY1' => 'e gravado como nome &quot;',
  'LBL_SCHEDULED_REPORT_MSG_BODY2' => '". Se pretender alterar as definições do Relatório, autentique-se no SugarCRM e clique no Tabulador "Relatórios".',
  'LBL_SCHEDULED_REPORT_MSG_INTRO' => 'Anexado encontra-se um Relatório produzido automaticamente pelo SugarCRM. Este Relatório foi criado em',
  'LBL_SCHEDULE_ACTIVE' => 'Ativo',
  'LBL_SCHEDULE_EMAIL' => 'Novo Relatório',
  'LBL_SCHEDULE_REPORT' => 'Novo Relatório',
  'LBL_SCHEDULE_TYPE' => 'Tipo de agendamento',
  'LBL_SEARCH_FORM_TITLE' => 'Pesquisar Relatórios',
  'LBL_SELECT' => 'selecionar',
  'LBL_SELECT_GROUP_BY' => 'Definir Grupo Por',
  'LBL_SELECT_MODULE' => 'selecionar Módulo',
  'LBL_SELECT_MODULE_BUTTON' => 'Clique num ícone para selecionar um Módulo.',
  'LBL_SELECT_RECORD' => 'selecionar registro',
  'LBL_SELECT_REPORT_TYPE' => 'Clique num ícone para selecionar um Tipo de registro.',
  'LBL_SELECT_REPORT_TYPE_ICON' => 'selecionar Tipo de Relatório',
  'LBL_SHOW' => 'Exibir',
  'LBL_SHOW_DETAILS' => 'Mostrar Detalhes',
  'LBL_SHOW_QUERY' => 'Mostrar a Query',
  'LBL_SORT' => 'Ordenar',
  'LBL_STARTS_WITH' => 'Começa com',
  'LBL_START_DATE' => 'Data de Início',
  'LBL_STATUS' => 'Estado',
  'LBL_SUBJECT' => 'Assunto',
  'LBL_SUBMIT_QUERY' => 'Submeter Query',
  'LBL_SUCCESS_REPORT' => 'SUCESSO: Relatório',
  'LBL_SUM' => 'Somatório',
  'LBL_SUMMARY_COLUMNS' => 'Colunas de Sumário',
  'LBL_SUMMATION_REPORT' => 'Relatório de Totais',
  'LBL_SUMMATION_REPORT_DESC' => 'Criar um relatório tabulado que forneça dados computarizados para registros que preencham os critérios especificados. Os dados também podem ser representados num gráfico.',
  'LBL_SUMMATION_REPORT_WITH_DETAILS' => 'Relatório de Totais com Detalhes',
  'LBL_SUMMATION_REPORT_WITH_DETAILS_DESC' => 'Criar um relatório de totais que exiba dados adicionais relacionados com os registros nos resultados.',
  'LBL_SUMMATION_WITH_DETAILS' => 'Totais com Detalhes',
  'LBL_TABLE_CHANGED' => 'Lista de módulo foi modificada, por favor verifique novamente os critérios inseridos na etiqueta Grupo.',
  'LBL_TASK_REPORTS' => 'Relatórios de Tarefas',
  'LBL_TEAM' => 'Equipe',
  'LBL_THERE_ARE_NO_REPORTS_OF_THIS_TYPE' => 'Não existem Relatórios deste tipo.',
  'LBL_THIS_MONTH' => 'Este Mês',
  'LBL_THIS_QUARTER' => 'Este Trimestre',
  'LBL_THIS_WEEK' => 'Esta Semana',
  'LBL_THIS_YEAR' => 'Este Ano',
  'LBL_TIME_INTERVAL' => 'Intervalo',
  'LBL_TITLE' => 'Título',
  'LBL_TODAY' => 'Hoje',
  'LBL_TOMORROW' => 'Amanhã',
  'LBL_TOTAL' => 'Total',
  'LBL_TOTAL_IS' => 'O Total é',
  'LBL_TO_PDF' => 'Gravar como PDF',
  'LBL_TYPE' => 'Tipo',
  'LBL_UNTITLED' => 'sem título',
  'LBL_UN_PUBLISH' => 'despublicar',
  'LBL_UP' => 'Para cima',
  'LBL_UPDATE_SCHEDULE' => 'Atualizar a Agenda',
  'LBL_USER_EMPTY_HELP' => 'De forma a ver registros que não estão associados a nenhum Usuário, selecione a opção "Relações Opcionais" no passo "Detalhes do Relatório", e utilize a opção "Está Vazio" no filtro de Usuário atribuído. Esta configuração irá exibir os registros que não estão relacionados com nenhum Usuário.',
  'LBL_USE_COLUMN_FOR' => 'seleciona série de dados para os Gráficos',
  'LBL_VERT_BAR' => 'Barras Verticais',
  'LBL_VIEW' => 'visualizar',
  'LBL_VIEWER_RUNTIME_HELP' => 'Especificar valores para <b>Filtros Runtime</b> e clique no botão <b>Aplicar Filtros</b> para executar de novo o relatório',
  'LBL_WAS_NOT_SAVED' => 'não foi gravado',
  'LBL_WAS_SAVED' => 'foi gravado',
  'LBL_WEIGHTED_AVG_AMOUNT' => 'Valor Médio Ponderado',
  'LBL_WEIGHTED_SUM_AMOUNT' => 'Valor Somado Ponderado',
  'LBL_WHOSE_MAXIMUM' => 'cujo máximo',
  'LBL_WHOSE_MINIMUM' => 'cujo mínimo',
  'LBL_WITH_AN_AVERAGE' => 'com uma média',
  'LBL_WITH_A_TOTAL' => 'com um total',
  'LBL_WITH_DETAILS' => 'Com detalhes',
  'LBL_YEAR' => 'Ano',
  'LBL_YESTERDAY' => 'Ontem',
  'LBL_YOU_HAVE_NO_SAVED_REPORTS.' => 'Não tem relatórios gravados.',
  'LNK_NEW_ACCOUNT' => 'Nova Conta',
  'LNK_NEW_CALL' => 'Nova ligação',
  'LNK_NEW_CASE' => 'Nova Ocorrência',
  'LNK_NEW_CONTACT' => 'Novo Contato',
  'LNK_NEW_EMAIL' => 'Arquivar Email',
  'LNK_NEW_MEETING' => 'Nova Reunião',
  'LNK_NEW_NOTE' => 'Nova Nota ou Anexo',
  'LNK_NEW_OPPORTUNITY' => 'Nova Oportunidade',
  'LNK_NEW_TASK' => 'Nova Tarefa',
  'MSG_NO_PERMISSIONS' => 'Não tem permissões para editar este Relatório',
  'MSG_UNABLE_PUBLISH_ANOTHER' => 'Não é possível publicar. Já existe um outro Relatório publicado com o mesmo nome.',
  'MSG_UNABLE_PUBLISH_YOU_OWN' => 'Não é possível despublicar um Relatório que pertence a outro Usuário. Você tem um Relatório com o mesmo nome.',
);

