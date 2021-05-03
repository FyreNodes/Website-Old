<?php
/* Smarty version 3.1.36, created on 2021-05-01 20:58:00
  from '/var/www/website/portal/templates/orderforms/standard_cart/sidebar-categories-collapsed.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_608dc0d8f07686_97329468',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cddf5874c618094891686a79b308a75f1447e742' => 
    array (
      0 => '/var/www/website/portal/templates/orderforms/standard_cart/sidebar-categories-collapsed.tpl',
      1 => 1619901618,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608dc0d8f07686_97329468 (Smarty_Internal_Template $_smarty_tpl) {
?><div class="sidebar-collapsed">

    <div class="pull-left form-inline float-left">
        <form>
            <select name="gid" id="gidForm" onchange="javascript:redirectToCartPage()" class="form-control">
                <optgroup label="Product Categories">
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['productgroups']->value, 'productgroup', false, 'num');
$_smarty_tpl->tpl_vars['productgroup']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['num']->value => $_smarty_tpl->tpl_vars['productgroup']->value) {
$_smarty_tpl->tpl_vars['productgroup']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['productgroup']->value['routePath'];?>
"<?php if ($_smarty_tpl->tpl_vars['gid']->value == $_smarty_tpl->tpl_vars['productgroup']->value['gid']) {?> selected="selected"<?php }?>><?php echo $_smarty_tpl->tpl_vars['productgroup']->value['name'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </optgroup>
                <optgroup label="Actions">
                    <?php if ($_smarty_tpl->tpl_vars['loggedin']->value) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?gid=addons"<?php if ($_smarty_tpl->tpl_vars['gid']->value == "addons") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['cartproductaddons'];?>
</option>
                        <?php if ($_smarty_tpl->tpl_vars['renewalsenabled']->value) {?>
                            <option value="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?gid=renewals"<?php if ($_smarty_tpl->tpl_vars['gid']->value == "renewals") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['domainrenewals'];?>
</option>
                        <?php }?>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['registerdomainenabled']->value) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?gid=registerdomain"<?php if ($_smarty_tpl->tpl_vars['domain']->value == "register") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['navregisterdomain'];?>
</option>
                    <?php }?>
                    <?php if ($_smarty_tpl->tpl_vars['transferdomainenabled']->value) {?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?gid=transferdomain"<?php if ($_smarty_tpl->tpl_vars['domain']->value == "transfer") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['transferinadomain'];?>
</option>
                    <?php }?>
                    <option value="<?php echo $_smarty_tpl->tpl_vars['WEB_ROOT']->value;?>
/cart.php?a=view"<?php if ($_smarty_tpl->tpl_vars['action']->value == "view") {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['LANG']->value['viewcart'];?>
</option>
                </optgroup>
            </select>
        </form>
    </div>

    <?php if (!$_smarty_tpl->tpl_vars['loggedin']->value && $_smarty_tpl->tpl_vars['currencies']->value) {?>
        <div class="pull-right form-inline float-right">
            <form method="post" action="cart.php<?php if ($_smarty_tpl->tpl_vars['action']->value) {?>?a=<?php echo $_smarty_tpl->tpl_vars['action']->value;
if ($_smarty_tpl->tpl_vars['domain']->value) {?>&domain=<?php echo $_smarty_tpl->tpl_vars['domain']->value;
}
} elseif ($_smarty_tpl->tpl_vars['gid']->value) {?>?gid=<?php echo $_smarty_tpl->tpl_vars['gid']->value;
}?>">
                <select name="currency" onchange="submit()" class="form-control">
                    <option value=""><?php echo $_smarty_tpl->tpl_vars['LANG']->value['choosecurrency'];?>
</option>
                    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['currencies']->value, 'listcurr');
$_smarty_tpl->tpl_vars['listcurr']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['listcurr']->value) {
$_smarty_tpl->tpl_vars['listcurr']->do_else = false;
?>
                        <option value="<?php echo $_smarty_tpl->tpl_vars['listcurr']->value['id'];?>
"<?php if ($_smarty_tpl->tpl_vars['listcurr']->value['id'] == $_smarty_tpl->tpl_vars['currency']->value['id']) {?> selected<?php }?>><?php echo $_smarty_tpl->tpl_vars['listcurr']->value['code'];?>
</option>
                    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
                </select>
            </form>
        </div>
    <?php }?>

</div>

<?php echo '<script'; ?>
 type="text/javascript">
    function redirectToCartPage()
    {
        var path = jQuery('#gidForm').val();
        if (path) {
            window.location.href = path;
        }
    }
<?php echo '</script'; ?>
>
<?php }
}
