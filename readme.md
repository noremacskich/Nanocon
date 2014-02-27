## Intro
Repository Link to Charles Ruby on Rails Nanocon Website:
  https://github.com/charles1024/Nanocon

## Downloads
### [Github](https://help.github.com/articles/set-up-git)

    A cross platform versioning system with easy to use interface.  

### [Aptana Studio 3](http://aptana.org/)

    Just a free IDE that is geared towards website developement.

### [EasyPHP DevServer]( http://www.easyphp.org/easyphp-devserver.php)

    This allows easy setup of a php server with an mysql database for windows.

## Installing
### Github
* Should be a typical next, next, done installer.
* You need a github account in order to make commits to the branch

### Aptana Studio 3
* Next, Next Done . . .

### EasyPHP DevServer
* Once again, next, next, done sort of installer
 * If you change the default directory, be sure to take note of it, you will need it later
* Once installed, you should have a new icon in your system tray with a dark 'E' on it, with with either a red or green box to the lower right.  If not, go and start up the program.

## Configuring Everything
### EasyPHP DevServer
####Server

1. Right click it the 'e' icon in your system tray and click on administration

2. In the "LOCAL FILES" section, you need to click on the "+ add an alias"

3. Locate the "Create a name for the alias" field and type "nanocon"

4. In the following field, you need to put the path to where ever you put the nanocon repository from github.

5. Click Save, and it should lead you back to the administration page.

6. Once again look in the "LOCAL FILES" section and you should see a new entry for "nanocon", click on it, and it should lead you to the nanocon main page.

#### Database

1. To do this, you need to find the my.ini file which is located in the install directory of the easyPHP development server. Depending on your operating system, the default install location should be one of the two below.

    ```
    %programfiles(x86)%\EasyPHP-DevServer-14.1VC11\binaries\conf_files
    ```

    or

    ```
    %programfiles%\EasyPHP-DevServer-14.1VC11\binaries\conf_files
    ```
2. Open up my.ini and find the following line:

    ```
    datadir = "${path}/binaries/mysql/data/"
    ```

3. Now replace it with the path to where you put the nanocon website.

    ```
    datadir = "path/to/Nanocon/Database/data/"
    ```

4. Save the file, and go back to the admin page for the server.  There you can check to see if you got have the database connected by clicking on the blue open button.  It should lead you to a phpmyadmin page.

5. Check the left hand column to see if you have an item called vipinfo.

6. If you do, then you are done setting up the database.

 ### Github
  * Should prompt you to enter your user credentials.

 ### Aptana Studio 3
  * Set your default workspace to the directory that you put the nanocon website at.

## Reference Articles
[Getting Started With jQuery Mobile](http://mobile.smashingmagazine.com/2013/03/31/getting-started-jquery-mobile/)
  * This is a great intro to jQuery Mobile, which this site uses heavily.

## File Info
* History/BeforePush.log
 * This is where you document everything that you have done until you commit.  It should follow the Documentation Style provided in the DocumentationStyle text file.  Your commit comment should be identical to what is in this file.  Be sure to save this file before you commit.  After you commit, you can erase the contents of this file.
* DocumentationStyle.txt
 * This is how you should be documenting both the commits and every new function you make.