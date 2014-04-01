#!/bin/sh

echo "Install node.js.."

echo "==> update system"
sudo apt-get update
sudo apt-get install -y python g++ make

echo "==> install Node.js" # @todo is this the current version?
sudo add-apt-repository -y ppa:chris-lea/node.js
sudo apt-get update
sudo apt-get install -y nodejs

# echo "Install NPM (Node Package Manager) with Grunt and Bower.."

# curl https://npmjs.org/install.sh | sudo sh
# npm install -g grunt-cli bower  # @todo do we need grunt and bower on the guest? Or just on the host?
