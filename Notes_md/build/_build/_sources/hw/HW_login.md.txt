## 实践作业：登录页面

### 首次尝试

代码：

```html
<head>
<link rel="stylesheet" href="style.css">
<meta name="author" content="Ariel Gao">
<meta name="Description" content="Login page for this web!">
<meta charset="UTF-8">
​<title>Welcome to XXX!</title>
</head>

<body topmargin=10%>
<div align="center">
    <form>
    用户名：<input type="text" name="username"><br>            
    密 码：<input type="password" name="password"><br>
    <input type="submit" value="登陆">
    </form>
</div>
</body>
```
问题：用户名和密码文字不对齐，导致登录框不能对齐

解决思路：使用CSS进行格式调整