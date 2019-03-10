## 作业2：制作登陆页面

#### 作业截图
#### 步骤
- 下载psd文件通过图层显示关闭将所需要的素材分离出来
- 按照背景-logo-登陆横幅-登录框-登录框细节的顺序由大到小进行设计

#### 问题与解决
- 添加“使用帮助”时字体为蓝色，是在什么地方设置的？
  - ……是link的预设颜色
- form 标签的属性 method 中 post 和 get 有何区别？
- form 标签下 fieldset 和 legend 标签的功能？
  - 解决于CSS学习

#### HTML代码
```html
<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link rel="stylesheet" href="CSS/style.css">
    <title>教学课件管理系统</title>
</head>
<body>
    <div id="container">
        <div class="login">
            <div class="login_hd">
            </div>
            <div class="clear">
            </div>
            <!---为什么clear-->
            <div class="login_banner">
            </div>
            <div class="login_main">
                <div class="login_help">
                    <a href=#>使用帮助</a>
                </div>
                <form action=# method="POST" class="login_form">
                    <fieldset>
                        <legend>登录表单</legend>
                        <div class="username"><input name="" type="text" placeholder=" 学院邮箱" /></div>
                        <div class="password"><input name="" type="password" placeholder=" 密码" /></div>
                        <div class="login_btn"><input name="" type="button" value="" /></div>
                    </fieldset>
                </form>
                <div class="guest">用户名或密码错误！</div>
                <div class="forget"><a href=#>密码找回？</a></div>
                <div class="first">首次登陆，请使用“密码找回”功能，初始化您的密码！</div>
            </div>
        </div>
    </div>
</body>
</html>
```
#### CSS 代码
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
    clear：both;
}

/*-----------login---------------*/

body {
    font: 12px;
    font-family: Microsoft YaHei;
    position: relative;
    margin: 0;
    color: #000000;
}
#container {
    width: 960px;
    box-shadow: 0 0 15px #999999;
    margin: 0 auto;
    margin-top: 1%;
    overflow-x: hidden;
    position: relative;
}
.login {
    background: #0c7fc2 url(/img/bg.png) no-repeat center center;
    height: 600px;
}
.login_hd {
    background: url(/img/LOGO.png) no-repeat;
    float: left;
    margin: 20px 20px 0;
    width: 455px;
    height: 80px;
}
.login_banner {
    background: url(/img/login_banner.png) no-repeat;
    float: left;
    margin: 200px 80px 0;
    width: 310px;
    height: 53px;
}
.login_main {
    background: url(/img/login_bg.png) no-repeat;
    margin-top: 80px;
    margin-right: 47px;
    float: right;
    width: 390px;
    height: 240px;
    position: relative;
}
.login_help {
    float: right;
    margin: 11px 15px 0 0;
    font-size: 14px;
}
.login_form {
    width: 272px;
    height: 170px;
    padding: 27px 28px 0 26px;
    color: #000101;
    position: relative;
}
.username {
    height: 57px;
    margin: 52px 90px 13px;
}
.password {
    height: 57px;
    margin: -25px 90px 13px;
}
.username input,
.password input {
    width: 176px;
    height: 32px;
    border: 0;
    color: #999;
    font-size: 14px;
    line-height: 32px;
}
.username input {
    position: absolute;
    top: 89px;
    left: 155px;
}
.password input {
    position: absolute;
    top: 135px;
    left: 155px;
}
.login_btn {
    text-align: center;
    height: 40px;
    margin: 0 0 0 4px;
    position: absolute;
    top: 173px;
    left: 150px;
}
.login_btn input {
    background: url(/img/btn_bg.png) no-repeat;
    border: 0;
    width: 67px;
    height: 28px;
    cursor: pointer;
    overflow: hidden;
}
.guest {
    float: left;
    margin: 0px 20px 0;
    height: 30px;
    font-size: 14px;
    position: absolute;
    top: 205px;
    left: 0px;
    width: 350px;
    text-align: center;
    color: #f00;
}
.guest a {
    color: #ff0000
}
.forget {
    float: right;
    margin: 0px 20px 0;
    height: 30px;
    font-size: 14px;
    position: absolute;
    top: 175px;
    left: 250px;
}
.forget a {
    color: #ff0000;
}
.first {
    font-size: 14px;
    float: right;
    margin: 10px 0px 0;
    width: 370px;
    height: 50px;
    color: #fff;
    position: absolute;
    top: 240px;
    left: 20px;
}
```