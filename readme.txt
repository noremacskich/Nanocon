



Setup

	Download and install Git (Cross Platform)
	https://help.github.com/articles/set-up-git
	
		Follow thier instructions on creating a new account.
	
	Download and install Aptana Studio 3 (My Preferred Editor)
	http://aptana.org/
	
	Download and Install EasyPHP DevServer
	http://www.easyphp.org/easyphp-devserver.php
	
	Setting this up:
		once installed you should have new icon in your tray with a 'e' on it.  
		Right click it and click on administration
			In the "LOCAL FILES" section, you need to click on the "+ add an alias"
				in the "Create a name for the alias" type "nanocon"
				in the next field, put the path to where ever you put the nanocon repository from github
				click Save, and it should lead you back to the administration page.
			Once again look in the "LOCAL FILES" section and you should see a new entry for "nanocon", click
			on it, and it should lead you to the nanocon main page.
		There you have it, a test environment for the Nanocon website.

Overview

	History/BeforePush.log
		This is where you document everything that you have done until you commit.  It should follow the
		Documentation Style listed below.  
		Your commit comment should be identical to what is in this file.  Be sure to save this file before
		you commit.
		After you commit, you can erase the contents of this file.  
	History/History.log
		This is where you can keep a local copy of what you have done overall.  This shouldn't be commited 
		to the repository



Documenting Code

Official commit style
------------------------
------------------------

##/##/####
##:## ?m ------------------------

Created:
1	path/to/file.ext
2	folder
3	path/to/file.ext : function name
4	path/to/file.ext : regex

Reasons:
1	Description of what the file is supposed to have
2	what should go into the the folder?
3	Description of what the function does
4	Explain what the regex primarily does.  Show what it does 
	in the info section

--------------

Deleted:
1	path/to/file.ext
2	folder
3	path/to/file.ext : function name
4	path/to/file.ext : regex

Reasons:
5-8	Why did you delete this?  Was it depreciated? If so, why?
	did you come up with a better way of doing it? Explain.

--------------

Moved:
1	path/to/file.ext -> path2/to/file.ext
2	folder -> folder2
3	path/to/file.ext : function name -> path/file.ext
4	from/this/path -> to/this/path
5	^	file1.ext
6	^	file2.ext
7	^	file3.ext


Reasons:
1	
2	
3	Did moving the function to the file make more sense?  Why?
4-7	Do these files need to stay together?  Do they need . . .	

--------------
Renamed:
1	file.ext -> file2.ext
2	file.ext : function -> function2

Reasons:
1	Does the new name make more sense?  New name fit the naming scheme better?

--------------

Other:
	Regex:
		(\d?\d):(\d\d)([A|P])M
	String:
		19:00PM
	Captured groups:
		0: "19:00PM"
		1: "19"
		2: "00"
		3: "P"
		

##:## ?m ------------------------

------------------------
------------------------
End Official Commit Style


Official Function Comments
------------------------
------------------------

/* @function copy the function call and paste here
 * 	^What will this function do?
 *
 * @requires Does this function rely on any libraries or packages?
 *
 * @usedFunctions list out all the functions that are used. This is optional
 *
 * @param Param Name | Variable Type | Optional
 * 		^	Describe what the parameter is for.  If optional isn't stated, then it is assumed that the
 * 			parameter is required.  If it is stated, you must list what the default value or 
 * 			behaviour is below.
 * 		^	This is where you state the default value or behaviour if the optional tag is stated.  If
 *			it is not stated, then you omit this tag.
 *
 * @Return State what is returned, or what is done (eg echo'd something to the client etc.) 
 *			This is optional. If it returns a variable, then use the same format as the parameters.
 *			
 * @Todo <Github Name> What still needs to be done with this function. This is optional.
 * 
 * @Note <Github Name> Any else that should be stated?
 */


/*
 * @function Button($text='Button', $link='#', $Icon='')
 * 	^This will spit out the html for a new button for jqueryUI.
 *
 * @requires JqueryUI
 *
 * @param $txt | String
 * 		^This is what the button will say
 * 		^Default: "Button"
 * 
 * @param $link | HyperLink
 * 		^This is where the button will send you
 * 		^Default: "#"
 * 
 * @param $Icon | File
 * 		^If you want an Icon, you put it here
 * 		^Default: ""
 * 
 * @Note The link needs http:// in order to function correctly
 *
 */
function Button($text='Button', $link='#', $Icon=''){
	// Now spit it out to the website
	echo '<a href="' . $link . '" data-role="button" '. $Icon . '>' . $text . '</a>';
}

------------------------
------------------------
End Official Function Comments
