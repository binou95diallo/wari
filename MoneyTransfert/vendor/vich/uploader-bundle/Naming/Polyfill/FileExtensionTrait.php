<<<<<<< HEAD
<?php

namespace Vich\UploaderBundle\Naming\Polyfill;

use Symfony\Component\HttpFoundation\File\UploadedFile;

trait FileExtensionTrait
{
    /**
     * Guess the extension of the given file.
     *
     * @param UploadedFile $file
     *
     * @return string|null
     */
    private function getExtension(UploadedFile $file): ?string
    {
        $originalName = $file->getClientOriginalName();

        if ($extension = \pathinfo($originalName, PATHINFO_EXTENSION)) {
            return $extension;
        }

        if ($extension = $file->guessExtension()) {
            return $extension;
        }

        return null;
    }
}
=======
<?php

namespace Vich\UploaderBundle\Naming\Polyfill;

use Symfony\Component\HttpFoundation\File\UploadedFile;

trait FileExtensionTrait
{
    /**
     * Guess the extension of the given file.
     *
     * @param UploadedFile $file
     *
     * @return string|null
     */
    private function getExtension(UploadedFile $file): ?string
    {
        $originalName = $file->getClientOriginalName();

        if ($extension = \pathinfo($originalName, PATHINFO_EXTENSION)) {
            return $extension;
        }

        if ($extension = $file->guessExtension()) {
            return $extension;
        }

        return null;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
