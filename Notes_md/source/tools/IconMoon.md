##  使用 IconMoon 生成字体图标

**icon font优点：**

- 「分辨率无关」特性

- 文件小 将图片打包进一套字体内，http request 减少

- 支持CSS样式 可以定义大小、颜色、阴影、hover状态、透明度等

- 兼容性好

**缺点**：

- 样式单一，无法针对不同分辨率调整细节

- 少量移动设备可能和icon fonts的字符编码冲突，导致icon显示不正常

 

**使用笔记：**

<https://icomoon.io/app/#/select>.

选择自己想要的图标，然后generate 之后下载包

将fonts文件夹和style.css 复制到项目文件夹下

通过 `<link rel="stylesheet" href="style.css">` 

将CSS链接到html文件中

使用时class选择相应icon

也可以导入自己的图片