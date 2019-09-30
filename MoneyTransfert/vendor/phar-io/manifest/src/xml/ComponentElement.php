<<<<<<< HEAD
<?php
/*
 * This file is part of PharIo\Manifest.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Manifest;

class ComponentElement extends ManifestElement {
    public function getName() {
        return $this->getAttributeValue('name');
    }

    public function getVersion() {
        return $this->getAttributeValue('version');
    }
}
=======
<?php
/*
 * This file is part of PharIo\Manifest.
 *
 * (c) Arne Blankerts <arne@blankerts.de>, Sebastian Heuer <sebastian@phpeople.de>, Sebastian Bergmann <sebastian@phpunit.de>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace PharIo\Manifest;

class ComponentElement extends ManifestElement {
    public function getName() {
        return $this->getAttributeValue('name');
    }

    public function getVersion() {
        return $this->getAttributeValue('version');
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
