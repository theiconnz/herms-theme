<?php
/**
 * Herms Home (https://theicon.co.nz/)
 *
 * Module
 *
 * PHP version 7
 *
 * @category Module
 * @package  HermsHome
 * @author   Don Nuwinda <nuwinda@gmail.com>
 * @license  GPL http://theicon.co.nz
 * @link     http://theicon.co.nz
 */
namespace HermsHome;

use Zend\Router\Http\Literal;
use Zend\Router\Http\Segment;
use Zend\ServiceManager\Factory\InvokableFactory;

return [
    'service_manager' => [
        'factories' => [
            'ThemeManager' => Service\ThemeFactory::class
        ],
    ]
];