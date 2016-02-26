Author : Divakar Parashar

Use this script on your own risk.
I donot hold any responsibility for any security failure using this Script.

# randomDownloadLink
This is a PHP script to generate random and fake download link for your file. 

How to use: This script works using AJAX view main.html
add class {downloadme} and use that script in your js file
Put your files in secret folder
Use real name of file as title of the link

How this works : The original name of file to download is send to downloadfile.php?f=originalNameofFile ;
Let's call it real_file ;
A random name is then generated let's call it fake_file;
both fake_file and real_file [ only names ] are stored in MySql database;
Then this fake_name is trnsferred to download.php?file=fake_file;

then again original name is taken from MySql which is associated with that fake_file;

then this file is downloaded which is placed in SecretFolder;

And the record is deleted; 

In the browser history user will get downloading address as 
download.php?file=fake_file

Since the record has been deleted so there is no file exists to that fake_name even if user requests again on same download address.
