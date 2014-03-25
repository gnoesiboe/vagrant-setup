vagrant-setup
=============

Simple vagrant setup for an API and Client Side application with Vagrant. Can be used as a basic setup for a API / Web App application.


Software dependencies
=====================

Required installed software on host (not on Vagrant guest virtual machine, as that is what the Vagrantfile will manage):

* Vagrant
* Virtual Box
* GIT
* Composer
* Node JS and NPM (Node Package Manager)
* PHPUnit
* Grunt
* Bower

(in the information below this software is suspected to be in globally available for the current user)


Setup your own GIT repository and local checkout
================================================

1. Fork the repository (https://github.com/gnoesiboe/vagrant-setup/tree/develop)

2. Create a local clone to develop on

    ```bash
    git clone git@github.com:<username>/vagrant-setup.git
    ```

Install API app dependencies
============================

see API app [README.md](apps/api/README.md)


Install website app dependencies
================================

see Website app [README.md](apps/website/README.md)

   
setup virtual machine
=====================

Go to the application root directory (where the Vagrantfile resides) and run:

```bash
vagrant up
```

This will download the Vagrant box (if not already available) and start up a virtual machine containing both the apps. All requests to
192.168.56.101 on the host (your laptop) will me forwarded to the virtual machine. Please do add the following lines to your hosts file:

```bash
192.168.56.101  website.vagrant.local
192.168.56.101  api.vagrant.local
```

This will forward any request to the website.vagrant.local and api.vagrant.local to IP-Address 192.168.56.101. And then you're all setup.
If everything is you can request website.vagrant.local and api.vagrant.local in your favorite browser and they will be interpreted by your
virtual machine.
