# Logc-webman 日志中心webman专用客户端
当前客户端是用于适配LogC日志中心的Webman客户端，用于快捷上报日志使用；

## 安装
```bash
composer require jarviscdr/logc-webman
```

## 使用
```php
# 在插件的配置文件中修改下面的配置
'api_host'        => 'http://127.0.0.1:10001',  // 日志中心API地址
'api_timeout'     => 1.0,                       // 日志中心API请求超时时间 单位秒
'project'         => 'FantasyTech',             // 默认项目名称
'throw_exception' => false,                     // 是否抛出异常（如果为false，记录日志失败也不会抛出异常）

// 上报日志
logc(['err' => -1, 'data' => '订单请求异常', 'oid' => 1234567890], 'order,alipay', \Jarviscdr\LogcWebman\LogcConstant::INFO);
```
