<?php

namespace Tappleby\OAuth2\Models;


interface AccessTokenInterface {

	/**
	 * @return string
	 */
	function getId();

	/**
	 * @return string
	 */
	function getClientId();

	/**
	 * @return int
	 */
	function getUserId();

	/**
	 * Unix time stamp
	 * @return int
	 */
	function getExpires();

	/**
	 * @return array|null
	 */
	function getScopes();
}