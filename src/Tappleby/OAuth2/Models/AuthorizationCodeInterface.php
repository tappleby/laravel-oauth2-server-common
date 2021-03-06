<?php


namespace Tappleby\OAuth2\Models;


interface AuthorizationCodeInterface extends ScopeInterface {

  /**
   * @return string
   */
  function getId();

  /**
   * >=40 character client id.
   *
   * @return string
   */
  function getClientId();

  /**
   * @return int
   */
  function getUserId();

  /**
   * @return string
   */
  function getRedirectUri();

  /**
   * Unix time stamp
   * @return int
   */
  function getExpires();
}