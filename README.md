This is the README file for the workshop.

This repo is the basics for getting set up with a standard LAMP server running Symfony2.

Follow the intructions in the setup doc and tutorial to learn the basics of Web Development.

-Kyle

# Setup
DO THIS <span color='red'>BEFORE</span> THE WORKSHOP!!

## Required Hardware
Make sure you have at least 4gb of RAM and a reasonably fast processor. If you know your computer is slow, DON'T WAIT TILL THE DAY OF THE WORKSHOP TO INSTALL EVERYTHING!!!

Windows, MacOSX, and Linux should all work

## Required Software
Install [Virtualbox](https://www.virtualbox.org/wiki/Downloads) and [Vagrant](https://www.vagrantup.com/downloads.html). 

## Download the source
Get a zip of the project [here](https://github.com/acm-ucr/Web-Development-Workshop-Kyle/archive/master.zip) or clone the project using git if you know how to! Be sure to unzip the folder before continuing.

## Running the Virtual Machine
Open a terminal and go to the directory where the project is at. On Linux/MacOSX, you would do
```bash
cd ~/Desktop/<Name_of_project>
ls  <-- verify you see the files you expect
```

On Windows (using cmd.exe), you would do
```bash
cd c:\Users\<Your_user_name>\Desktop\<Name_of_project>
dir  <-- verify you see the files you expect
```

Once you are in the project directory, simply run
```bash 
vagrant up
```
NOTE: This process might take a while so be patient!
ALSO NOTE: A screen will pop up while the script is running, DO NOT TRY TO LOG IN TO IT LEAVE IT BE

Once the script has completed do the following:
```bash
vagrant halt
vagrant up
```

This will restart our Virtual Machine and you should be seeing the same screen pop up, now asking you to login in. Your username is `vagrant` and password is also `vagrant`

# Next Steps
On the VM, you can open firefox by going to `Applications` then searching for `firefox`. You can also open up a terminal by searching for `terminal`.

Go ahead and open a terminal and type the following
```bash
cd /vagrant
ls
```

Looks familiar? Should be the same files you downloaded previously.
