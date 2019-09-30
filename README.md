# Tools
Small tools that frequently used in day to day work.

## Language
- All the codes are here mostly in raw PHP.
- Most of the latest code used PHP 7 syntax, so please use server with PHP 7
- Bootstrap is used as css framework

## Run

Add following line in `hosts` file `127.0.0.1       git-tools.com.at`

Add a virtual host in apache i.e 

```
<VirtualHost *:80>
     ServerName git-tools.com.at
     DocumentRoot "E:\Projects\git-tools"
     SetEnv APPLICATION_ENV "development"
     <Directory "E:\Projects\git-tools">
         DirectoryIndex index.php
         AllowOverride All
         Order allow,deny
         Allow from all        
     </Directory>
</VirtualHost>
```


> Or simply put the folder inside `htdocs` :P 


> **Check markdown cheatsheet** <a href="https://github.com/adam-p/markdown-here/wiki/Markdown-Cheatsheet#code">here</a>

 


