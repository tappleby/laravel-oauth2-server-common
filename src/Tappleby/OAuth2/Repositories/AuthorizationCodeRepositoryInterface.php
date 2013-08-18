<?php

namespace Tappleby\OAuth2\Repositories;


use Tappleby\OAuth2\Models\AuthorizationCodeInterface;

interface AuthorizationCodeRepositoryInterface {

	/**
	 * @param $code
	 * @return AuthorizationCodeInterface|null
	 */
	function find($code);

	/**
	 * @param array $attributes
	 * @param bool $save
	 * @return AuthorizationCodeInterface|null
	 */

	function create($attributes, $save=true);

	/**
	 * @param AuthorizationCodeInterface $code
	 * @return bool
	 */
	function save(AuthorizationCodeInterface $code);

	/**
	 * @param AuthorizationCodeInterface|string $code
	 * @return bool
	 */
	function delete($code);

}