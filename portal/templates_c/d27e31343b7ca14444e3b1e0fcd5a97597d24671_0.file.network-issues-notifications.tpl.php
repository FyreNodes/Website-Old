<?php
/* Smarty version 3.1.36, created on 2021-04-19 22:25:11
  from '/var/www/website/portal/templates/twenty-one/includes/network-issues-notifications.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_607e03473143a5_11293039',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd27e31343b7ca14444e3b1e0fcd5a97597d24671' => 
    array (
      0 => '/var/www/website/portal/templates/twenty-one/includes/network-issues-notifications.tpl',
      1 => 1614277716,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_607e03473143a5_11293039 (Smarty_Internal_Template $_smarty_tpl) {
if ($_smarty_tpl->tpl_vars['openNetworkIssueCounts']->value['open'] > 0) {?>
    <div class="alert alert-warning network-issue-alert m-0">
        <div class="container">
            <i class="fas fa-exclamation-triangle fa-fw"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkIssuesAware'),$_smarty_tpl ) );?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/serverstatus.php" class="alert-link float-lg-right">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'learnmore'),$_smarty_tpl ) );?>

                <i class="far fa-arrow-right"></i>
            </a>
        </div>
    </div>
<?php } elseif ($_smarty_tpl->tpl_vars['openNetworkIssueCounts']->value['scheduled'] > 0) {?>
    <div class="alert alert-info network-issue-alert m-0">
        <div class="container">
            <i class="fas fa-info-circle fa-fw"></i>
            <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'networkIssuesScheduled'),$_smarty_tpl ) );?>

            <a href="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/serverstatus.php" class="alert-link float-lg-right">
                <?php echo call_user_func_array( $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['lang'][0], array( array('key'=>'learnmore'),$_smarty_tpl ) );?>

                <i class="far fa-arrow-right"></i>
            </a>
        </div>
    </div>
<?php }
}
}
