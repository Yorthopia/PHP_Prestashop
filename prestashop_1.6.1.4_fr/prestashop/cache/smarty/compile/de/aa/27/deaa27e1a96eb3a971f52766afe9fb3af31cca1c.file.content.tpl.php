<?php /* Smarty version Smarty-3.1.19, created on 2016-02-22 10:41:03
         compiled from "C:\wamp\www\PHP_Prestashop\prestashop_1.6.1.4_fr\prestashop\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:325056cad7afbc2ed9-75407292%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'deaa27e1a96eb3a971f52766afe9fb3af31cca1c' => 
    array (
      0 => 'C:\\wamp\\www\\PHP_Prestashop\\prestashop_1.6.1.4_fr\\prestashop\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1456133681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '325056cad7afbc2ed9-75407292',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'shops_tree' => 0,
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_56cad7afbf1ce3_94033064',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cad7afbf1ce3_94033064')) {function content_56cad7afbf1ce3_94033064($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
