<<<<<<< HEAD
<?php

namespace Sabberworm\CSS;

interface Renderable {
	public function __toString();
	public function render(\Sabberworm\CSS\OutputFormat $oOutputFormat);
	public function getLineNo();
=======
<?php

namespace Sabberworm\CSS;

interface Renderable {
	public function __toString();
	public function render(\Sabberworm\CSS\OutputFormat $oOutputFormat);
	public function getLineNo();
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
}