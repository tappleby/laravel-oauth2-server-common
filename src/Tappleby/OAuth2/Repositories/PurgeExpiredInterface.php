<?php namespace Tappleby\OAuth2\Repositories;


interface PurgeExpiredInterface {

	/**
	 * Purges expired tokens or codes.
	 *
	 * @return void
	 */
	function purgeExpired();
}