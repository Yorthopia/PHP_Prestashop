<?php /* Smarty version Smarty-3.1.19, created on 2016-02-22 10:38:41
         compiled from "C:\wamp\www\prestashop_1.6.1.4_fr\prestashop\admin\themes\default\template\helpers\list\list_action_addstock.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3001956cad72100e489-51593655%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '129eeca28a2bfdd9fb2e28681fb0ef9e77afc489' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop_1.6.1.4_fr\\prestashop\\admin\\themes\\default\\template\\helpers\\list\\list_action_addstock.tpl',
      1 => 1456133684,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3001956cad72100e489-51593655',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'href' => 0,
    'action' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56cad721083787_42071797',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cad721083787_42071797')) {function content_56cad721083787_42071797($_smarty_tpl) {?>
<a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['href']->value, ENT_QUOTES, 'UTF-8', true);?>
" class="edit btn btn-default" title="<?php echo $_smarty_tpl->tpl_vars['action']->value;?>
">
	<i class="icon-circle-arrow-up"></i> <?php echo $_smarty_tpl->tpl_vars['action']->value;?>

</a><?php }} ?>
