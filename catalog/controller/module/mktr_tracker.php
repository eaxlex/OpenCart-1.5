<?php
/**
 * @noinspection PhpUnused
 *
 * @copyright   © EAX LEX SRL. All rights reserved.
 * @license     http://opensource.org/licenses/osl-3.0.php - Open Software License (OSL 3.0)
 **/

if (!defined('MKTR_ROOT')) {
    define('MKTR_ROOT', dirname(DIR_APPLICATION) . '/');
}

if (!defined('MKTR_LIB')) {
    if (VERSION >= "4") {
        define('MKTR_LIB', MKTR_ROOT . '/extension/mktr/' . basename(DIR_SYSTEM) . '/library/mktr/');
    } else {
        define('MKTR_LIB', dirname(DIR_SYSTEM) . '/' . basename(DIR_SYSTEM) . '/library/mktr/');
    }
}

/** @noinspection PhpIncludeInspection */
require_once MKTR_LIB.'vendor/autoload.php';

class ControllerModuleMktrTracker extends Controller {
    use \Mktr\Tracker\Catalog;

    public function __construct($registry) {
        parent::__construct($registry);
        self::init($registry, $this);
    }
}
