<?php

namespace Tappleby\OAuth2\Repositories;


use Tappleby\OAuth2\Models\RefreshTokenInterface;

interface RefreshTokenRepositoryInterface {

	/**
	 * @param $token
	 * @return RefreshTokenInterface|null
	 */
	function find($token);

	/**
	 * @param array $attributes
	 * @param bool $save
	 * @return RefreshTokenInterface|null
	 */

	function create($attributes, $save=true);

	/**
	 * @param RefreshTokenInterface $token
	 * @return bool
	 */
	function save(RefreshTokenInterface $token);

	/**
	 * @param RefreshTokenInterface|string $token
	 * @return bool
	 */
	function delete($token);

}