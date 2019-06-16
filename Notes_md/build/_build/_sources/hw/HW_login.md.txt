## 作业2.3 根据PSD素材制作登陆界面
 
作业要求：在网上下载登陆界面的psd图片，并根据图片制作登陆界面
### 最终成果
 作业截图： 
 ![psd-login](../img/hw2-login.png) 
 所下载的psd图片：  
 ![login-origin](../img/hw2-login-origin.JPG)  

### 问题解决
 由给定psd制作登陆界面后，希望解决的问题：
  1. 背景图片大小固定，有留白，希望背景图片能够自适应浏览器大小，平铺整个页面，不出现留白现象
  2. 登陆框位置固定，拉动浏览器可能导致看不到的登陆框，希望登陆框自适应浏览器，保持在页面正中央
  3. 输入框背景色，圆角弧度，选中时的颜色状态等，需要进行调整，适应登陆背景图片的颜色
  4. 按钮设置
   
#### 图片自适应浏览器平铺
1. container设置高度宽度都为100%
2. 设置背景图片大小`background-size: cover`，效果并不理想，再设置以下，实现平铺`width: 100%; height: 100%; top: 0; z-index: -1;  position: relative;`

#### div自适应居中--以登陆模块为例

1. 首先设置整个模块在屏幕中央，通过`top: 50%; left:50%`实现
2. 这样整个登陆模块的右上角正好处于背景的正中央，登陆模块却并不是出于中央，通过设置负边距为为高度和宽度的一半，使得登陆模块向上再移动一半，再向左移动一半，这样登陆模块的中心与背景（浏览器）的中心重合```height: 277px; width: 233px; margin-left: -116px; margin-top: -138px;position: absolute；```

#### 输入框设置

模块代码：
```CSS
.username input {
          color: lightgrey;
          position: absolute;
          background-color: transparent;
          border: 0;
          margin-top: 68px;
          margin-left: 64px;
          width: 130px;
          height: 30px;
          border-radius: 5px;
      }
      input:focus {
          outline: none !important;
          border: 1px solid gray;
          box-shadow: 0 0 10px gray;
      }
```
1. 设置输入框的背景为透明，能够消除预设输入框的白条状态
2. 设置输入框的focus状态属性，设置阴影，边框样式和边框颜色
3. 设置`border-radius`属性，使输入框显示为圆角

### 作业代码

```html
<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="CSS/style.css">
    <title>请登录</title>
</head>

<body>
    <div id="container">
        <div class="bg">
            <div class="login_main">
                <div class="login">
                    <form action=# method="POST" class="login_form">
                        <fieldset>
                            <legend>登录表单</legend>
                            <div class="username"><input name="" type="text" placeholder=" username" /></div>
                            <div class="password"><input name="" type="password" placeholder=" password" /></div>
                            <div class="login_btn"><input name="" type="button" value="login" /></div>
                        </fieldset>
                    </form>
                    <div class="forget"><a href=#>Forget Username or Password?</a></div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
```
```CSS
      /*---------global style-----------*/
      
      * {
          margin: 0;
          padding: 0;
      }
      
      li {
          list-style: none
      }
      
      img {
          vertical-align: top;
          border: none
      }
      
      legend {
          display: none
      }
      
      fieldset {
          border: none
      }
      
      a {
          text-decoration: none
      }
      
      a:hover,
      a:active {
          text-decoration: none
      }
      
      .clear {
          clear: both;
      }
      /*--------login style----------*/
      
      body {
          height: 100%;
          width: 100%;
          font: 12px;
          font-family: Microsoft YaHei;
          position: relative;
          margin: 0;
          color: #000000;
      }
      
      #container {
          width: 100%;
          height: 100%;
          box-shadow: 0 0 15px #7a5555;
          margin: 0 auto;
          margin-top: 1% auto;
          overflow-x: hidden;
          position: fixed;
          top: 0;
          bottom: 0;
      }
      
      .bg {
          background: url(../img/bg.png) no-repeat center center;
          background-size: 100% 100%;
          -webkit-background-size: cover;
          -o-background-size: cover;
          height: 650px;
          width: 100%;
          height: 100%;
          top: 0;
          z-index: -1;
          position: relative;
      }
      
      .login_main {
          float: center;
          position: absolute;
          top: 50%;
          left: 50%;
      }
      
      .login {
          background: url(../img/login_bg.png) no-repeat center center;
          height: 277px;
          width: 233px;
          margin-left: -116px;
          margin-top: -138px;
          position: absolute；
      }
      
      .username input {
          color: lightgrey;
          position: absolute;
          background-color: transparent;
          border: 0;
          margin-top: 68px;
          margin-left: 64px;
          width: 130px;
          height: 30px;
          border-radius: 5px;
      }
      
      .password input {
          position: absolute;
          color: lightgrey;
          background-color: transparent;
          border: 0;
          margin-top: 120px;
          margin-left: 64px;
          width: 130px;
          height: 30px;
          border-radius: 5px;
      }
      
      input:focus {
          outline: none !important;
          border: 1px solid gray;
          box-shadow: 0 0 10px gray;
      }
      
      .login_btn {
          text-align: center;
          display: block;
          position: absolute;
          border: 0;
          box-shadow: grey;
      }
      
      .login_btn input {
          position: absolute;
          background-image: url(../img/login_btn.png);
          width: 162px;
          height: 34px;
          margin-top: 200px;
          margin-left: 34px;
          cursor: pointer;
          overflow: hidden;
          border-radius: 6px;
          text-indent: -9999px;
          border: 0;
      }
      
      .forget {
          margin: 170px 0 0 32px;
          height: 30px;
          font-size: 12px;
          position: absolute;
          font-family: Arial, Helvetica, sans-serif;
      }
      
      .forget a {
          color: lightgrey;
          text-decoration-style: solid;
      }
      
      .forget a:hover {
          color: whitesmoke;
      }
```