<?php

/**
 * This file is part of the authbucket/oauth2 package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace AuthBucket\OAuth2\Tests\Entity;

use Doctrine\ORM\EntityRepository;
use AuthBucket\OAuth2\Model\ClientInterface;
use AuthBucket\OAuth2\Model\ClientManagerInterface;

/**
 * ClientRepository
 *
 * This class was generated by the Doctrine ORM. Add your own custom
 * repository methods below.
 */
class ClientRepository extends EntityRepository implements ClientManagerInterface
{
    public function getClass()
    {
        return $this->getClassName();
    }

    public function createClient()
    {
        $class = $this->getClass();

        return new $class();
    }

    public function deleteClient(ClientInterface $client)
    {
        $this->getEntityManager()->remove($client);
        $this->getEntityManager()->flush();
    }

    public function reloadClient(ClientInterface $client)
    {
        $this->getEntityManager()->refresh($client);
    }

    public function updateClient(ClientInterface $client)
    {
        $this->getEntityManager()->persist($client);
        $this->getEntityManager()->flush();
    }

    public function findClientByClientId($clientId)
    {
        return $this->findOneBy(array(
            'clientId' => $clientId,
        ));
    }
}
