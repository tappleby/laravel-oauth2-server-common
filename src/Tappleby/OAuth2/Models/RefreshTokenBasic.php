<?php

namespace Tappleby\OAuth2\Models;


class RefreshTokenBasic implements RefreshTokenInterface {

	protected $id;
	protected $client_id;
	protected $user_id;
	protected $expires;
	protected $scopes = null;

	function __construct($id, $client_id, $user_id, $expires, $scopes)
	{
		$this->id = $id;
		$this->client_id = $client_id;
		$this->user_id = $user_id;
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
	 * @return string
	 */
	function getClientId()
	{
		return $this->client_id;
	}

	/**
	 * @return int
	 */
	function getUserId()
	{
		return $this->user_id;
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