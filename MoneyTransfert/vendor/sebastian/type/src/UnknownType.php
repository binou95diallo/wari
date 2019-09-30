<<<<<<< HEAD
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/type.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Type;

final class UnknownType extends Type
{
    public function isAssignable(Type $other): bool
    {
        return true;
    }

    public function getReturnTypeDeclaration(): string
    {
        return '';
    }

    public function allowsNull(): bool
    {
        return true;
    }
}
=======
<?php declare(strict_types=1);
/*
 * This file is part of sebastian/type.
 *
 * (c) Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */
namespace SebastianBergmann\Type;

final class UnknownType extends Type
{
    public function isAssignable(Type $other): bool
    {
        return true;
    }

    public function getReturnTypeDeclaration(): string
    {
        return '';
    }

    public function allowsNull(): bool
    {
        return true;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
