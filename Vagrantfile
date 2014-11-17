# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  
  # We will be using ubuntu 14.04 64-bit
  config.vm.box = "ubuntu/trusty64"
  #config.vm.box = "precise64"
  #config.vm.box_url = "http://files.vagrantup.com/precise64.box"

  # Run our install script
  config.vm.network :private_network, ip: "192.168.128.128"
  config.vm.synced_folder "./", "/vagrant", :mount_options => ["dmode=777,fmode=777"] 
  config.vm.provision "shell", path: "etc/install/run.sh"

  # Virtualbox specific settings
  config.vm.provider "virtualbox" do |vb|
    # Allocate 2048 or 2GB of memory for virtual machine  
    vb.customize ["modifyvm", :id, "--memory", "2048"]
    # Start VM with a GUI
    vb.gui = true
  end

  require 'time' 
  offset = ((Time.zone_offset(Time.now.zone)/60)/60) 
  zone_suffix = offset >= 0 ? "+#{offset.to_s}" : "#{offset.to_s}" 
  timezone = 'Etc/GMT' + zone_suffix 
  config.vm.provision :shell, :inline => "echo \"#{timezone}\" | sudo tee /etc/timezone && dpkg-reconfigure --frontend noninteractive tzdata"
  config.vm.provision :shell, :inline => "sudo echo '[[ -z \$DISPLAY && \$XDG_VTNR -eq 1 ]] && exec startx' >> /home/vagrant/.bashrc"
end
