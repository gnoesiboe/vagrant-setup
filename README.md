vagrant-setup
=============

Simple vagrant setup for an API and Client Side application with Vagrant. Can be used as a basic setup for applications.

grasp dependencies
==================

1. Create a form of the repository
2. Create a local clone

   ```bash
   git clone git@github.com:<username>/vagrant-setup.git
   ```

3. Install dependencies with composer

   API:
   1. go to apps/api
   2. run command line:
   
     ```bash
     composer update
     ```
  
   Website:

   1. go to apps/website
   2. @todo
   
setup virtual machine
======================

1. Make sure you have installed the latest versions of VirtualBox and Vagrant.
2. Go to the application root directory (where the Vagrantfile resides) and run:

   ```bash
   vagrant up
   ```
