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
