<?php

declare(strict_types=1);
/**
 * This file is part of Hyperf.
 *
 * @link     https://www.hyperf.io
 * @document https://hyperf.wiki
 * @contact  group@hyperf.io
 * @license  https://github.com/hyperf/hyperf/blob/master/LICENSE
 */
namespace HyperfTest;

use Hyperf\Testing;
use Hyperf\Utils\ApplicationContext;
use Mockery;
use PHPUnit\Framework\TestCase;

/**
 * Class HttpTestCase.
 * @method get($uri, $data = [], $headers = [])
 * @method post($uri, $data = [], $headers = [])
 * @method json($uri, $data = [], $headers = [])
 * @method file($uri, $data = [], $headers = [])
 */
abstract class HttpTestCase extends TestCase
{
    /**
     * @var Testing\Client
     */
    protected $client;

    /**
     * @var \Psr\Container\ContainerInterface
     */
    protected $container;

    public function __construct($name = null, array $data = [], $dataName = '')
    {
        parent::__construct($name, $data, $dataName);
        $this->container = ApplicationContext::getContainer();
        $this->client = make(Testing\Client::class);
        // $this->client = make(Testing\HttpClient::class, ['baseUri' => 'http://127.0.0.1:9501']);
    }

    public function __call($name, $arguments)
    {
        return $this->client->{$name}(...$arguments);
    }

    protected function tearDown(): void
    {
        Mockery::close();
    }
}
