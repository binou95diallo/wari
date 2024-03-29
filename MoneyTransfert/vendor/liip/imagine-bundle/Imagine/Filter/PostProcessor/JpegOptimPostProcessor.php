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
use Liip\ImagineBundle\Binary\FileBinaryInterface;
use Liip\ImagineBundle\Model\Binary;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class JpegOptimPostProcessor implements PostProcessorInterface
{
    /**
     * @var string Path to jpegoptim binary
     */
    protected $jpegoptimBin;

    /**
     * If set --strip-all will be passed to jpegoptim.
     *
     * @var bool
     */
    protected $stripAll;

    /**
     * If set, --max=$value will be passed to jpegoptim.
     *
     * @var int
     */
    protected $max;

    /**
     * If set to true --all-progressive will be passed to jpegoptim, otherwise --all-normal will be passed.
     *
     * @var bool
     */
    protected $progressive;

    /**
     * Directory where temporary file will be written.
     *
     * @var string
     */
    protected $tempDir;

    /**
     * Constructor.
     *
     * @param string $jpegoptimBin Path to the jpegoptim binary
     * @param bool   $stripAll     Strip all markers from output
     * @param int    $max          Set maximum image quality factor
     * @param bool   $progressive  Force output to be progressive
     * @param string $tempDir      Directory where temporary file will be written
     */
    public function __construct(
        $jpegoptimBin = '/usr/bin/jpegoptim',
        $stripAll = true,
        $max = null,
        $progressive = true,
        $tempDir = ''
    ) {
        $this->jpegoptimBin = $jpegoptimBin;
        $this->stripAll = $stripAll;
        $this->max = $max;
        $this->progressive = $progressive;
        $this->tempDir = $tempDir ?: sys_get_temp_dir();
    }

    /**
     * @param int $max
     *
     * @return JpegOptimPostProcessor
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @param bool $progressive
     *
     * @return JpegOptimPostProcessor
     */
    public function setProgressive($progressive)
    {
        $this->progressive = $progressive;

        return $this;
    }

    /**
     * @param bool $stripAll
     *
     * @return JpegOptimPostProcessor
     */
    public function setStripAll($stripAll)
    {
        $this->stripAll = $stripAll;

        return $this;
    }

    /**
     * @param BinaryInterface $binary
     * @param array           $options
     *
     * @throws ProcessFailedException
     *
     * @return BinaryInterface
     */
    public function process(BinaryInterface $binary, array $options = []): BinaryInterface
    {
        $type = mb_strtolower($binary->getMimeType());
        if (!in_array($type, ['image/jpeg', 'image/jpg'], true)) {
            return $binary;
        }

        $tempDir = array_key_exists('temp_dir', $options) ? $options['temp_dir'] : $this->tempDir;
        if (false === $input = tempnam($tempDir, 'imagine_jpegoptim')) {
            throw new \RuntimeException(sprintf('Temp file can not be created in "%s".', $tempDir));
        }

        $processArguments = [$this->jpegoptimBin];

        $stripAll = array_key_exists('strip_all', $options) ? $options['strip_all'] : $this->stripAll;
        if ($stripAll) {
            $processArguments[] = '--strip-all';
        }

        $max = array_key_exists('max', $options) ? $options['max'] : $this->max;
        if ($max) {
            $processArguments[] = '--max='.$max;
        }

        $progressive = array_key_exists('progressive', $options) ? $options['progressive'] : $this->progressive;
        if ($progressive) {
            $processArguments[] = '--all-progressive';
        } else {
            $processArguments[] = '--all-normal';
        }

        $processArguments[] = $input;
        if ($binary instanceof FileBinaryInterface) {
            copy($binary->getPath(), $input);
        } else {
            file_put_contents($input, $binary->getContent());
        }

        $proc = new Process($processArguments);
        $proc->run();

        if (false !== mb_strpos($proc->getOutput(), 'ERROR') || 0 !== $proc->getExitCode()) {
            unlink($input);
            throw new ProcessFailedException($proc);
        }

        $result = new Binary(file_get_contents($input), $binary->getMimeType(), $binary->getFormat());

        unlink($input);

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
use Liip\ImagineBundle\Binary\FileBinaryInterface;
use Liip\ImagineBundle\Model\Binary;
use Symfony\Component\Process\Exception\ProcessFailedException;
use Symfony\Component\Process\Process;

class JpegOptimPostProcessor implements PostProcessorInterface
{
    /**
     * @var string Path to jpegoptim binary
     */
    protected $jpegoptimBin;

    /**
     * If set --strip-all will be passed to jpegoptim.
     *
     * @var bool
     */
    protected $stripAll;

    /**
     * If set, --max=$value will be passed to jpegoptim.
     *
     * @var int
     */
    protected $max;

    /**
     * If set to true --all-progressive will be passed to jpegoptim, otherwise --all-normal will be passed.
     *
     * @var bool
     */
    protected $progressive;

    /**
     * Directory where temporary file will be written.
     *
     * @var string
     */
    protected $tempDir;

    /**
     * Constructor.
     *
     * @param string $jpegoptimBin Path to the jpegoptim binary
     * @param bool   $stripAll     Strip all markers from output
     * @param int    $max          Set maximum image quality factor
     * @param bool   $progressive  Force output to be progressive
     * @param string $tempDir      Directory where temporary file will be written
     */
    public function __construct(
        $jpegoptimBin = '/usr/bin/jpegoptim',
        $stripAll = true,
        $max = null,
        $progressive = true,
        $tempDir = ''
    ) {
        $this->jpegoptimBin = $jpegoptimBin;
        $this->stripAll = $stripAll;
        $this->max = $max;
        $this->progressive = $progressive;
        $this->tempDir = $tempDir ?: sys_get_temp_dir();
    }

    /**
     * @param int $max
     *
     * @return JpegOptimPostProcessor
     */
    public function setMax($max)
    {
        $this->max = $max;

        return $this;
    }

    /**
     * @param bool $progressive
     *
     * @return JpegOptimPostProcessor
     */
    public function setProgressive($progressive)
    {
        $this->progressive = $progressive;

        return $this;
    }

    /**
     * @param bool $stripAll
     *
     * @return JpegOptimPostProcessor
     */
    public function setStripAll($stripAll)
    {
        $this->stripAll = $stripAll;

        return $this;
    }

    /**
     * @param BinaryInterface $binary
     * @param array           $options
     *
     * @throws ProcessFailedException
     *
     * @return BinaryInterface
     */
    public function process(BinaryInterface $binary, array $options = []): BinaryInterface
    {
        $type = mb_strtolower($binary->getMimeType());
        if (!in_array($type, ['image/jpeg', 'image/jpg'], true)) {
            return $binary;
        }

        $tempDir = array_key_exists('temp_dir', $options) ? $options['temp_dir'] : $this->tempDir;
        if (false === $input = tempnam($tempDir, 'imagine_jpegoptim')) {
            throw new \RuntimeException(sprintf('Temp file can not be created in "%s".', $tempDir));
        }

        $processArguments = [$this->jpegoptimBin];

        $stripAll = array_key_exists('strip_all', $options) ? $options['strip_all'] : $this->stripAll;
        if ($stripAll) {
            $processArguments[] = '--strip-all';
        }

        $max = array_key_exists('max', $options) ? $options['max'] : $this->max;
        if ($max) {
            $processArguments[] = '--max='.$max;
        }

        $progressive = array_key_exists('progressive', $options) ? $options['progressive'] : $this->progressive;
        if ($progressive) {
            $processArguments[] = '--all-progressive';
        } else {
            $processArguments[] = '--all-normal';
        }

        $processArguments[] = $input;
        if ($binary instanceof FileBinaryInterface) {
            copy($binary->getPath(), $input);
        } else {
            file_put_contents($input, $binary->getContent());
        }

        $proc = new Process($processArguments);
        $proc->run();

        if (false !== mb_strpos($proc->getOutput(), 'ERROR') || 0 !== $proc->getExitCode()) {
            unlink($input);
            throw new ProcessFailedException($proc);
        }

        $result = new Binary(file_get_contents($input), $binary->getMimeType(), $binary->getFormat());

        unlink($input);

        return $result;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
