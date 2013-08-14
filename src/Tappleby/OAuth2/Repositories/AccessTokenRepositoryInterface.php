<?php

namespace Tappleby\OAuth2\Repositories;


use Tappleby\OAuth2\Models\AccessTokenInterface;

interface AccessTokenRepositoryInterface {

	/**
	 * @param $token
	 * @return AccessTokenInterface|null
	 */
	function find($token);

	/**
	 * @param array $attributes
	 * @param bool $save
	 * @return AccessTokenInterface|null
	 */

	function create($attributes, $save=true);

	/**
	 * @param AccessTokenInterface $token
	 * @return bool
	 */
	function save(AccessTokenInterface $token);

	/**
	 * @param AccessTokenInterface|string $token
	 * @return bool
	 */
	function delete($token);

}