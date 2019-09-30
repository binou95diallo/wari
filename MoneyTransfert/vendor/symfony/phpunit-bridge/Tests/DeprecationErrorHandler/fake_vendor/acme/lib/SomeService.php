<<<<<<< HEAD
<?php

namespace acme\lib;

class SomeService
{
    public function deprecatedApi()
    {
        @trigger_error(
            __FUNCTION__.' is deprecated! You should stop relying on it!',
            E_USER_DEPRECATED
        );
    }
}
=======
<?php

namespace acme\lib;

class SomeService
{
    public function deprecatedApi()
    {
        @trigger_error(
            __FUNCTION__.' is deprecated! You should stop relying on it!',
            E_USER_DEPRECATED
        );
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
