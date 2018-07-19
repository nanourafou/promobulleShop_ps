<?php
/* Smarty version 3.1.32, created on 2018-07-19 22:25:57
  from '/Users/netanel/Desktop/Promobulle™/htcdocPromobulle/pres/admin142i59j5h/themes/new-theme/template/components/layout/confirmation_messages.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5b50f3d5a11723_76011435',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '4854e19485f5e8ac33b7710538d1bd19cf8bef1a' => 
    array (
      0 => '/Users/netanel/Desktop/Promobulle™/htcdocPromobulle/pres/admin142i59j5h/themes/new-theme/template/components/layout/confirmation_messages.tpl',
      1 => 1532031540,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5b50f3d5a11723_76011435 (Smarty_Internal_Template $_smarty_tpl) {
if (isset($_smarty_tpl->tpl_vars['confirmations']->value) && count($_smarty_tpl->tpl_vars['confirmations']->value) && $_smarty_tpl->tpl_vars['confirmations']->value) {?>
  <div class="bootstrap">
    <div class="alert alert-success" style="display:block;">
      <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['confirmations']->value, 'conf');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['conf']->value) {
?>
        <?php echo $_smarty_tpl->tpl_vars['conf']->value;?>

      <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
    </div>
  </div>
<?php }
}
}
