# 工厂模式

- 工厂类感觉就是 提供一个 ApiFactory.php 当做中转，外部通过 ApiFactory.php的静态方法进到工厂内部的车间。然后使用车间的东西
- 我们需要的就是保证每个车间的布局是一样，在实例化后保证调用的方式能够统一，所以车间必须继承ApiAbstract.php 的设计模式，这样通过获取最少的信息拿到自己想要的结果了

```

$className = 'MMP' // or Fuck;

$obj = ApiFactory::getApiObj($className);

$obj->getResult;
```