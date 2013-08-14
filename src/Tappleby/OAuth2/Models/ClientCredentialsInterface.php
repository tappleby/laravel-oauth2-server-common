<?php

namespace Tappleby\OAuth2\Models;


interface ClientCredentialsInterface {

	/**
	 * >=40 character client id.
	 *
	 * @return string
	 */
	function getId();

	/**
	 * >=40 character client secret.
	 *
	 * @return string
	 */
	function getSecret();

	/**
	 * @return mixed
	 */
	function getRedirectUri();

	/**
	 * @return array|null
	 */
	function getRestrictedGrantTypes();
}