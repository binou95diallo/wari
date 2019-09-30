<<<<<<< HEAD
<?php if ($widget == 'single_text'): ?>
    <?php echo $view['form']->block($form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>
        <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>
    </div>
<?php endif ?>
=======
<?php if ($widget == 'single_text'): ?>
    <?php echo $view['form']->block($form, 'form_widget_simple'); ?>
<?php else: ?>
    <div <?php echo $view['form']->block($form, 'widget_container_attributes') ?>>
        <?php echo $view['form']->widget($form['date']).' '.$view['form']->widget($form['time']) ?>
    </div>
<?php endif ?>
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
