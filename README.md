Setup VVV (Varying Vagrant Vagrants) - Vagrant configuration focused on WordPress development

For more info about VVV visit: https://varyingvagrantvagrants.org/

1. Clone VVV

This is the recommended method for installing VVV. Clone the main VVV repo into a local directory:

git clone -b master git://github.com/Varying-Vagrant-Vagrants/VVV.git ~/vagrant-local


2. Starting VVV

In a terminal, change into the new directory with cd vagrant-local.

Start the Vagrant environment with vagrant up.

Be patient as the magic happens. This could take a while on the first run as your local machine downloads the required files.

Turning VVV On: vagrant up
Turning VVV Off: vagrant halt
Restarting VVV: vagrant reload
Reloading config/config.yml: vagrant reload --provision

3. Adding a Single Site

To do this, we will update the sites list by editing the file config/config.yml in the main VVV folder like this:

sites:

  .... other sites...

  example:
    repo: https://github.com/Varying-Vagrant-Vagrants/custom-site-template.git
    hosts:
      - example.test

  .... other sites...

  multisite-example:
    repo: https://github.com/Varying-Vagrant-Vagrants/custom-site-template.git
    hosts:
      - multisite.test
      - subsite.multisite.test
    custom:
      wp_type: subdomain # or subdirectory

Then, save config/config.yml and run vagrant up --provision to update VVV with the new site. Always reprovision after making changes to the config files. Be sure to indent correctly as whitespace matters in YAML files, VVV prefers to indent using 2 spaces.

Once vagrant reload --provision finishes, you will have a brand new WordPress install! We can now visit http://example.test to view our site, or open the www/example folder in an editor to start making changes to our site. To log in, use admin and password.

For more info about VVV visit: https://varyingvagrantvagrants.org/

