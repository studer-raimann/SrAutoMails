<?php

namespace srag\Plugins\SrAutoMails\Access;

use ilOrgUnitAssistantPlugin;
use srag\AVL\Plugins\OrgUnitAssistant\Utils\OrgUnitAssistantTrait;
use srag\DIC\DICTrait;

/**
 * Class Users
 *
 * @package srag\Plugins\SrAutoMails\Access
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
final class Users {

	use DICTrait;
	use OrgUnitAssistantTrait;
	const PLUGIN_CLASS_NAME = ilOrgUnitAssistantPlugin::class;
	/**
	 * @var self
	 */
	protected static $instance = NULL;


	/**
	 * @return self
	 */
	public static function getInstance(): self {
		if (self::$instance === NULL) {
			self::$instance = new self();
		}

		return self::$instance;
	}


	/**
	 * Users constructor
	 */
	private function __construct() {

	}


	/**
	 * @return array
	 */
	public function getUsers(): array {
		$result = self::dic()->database()->queryF('SELECT usr_id, firstname, lastname FROM usr_data WHERE active=%s', [
			"integer"
		], [ 1 ]);

		$array = [];

		while (($row = $result->fetchAssoc()) !== false) {
			$array[$row["usr_id"]] = $row["lastname"] . ", " . $row["firstname"];
		}

		return $array;
	}
}
