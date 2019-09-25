<?php

namespace srag\Notifications4Plugin\SrAutoMails\Utils;

use srag\Notifications4Plugin\SrAutoMails\Notification\Language\Repository as NotificationLanguageRepository;
use srag\Notifications4Plugin\SrAutoMails\Notification\Language\RepositoryInterface as NotificationLanguageRepositoryInterface;
use srag\Notifications4Plugin\SrAutoMails\Notification\Repository as NotificationRepository;
use srag\Notifications4Plugin\SrAutoMails\Notification\RepositoryInterface as NotificationRepositoryInterface;
use srag\Notifications4Plugin\SrAutoMails\Parser\Repository as ParserRepository;
use srag\Notifications4Plugin\SrAutoMails\Parser\RepositoryInterface as ParserRepositoryInterface;
use srag\Notifications4Plugin\SrAutoMails\Sender\Repository as SenderRepository;
use srag\Notifications4Plugin\SrAutoMails\Sender\RepositoryInterface as SenderRepositoryInterface;
use srag\Notifications4Plugin\SrAutoMails\UI\UI;
use srag\Notifications4Plugin\SrAutoMails\UI\UIInterface;

/**
 * Trait Notifications4PluginTrait
 *
 * @package srag\Notifications4Plugin\SrAutoMails\Utils
 *
 * @author  studer + raimann ag - Team Custom 1 <support-custom1@studer-raimann.ch>
 */
trait Notifications4PluginTrait
{

    /**
     * @param string $notification_class
     * @param string $language_class
     *
     * @return NotificationRepositoryInterface
     */
    protected static function notification(string $notification_class, string $language_class) : NotificationRepositoryInterface
    {
        return NotificationRepository::getInstance($notification_class, $language_class);
    }


    /**
     * @param string $language_class
     *
     * @return NotificationLanguageRepositoryInterface
     */
    protected static function notificationLanguage(string $language_class) : NotificationLanguageRepositoryInterface
    {
        return NotificationLanguageRepository::getInstance($language_class);
    }


    /**
     * @return UIInterface
     */
    protected static function notificationUI() : UIInterface
    {
        return UI::getInstance();
    }


    /**
     * @return ParserRepositoryInterface
     */
    protected static function parser() : ParserRepositoryInterface
    {
        return ParserRepository::getInstance();
    }


    /**
     * @return SenderRepositoryInterface
     */
    protected static function sender() : SenderRepositoryInterface
    {
        return SenderRepository::getInstance();
    }
}
