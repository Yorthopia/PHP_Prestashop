<?php /* Smarty version Smarty-3.1.19, created on 2016-02-22 10:38:20
         compiled from "C:\wamp\www\prestashop_1.6.1.4_fr\prestashop\admin\themes\default\template\controllers\shop\content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:2329656cad70c149e48-99931814%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '8178187a813e310d194c043182c287f3ea9702ac' => 
    array (
      0 => 'C:\\wamp\\www\\prestashop_1.6.1.4_fr\\prestashop\\admin\\themes\\default\\template\\controllers\\shop\\content.tpl',
      1 => 1456133681,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '2329656cad70c149e48-99931814',
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
  'unifunc' => 'content_56cad70c170f43_96094496',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56cad70c170f43_96094496')) {function content_56cad70c170f43_96094496($_smarty_tpl) {?>

<div class="row">
	<div class="col-lg-4">
		<?php echo $_smarty_tpl->tpl_vars['shops_tree']->value;?>

	</div>
	<div class="col-lg-8"><?php echo $_smarty_tpl->tpl_vars['content']->value;?>
</div>
</div><?php }} ?>
