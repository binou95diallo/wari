<<<<<<< HEAD
<?php

namespace Negotiation;

class EncodingNegotiator extends AbstractNegotiator
{
    /**
     * {@inheritdoc}
     */
    protected function acceptFactory($accept)
    {
        return new AcceptEncoding($accept);
    }
}
=======
<?php

namespace Negotiation;

class EncodingNegotiator extends AbstractNegotiator
{
    /**
     * {@inheritdoc}
     */
    protected function acceptFactory($accept)
    {
        return new AcceptEncoding($accept);
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
