<?php if(!defined('__XE__')) exit();
$query = new Query();
$query->setQueryId("insertAutologin");
$query->setAction("insert");
$query->setPriority("");

${'autologin_key8_argument'} = new Argument('autologin_key', $args->{'autologin_key'});
${'autologin_key8_argument'}->checkNotNull();
if(!${'autologin_key8_argument'}->isValid()) return ${'autologin_key8_argument'}->getErrorMessage();
if(${'autologin_key8_argument'} !== null) ${'autologin_key8_argument'}->setColumnType('varchar');

${'member_srl9_argument'} = new Argument('member_srl', $args->{'member_srl'});
${'member_srl9_argument'}->checkFilter('number');
${'member_srl9_argument'}->checkNotNull();
if(!${'member_srl9_argument'}->isValid()) return ${'member_srl9_argument'}->getErrorMessage();
if(${'member_srl9_argument'} !== null) ${'member_srl9_argument'}->setColumnType('number');

$query->setColumns(array(
new InsertExpression('`autologin_key`', ${'autologin_key8_argument'})
,new InsertExpression('`member_srl`', ${'member_srl9_argument'})
));
$query->setTables(array(
new Table('`xe_member_autologin`', '`member_autologin`')
));
$query->setConditions(array());
$query->setGroups(array());
$query->setOrder(array());
$query->setLimit();
return $query; ?>