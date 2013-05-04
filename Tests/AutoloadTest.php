<?php

/*
 * This file is part of the pantarei/oauth2 package.
 *
 * (c) Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Pantarei\Oauth2\Test;

/**
 * Test if autoload able to discover all required classes.
 *
 * @author Wong Hoi Sing Edison <hswong3i@pantarei-design.com>
 */
class AutoloadTest extends \PHPUnit_Framework_TestCase
{
  public function testControllerClassesExist()
  {
    $this->assertTrue(class_exists('Pantarei\Oauth2\Controller\AuthorizationServerController'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Controller\ClientController'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Controller\ResourceServerController'));
    $this->assertTrue(interface_exists('Pantarei\Oauth2\Controller\ControllerInterface'));
  }

  public function testExceptionClassesExist()
  {
    $this->assertTrue(class_exists('Pantarei\Oauth2\Exception\AccessDeniedException'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Exception\InvalidClientException'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Exception\InvalidGrantException'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Exception\InvalidRequestException'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Exception\InvalidScopeException'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Exception\ServerErrorException'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Exception\TemporarilyUnavailableException'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Exception\UnauthorizedClientException'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Exception\UnsupportedGrantTypeException'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Exception\UnsupportedResponseType'));
  }

  public function testGrantTypeClassesExist()
  {
    $this->assertTrue(class_exists('Pantarei\Oauth2\GrantType\AuthorizationCodeGrantType'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\GrantType\ClientCredentialsGrantType'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\GrantType\PasswordGrantType'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\GrantType\RefreshTokenGrantType'));
    $this->assertTrue(interface_exists('Pantarei\Oauth2\GrantType\GrantTypeInterface'));
  }

  public function testRequestClassesExist()
  {
    $this->assertTrue(class_exists('Pantarei\Oauth2\Request\AccessTokenRequest'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Request\AuthorizationRequest'));
    $this->assertTrue(interface_exists('Pantarei\Oauth2\Request\RequestInterface'));
  }

  public function testResponseClassesExist()
  {
    $this->assertTrue(class_exists('Pantarei\Oauth2\Response\AccessTokenResponse'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Response\AuthorizationResponse'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\Response\ErrorResponse'));
    $this->assertTrue(interface_exists('Pantarei\Oauth2\Response\ResponseInterface'));
  }

  public function testResponseTypeClassesExist()
  {
    $this->assertTrue(class_exists('Pantarei\Oauth2\ResponseType\CodeResponseType'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\ResponseType\TokenResponseType'));
    $this->assertTrue(interface_exists('Pantarei\Oauth2\ResponseType\ResponseTypeInterface'));
  }

  public function testTokenTypeClassesExist()
  {
    $this->assertTrue(class_exists('Pantarei\Oauth2\TokenType\BearerTokenType'));
    $this->assertTrue(class_exists('Pantarei\Oauth2\TokenType\MacTokenType'));
    $this->assertTrue(interface_exists('Pantarei\Oauth2\TokenType\TokenTypeInterface'));
  }
}