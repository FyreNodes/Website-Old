<?php
/* Smarty version 3.1.36, created on 2021-05-03 02:19:17
  from 'mailMessage:plaintext' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.36',
  'unifunc' => 'content_608f5da5870284_07686401',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dac51ccee8dbecedf9afb805fb153d5c6bf41d7a' => 
    array (
      0 => 'mailMessage:plaintext',
      1 => 1620008357,
      2 => 'mailMessage',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_608f5da5870284_07686401 (Smarty_Internal_Template $_smarty_tpl) {
?>Hello, <?php echo $_smarty_tpl->tpl_vars['client_name']->value;?>
!


Your order for <?php echo $_smarty_tpl->tpl_vars['service_product_name']->value;?>
 has now been activated with DijxCloud.


You can now log in at https://panel.dijxcloud.com with the email and password you used to buy this product.


Product/Service: <?php echo $_smarty_tpl->tpl_vars['service_product_name']->value;?>

Payment Method: <?php echo $_smarty_tpl->tpl_vars['service_payment_method']->value;?>

Amount: <?php echo $_smarty_tpl->tpl_vars['service_recurring_amount']->value;?>

Billing Cycle: <?php echo $_smarty_tpl->tpl_vars['service_billing_cycle']->value;?>

Next Due Date: <?php echo $_smarty_tpl->tpl_vars['service_next_due_date']->value;?>



Thanks for choosing DijxCloud! 


<?php echo $_smarty_tpl->tpl_vars['signature']->value;
}
}
