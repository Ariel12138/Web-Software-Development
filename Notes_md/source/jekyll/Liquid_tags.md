## Liquid Tags 语法

### 控制流

**if控制流**
```liquid
{% if product.title == 'Awesome Shoes' %}
  These shoes are awesome!
{% endif %}
```

**unless控制流**
```liquid
{% unless product.title == 'Awesome Shoes' %}
  These shoes are not awesome.
{% endunless %}
```
等同于  
```
{% if product.title != 'Awesome Shoes' %}
  These shoes are not awesome.
{% endif %}
```

**elsif/else控制流**  
```
{% if customer.name == 'kevin' %}
  Hey Kevin!
{% elsif customer.name == 'anonymous' %}
  Hey Anonymous!
{% else %}
  Hi Stranger!
{% endif %}
```
**case/when控制流**
```liquid
{% assign handle = 'cake' %}
{% case handle %}
  {% when 'cake' %}
     This is a cake
  {% when 'cookie' %}
     This is a cookie
  {% else %}
     This is not a cake nor a cookie
{% endcase %}
```

### raw 标记
临时禁止处理其中的代码，如果输出内容与liquid模版语言有冲突时，可以避免冲突。
```
{% raw %}
  In Handlebars, {{ this }} will be HTML-escaped, but
  {{{ that }}} will not.
{% endraw %}
```
```
In Handlebars, {{ this }} will be HTML-escaped, but {{{ that }}} will not.
```

### 变量标记 Variable Tag

**assign** 能创建一个新变量
```
{% assign my_variable = false %}
{% if my_variable != true %}
  This statement is valid.
{% endif %}
```
  
**capture** 将capture开始与结束标记之间的字符串捕获之后赋值给一个变量，这样创建的变量都是字符串类型。
```liquid
{% capture my_variable %}I am being captured.{% endcapture %}
{{ my_variable }}
```
输出`I am being captured.`

capture 与 assign结合应用的例子：
```
{% assign favorite_food = 'pizza' %}
{% assign age = 35 %}

{% capture about_me %}
I am {{ age }} and my favorite food is {{ favorite_food }}.
{% endcapture %}

{{ about_me }}
```
输出`I am 35 and my favourite food is pizza.`

**increment** 和 **decrement**
使变量加一或减一