<<<<<<< HEAD
<?php

namespace Sabberworm\CSS\Parsing;

/**
* Thrown if the CSS parsers attempts to print something invalid
*/
class OutputException extends SourceException {
	public function __construct($sMessage, $iLineNo = 0) {
		parent::__construct($sMessage, $iLineNo);
	}
=======
<?php

namespace Sabberworm\CSS\Parsing;

/**
* Thrown if the CSS parsers attempts to print something invalid
*/
class OutputException extends SourceException {
	public function __construct($sMessage, $iLineNo = 0) {
		parent::__construct($sMessage, $iLineNo);
	}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
}