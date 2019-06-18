## WordPress

环境：Apache + MySQL + PHP

域名备案



### 操作步骤

下载wordpress

启动环境 Apache + MySQL

创建数据库

把wordpress 放到mamp下的htdocs（默认目录）

添加数据库



Post 文章 可以更新

Page 页面 静态页面



### 文章格式管理

实现"阅读更多"

- 文本模式 —> more

- 可视化添加标记

分页`<!--nextpage-->`实现分页器

### 多媒体管理

图片编辑

- 修改标题

- 加入说明（会显示在图片下方）

- 替代文本（图片无法显示时）

- 图像描述

- 编辑图片（可以选择修改缩略图）

- 可以先创建相册，再把相册添加到文章中

- 插件 jQuery Colorbox 可以在当前页面查看图片

视频管理

- 插件 media-element-html5-video-and-audio-player
  - 设置--设置默认宽度高度
  - 写文章—添加媒体—[vedio src="" poster=""]
  - poster属性可以将图片设置为视频封面



### 分类法

分类目录（有层级 插件显示分类）& 标签（贴标签）

分类目录

- 名称—--别名（令url更美观）
- 添加分类时选择父级—--创建子级分类
- 未分类的会放在"未分类下"
- 子分类的内容也会显示在父级目录中

设置菜单 — 向右拖动可以设置子菜单



### 小工具

- hide widget title 在前台隐藏小工具标题

- 用文本小工具添加图片 分享

- Dynamic Widgets 可以设置显示小工具的条件（如根据用户 时间 分类 浏览器等条件）

- members 插件  设置角色权限（注意添加新的插件后要修改管理员的权限包含新插件的所有功能）设置内容权限 

- 在文章内容中插入`[access role="Role"][/access]`可以设置仅某些角色可以查看具体内容

- 表单插件 WordPress Form Manager
  - 插入表单：新建页面`[form form-name]`	
  - 编辑表单条件，可以根据选择的内容显示不同的项目
  - 高级选项：选择行为类型
  - 选择数据可查看用户提交的信息

- 活动插件 event-manager
  - 显示日历：创建页面，在内容中添加 `[events_calender full=1]` full=1
  - 插件 full-calender 可以切换日历的显示（月/周/天） 选择活动分类
- 广告插件 wp125
- 自动备份插件 backwpup 备份内容、备份频率、保存路径