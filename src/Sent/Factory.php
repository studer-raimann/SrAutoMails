<?php

namespace srag\Plugins\SrAutoMails\Sent;

use ilSrAutoMailsPlugin;
use srag\DIC\SrAutoMails\DICTrait;
use srag\Plugins\SrAutoMails\Utils\SrAutoMailsTrait;
use stdClass;

/**
 * Class Factory
 *
 * @package srag\Plugins\SrAutoMails\Sent
 */
final class Factory
{

    use DICTrait;
    use SrAutoMailsTrait;

    const PLUGIN_CLASS_NAME = ilSrAutoMailsPlugin::class;
    /**
     * @var self|null
     */
    protected static $instance = null;


    /**
     * Factory constructor
     */
    private function __construct()
    {

    }


    /**
     * @return self
     */
    public static function getInstance() : self
    {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }


    /**
     * @param stdClass $data
     *
     * @return Sent
     */
    public function fromDB(stdClass $data) : Sent
    {
        $sent = $this->newInstance();

        $sent->setRuleId($data->rule_id);
        $sent->setObjectId($data->object_id);
        $sent->setUserId($data->user_id);

        return $sent;
    }


    /**
     * @return Sent
     */
    public function newInstance() : Sent
    {
        $rule = new Sent();

        return $rule;
    }
}
