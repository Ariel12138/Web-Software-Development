## Liquid 模版语言

### 基本

### 介绍

liquid语言可以分为三类，objects，tags，和filters

objects，即标记在页面上显示内容的区域，用两个花括号,如
 ```liquid
 {{ content }}
 ```

tags,为模版创建逻辑和控制流时使用，用花括号和百分号围住，可以用tags写条件和循环，tags按照功能可以分为三类，控制流，迭代，和分配变量。
```liquid
{% if a == b %}
{% endif %}
```

filters，用于改变object的输出，在object中使用，并用`|`隔开，如
```liquid
{{ "/my/fancy/url" | append: ".html"}}

/my/fancy/url.html
```

### 运算符

### 逻辑真假

字符串，空内容，0等判断为真，nil 和 false 判断为假

### 数据类型





