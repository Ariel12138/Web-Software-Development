## CSS 基础

**Id 和 Class 选择器**
- id 选择器为标有特定 id 的 HTML 元素指定特定样式
- CSS 中 id 选择器以“#”来定义
- id 属性只能在每个 HTML 中出现一次
- Class 选择器用于描述一组元素的样式
- Class 可以在多个元素中使用，类选择器用“.”表示

**Background**
- CSS 属性定义背景效果，有color, image, repeat, attachment,postion  
- repeat 默认情况下背景图像平铺重复显示，可以设置在水平或垂直方向平铺   ```background-repeat:repeat-x;```
- position 可以使用关键字，如top/bottom/left/center，关键字使用不超过两个；也可以使用长度值和百分值  
- 背景的简写 ```body {background:#ffffff url('img_tree.png') no-repeat right top;}```
  - 顺序为 color, image, repeat, attachment,postion 不需要全部使用

**Text**
- 对齐 text-align: center/right/left/justify  
- 装饰 text-decoration 用来设置或删除文本的装饰，主要是用来删除链接的下划线  
- 转换 text-transfom: uppercase/lowercase/capitalize  
- 缩进 text-indent
- 间隔 word-spacing 改变字/单词之间的间隔

**Link**
- a:link - 正常，未访问过的链接
- a:visited - 用户已访问过的链接
- a:hover - 当用户鼠标放在链接上时
- a:active - 链接被点击的那一刻

**列表**  

分为无序列表`<ul>`和有序列表`<ol>`  
list-style-type 的设置：  
- none：不使用项目符号  
- disc：实心圆
- circle：空心圆
- square：实心方块
- demical：阿拉伯数字 
- lower-alpha：小写英文字母 
- upper-alpha：大写英文字母 
- lower-roman：小写罗马数字 
- upper-roman：大写罗马数字

使用图片作为列表项：  
- 在`<ul>`下设置 `list-style-image`
- 在`<li>`下设置`background-image`，position设置位置，padding将文字放在列表中
```CSS
ul li {
  background-image: url(sqpurple.gif);
  background-repeat: no-repeat;
  background-position: 0px 5px; 
  padding-left: 14px; 
}
```
`list-style`缩写属性值顺序：  
list-style-type， list-style-position， list-style-image  

**Table**  
表格元素：`<table>,<th>,<td>`  
表格宽度设定： `table{ width: 100%; }`  
表格高度设定： `th{ height: 50px; }`  
表格文字水平对齐： `td{ text-align:right; }`   
垂直对齐： `td{ height: 50px; vertical-align:bottom}`  
边框颜色： `table, td, th{ border: 1px solid green; }`  
文本和背景颜色： `th{ background-color: green; color: white; }`  