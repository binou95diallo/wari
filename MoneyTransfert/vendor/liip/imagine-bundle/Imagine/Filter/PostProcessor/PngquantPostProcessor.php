<<<<<<< HEAD
<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Imagine\Filter\PostProcessor;

use Liip\ImagineBundle\Binary\BinaryInterface;
use Liip\ImagineBundle\Model\Binary;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

/**
 * pngquant post-processor, for optimal, web-safe, lossy png compression
 * This requires a recent version of pngquant (so 2.3 or higher?)
 * See pngqaunt.org if you are unable to find a binary package for your distribution.
 *
 * @see https://pngquant.org/
 *
 * @author Alex Wilson <a@ax.gy>
 */
class PngquantPostProcessor implements PostProcessorInterface
{
    /**
     * @var string Path to pngquant binary
     */
    protected $pngquantBin;

    /**
     * @var string Quality to pass to pngquant
     */
    protected $quality;

    /**
     * Constructor.
     *
     * @param string $pngquantBin Path to the pngquant binary
     * @param string $quality
     */
    public function __construct($pngquantBin = '/usr/bin/pngquant', $quality = '80-100')
    {
        $this->pngquantBin = $pngquantBin;
        $this->setQuality($quality);
    }

    /**
     * @param string $quality
     *
     * @return PngquantPostProcessor
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * @param BinaryInterface $binary
     *
     * @throws ProcessFailedException
     *
     * @return BinaryInterface
     */
    public function process(BinaryInterface $binary, array $options = []): BinaryInterface
    {
        $type = mb_strtolower($binary->getMimeType());
        if (!in_array($type, ['image/png'], true)) {
            return $binary;
        }

        $processArguments = [$this->pngquantBin];

        // Specify quality.
        $tranformQuality = array_key_exists('quality', $options) ? $options['quality'] : $this->quality;
        $processArguments[] = '--quality';
        $processArguments[] = $tranformQuality;

        // Read to/from stdout to save resources.
        $processArguments[] = '-';
        $proc = new Process($processArguments);
        $proc->setInput($binary->getContent());
        $proc->run();

        // 98 and 99 are "quality too low" to compress current current image which, while isn't ideal, is not a failure
        if (!in_array($proc->getExitCode(), [0, 98, 99], true)) {
            throw new ProcessFailedException($proc);
        }

        $result = new Binary($proc->getOutput(), $binary->getMimeType(), $binary->getFormat());

        return $result;
    }
}
=======
<?php

/*
 * This file is part of the `liip/LiipImagineBundle` project.
 *
 * (c) https://github.com/liip/LiipImagineBundle/graphs/contributors
 *
 * For the full copyright and license information, please view the LICENSE.md
 * file that was distributed with this source code.
 */

namespace Liip\ImagineBundle\Imagine\Filter\PostProcessor;

use Liip\ImagineBundle\Binary\BinaryInterface;
use Liip\ImagineBundle\Model\Binary;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

/**
 * pngquant post-processor, for optimal, web-safe, lossy png compression
 * This requires a recent version of pngquant (so 2.3 or higher?)
 * See pngqaunt.org if you are unable to find a binary package for your distribution.
 *
 * @see https://pngquant.org/
 *
 * @author Alex Wilson <a@ax.gy>
 */
class PngquantPostProcessor implements PostProcessorInterface
{
    /**
     * @var string Path to pngquant binary
     */
    protected $pngquantBin;

    /**
     * @var string Quality to pass to pngquant
     */
    protected $quality;

    /**
     * Constructor.
     *
     * @param string $pngquantBin Path to the pngquant binary
     * @param string $quality
     */
    public function __construct($pngquantBin = '/usr/bin/pngquant', $quality = '80-100')
    {
        $this->pngquantBin = $pngquantBin;
        $this->setQuality($quality);
    }

    /**
     * @param string $quality
     *
     * @return PngquantPostProcessor
     */
    public function setQuality($quality)
    {
        $this->quality = $quality;

        return $this;
    }

    /**
     * @param BinaryInterface $binary
     *
     * @throws ProcessFailedException
     *
     * @return BinaryInterface
     */
    public function process(BinaryInterface $binary, array $options = []): BinaryInterface
    {
        $type = mb_strtolower($binary->getMimeType());
        if (!in_array($type, ['image/png'], true)) {
            return $binary;
        }

        $processArguments = [$this->pngquantBin];

        // Specify quality.
        $tranformQuality = array_key_exists('quality', $options) ? $options['quality'] : $this->quality;
        $processArguments[] = '--quality';
        $processArguments[] = $tranformQuality;

        // Read to/from stdout to save resources.
        $processArguments[] = '-';
        $proc = new Process($processArguments);
        $proc->setInput($binary->getContent());
        $proc->run();

        // 98 and 99 are "quality too low" to compress current current image which, while isn't ideal, is not a failure
        if (!in_array($proc->getExitCode(), [0, 98, 99], true)) {
            throw new ProcessFailedException($proc);
        }

        $result = new Binary($proc->getOutput(), $binary->getMimeType(), $binary->getFormat());

        return $result;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
