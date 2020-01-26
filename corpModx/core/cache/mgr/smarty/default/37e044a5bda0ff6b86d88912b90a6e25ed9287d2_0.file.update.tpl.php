<?php
/* Smarty version 3.1.31, created on 2018-12-25 13:15:38
  from "/home/user2051533/www/work1.d0022330.atservers.net/manager/templates/default/resource/update.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.31',
  'unifunc' => 'content_5c22034a91bb48_90429284',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '37e044a5bda0ff6b86d88912b90a6e25ed9287d2' => 
    array (
      0 => '/home/user2051533/www/work1.d0022330.atservers.net/manager/templates/default/resource/update.tpl',
      1 => 1531325208,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5c22034a91bb48_90429284 (Smarty_Internal_Template $_smarty_tpl) {
?>
<div id="modx-panel-resource-div"></div>
<div id="modx-resource-tvs-div"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>
<?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['hidden']->value, 'tv', false, NULL, 'tv', array (
));
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['tv']->value) {
?>
    <input type="hidden" id="tvdef<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['tv']->value->default_text, ENT_QUOTES, 'UTF-8', true);?>
" />
    <?php echo $_smarty_tpl->tpl_vars['tv']->value->get('formElement');?>

<?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
?>


<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }
}
}
