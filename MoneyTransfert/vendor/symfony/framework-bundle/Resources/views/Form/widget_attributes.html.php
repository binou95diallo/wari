<<<<<<< HEAD
id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"<?php if ($disabled): ?> disabled="disabled"<?php endif ?>
<?php if ($required): ?> required="required"<?php endif ?>
=======
id="<?php echo $view->escape($id) ?>" name="<?php echo $view->escape($full_name) ?>"<?php if ($disabled): ?> disabled="disabled"<?php endif ?>
<?php if ($required): ?> required="required"<?php endif ?>
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
<?php echo $attr ? ' '.$view['form']->block($form, 'attributes') : '' ?>