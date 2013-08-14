<?php

namespace Tappleby\OAuth2\Repositories;

use Tappleby\OAuth2\Models\ClientCredentialsInterface;

interface ClientCredentialsRepositoryInterface {

	/**
	 * @param $client_id
	 * @return ClientCredentialsInterface|null
	 */
	function find($client_id);

	/**
	 * @param array $attributes
	 * @param bool $save
	 * @return ClientCredentialsInterface|null
	 */

	function create($attributes, $save=true);

	/**
	 * @param ClientCredentialsInterface $client
	 * @return bool
	 */
	function save(ClientCredentialsInterface $client);

}