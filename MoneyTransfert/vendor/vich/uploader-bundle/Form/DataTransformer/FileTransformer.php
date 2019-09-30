<<<<<<< HEAD
<?php

namespace Vich\UploaderBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class FileTransformer implements DataTransformerInterface
{
    public function transform($file): array
    {
        return [
            'file' => $file,
        ];
    }

    public function reverseTransform($data)
    {
        return $data['file'];
    }
}
=======
<?php

namespace Vich\UploaderBundle\Form\DataTransformer;

use Symfony\Component\Form\DataTransformerInterface;

class FileTransformer implements DataTransformerInterface
{
    public function transform($file): array
    {
        return [
            'file' => $file,
        ];
    }

    public function reverseTransform($data)
    {
        return $data['file'];
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
