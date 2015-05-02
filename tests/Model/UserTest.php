<?php

/*
 * This file is part of the Yeriki UserBundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Yeriki\UserBundle\Tests\Model;

use Yeriki\UserBundle\Model\User;

/**
 * UserTest
 *
 * @author Tom Haskins-Vaughan <tom@tomhv.uk>
 * @since  0.0.1 (2015-04-14)
 */
class UserTest extends \PHPUnit_Framework_TestCase
{
    /**
     * Test firstname
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.4.0
     */
    public function testFirstname()
    {
        $user = new User;
        $user->setFirstname('Apple');

        $this->assertSame('Apple', $user->getFirstname());
    }

    /**
     * Test lastname
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.4.0
     */
    public function testLastname()
    {
        $user = new User;
        $user->setLastname('McFritter');

        $this->assertSame('McFritter', $user->getLastname());
    }

    /**
     * Test name
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.4.0
     */
    public function testName()
    {
        $user = new User;
        $user->setFirstname('Apple');
        $user->setLastname('McFritter');

        $this->assertSame('Apple McFritter', $user->getName());
    }

    /**
     * Test createdAt
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.1
     */
    public function testCreatedAt()
    {
        $user = new User;
        $user->setCreatedAt(new \DateTime(
            '2015-04-04 12:00:00'
        ));

        $this->assertSame(
            '2015-04-04 12:00:00',
            $user->getCreatedAt()->format('Y-m-d H:i:s')
        );
    }

    /**
     * Test updatedAt
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.1
     */
    public function testUpdatedAt()
    {
        $user = new User;
        $user->setUpdatedAt(new \DateTime(
            '2015-04-04 12:00:00'
        ));

        $this->assertSame(
            '2015-04-04 12:00:00',
            $user->getUpdatedAt()->format('Y-m-d H:i:s')
        );
    }
}
