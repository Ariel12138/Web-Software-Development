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
