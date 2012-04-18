# Rapid Development with CodeIgniter and RedBeanPHP

### Versions

* [CodeIgniter 2.1](http://codeigniter.com/)
* [RedBeanPHP 3.1](http://redbeanphp.com/)

### Changes comparing to vanilla CodeIgniter setup

* Added RedBeanPHP (RB) to libraries (obviously)
* config file for RB
* global helper with few useful functions
* sessions controller for handling users sessions + view files
* users controller for creating user account in database + view files
* routes for login/register
* autoloading necessary libraries and helpers for functionality mentioned above
* added (not very random) encryption key in config.php file
* global XSS filtering active
* .htaccess file for rewriting urls (no need for "/index.php/" part)