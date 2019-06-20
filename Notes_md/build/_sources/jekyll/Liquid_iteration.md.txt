## Liquid 循环迭代

### for 循环
基础循环示例：  
```liquid
{% for product in collection.products %}
    {{ product.title }}
{% endfor %}
```
break；  
continue，跳出当前循环，进行下一次循环；  
   
limit，限定循环的次数
```
<!-- if array = [1,2,3,4,5,6] -->
{% for item in array limit:2 %}
  {{ item }}
{% endfor %}

output: 1 2
```

offset，从指定索引号开始执行循环
```liquid
<!-- if array = [1,2,3,4,5,6] -->
{% for item in array offset:2 %}
  {{ item }}
{% endfor %}

output: 3 4 5 6
```
range，定义循环执行的范围，范围可以是数字或变量
```liquid
{% for i in (3..5) %}
  {{ i }}
{% endfor %}

{% assign num = 4 %}
{% for i in (1..num) %}
  {{ i }}
{% endfor %}

output: 
3 4 5
1 2 3 4
```
reversed，反转循环的执行顺序
```liquid
<!-- if array = [1,2,3,4,5,6] -->
{% for item in array reversed %}
  {{ item }}
{% endfor %}

output: 6 5 4 3 2 1
```
### cycle 循环
循环一组字符串，并按照传入的顺序输出，每次调用时，传入参数中的下一个字符串被输出，cycle必须用在for循环中。

### tablerow
能生成一个HTML表格，必须用`<table>`和`</table>`标签包裹起来  
```liquid
<table>
{% tablerow product in collection.products %}
  {{ product.title }}
{% endtablerow %}
</table>
```
输出如下
```html
<table>
  <tr class="row1">
    <td class="col1">
      Cool Shirt
    </td>
    <td class="col2">
      Alien Poster
    </td>
    <td class="col3">
      Batman Poster
    </td>
    <td class="col4">
      Bullseye Shirt
    </td>
    <td class="col5">
      Another Classic Vinyl
    </td>
    <td class="col6">
      Awesome Jeans
    </td>
  </tr>
</table>
```
cols，定义表格列数
```liquid
{% tablerow product in collection.products cols:2 %}
  {{ product.title }}
{% endtablerow %}
```
offset，在指定index之后开始执行tablerow
```
{% tablerow product in collection.products cols:2 offset:3 %}
  {{ product.title }}
{% endtablerow %}
```
range，定义循环执行的范围，可以用数字和变量定义
```
<!--variable number example-->

{% assign num = 4 %}
<table>
{% tablerow i in (1..num) %}
  {{ i }}
{% endtablerow %}
</table>

<!--literal number example-->

<table>
{% tablerow i in (3..5) %}
  {{ i }}
{% endtablerow %}
</table>
```