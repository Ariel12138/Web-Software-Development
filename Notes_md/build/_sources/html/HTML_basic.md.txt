

## HTML 基础

Html，超文本标记语言，是负责描述文档语义的语言，除了语义，什么都没有

Html 的网络术语：

- xhtml 符合 xml 语法标准的 html
- dhtml 动态的html。 javascript + css + html

Html 颜色：

- 纯单词表示：red, green, blue, orange, gray
- 10进制表示：rgb(255,0,0)
- 16进制表示：#FF0000 等

#### Html结构

- 文档声明头：`<!DOCTYPE html>`

  ```html
  <!doctype html>
  <html lang="en">
   <head>
    <meta charset="UTF-8">
    <meta name="Generator" content="EditPlus®">
    <meta name="Author" content="">
    <meta name="Keywords" content="">
    <meta name="Description" content="">
    <title>Document</title>
   </head>
   <body>
  
   </body>
  </html>
  ```

- meta 标签提供有关页面的基本信息 在head标签内 包括一些页面配置

  - charset 字符集 一般使用 UTF-8
  - Keywords 定义关键词，提高搜索引擎命中率
  - Description 设置页面描述，能够在搜索结果中显示这些语句，SEO（搜索引擎优化）

-  body标签属性：
  - bgcolor 整个网页的背景颜色
  - background 整个网页的背景图片
  - text 设置网页中文本颜色
  - leftmargin/ topmargin/ rightmargin/ bottommargin 设置边距

#### 排版标签：

- 注释  <!-- 注释  -->
- align=""  对齐方式，包括left/ center/ right
- 文本级标签 p, span, a, b, i, u, em 标签中只能放文字、图片和表单元素
- 容器级标签 div, h, li, dt, dd 可以放任何东西
- 块级标签 div 和 span
  - div 和 span 的唯一区别：span 不换行， div 换行
  - span 表示小区域小跨度的标签。但是一个文本级的标签 不能放p, h, ul, dl, ol, div
  - span 里面放置小元素，div里面放置大东西
- 一些小标记：
  - u 下划线标记
  - s 或 del 中划线标记（删除线）
  - b 或 strong 粗体
  - 上标 sup 下标 sub

超链接：

- 外部链接

```html
<a href="02页面.html">点击进入另外一个文件</a>
```

- 锚链接

```html
<a name="name1"></a>
<a href="a.html#name1">回到顶部</a>
```

- 超链接属性

  - `href`：目标URL
  - `title`：悬停文本。
  - `name`：主要用于设置一个锚点的名称。
  - `target`：告诉浏览器用什么方式来打开目标页面。`target`属性有以下几个值：
    - `_self`：在同一个网页中显示（默认值）
    - `_blank`：**在新的窗口中打开**。
    - `_parent`：在父窗口中显示
    - `_top`：在顶级窗口中显示
  - 使用target= ‘’_blank‘’ 表示在新的窗口中打开链接，否则就是在当前页面跳转

```html
<a href="1.html" title="悬停文本" target="_blank">链接的内容</a>
```

### 图片标签 

img 是单边标记标签
- src属性：图片的相对路径和绝对路径
- width：宽度
- height：高度
- align：水平对齐方式，有left、center、right、bottom、top
- **title**：提示性文本，鼠标悬停时出现的文本
- border：图片的边框，单位是像素，边边框颜色是黑色
- Hspace：图片左右的边距
- Vspace；图片上下的边距
- Alt：图片无法显示时的代替信息

### 列表标签

无序列表`<ul>`，有序列表`<ol>`
- `<li>`不能单独存在，必须包裹在列表内部
- 无序列表的项目符号可以通过type属性更改，如square/circle，也可以通过css设置为图片
- 有序列表的type属性之可以是1、a、A、i、I，结合start属性表示从几开始
- 列表之间可以嵌套
- `<ul>`可以用于做网站的导航条
- `<li>`中放置的内容可以很多
  
定义列表`<dl>`
- dl的子元素只能是dt和dd，`<dt>`列表标题，是必须的，`<dd>`是列表的列表项，如果不需要可以不要
- dl和dd都是容器级别的标签，想放什么都可以

### 表格标签

表格标签用`<table>`表示。一个表格`<table>`是由每行`<tr>`组成的，每行是由每个单元格`<td>`组成的。  
一个表格是由行组成的（行是由列组成的），而不是由行和列组成的。
```html
	<table>
		<tr>
			<td></td>
			<td></td>
			<td></td>
			<td></td>
		</tr>
	</table>
```
表格`<table>`属性
- `border`：边框，像素为单位
- `style="border-collapse:collapse;"`：单元格的线和表格的边框线合并（表格的两边框合并为一条）
- `width`：宽度
- `height`：高度
- `bordercolor`：表格的边框颜色。
- `align`：表格水平对齐方式，可以填：left right center