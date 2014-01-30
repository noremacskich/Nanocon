
Intro
	Repository Link to Charles Ruby on Rails Nanocon Website:
	
	  https://github.com/charles1024/Nanocon


Setup

  Download and install Git (Cross Platform)
  https://help.github.com/articles/set-up-git
	
    Follow their instructions on creating a new account.
    
    Fork the following repository.
    https://github.com/noremacskich/Nanocon
	
  Download and install Aptana Studio 3
  http://aptana.org/
  
  Download and Install EasyPHP DevServer
  http://www.easyphp.org/easyphp-devserver.php
	
  Setting this up:
    Once installed you should have new icon in your tray with a 'e' on it.  
      
      Right click it and click on administration
        
        In the "LOCAL FILES" section, you need to click on the "+ add an alias"
          
          Locate the "Create a name for the alias" field and type "nanocon"
          
          In the following field, you need to put the path to where ever you 
          put the nanocon repository from github.
          
          Click Save, and it should lead you back to the administration page.
        
        Once again look in the "LOCAL FILES" section and you should see a new 
        entry for "nanocon", click on it, and it should lead you to the nanocon
        main page.
        
        Now you need to setup the database.
        
        To do this, you need to find the my.ini file which is located in the 
        install directory of the easyPHP development server. Depending on your 
        operating system, the default install location should be one of the 
        two below.
        
          %programfiles(x86)%\EasyPHP-DevServer-14.1VC11\binaries\conf_files
          
          or
          
          %programfiles%\EasyPHP-DevServer-14.1VC11\binaries\conf_files
        
        Open up my.ini and find the following line:
          
          datadir = "${path}/binaries/mysql/data/"
          
        Now replace it with the path to where you put the nanocon website.
        
          datadir = "path/to/Nanocon/Database/data/"
        
        Save the file, and go back to the admin page for the server.  There
        you can check to see if you got have the database connected by clicking
        on the blue open button.  It should lead you to a phpmyadmin page.
        Check the left hand column to see if you have an item called vipinfo.
        
        If you do, then you are done setting up the database.
        
      There you have it, a test environment for the Nanocon website.

Overview
	Reference Articles:
      http://mobile.smashingmagazine.com/2013/03/31/getting-started-jquery-mobile/
      ^ This is a great intro to jQuery Mobile, and should be read, to understand
        this website
		
	File Info:
	  History/BeforePush.log
	    This is where you document everything that you have done until you commit.  
	    It should follow the Documentation Style provided in the DocumentationStyle
	    text file.  Your commit comment should be identical to what is in this file.  
	    Be sure to save this file before you commit.  After you commit, you can erase 
	    the contents of this file.  
	    
