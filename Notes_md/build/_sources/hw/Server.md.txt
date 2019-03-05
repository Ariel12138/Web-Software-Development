## 配置云服务器

遇到的问题：
- 购买服务器后不知道如何配置
- 上传文件 显示permission denied
- 最初选择的服务器配置的ubuntu系统，然后更改配置到CentOS
- 再次使用终端登陆服务器，出现 Remote host identification has changed 警告，无法登陆重装系统的服务器

问题解决：
- 查看产品文档--未能找到解决方法
- 搜索“linux如何配置服务器”，查看各种学习博客
- 搜索“Remote host identification has changed”

服务器配置操作：
- 安装 apache 服务器
```
yum -y install httpd 
```
- 启动 apache 服务器并设置开机自动启动
```
systemctl start httpd
systemctl enable httpd
```
- 配置完成

文件上传到服务器的操作：
- 使用 scp 进行上传
```
scp source username@xx.xx.xx.xxx:[filepath]
```
- 使用sftp上传
- 使用ftp客户端进行上传

文件存放地址及外部访问链接：
- 登陆到服务器时 位置为~ 用```ls```命令查看文件，结果为无
- 使用命令```cd / ```到根目录
- 将文件存放在 /var/www/html 下
- 域名xx.xx.xx.xxx登陆显示位于/var/www/html路径
- 如果文件 index.html 的位置是 /var/www/html 则它的访问地址为 xx.xx.xx.xxx/index.html
- 如果文件路径为 /var/www/html/1/2/3/index.html 则访问地址为 xx.xx.xx.xxx/1/2/3/index.html