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

namespace Symfony\Component\Form;

use Symfony\Component\Form\Exception\UnexpectedTypeException;
use Symfony\Component\Form\Guess\Guess;

class FormTypeGuesserChain implements FormTypeGuesserInterface
{
    private $guessers = [];

    /**
     * @param FormTypeGuesserInterface[] $guessers
     *
     * @throws UnexpectedTypeException if any guesser does not implement FormTypeGuesserInterface
     */
    public function __construct(iterable $guessers)
    {
        foreach ($guessers as $guesser) {
            if (!$guesser instanceof FormTypeGuesserInterface) {
                throw new UnexpectedTypeException($guesser, 'Symfony\Component\Form\FormTypeGuesserInterface');
            }

            if ($guesser instanceof self) {
                $this->guessers = array_merge($this->guessers, $guesser->guessers);
            } else {
                $this->guessers[] = $guesser;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($class, $property)
    {
        return $this->guess(function ($guesser) use ($class, $property) {
            return $guesser->guessType($class, $property);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function guessRequired($class, $property)
    {
        return $this->guess(function ($guesser) use ($class, $property) {
            return $guesser->guessRequired($class, $property);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function guessMaxLength($class, $property)
    {
        return $this->guess(function ($guesser) use ($class, $property) {
            return $guesser->guessMaxLength($class, $property);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function guessPattern($class, $property)
    {
        return $this->guess(function ($guesser) use ($class, $property) {
            return $guesser->guessPattern($class, $property);
        });
    }

    /**
     * Executes a closure for each guesser and returns the best guess from the
     * return values.
     *
     * @param \Closure $closure The closure to execute. Accepts a guesser
     *                          as argument and should return a Guess instance
     *
     * @return Guess|null The guess with the highest confidence
     */
    private function guess(\Closure $closure)
    {
        $guesses = [];

        foreach ($this->guessers as $guesser) {
            if ($guess = $closure($guesser)) {
                $guesses[] = $guess;
            }
        }

        return Guess::getBestGuess($guesses);
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

namespace Symfony\Component\Form;

use Symfony\Component\Form\Exception\UnexpectedTypeException;
use Symfony\Component\Form\Guess\Guess;

class FormTypeGuesserChain implements FormTypeGuesserInterface
{
    private $guessers = [];

    /**
     * @param FormTypeGuesserInterface[] $guessers
     *
     * @throws UnexpectedTypeException if any guesser does not implement FormTypeGuesserInterface
     */
    public function __construct(iterable $guessers)
    {
        foreach ($guessers as $guesser) {
            if (!$guesser instanceof FormTypeGuesserInterface) {
                throw new UnexpectedTypeException($guesser, 'Symfony\Component\Form\FormTypeGuesserInterface');
            }

            if ($guesser instanceof self) {
                $this->guessers = array_merge($this->guessers, $guesser->guessers);
            } else {
                $this->guessers[] = $guesser;
            }
        }
    }

    /**
     * {@inheritdoc}
     */
    public function guessType($class, $property)
    {
        return $this->guess(function ($guesser) use ($class, $property) {
            return $guesser->guessType($class, $property);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function guessRequired($class, $property)
    {
        return $this->guess(function ($guesser) use ($class, $property) {
            return $guesser->guessRequired($class, $property);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function guessMaxLength($class, $property)
    {
        return $this->guess(function ($guesser) use ($class, $property) {
            return $guesser->guessMaxLength($class, $property);
        });
    }

    /**
     * {@inheritdoc}
     */
    public function guessPattern($class, $property)
    {
        return $this->guess(function ($guesser) use ($class, $property) {
            return $guesser->guessPattern($class, $property);
        });
    }

    /**
     * Executes a closure for each guesser and returns the best guess from the
     * return values.
     *
     * @param \Closure $closure The closure to execute. Accepts a guesser
     *                          as argument and should return a Guess instance
     *
     * @return Guess|null The guess with the highest confidence
     */
    private function guess(\Closure $closure)
    {
        $guesses = [];

        foreach ($this->guessers as $guesser) {
            if ($guess = $closure($guesser)) {
                $guesses[] = $guess;
            }
        }

        return Guess::getBestGuess($guesses);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
