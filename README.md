# mikewaterman.com

My personal site, mostly used for learning and experimentation.

UNDER CONSTRUCTION: hard hats required. Changes may occur.

## Stack

### Infra and Server

* Server: [Vultr](https://www.vultr.com/) VPS
* OS: Ubuntu 20.04
* Webserver: NGINX
* SSL: Let's Encrypt and Certbot
* Redis? (Not needed, but for experience)
* Docker and Docker-Compose?
  * If so, likely a later addition

### Back End

* PHP 7.4.9
* No framework:
  * Vanilla PHP
  * Custom routing
* [Twig](https://twig.symfony.com/) (Jinja-like template engine)
  * [twig-i18n-extension](https://github.com/phpmyadmin/twig-i18n-extension)
    * Uses [PHP gettext](https://www.php.net/gettext), which requires [GNU gettext](https://www.gnu.org/software/gettext/gettext.html)

### Database

* MariaDB
* ORM: likely raw SQL, but not certain
* PDO

### Front End

* HTML5
* CSS3 and perhaps SCSS
* Vanilla JavaScript or Vue.js
* Perhaps Bootstrap or Tailwind

## Site Layout

* Home page
* Logs (blog): most recent log
  * Each log gets its own page
    * Use a slug instead of the log key?
* Bots
  * Robots.txt
  * Security.txt
