# 配置

Cache组件

##开始使用

####安装组件
使用 composer 命令进行安装或下载源代码使用。

> composer require badtomcat/cache

```php
$cache = new Badtomcat\Cache\FileCache(__DIR__."/cache");
$cache->set('key', 'taw');
$this->assertEquals($cache->get('key'), 'taw');
$cache->set('balabala', 'balabala',1);
$this->assertEquals($cache->get('balabala'), 'balabala');
sleep(2);
$this->assertEquals($cache->get('balabala'), null);
$cache->flush();
```
