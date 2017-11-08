<?php
/**
*
* @package User Defaults Extension
* @copyright (c) 2016 david63
* * @license GNU General Public License, version 2 (GPL-2.0)
* Brazilian Portuguese translation by eunaumtenhoid (c) 2017 [ver 2.1.0-RC1] (https://github.com/phpBBTraducoes)
*/

/**
* DO NOT CHANGE
*/
if (!defined('IN_PHPBB'))
{
	exit;
}

if (empty($lang) || !is_array($lang))
{
	$lang = array();
}

// DEVELOPERS PLEASE NOTE
//
// All language files should use UTF-8 as their encoding and the files must not contain a BOM.
//
// Placeholders can now contain order information, e.g. instead of
// 'Page %s of %s' you can (and should) write 'Page %1$s of %2$s', this allows
// translators to re-order the output of data while ensuring it remains correct
//
// You do not need this where single placeholders are used, e.g. 'Message %d' is fine
// equally where a string contains only two placeholders which are used to wrap text
// in a url you again do not need to specify an order e.g., 'Click %sHERE%s' is fine
//
// Some characters you may want to copy&paste:
// ’ » “ ” …
//

$lang = array_merge($lang, array(
	'APPROVE_NOTIFICATION'		=> 'Tópicos/postagens aprovadas ou reprovadas por um moderador',

	'CREATE_SUBSCRIBED_TOPIC'	=> 'Criar um tópico em um fórum ao qual o usuário se inscreveu',

	'DATE_FORMAT'				=> 'Formato da data do usuário',
	'DEFAULT_ADD_SIG'			=> 'Anexe a assinatura do usuário',
	'DEFAULT_ALL_POSTS' 		=> '<Strong>Padrão = Todas as postagens</ strong>',
	'DEFAULT_ALL_TOPICS' 		=> '<Strong>Padrão = Todas os topicos</ strong>',
	'DEFAULT_ASC' 				=> '<strong>Padrão = Ascendente</strong>',
	'DEFAULT_BBCODE'			=> 'Ativar BBCode',
	'DEFAULT_DATE_FORMAT'		=> '<strong>Padrão = %s</strong>',
	'DEFAULT_DESC' 				=> '<strong>Padrão = descendente</strong>',
	'DEFAULT_EMAIL'				=> '<strong>Padrão = Email</strong>',
	'DEFAULT_NO'				=> '<strong>Padrão = Não</strong>',
	'DEFAULT_NOTIFICATION'		=> '<strong>Padrão = Notificação</strong>',
	'DEFAULT_POST_TIME' 		=> '<strong>Padrão = Hora da postagem</strong>',
	'DEFAULT_SMILIES'			=> 'Ativar smilies',
	'DEFAULT_YES'				=> '<strong>Padrão = Sim </strong>',
	'DISABLE_CENSORS'			=> 'Ativar Censura de palavras',
	'DISPLAY_SETTINGS'			=> 'Ativar Opções',

	'EMAIL'						=> 'Email',

	'GLOBAL_SETTINGS'			=> 'Configurações globais',

	'MISC_NOTIFICATIONS'		=> 'Notificações diversas',
	'MODERATOR_APPROVAL'		=> 'Um post ou tópico precisa de aprovação',
	'MODERATOR_NOTIFICATIONS'	=> 'Notificações de modificação',
	'MODERATOR_REPORT'			=> 'Alguém reportou uma postagem',

	'NOTIFICATION'				=> 'Notificação',

	'POSTING_NOTIFICATIONS'		=> 'Notificações das postagens',
	'POSTING_SETTINGS'			=> 'Postagem padrão',

	'QUOTE_POST'				=> 'Cita o usuário em um post',

	'REQUEST_GROUP'				=> 'Alguém solicita a participação em um grupo que você lidera',
	'REPLY_BOOKMARK_TOPIC'		=> 'Responder a um tópico ao qual o usuário favoritou',
	'REPLY_SUBSCRIBED_TOPIC'	=> 'Responder a um tópico ao qual o usuário subscreveu',

	'SEND_PM'					=> 'Alguém enviou ao usuário uma mensagem privada',

	'USER_ALLOW_PM'				=> 'Permitir que os usuários envie mensagens privadas',
	'USER_ALLOW_MASSEMAIL'		=> 'Os administradores podem enviar e-mail informativos ao usuário',
	'USER_ALLOW_VIEWEMAIL'		=> 'O usuário pode ser contatado por email',
	'USER_DEFAULTS_EXPLAIN'		=> 'Defina aqui os valores que você deseja como valores padrão para <strong>novos</ strong> usuários.<br /> Todas as alterações feitas através deste formulário <strong>não</ strong> afetarão os usuários existentes.',
	'USER_NOTIFY'				=> 'Notificar o usuário sobre as respostas por padrão',
	'USER_NOTIFY_PM'			=> 'Notificar usuário de PM',

	'VERSION'					=> 'Versão',
	'VIEW_AVATARS'				=> 'Mostrar avatares',
	'VIEW_FLASH'				=> 'Mostrar Animações em Flash',
	'VIEW_IMAGES'				=> 'Mostrar Imagens dentro de postagens',
	'VIEW_POSTS_DAYS' 			=> 'Mostrar Postagens dos dias anteriores',
	'VIEW_POSTS_DIR' 			=> 'Mostrar post order direction',
	'VIEW_POSTS_KEY' 			=> 'Mostrar posts ordenados por',
	'VIEW_SIGS'					=> 'Mostrar assinaturas',
	'VIEW_SMILIES'				=> 'Mostrar smilies como imagens',
	'VIEW_TOPICS_DAYS' 			=> 'Mostrar tópicos dos dias anteriores',
	'VIEW_TOPICS_DIR' 			=> 'Mostrar a direção da ordem do tópico',
	'VIEW_TOPICS_KEY' 			=> 'Mostrar tópicos ordenados por',
));
