<?php

/*
 * This file is part of the Opfura package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Opfura\UserBundle\Model;

use Doctrine\ORM\Mapping as ORM;
use FOS\UserBundle\Model\User as BaseUser;
use Gedmo\Mapping\Annotation as Gedmo;

/**
 * User
 *
 * @author Tom Haskins-Vaughan <tom@tomhv.uk>
 * @since  0.0.1
 */
class User extends BaseUser
{
    /**
     * @Gedmo\Timestampable(on="create")
     * @ORM\Column(type="datetime")
     */
    protected $createdAt;

    /**
     * @Gedmo\Timestampable(on="update")
     * @ORM\Column(type="datetime")
     */
    protected $updatedAt;

    /**
     * Set createdAt
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.1
     *
     * @param  \DateTime $createdAt
     *
     * @return User
     */
    public function setCreatedAt(\DateTime $createdAt)
    {
        $this->createdAt = $createdAt;

        return $this;
    }

    /**
     * Get createdAt
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.1
     *
     * @return \DateTime
     */
    public function getCreatedAt()
    {
        return $this->createdAt;
    }

    /**
     * Set updatedAt
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.1
     *
     * @param \DateTime $updatedAt
     *
     * @return User
     */
    public function setUpdatedAt(\DateTime $updatedAt)
    {
        $this->updatedAt = $updatedAt;

        return $this;
    }

    /**
     * Get updatedAt
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.0.1
     *
     * @return \DateTime
     */
    public function getUpdatedAt()
    {
        return $this->updatedAt;
    }
}
