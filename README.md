# lento~

一个简单的音乐电台

## 安装

1. 创建数据库, 导入 lento.sql  
2. 运行 `composer install --no-dev`  
3. 参考 .env.example 配置 .env  
4. 将 public 目录设置为网站根目录,  
  如无法设置, 试试重写 URL, 参考 .htaccess.example  
5. 修改 public/lento.html 文件里的标题  


## 使用

**没有后台, 直接操作 MySQL 数据库吧, 用 phpMyAdmin 或 Adminer, 向表 `lento` 添加数据**  

`id` 是序号, 从1开始  
`name` 是音乐名称  
`music` 是音乐地址  
`image` 是图片地址  