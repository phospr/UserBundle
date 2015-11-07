<?php

/*
 * This file is part of the Phospr UserBundle package.
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Phospr\UserBundle\Model;

use Symfony\Component\Security\Core\User\AdvancedUserInterface;

/**
 * @author Tom Haskins-Vaughan <tom@tomhv.uk>
 * @since  0.4.0
 */
interface UserInterface extends AdvancedUserInterface
{
    /**
     * Get name
     *
     * @author Tom Haskins-Vaughan <tom@tomhv.uk>
     * @since  0.4.0
     *
     * @return string
     */
    public function getName();
}
