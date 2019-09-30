<<<<<<< HEAD
<?php if (!$label) { $label = isset($label_format)
    ? strtr($label_format, ['%name%' => $name, '%id%' => $id])
    : $view['form']->humanize($name); } ?>
<button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, $label_translation_parameters, $translation_domain) : $label) ?></button>
=======
<?php if (!$label) { $label = isset($label_format)
    ? strtr($label_format, ['%name%' => $name, '%id%' => $id])
    : $view['form']->humanize($name); } ?>
<button type="<?php echo isset($type) ? $view->escape($type) : 'button' ?>" <?php echo $view['form']->block($form, 'button_attributes') ?>><?php echo $view->escape(false !== $translation_domain ? $view['translator']->trans($label, $label_translation_parameters, $translation_domain) : $label) ?></button>
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
