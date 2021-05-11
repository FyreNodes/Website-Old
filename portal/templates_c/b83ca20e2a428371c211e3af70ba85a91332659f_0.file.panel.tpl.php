<?php
/* Smarty version 3.1.36, created on 2021-05-08 05:26:19
  from '/var/www/website/portal/templates/twenty-one/includes/panel.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_609620fb6de551_50258564',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'b83ca20e2a428371c211e3af70ba85a91332659f' => 
    array (
      0 => '/var/www/website/portal/templates/twenty-one/includes/panel.tpl',
      1 => 1619901618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_609620fb6de551_50258564 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="card">
    <?php if ((isset($_smarty_tpl->tpl_vars['headerTitle']->value))) {?>
        <div class="card-header  bg-<?php echo $_smarty_tpl->tpl_vars['type']->value;?>
">
            <h3 class="card-title"><strong><?php echo $_smarty_tpl->tpl_vars['headerTitle']->value;?>
</strong></h3>
        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['bodyContent']->value))) {?>
        <div class="card-body<?php if ((isset($_smarty_tpl->tpl_vars['bodyTextCenter']->value))) {?> text-center<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['bodyContent']->value;?>

        </div>
    <?php }?>
    <?php if ((isset($_smarty_tpl->tpl_vars['footerContent']->value))) {?>
        <div class="card-footer<?php if ((isset($_smarty_tpl->tpl_vars['footerTextCenter']->value))) {?> text-center<?php }?>">
            <?php echo $_smarty_tpl->tpl_vars['footerContent']->value;?>

        </div>
    <?php }?>
</div>
<?php }
}
