<?php

use Spryker\Shared\Log\LogConstants;
use Spryker\Shared\Propel\PropelConstants;
use Spryker\Shared\Queue\QueueConstants;
use Spryker\Shared\RabbitMq\RabbitMqEnv;

require('config_default-docker.php');

$config[QueueConstants::QUEUE_WORKER_OUTPUT_FILE_NAME] = APPLICATION_ROOT_DIR . '/data/US/logs/ZED/queue.out';
$config[PropelConstants::LOG_FILE_PATH] = APPLICATION_ROOT_DIR . '/data/US/logs/ZED/propel.out';

$config[LogConstants::LOG_FILE_PATH_YVES] = APPLICATION_ROOT_DIR . '/data/US/logs/YVES/application.out';
$config[LogConstants::LOG_FILE_PATH_ZED] = APPLICATION_ROOT_DIR . '/data/US/logs/ZED/application.out';
$config[LogConstants::LOG_FILE_PATH_GLUE] = APPLICATION_ROOT_DIR . '/data/US/logs/GLUE/application.out';

$config[LogConstants::EXCEPTION_LOG_FILE_PATH_YVES] = APPLICATION_ROOT_DIR . '/data/US/logs/YVES/exception.out';
$config[LogConstants::EXCEPTION_LOG_FILE_PATH_ZED] = APPLICATION_ROOT_DIR . '/data/US/logs/ZED/exception.out';
$config[LogConstants::EXCEPTION_LOG_FILE_PATH_GLUE] = APPLICATION_ROOT_DIR . '/data/US/logs/GLUE/exception.out';

$config[RabbitMqEnv::RABBITMQ_CONNECTIONS]['US'][RabbitMqEnv::RABBITMQ_DEFAULT_CONNECTION] = true;
$config[RabbitMqEnv::RABBITMQ_API_VIRTUAL_HOST] = '/US_docker_zeds';