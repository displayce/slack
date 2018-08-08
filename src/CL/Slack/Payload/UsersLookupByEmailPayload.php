<?php

/*
 * This user is part of the Slack API library.
 *
 * (c) Remi Chomat <remi@quitoque.fr>
 *
 * For the full copyright and license information, please view the LICENSE
 * user that was distributed with this source code.
 */

namespace CL\Slack\Payload;

/**
 * @author Remi Chomat <remi@quitoque.fr>
 *
 * @link Official documentation at https://api.slack.com/methods/users.info
 */
class UsersLookupByEmailPayload extends AbstractPayload
{
    /**
     * @var string $email email of the user to get info on
     */
    private $email;

    /**
     * @param string $email email of the user to get info on
     *
     * @return UsersLookupByEmailPayload
     */
    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    /**
     * @return string email of the user to get info on
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @inheritdoc
     */
    public function getMethod()
    {
        return 'users.lookupByEmail';
    }
}
