<<<<<<< HEAD
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Caster;

use Symfony\Component\VarDumper\Cloner\Stub;

/**
 * Casts GMP objects to array representation.
 *
 * @author Hamza Amrouche <hamza.simperfit@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class GmpCaster
{
    public static function castGmp(\GMP $gmp, array $a, Stub $stub, $isNested, $filter): array
    {
        $a[Caster::PREFIX_VIRTUAL.'value'] = new ConstStub(gmp_strval($gmp), gmp_strval($gmp));

        return $a;
    }
}
=======
<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Symfony\Component\VarDumper\Caster;

use Symfony\Component\VarDumper\Cloner\Stub;

/**
 * Casts GMP objects to array representation.
 *
 * @author Hamza Amrouche <hamza.simperfit@gmail.com>
 * @author Nicolas Grekas <p@tchwork.com>
 */
class GmpCaster
{
    public static function castGmp(\GMP $gmp, array $a, Stub $stub, $isNested, $filter): array
    {
        $a[Caster::PREFIX_VIRTUAL.'value'] = new ConstStub(gmp_strval($gmp), gmp_strval($gmp));

        return $a;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
