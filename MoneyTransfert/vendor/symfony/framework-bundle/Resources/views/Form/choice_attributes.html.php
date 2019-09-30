<<<<<<< HEAD
<?php if ($disabled): ?>disabled="disabled" <?php endif ?>
<?php foreach ($choice_attr as $k => $v): ?>
<?php if ($v === true): ?>
<?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>
<?php elseif ($v !== false): ?>
<?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>
<?php endif ?>
<?php endforeach ?>
=======
<?php if ($disabled): ?>disabled="disabled" <?php endif ?>
<?php foreach ($choice_attr as $k => $v): ?>
<?php if ($v === true): ?>
<?php printf('%s="%s" ', $view->escape($k), $view->escape($k)) ?>
<?php elseif ($v !== false): ?>
<?php printf('%s="%s" ', $view->escape($k), $view->escape($v)) ?>
<?php endif ?>
<?php endforeach ?>
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
