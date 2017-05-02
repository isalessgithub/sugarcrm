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
/*********************************************************************************

 * Description:  TODO: To be written.
 * Portions created by SugarCRM are Copyright (C) SugarCRM, Inc.
 * All Rights Reserved.
 * Contributor(s): ______________________________________..
 ********************************************************************************/

$mod_strings = array(

	'LBL_ASSIGN_TEAM'		=> 'Atribuir a Equipas',

	'LBL_RE'					=> 'RE:',

	'ERR_BAD_LOGIN_PASSWORD'=> 'Login ou Palavra-passe Incorrecta',
	'ERR_BODY_TOO_LONG'		=> 'texto \rBody muito longo para capturar e-mail COMPLETO. Ajustado.',
	'ERR_INI_ZLIB'			=> 'Não é possível desativar a compressão Zlib temporariamente. "Definições de Teste" podem falhar.',
	'ERR_MAILBOX_FAIL'		=> 'Não foi possível recuperar nenhumas contas de e-mail.',
	'ERR_NO_IMAP'			=> 'Nenhuma biblioteca IMAP encontrada. Por favor resolva isto antes de prosseguir com o E-mail Recebido',
	'ERR_NO_OPTS_SAVED'		=> 'Nenhuns Óptimos foram gravados na sua Caixa de Entrada de E-mail. Por favor verifique as definições',
	'ERR_TEST_MAILBOX'		=> 'Por favor verifique as suas definições e tente novamente.',
    'ERR_DELETE_FOLDER' => 'Não foi possível eliminar a pasta.',
    'ERR_UNSUBSCRIBE_FROM_FOLDER' => 'Não foi possível cancelar a subscrição da pasta antes de apagar.',

	'LBL_APPLY_OPTIMUMS'	=> 'Apply Optimums',
	'LBL_ASSIGN_TO_USER'	=> 'Atribuir ao Utilizador',
	'LBL_AUTOREPLY_OPTIONS'	=> 'Opções de Auto-Respostas',
	'LBL_AUTOREPLY'			=> 'Modelo de Auto-Resposta',
	'LBL_AUTOREPLY_HELP'	=> 'Selecione uma resposta automática para notificar os remetentes de e-mail que sua resposta foi recebida.',
	'LBL_BASIC'				=> 'Configuração Básica',
	'LBL_CASE_MACRO'		=> 'Macro Ocorrência',
	'LBL_CASE_MACRO_DESC'	=> 'Ajustar a macro que será dividida e utilizada para ligar e-mails importados a uma Ocorrência.',
	'LBL_CASE_MACRO_DESC2'	=> 'Ajuste isto para qualquer valor, mas preserve o "%<b>1</b>".',
	'LBL_CERT_DESC'			=> 'Forçar validação do Certificado de Segurança do mail server - não use se for auto-assinado.',
	'LBL_CERT'				=> 'Validar Certificado',
	'LBL_CLOSE_POPUP'		=> 'Fechar Janela',
	'LBL_CREATE_NEW_GROUP'	=> '--Criar Grupo ao Gravar--',
	'LBL_CREATE_TEMPLATE'	=> 'Criar',
	'LBL_SUBSCRIBE_FOLDERS'	=> 'Subscrever Pastas',
	'LBL_DEFAULT_FROM_ADDR'	=> 'Padrão:',
	'LBL_DEFAULT_FROM_NAME'	=> 'Padrão:',
	'LBL_DELETE_SEEN'		=> 'Eliminar E-mails Lidos Após Importação',
	'LBL_EDIT_TEMPLATE'		=> 'Editar',
	'LBL_EMAIL_OPTIONS'		=> 'Opções de Manuseamento de E-mail',
	'LBL_EMAIL_BOUNCE_OPTIONS' => 'Opções de Gestão de Mensagens Devolvidas',
	'LBL_FILTER_DOMAIN_DESC'=> 'Não envie respostas automáticas para este domínio.',
	'LBL_ASSIGN_TO_GROUP_FOLDER_DESC'=> 'Atribuir uma conta de e-mail a uma pasta de grupo permite a importação automática dos e-mails.',
	'LBL_POSSIBLE_ACTION_DESC'		=> 'Para a opção Criar Ocorrência, uma Pasta de Grupo deve ser selecionada',
	'LBL_FILTER_DOMAIN'		=> 'Não há resposta automática para o domínio.',
	'LBL_FIND_OPTIMUM_KEY'	=> 'f',
	'LBL_FIND_OPTIMUM_MSG'	=> '<br>A procurar as variáveis ideais da conexão.',
	'LBL_FIND_OPTIMUM_TITLE'=> 'Procurar a Configuração Ideal',
	'LBL_FIND_SSL_WARN'		=> '<br> Testar o SSL pode demorar. Por favor, aguarde.<br>',
	'LBL_FORCE_DESC'		=> 'Alguns servidores IMAP e POP3 exigem switches especiais. Tenta forçar o switch negativo para conectar (ou seja, /notls)',
	'LBL_FORCE'				=> 'Forçar Negativo',
	'LBL_FOUND_MAILBOXES'	=> 'Foram encontradas as seguintes pastas utilizáveis.<br>Clique numa para efetuar a escolha:',
	'LBL_FOUND_OPTIMUM_MSG'	=> '<br>Foram encontradas as definições ideais. Prima o botão abaixo para aplicá-las à sua conta de correio.',
	'LBL_FROM_ADDR'			=> 'Endereço "De"',
    // as long as XTemplate doesn't support output escaping, transform
    // quotes to html-entities right here (bug #48913)
    'LBL_FROM_ADDR_DESC'    => "O endereço de e-mail fornecido aqui pode não aparecer no campo &quot;De&quot; da secção de endereço do e-mail enviado devido a restrições impostas pelo prestador do serviço de correio. Nestas circunstâncias, o endereço de e-mail definido no servidor de correio de saída será o utilizado.",
	'LBL_FROM_NAME_ADDR'	=> 'Responder Nome/E-mail:',
	'LBL_FROM_NAME'			=> 'Nome "De"',
	'LBL_GROUP_QUEUE'		=> 'Atribuir ao Grupo',
    'LBL_HOME'              => 'Principal',
	'LBL_LIST_MAILBOX_TYPE'	=> 'Uso da Conta de Correio',
	'LBL_LIST_NAME'			=> 'Nome:',
	'LBL_LIST_GLOBAL_PERSONAL'			=> 'Grupo/Pessoal',
	'LBL_LIST_SERVER_URL'	=> 'Servidor de Correio:',
	'LBL_LIST_STATUS'		=> 'Estado:',
	'LBL_LOGIN'				=> 'Utilizador para Login',
	'LBL_MAILBOX_DEFAULT'	=> 'CAIXA DE ENTRADA',
	'LBL_MAILBOX_SSL_DESC'	=> 'Usar SSL na conexão. Se isto não funcionar, verifique se sua instalação PHP incluiu"--with-imap-ssl" na configuração.',
	'LBL_MAILBOX_SSL'		=> 'Usar SSL',
	'LBL_MAILBOX_TYPE'		=> 'Ações Possíveis',
	'LBL_DISTRIBUTION_METHOD' => 'Método de Distribuição',
	'LBL_CREATE_CASE_REPLY_TEMPLATE' => 'Modelo de Resposta Automática à Nova Ocorrência',
	'LBL_CREATE_CASE_REPLY_TEMPLATE_HELP' => 'Selecione uma resposta automática para notificar os remetentes de e-mail que uma ocorrência foi criada. O e-mail contém o número da ocorrência na linha Assunto, conforme a definição da macro das Ocorrências. Esta resposta só é enviada quando o primeiro e-mail for recebido pelo destinatário.',
	'LBL_MAILBOX'			=> 'Pasta Monitorizada',
	'LBL_TRASH_FOLDER'		=> 'Pasta do Lixo',
	'LBL_GET_TRASH_FOLDER'	=> 'Obter Pasta do Lixo',
	'LBL_SENT_FOLDER'		=> 'Pasta Enviada',
	'LBL_GET_SENT_FOLDER'	=> 'Obter Pasta Enviada',
	'LBL_SELECT'				=> 'Selecionar',
	'LBL_MARK_READ_DESC'	=> 'Marcar mensagens como lidas no mail server ao importar; não eliminar.',
	'LBL_MARK_READ_NO'		=> 'E-mail marcado para eliminação após importação',
	'LBL_MARK_READ_YES'		=> 'E-mail deixado no servidor após importação',
	'LBL_MARK_READ'			=> 'Deixar Mensagens no Servidor',
	'LBL_MAX_AUTO_REPLIES'	=> 'Número de Respostas Automáticas',
	'LBL_MAX_AUTO_REPLIES_DESC'	=> 'Definir o número máximo de respostas automáticas a enviar para um único endereço de e-mail durante um período de 24 horas.',
	'LBL_PERSONAL_MODULE_NAME' => 'Conta de e-mail pessoal',
	'LBL_PERSONAL_MODULE_NAME_SINGULAR' => 'Conta de e-mail pessoal',
	'LBL_CREATE_CASE'      => 'Criar Ocorrência a partir de E-mail',
	'LBL_CREATE_CASE_HELP'  => 'Selecione para criar automaticamente registos de ocorrências no Sugar a partir de e-mails recebidos.',
	'LBL_MODULE_NAME'		=> 'Configuração do E-mail de Entrada',
	'LBL_MODULE_NAME_SINGULAR' => 'Conta de E-mail de Grupo',
	'LBL_BOUNCE_MODULE_NAME' => 'Caixa de Correio de Gestão de Mensagens Devolvidas',
	'LBL_MODULE_TITLE'		=> 'E-mail de Entrada',
	'LBL_NAME'				=> 'Nome',
    'LBL_NONE'              => 'Nenhum',
	'LBL_NO_OPTIMUMS'		=> 'Não encontrei os valores ideais. Verifique as definições e tente de novo.',
	'LBL_ONLY_SINCE_DESC'	=> 'Quando a utilizar POP3, o PHP não pode filtrar mensagens Novas/Não Lidas.  Esta opção permite verificar mensagens desde a última vez que a caixa de correio foi acedida.  Isto melhora significativamente a performance se o seu mail server não suporta IMAP.',
	'LBL_ONLY_SINCE_NO'		=> 'Não. Verificar todos os e-mails no servidor de mail.',
	'LBL_ONLY_SINCE_YES'	=> 'Sim.',
	'LBL_ONLY_SINCE'		=> 'Importar Apenas a Partir da Última Verificação:',
	'LBL_OUTBOUND_SERVER'	=> 'Servidor de E-mail de Saída',
	'LBL_PASSWORD_CHECK'	=> 'Confirmação de Palavra-passe',
	'LBL_PASSWORD'			=> 'Palavra-passe',
	'LBL_POP3_SUCCESS'		=> 'A conexão POP3 teve sucesso.',
	'LBL_POPUP_FAILURE'		=> 'Teste de conexão falhou. O erro encontra-se abaixo.',
	'LBL_POPUP_SUCCESS'		=> 'Teste de conexão com sucesso.  As suas definições estão a funcionar.',
	'LBL_POPUP_TITLE'		=> 'Testar Definições',
	'LBL_GETTING_FOLDERS_LIST' 		=> 'Obtendo Lista de Pastas',
	'LBL_SELECT_SUBSCRIBED_FOLDERS' 		=> 'Selecionar Pasta(s) Subscrita(s)',
	'LBL_SELECT_TRASH_FOLDERS' 		=> 'Selecionar Pasta do Lixo',
	'LBL_SELECT_SENT_FOLDERS' 		=> 'Selecionar Pasta Enviada',
	'LBL_DELETED_FOLDERS_LIST' 		=> 'A(s) seguinte(s) pasta(s) %s não existem ou foram eliminadas do servidor',
	'LBL_PORT'				=> 'Porta do Servidor de Correio',
	'LBL_QUEUE'				=> 'Fila da Conta de Correio',
	'LBL_REPLY_NAME_ADDR'	=> 'Nome/E-mail de Resposta',
	'LBL_REPLY_TO_NAME'		=> 'Nome de Resposta',
	'LBL_REPLY_TO_ADDR'		=> 'Endereço de Resposta',
	'LBL_SAME_AS_ABOVE'		=> 'Utilizando De Nome/Endereço',
	'LBL_SAVE_RAW'			=> 'Gravar Origem Não Tratada',
	'LBL_SAVE_RAW_DESC_1'	=> 'Selecione "Sim" se deseja preservar a origem não tratada para cada e-mail importado.',
	'LBL_SAVE_RAW_DESC_2'	=> 'Anexos volumosos podem causar falhas com bases de dados conservadoras ou incorrectamente configuradas.',
	'LBL_SERVER_OPTIONS'	=> 'Opções Avançadas do Mail Server',
	'LBL_SERVER_TYPE'		=> 'Protocolo do Mail Server',
	'LBL_SERVER_URL'		=> 'Endereço do Mail Server',
	'LBL_SSL_DESC'			=> 'Se o mail server suporta socket connections, esta opção forçará conexões SSL para importar e-mails.',
	'LBL_ASSIGN_TO_TEAM_DESC' => 'A equipa selecionada tem acesso à conta de correio.',
	'LBL_SSL'				=> 'Utilize SSL',
	'LBL_STATUS'			=> 'Estado',
	'LBL_SYSTEM_DEFAULT'	=> 'Padrão do Sistema',
	'LBL_TEST_BUTTON_KEY'	=> 't',
	'LBL_TEST_BUTTON_TITLE'	=> 'Testar [Alt+T]',
	'LBL_TEST_SETTINGS'		=> 'Testar Definições',
	'LBL_TEST_SUCCESSFUL'	=> 'Conexão finalizada com sucesso.',
	'LBL_TEST_WAIT_MESSAGE'	=> 'Um momento por favor...',
	'LBL_TLS_DESC'			=> 'Usar Transport Layer Security na conexão com mail server - use apenas esta opção se o seu mail server suportar este protocolo.',
	'LBL_TLS'				=> 'Usar TLS',
	'LBL_WARN_IMAP_TITLE'	=> 'E-mail de Entrada Desativado',
	'LBL_WARN_IMAP'			=> 'Avisos:',
	'LBL_WARN_NO_IMAP'		=> 'O E-mail de Entrada <b>não pode</b> funcionar sem as bibliotecas c-client do IMAP activadas/compiladas com o módulo PHP. Por favor contacte o seu administrador de sistema para resolver este problema.',

	'LNK_CREATE_GROUP'		=> 'Criar Novo Grupo',
	'LNK_LIST_CREATE_NEW_GROUP'	 => 'Nova conta de correio de grupo',
	'LNK_LIST_CREATE_NEW_BOUNCE' => 'Nova Conta de Gestão de Mensagens Devolvidas',
	'LNK_LIST_MAILBOXES'	=> 'Todas as Contas de Correio',
	'LNK_LIST_QUEUES'		=> 'Todas as Filas',
	'LNK_LIST_SCHEDULER'	=> 'Calendarizadores',
	'LNK_LIST_TEST_IMPORT'	=> 'Testar Importação de E-mail',
	'LNK_NEW_QUEUES'		=> 'Criar Nova Fila',
	'LNK_SEED_QUEUES'		=> 'Filas Seed das Equipas',
	'LBL_GROUPFOLDER_ID'	=> 'Id de Pasta de Grupo',
	'LBL_ASSIGN_TO_GROUP_FOLDER' => 'Atribuído a Pasta de Grupo',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE' => 'Permitir aos utilizadores enviar e-mails usando o `De` (nome e endereço) como o endereço para resposta',
    'LBL_ALLOW_OUTBOUND_GROUP_USAGE_DESC' => 'Quando esta opção for selecionada, o nome e endereço de e-mail de origem associados a esta conta de correio do grupo vão aparecer como uma opção para o campo `De` quando se escreve e-mails para utilizadores que têm acesso à conta de correio do grupo.',
    'LBL_STATUS_ACTIVE'     => 'Ativo',
    'LBL_STATUS_INACTIVE'   => 'Inativo',
    'LBL_IS_PERSONAL' => 'pessoal',
    'LBL_IS_GROUP' => 'grupo',
    'LBL_ENABLE_AUTO_IMPORT' => 'Importar e-mails automaticamente',
    'LBL_WARNING_CHANGING_AUTO_IMPORT' => 'Atenção: está a modificar a definição automática de importação, o que pode resultar em perda de dados.',
    'LBL_WARNING_CHANGING_AUTO_IMPORT_WITH_CREATE_CASE' => 'Atenção: a importação automática tem de estar ativada para a criação automática de ocorrências.',
	'LBL_EDIT_LAYOUT' => 'Editar Layout' /*for 508 compliance fix*/,
);
?>
