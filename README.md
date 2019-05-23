# PHP 的 protobuf 样例

测试系统: MacOS

## 关于 protobuf

简单来说, 就是一个混合语言数据标准, 通过 proto 文件, 可以生成目标代码, 目标代码可以高效序列化, 并跨语言反解出来, 通常用于 RPC 系统.
目前我们能看到 proto 2 和 proto 3 两个版本

## 关于版本

**pb: protobuf 简称, 后文统一如下**

pb2, pb3 文件有少许不同, 故 proto 文件不可混用, 具体差别可以网上搜索, 不赘述
而 pb2 默认是不支持 php 的, 所以需要借助一定手段, 而 pb3 直接可用支持 php, 具体选择可以根据当前项目情况, 比如我们大部分系统使用的是 pb2, 所以我们这只能使用 pb2

由于 php 的 pb2 着实让自己花费了很长时间, 这里整理出来供大家参考

## 目录介绍

```
- misc
  - allegro-pb2.zip - proto 2 环境安装包
  - google-pb3.zip  - proto 3 环境安装包
- src
  - v2              - proto 2 demo
    - ThirdV2       - 生成代码
    - DemoV2.php    - 测试代码, 可以直接执行
    - gen2.sh       - 修改 ThirdV2.proto 后执行该脚本可以生成目标代码
    - ThirdV2.proto - proto 文件
  - v3              - proto 3 demo
    - ...           - 同上
```

## 配置环境

需要的环境安装文件都在 misc 中, 也可以自行选择自己喜欢的版本

### pb2

使用 pb2, 网上能找到的有两种

- https://github.com/allegro/php-protobuf
- https://github.com/drslump/Protobuf-PHP (已经确认无法安装....参看 issue: https://github.com/drslump/Protobuf-PHP/issues/71)

故我们只能使用 allegro/php-protobuf.

通过 proto 文件生成 php 代码和使用生成的 php 代码时, 都需要编译出扩展, 否则报错 `This is a stub file for IDEs, don't use it directly!`
错误出处: `vendor/allegro/php-protobuf/stubs/ProtobufMessage.php`

安装过程与正常 so 安装过程无异, 遇到问题谷歌吧

```sh
cd misc
unzip allegro-bp2.zip
cd php-protobuf-master
phpize
./configure
make
make install

# so && ini 换成自己的路径
echo "extension=/Users/xxx/protobuf.so" >> /path/to/php.ini
```

### pb3


直接使用官方仓库: https://github.com/protocolbuffers/protobuf

不需要安装 so 扩展, 安装 proto 命令

```sh
cd misc
unzip google-pb3.zip
cd protobuf-3.3.0
./configure
make
make install

# 重进 shell 查看版本
protoc --version
```

## 测试

进入项目根目录, 执行

```sh
composer install -o
```

然后可以测试

```sh
$ php src/v2/DemoV2.php
string(76) "0a07746869732d696411000000000000004019000000000000084021f6285c8fc2f508402803"
array(5) {
  ["uid"]=>
  string(7) "this-id"
  ["lng"]=>
  float(2)
  ["lat"]=>
  float(3)
  ["speed"]=>
  float(3.12)
  ["loca_type"]=>
  int(3)
}

$ php src/v3/DemoV3.php
string(76) "0a07746869732d696411000000000000004019000000000000084021f6285c8fc2f508402803"
array(5) {
  ["uid"]=>
  string(7) "this-id"
  ["lng"]=>
  float(2)
  ["lat"]=>
  float(3)
  ["speed"]=>
  float(3.12)
  ["loca_type"]=>
  int(3)
}
```

## 其他

如果使用 pb2 生成的代码, 需引入包 allegro/php-protobuf 
如果使用 pb3 生成的代码, 需引入包 google/protobuf 

鉴于一般生成的代码命名空间比较特殊, 可以使用 composer 的 `classmap` 来加载, 具体可以参考本项目的 composer.json

enjoy it!
