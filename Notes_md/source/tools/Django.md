## Django

环境： Python 3.6  &  Django 2.1.7  

**创建项目**

`django-admin startproject ProjectName`

用`tree`查看项目的目录结构

​	`manage.py` 实用的命令行工具，与该项目进行交互

​	`__init__.py` 空文件  

​	`settings.py` 设置配置  

​	`urls.py `该项目的URL声明，由 django 驱动的网站"目录"  

​	`wsgi.py` 一个wsgi兼容的web服务器入口，以便运行  

启动服务器 `python3 manage.py runserver 0.0.0.0:8000`



