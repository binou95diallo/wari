<<<<<<< HEAD
<?php

namespace Negotiation;

class CharsetNegotiator extends AbstractNegotiator
{
    /**
     * {@inheritdoc}
     */
    protected function acceptFactory($accept)
    {
        return new AcceptCharset($accept);
    }
}
=======
<?php

namespace Negotiation;

class CharsetNegotiator extends AbstractNegotiator
{
    /**
     * {@inheritdoc}
     */
    protected function acceptFactory($accept)
    {
        return new AcceptCharset($accept);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
