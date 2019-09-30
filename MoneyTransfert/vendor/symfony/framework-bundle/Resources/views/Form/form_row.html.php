<<<<<<< HEAD
<div>
    <?php $widgetAttr = empty($help) ? [] : ['attr' => ['aria-describedby' => $id.'_help']]; ?>
    <?php echo $view['form']->label($form); ?>
    <?php echo $view['form']->errors($form); ?>
    <?php echo $view['form']->widget($form, $widgetAttr); ?>
    <?php echo $view['form']->help($form); ?>
</div>
=======
<div>
    <?php $widgetAttr = empty($help) ? [] : ['attr' => ['aria-describedby' => $id.'_help']]; ?>
    <?php echo $view['form']->label($form); ?>
    <?php echo $view['form']->errors($form); ?>
    <?php echo $view['form']->widget($form, $widgetAttr); ?>
    <?php echo $view['form']->help($form); ?>
</div>
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
