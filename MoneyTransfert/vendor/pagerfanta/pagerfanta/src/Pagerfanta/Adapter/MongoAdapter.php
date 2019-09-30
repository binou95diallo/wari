<<<<<<< HEAD
<?php

/*
 * This file is part of the Pagerfanta package.
 *
 * (c) Pablo Díez <pablodip@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pagerfanta\Adapter;

/**
 * MongoAdapter.
 *
 * @author Sergey Ponomaryov <serg.ponomaryov@gmail.com>
 */
class MongoAdapter implements AdapterInterface
{
    private $cursor;

    /**
     * Constructor.
     *
     * @param \MongoCursor $cursor The cursor.
     */
    public function __construct(\MongoCursor $cursor)
    {
        $this->cursor = $cursor;
    }

    /**
     * Returns the cursor.
     *
     * @return \MongoCursor The cursor.
     */
    public function getCursor()
    {
        return $this->cursor;
    }

    /**
     * {@inheritdoc}
     */
    public function getNbResults()
    {
        return $this->cursor->count();
    }

    /**
     * {@inheritdoc}
     */
    public function getSlice($offset, $length)
    {
        $this->cursor->limit($length);
        $this->cursor->skip($offset);

        return $this->cursor;
    }
}
=======
<?php

/*
 * This file is part of the Pagerfanta package.
 *
 * (c) Pablo Díez <pablodip@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pagerfanta\Adapter;

/**
 * MongoAdapter.
 *
 * @author Sergey Ponomaryov <serg.ponomaryov@gmail.com>
 */
class MongoAdapter implements AdapterInterface
{
    private $cursor;

    /**
     * Constructor.
     *
     * @param \MongoCursor $cursor The cursor.
     */
    public function __construct(\MongoCursor $cursor)
    {
        $this->cursor = $cursor;
    }

    /**
     * Returns the cursor.
     *
     * @return \MongoCursor The cursor.
     */
    public function getCursor()
    {
        return $this->cursor;
    }

    /**
     * {@inheritdoc}
     */
    public function getNbResults()
    {
        return $this->cursor->count();
    }

    /**
     * {@inheritdoc}
     */
    public function getSlice($offset, $length)
    {
        $this->cursor->limit($length);
        $this->cursor->skip($offset);

        return $this->cursor;
    }
}
>>>>>>> 920aea0ab65ee18c3c6889c75023fc25561a852b
