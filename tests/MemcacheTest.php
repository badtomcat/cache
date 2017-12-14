<?php
class MemcacheTest extends PHPUnit_Framework_TestCase
{
    public function testMemcache()
    {
    	//https://pecl.php.net/package/memcache/3.0.8/windows
    	$cache = new Badtomcat\Cache\Memcache([
    			'host'     => '192.168.33.10',
    			'port'     => 11111,
    	]);
    	$cache->set('key', 'taw');
    	$this->assertEquals($cache->get('key'), 'taw');
    	$cache->set('balabala', 'balabala',1);
    	$this->assertEquals($cache->get('balabala'), 'balabala');
    	//echo "Sleep 1.5s ...\n";
    	sleep(1.5);
    	//     	print $cache->get('balabala');
    	$this->assertEquals($cache->get('balabala'), '');
    }
    public function testMemcacheArr()
    {
    	//https://pecl.php.net/package/memcache/3.0.8/windows
    	$cache = new Badtomcat\Cache\Memcache([
    			'host'     => '192.168.33.10',
    			'port'     => 11111,
    	]);
    	$data = [
    			'k1' => '123',
    			'ba' => 'balabala',
    			'arr' => [2,54]
    	];
    	$cache->set('key', $data);
    	//var_dump($cache->get('key'));
    }
    public function testNonexist()
    {
    	$cache = new Badtomcat\Cache\Memcache([
    			'host'     => '192.168.33.10',
    			'port'     => 11111,
    	]);
    	$cache->set('false', false);
    	$this->assertNotTrue($cache->get('false'));
    	$this->assertNotTrue($cache->get('gogo'));
    }
}


