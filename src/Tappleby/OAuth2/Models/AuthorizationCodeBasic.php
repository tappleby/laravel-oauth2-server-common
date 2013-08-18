<?php


namespace Tappleby\OAuth2\Models;


class AuthorizationCodeBasic implements AuthorizationCodeInterface {

  protected $id;
  protected $clientId;
  protected $userId;
  protected $redirectUri;
  protected $expires;
  protected $scopes;

  function __construct($id, $clientId, $userId, $redirectUri, $expires, $scopes)
  {
    $this->id = $id;
    $this->clientId = $clientId;
    $this->userId = $userId;
    $this->redirectUri = $redirectUri;
    $this->expires = $expires;
    $this->scopes = $scopes;
  }

  /**
   * @return string
   */
  function getId()
  {
    return $this->id;
  }

  /**
   * >=40 character client id.
   *
   * @return string
   */
  function getClientId()
  {
    return $this->clientId;
  }

  /**
   * @return int
   */
  function getUserId()
  {
    return $this->userId;
  }

  /**
   * @return string
   */
  function getRedirectUri()
  {
    return $this->redirectUri;
  }

  /**
   * Unix time stamp
   * @return int
   */
  function getExpires()
  {
    return $this->expires;
  }

  /**
   * @return array|null
   */
  function getScopes()
  {
    return $this->scopes;
  }


}