<<<<<<< HEAD
<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(array(__DIR__))
;

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers(array(
        '-phpdoc_scalar',
        '-extra_empty_lines',
        '-unalign_double_arrow',
        '-unalign_equals',
        'align_double_arrow',
        'newline_after_open_tag',
        'ordered_use',
        'short_array_syntax',
    ))
    ->setUsingCache(false)
    ->finder($finder)
;
=======
<?php

$finder = Symfony\CS\Finder\DefaultFinder::create()
    ->in(array(__DIR__))
;

return Symfony\CS\Config\Config::create()
    ->level(Symfony\CS\FixerInterface::SYMFONY_LEVEL)
    ->fixers(array(
        '-phpdoc_scalar',
        '-extra_empty_lines',
        '-unalign_double_arrow',
        '-unalign_equals',
        'align_double_arrow',
        'newline_after_open_tag',
        'ordered_use',
        'short_array_syntax',
    ))
    ->setUsingCache(false)
    ->finder($finder)
;
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
