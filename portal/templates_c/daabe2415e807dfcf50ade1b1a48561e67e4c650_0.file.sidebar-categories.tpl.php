<?php
/* Smarty version 3.1.36, created on 2021-05-01 20:58:00
  from '/var/www/website/portal/templates/orderforms/standard_cart/sidebar-categories.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_608dc0d8eee1b8_85458210',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'daabe2415e807dfcf50ade1b1a48561e67e4c650' => 
    array (
      0 => '/var/www/website/portal/templates/orderforms/standard_cart/sidebar-categories.tpl',
      1 => 1619901618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608dc0d8eee1b8_85458210 (Smarty_Internal_Template $_smarty_tpl) {
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['secondarySidebar']->value, 'panel');
$_smarty_tpl->tpl_vars['panel']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['panel']->value) {
$_smarty_tpl->tpl_vars['panel']->do_else = false;
?>
    <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getName();?>
" class="panel card card-sidebar mb-3 <?php if ($_smarty_tpl->tpl_vars['panel']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['panel']->value->getClass();
} else { ?>panel-sidebar<?php }
if ($_smarty_tpl->tpl_vars['panel']->value->getExtra('mobileSelect') && $_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?> hidden-sm hidden-xs d-none d-md-block<?php }?>"<?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
        <div class="panel-heading card-header">
            <h3 class="panel-title">
                <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasIcon()) {?>
                    <i class="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getIcon();?>
"></i>&nbsp;
                <?php }?>

                <?php echo $_smarty_tpl->tpl_vars['panel']->value->getLabel();?>


                <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasBadge()) {?>
                    &nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['panel']->value->getBadge();?>
</span>
                <?php }?>

                <i class="fas fa-chevron-up card-minimise panel-minimise pull-right float-right"></i>
            </h3>
        </div>

        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasBodyHtml()) {?>
            <div class="panel-body card-body collapsable-card-body">
                <?php echo $_smarty_tpl->tpl_vars['panel']->value->getBodyHtml();?>

            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
            <div class="list-group collapsable-card-body<?php if ($_smarty_tpl->tpl_vars['panel']->value->getChildrenAttribute('class')) {?> <?php echo $_smarty_tpl->tpl_vars['panel']->value->getChildrenAttribute('class');
}?>">
                <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                    <?php if ($_smarty_tpl->tpl_vars['child']->value->getUri()) {?>
                        <a menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" href="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="list-group-item list-group-item-action<?php if ($_smarty_tpl->tpl_vars['child']->value->isDisabled()) {?> disabled<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}
if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?> active<?php }?>"<?php if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('dataToggleTab')) {?> data-toggle="tab"<?php }
if ($_smarty_tpl->tpl_vars['child']->value->getAttribute('target')) {?> target="<?php echo $_smarty_tpl->tpl_vars['child']->value->getAttribute('target');?>
"<?php }?> id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                            <?php if ($_smarty_tpl->tpl_vars['child']->value->hasIcon()) {?>
                                <i class="<?php echo $_smarty_tpl->tpl_vars['child']->value->getIcon();?>
"></i>&nbsp;
                            <?php }?>

                            <?php echo $_smarty_tpl->tpl_vars['child']->value->getLabel();?>


                            <?php if ($_smarty_tpl->tpl_vars['child']->value->hasBadge()) {?>
                                &nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['child']->value->getBadge();?>
</span>
                            <?php }?>
                        </a>
                    <?php } else { ?>
                        <div menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" class="list-group-item<?php if ($_smarty_tpl->tpl_vars['child']->value->getClass()) {?> <?php echo $_smarty_tpl->tpl_vars['child']->value->getClass();
}?>" id="<?php echo $_smarty_tpl->tpl_vars['child']->value->getId();?>
">
                            <?php if ($_smarty_tpl->tpl_vars['child']->value->hasIcon()) {?>
                                <i class="<?php echo $_smarty_tpl->tpl_vars['child']->value->getIcon();?>
"></i>&nbsp;
                            <?php }?>

                            <?php echo $_smarty_tpl->tpl_vars['child']->value->getLabel();?>


                            <?php if ($_smarty_tpl->tpl_vars['child']->value->hasBadge()) {?>
                                &nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['child']->value->getBadge();?>
</span>
                            <?php }?>
                        </div>
                    <?php }?>
                <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
            </div>
        <?php }?>

        <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasFooterHtml()) {?>
            <div class="panel-footer card-footer clearfix">
                <?php echo $_smarty_tpl->tpl_vars['panel']->value->getFooterHtml();?>

            </div>
        <?php }?>
    </div>

    <?php if ($_smarty_tpl->tpl_vars['panel']->value->getExtra('mobileSelect') && $_smarty_tpl->tpl_vars['panel']->value->hasChildren()) {?>
                <div class="panel card hidden-lg hidden-md d-md-none<?php if ($_smarty_tpl->tpl_vars['panel']->value->getClass()) {
echo $_smarty_tpl->tpl_vars['panel']->value->getClass();
} else { ?>panel-default<?php }?>"<?php if ($_smarty_tpl->tpl_vars['panel']->value->getAttribute('id')) {?> id="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getAttribute('id');?>
"<?php }?>>
            <div class="m-0 panel-heading card-header">
                <h3 class="panel-title">
                    <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasIcon()) {?>
                        <i class="<?php echo $_smarty_tpl->tpl_vars['panel']->value->getIcon();?>
"></i>&nbsp;
                    <?php }?>

                    <?php echo $_smarty_tpl->tpl_vars['panel']->value->getLabel();?>


                    <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasBadge()) {?>
                        &nbsp;<span class="badge"><?php echo $_smarty_tpl->tpl_vars['panel']->value->getBadge();?>
</span>
                    <?php }?>
                </h3>
            </div>

            <div class="panel-body card-body">
                <form role="form">
                    <select class="form-control custom-select" onchange="selectChangeNavigate(this)">
                        <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['panel']->value->getChildren(), 'child');
$_smarty_tpl->tpl_vars['child']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['child']->value) {
$_smarty_tpl->tpl_vars['child']->do_else = false;
?>
                            <option menuItemName="<?php echo $_smarty_tpl->tpl_vars['child']->value->getName();?>
" value="<?php echo $_smarty_tpl->tpl_vars['child']->value->getUri();?>
" class="list-group-item" <?php if ($_smarty_tpl->tpl_vars['child']->value->isCurrent()) {?>selected="selected"<?php }?>>
                                <?php echo $_smarty_tpl->tpl_vars['child']->value->getLabel();?>


                                <?php if ($_smarty_tpl->tpl_vars['child']->value->hasBadge()) {?>
                                    (<?php echo $_smarty_tpl->tpl_vars['child']->value->getBadge();?>
)
                                <?php }?>
                            </option>
                        <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                    </select>
                </form>
            </div>

            <?php if ($_smarty_tpl->tpl_vars['panel']->value->hasFooterHtml()) {?>
                <div class="panel-footer card-footer">
                    <?php echo $_smarty_tpl->tpl_vars['panel']->value->getFooterHtml();?>

                </div>
            <?php }?>
        </div>
    <?php }
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);
}
}
