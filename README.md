# Stena

Stena is a climbing project to collect and represent all the climbing routes in Serbia.

## Getting started

These instructions will get you a copy of the project up and running on your local machine for development and testing purposes.

## Instructions to setup project:

### 1. Install and setup VVV

VVV (Varying Vagrant Vagrants) is vagrant configuration focused on WordPress development.

To install VVV and add new website, follow guidelines from offical VVV website: https://varyingvagrantvagrants.org/

### 2. Clone the project (make sure it's cloned to `public_html` directory in your project)

Once you have VVV up and running and new website successfully added, do the following:

* Start newly installed VVV vagrant and ssh to VM:

```
cd ~/vagrant-local/ ("vagrant-local" is a directory where VVV is installed. Use correct name if it's different)
```

```
vagrant up
```

```
vagrant ssh
```

* Go to your project directory and delete `public_html`:

```
cd /srv/www/<my-project>
```

```
rm -rf public_html
```

* Clone the project (you need to ask admin of this project to add your SSH public key to repo)

```
git clone git@github.com:skordus/stena.git public_html
```

You might need to re-clone the project as descibed above every time after running:

```
vagrant reload --provision
```

### 3. Connect database:

* Go to `public_html` directory of your project on VVV: `/vagrant-local/www/my-project/public_html/`, create `wp-config.php` directory and copy/paste entire code from `wp-config-sample.php`

* Edit database credentials in `wp-config.php`:

```
define( 'DB_NAME', '<database_name_here>' );
define( 'DB_USER', '<username_here>' );  // Default for VVV is "wp"
define( 'DB_PASSWORD', '<password_here>' );  // Default for VVV is "wp"
```

### 4. Import database from live server:

Export database from live server and import it locally. You can use mysql client, phpMyAdmin or some other DBMS interface.
To use phpMyAdmin with VVV, open http://vvv.test/database-admin and login with `root` as username and password.

## Useful commands

Turn VVV on:
```
vagrant up
```

Turn VVV off:
```
vagrant halt
```

Restarting VVV:
```
vagrant reload
```

Reloading `config/config.yml`:
```
vagrant reload --provision
```
