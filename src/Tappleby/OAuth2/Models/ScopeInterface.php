<?php
/*
 * User: tappleby
 * Date: 2014-05-24
 * Time: 9:38 PM
 */

namespace Tappleby\OAuth2\Models;


interface ScopeInterface {
	/**
	 * @return array|null
	 */
	function getScopes();
}