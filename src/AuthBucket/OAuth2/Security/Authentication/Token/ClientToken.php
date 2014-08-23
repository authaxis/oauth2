<?php

/**
 * This file is part of the authbucket/oauth2 package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\OAuth2\Security\Authentication\Token;

use AuthBucket\OAuth2\Model\ClientInterface;
use Symfony\Component\Security\Core\Authentication\Token\AbstractToken;

/**
 * OAuth2 ClientToken for token endpoint authentication.
 */
class ClientToken extends AbstractToken implements ClientInterface
{
    protected $clientId;
    protected $clientSecret;
    protected $redirectUri;
    protected $providerKey;

    public function __construct(
        $clientId,
        $clientSecret,
        $redirectUri,
        $providerKey,
        array $roles = array()
    )
    {
        parent::__construct($roles);

        $this->clientId = $clientId;
        $this->clientSecret = $clientSecret;
        $this->redirectUri = $redirectUri;
        $this->providerKey = $providerKey;

        parent::setAuthenticated(count($roles) > 0);
    }

    public function getId()
    {
        return 0;
    }

    public function setClientId($clientId)
    {
        $this->clientId = $clientId;

        return $this;
    }

    public function getClientId()
    {
        return $this->clientId;
    }

    public function setClientSecret($clientSecret)
    {
        $this->clientSecret = $clientSecret;

        return $this;
    }

    public function getClientSecret()
    {
        return $this->clientSecret;
    }

    public function setRedirectUri($redirectUri)
    {
        $this->redirectUri = $redirectUri;

        return $this;
    }

    public function getRedirectUri()
    {
        return $this->redirectUri;
    }

    public function getProviderKey()
    {
        return $this->providerKey;
    }

    public function getCredentials()
    {
        return '';
    }

    public function serialize()
    {
        return serialize(array(
            $this->clientId,
            $this->clientSecret,
            $this->redirectUri,
            $this->providerKey,
            parent::serialize()
        ));
    }

    public function unserialize($str)
    {
        list(
            $this->clientId,
            $this->clientSecret,
            $this->redirectUri,
            $this->providerKey,
            $parentStr
        ) = unserialize($str);
    }
}
