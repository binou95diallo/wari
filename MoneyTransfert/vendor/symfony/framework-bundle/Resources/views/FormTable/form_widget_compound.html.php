<<<<<<< HEAD
<table <?php echo $view['form']->block($form, 'widget_container_attributes'); ?>>
    <?php if (!$form->parent && $errors): ?>
    <tr>
        <td colspan="2">
            <?php echo $view['form']->errors($form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo $view['form']->block($form, 'form_rows'); ?>
    <?php echo $view['form']->rest($form); ?>
</table>
=======
<table <?php echo $view['form']->block($form, 'widget_container_attributes'); ?>>
    <?php if (!$form->parent && $errors): ?>
    <tr>
        <td colspan="2">
            <?php echo $view['form']->errors($form); ?>
        </td>
    </tr>
    <?php endif; ?>
    <?php echo $view['form']->block($form, 'form_rows'); ?>
    <?php echo $view['form']->rest($form); ?>
</table>
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
