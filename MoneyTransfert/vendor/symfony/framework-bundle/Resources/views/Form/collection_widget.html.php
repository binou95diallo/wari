<<<<<<< HEAD
<?php if (isset($prototype)): ?>
    <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>
<?php endif ?>
<?php echo $view['form']->widget($form, ['attr' => $attr]) ?>
=======
<?php if (isset($prototype)): ?>
    <?php $attr['data-prototype'] = $view->escape($view['form']->row($prototype)) ?>
<?php endif ?>
<?php echo $view['form']->widget($form, ['attr' => $attr]) ?>
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
