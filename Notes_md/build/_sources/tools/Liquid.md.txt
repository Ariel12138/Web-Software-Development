## Liquid 语言

### 介绍
Liquid是一门开源模版语言，用于加载动态内容。  

### 基本分类

liquid代码可以分为三类，objects，tags，和filters三类

**objects**，即标记在页面上显示内容的区域，用两个花括号,如
 ```liquid
 {{ page.title }}
 ```

**tags**,为模版创建逻辑和控制流时使用，用花括号和百分号围住，可以用tags写条件和循环，tags按照功能可以分为三类，控制流，迭代，和分配变量。
```liquid
{% if user %}
  Hello {{ user.name }}!
{% endif %}
```

**filters**，用于改变object的输出，在object中使用，并用`|`隔开，如
```liquid
{{ "/my/fancy/url" | append: ".html"}}

/my/fancy/url.html
```
### 运算符

### 逻辑真假

字符串，空内容，0等判断为真，nil 和 false 判断为假

### 数据类型
有字符串，数字，布尔，Nil，和数组五中字符类型。  

