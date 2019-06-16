## CSS 盒子/浮动/定位

### 盒子模型
边距 margin，边框 border，填充 padding，内容 content，轮廓 outline

**border-style**  
none： 默认无边框  
dashed： 电线框  
solid： 实线边界  
double： 两个边界  
groove： 3D沟槽边界，效果取决于边界颜色值  
ridge： 3D脊边界，效果取决于边界颜色值  
inset： 3D嵌入边框  
outset： 3D突出边框

先设置border-style，再设置border-width  
border-radius 设置圆角  
border-color: transparent 宽度不可见的边框

边框属性简写：  
按照width，style，color的顺序写 `border: 5px solid red;`


### 相对定位 & 绝对定位
- 相对定位的元素是相对于普通流的位置进行移动
- 绝对定位的元素是相对于**距离它最近的已定位的祖先元素**决定的
- 绝对元素使元素与文档流无关，因此不占据空间

### 浮动
- 浮动框脱离普通流
- 浮动的框左右移动，直到外边缘边缘碰到**包含框或另一个浮动框**的边缘
- 如果包含框太窄，无法容纳水平排列的浮动元素，那么其他浮动块向下移动
- 清除浮动 ```clear : none | left | right | both```