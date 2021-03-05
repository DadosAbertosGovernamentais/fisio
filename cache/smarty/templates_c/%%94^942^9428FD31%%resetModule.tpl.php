<?php /* Smarty version 2.6.11, created on 2021-03-05 15:41:05
         compiled from modules/ModuleBuilder/tpls/resetModule.tpl */ ?>
<?php require_once(SMARTY_CORE_DIR . 'core.load_plugins.php');
smarty_core_load_plugins(array('plugins' => array(array('function', 'sugar_translate', 'modules/ModuleBuilder/tpls/resetModule.tpl', 38, false),)), $this); ?>
<h3><?php echo smarty_function_sugar_translate(array('label' => 'LBL_REMOVE_CUSTOM'), $this);?>
</h3>
<form name="remove_custom">
<input type="hidden" name="module" value="ModuleBuilder">
<input type="hidden" name="action" value="resetmodule">
<input type="hidden" name="view_module" value="<?php echo $this->_tpl_vars['module']; ?>
">
<input type="hidden" name="handle" value="execute">
<ul id="repair_actions">
<?php $_from = $this->_tpl_vars['actions']; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array'); }if (count($_from)):
    foreach ($_from as $this->_tpl_vars['action']):
?>
<li>
    <input type="checkbox" name="<?php echo $this->_tpl_vars['action']['name']; ?>
" value="<?php echo $this->_tpl_vars['action']['name']; ?>
" checked="checked" />
    <?php echo $this->_tpl_vars['action']['label']; ?>

</li> 
<?php endforeach; endif; unset($_from); ?>
</ul>
</form>
<button id="execute_repair" onclick="this.disabled = true;
ajaxStatus.showStatus(SUGAR.language.get('ModuleBuilder', 'LBL_AJAX_LOADING'));
ModuleBuilder.submitForm('remove_custom')"><?php echo smarty_function_sugar_translate(array('label' => 'LBL_RESET'), $this);?>
</button>