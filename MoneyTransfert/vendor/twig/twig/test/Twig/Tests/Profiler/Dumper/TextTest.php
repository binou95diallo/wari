<<<<<<< HEAD
<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Twig\Profiler\Dumper\TextDumper;

class Twig_Tests_Profiler_Dumper_TextTest extends Twig_Tests_Profiler_Dumper_AbstractTest
{
    public function testDump()
    {
        $dumper = new TextDumper();
        $this->assertStringMatchesFormat(<<<EOF
main %d.%dms/%d%
└ index.twig %d.%dms/%d%
  └ embedded.twig::block(body)
  └ embedded.twig
  │ └ included.twig
  └ index.twig::macro(foo)
  └ embedded.twig
    └ included.twig

EOF
        , $dumper->dump($this->getProfile()));
    }
}
=======
<?php

/*
 * This file is part of Twig.
 *
 * (c) Fabien Potencier
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

use Twig\Profiler\Dumper\TextDumper;

class Twig_Tests_Profiler_Dumper_TextTest extends Twig_Tests_Profiler_Dumper_AbstractTest
{
    public function testDump()
    {
        $dumper = new TextDumper();
        $this->assertStringMatchesFormat(<<<EOF
main %d.%dms/%d%
└ index.twig %d.%dms/%d%
  └ embedded.twig::block(body)
  └ embedded.twig
  │ └ included.twig
  └ index.twig::macro(foo)
  └ embedded.twig
    └ included.twig

EOF
        , $dumper->dump($this->getProfile()));
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
