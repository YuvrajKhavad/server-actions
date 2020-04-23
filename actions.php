<?php 
// Upload this file at your server directory.

// 1 All about server
phpinfo();

//2 Download 
exec("wget http://website.com/zipName.zip");

//3 Code for zip
//****************

//3.1 for all file of root folder
exec('zip -r zipName.zip *');

//3.2 for particular folder
exec('zip -r zipName.zip FOLDER-NAME');

//4 Code for unzip
exec("unzip zipName.zip -d ./");

//5 Code for Permission
//****************

//5.1 code to set permission all current directory file
exec("chmod -R 0644 *");

//5.2 code to set permission specific folder 
exec("chmod -R 755 FOLDER-NAME");
?>
