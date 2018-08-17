# Starter Module

A basic installable module that does nothing.  It just saves you time when you go to create a module.  It's not meant to blow your mind, it's just meant to be a good starting point for you to build your module from.

The next steps would be:

1. Add your own fields using this as a guide: https://docs.joomla.org/Standard_form_field_types.  This will mean you can add text inputs, radios, select dropdowns etc.  Don't forget you should be using language strings in all of the descriptions etc.  Basically everything except the name of the field.

2. Register those fields as variables in your bootstrap2.php file.

3. Call those variables and do something with them. Which probably means building out some HTML first to lay them out.

## Step 1.  Install and test it works first.

Install the module and check that it installs properly.  If it does, open the module and see the field that is included with it.  Fill it in, save and close.  Open the module again, check that the value saved.  Already you can see you have a simple working module.  You can assign it, you can go to advanced and change template, you can publish and unpublish it.  You can do all the things a module should do.  

## Step 2.  Create a new field in the back end.

Add a new field.  Open up mod_starter_module.xml

Fill in all of the author information with your own name (or come back to this later if you prefer).

If you scroll down you will see one field called domain.  

Put the cursor below it and insert a new text field by copying and pasting this

<field name="myTextField" type="text" default="MY_TEXT_FIELD_DEFAULT" label="MY_TEXT_FIELD_LABEL" description="MY_TEXT_FIELD_DESCRIPTION" size="10" />

Zip up your files and reinstall them.  Go to your module and check you see your fields.  You will see they look broken.  I think it's important to see that so you can understand whenever you see this error exactly what is happening.  It will help you to trouble shoot but it will also help you to report issues to other developers.  Go ahead and have a look before moving on.

## Step 3.  Create a new language string.

Open the language folder and open en-GB.mod_starter_module.ini.

Here you will find the language strings.  In real life some code is replaced with these strings.  This is what makes Joomla! Multilingual.  

Copy style EXACTLY.  You need to add the language strings we just created.

MY_TEXT_FIELD_LABEL="My Text Field"
MY_TEXT_FIELD_DEFAULT="A text string"
MY_TEXT_FIELD_DESCRIPTION="This is just a text field.  You can put text in it.  Give it a go."

Zip up your files and reinstall.  Open the back end and check you see your new language strings.  Now your modules should look less broken.  You should note it would not matter what we called our language strings or what text we included.  But be careful with quotes " because they open and finish the text string.  You can use them though, you just need to know how. 

I think it's a good idea to use the format that I followed, don't be tempted to use abbrieviations as it will help you to troubleshoot later on when trying to work out what a string does.  It will also really help other developers if you collaborate or hire people.  Or if they want to add to your code.  

## Step 4.  Add a field that opens the media manager.

Add a media field.  Copy this to your XML file.

<field name="mediaField" type="media" directory="stories" />

You don't need a language string this time.  This just creates the ability to choose an image from the media manager.  Cool huh?  You can choose the directory you want to start in too.  We've chosen stories.

If you want to know about all of the different fields you can use and all of the attributes for each field you can find out more here.

https://docs.joomla.org/Standard_form_field_types

Open the module and you should see your new fields.  Try using them, save and close, reopen and make sure everything is saved.  Isn't Joomla! easy when you know how?

If there's a problem check Joomla! Stack Exchange.  https://joomla.stackexchange.com/

## Step 5.  Make your fields show up on the front end.

Now you have your fields, but nothing is showing up on the front end.  Because we haven't told it to.  Go to the bootstrap2.php template in the /tmpl/ folder.  In the Joomla! Administrator open your module and go to advanced.  Make sure the template is set to Bootstrap2.

You can see how we called the domain field, we assigned it to a variable.  Then we echo'd that variable with PHP.  

Copy that code but replace the information with the names you created for your fields.  If you have followed this tutorial the fields are *myTextField* and *mediaField* and .  Once done your fields should also show up on the front end.  If you can't remember the names check the XML file.  I usually have them both open at the same time.

Check you see your fields on the front end of your site.

## Step 6.  Rename the module, it's yours now.  Good job.

Rename the module to your own name.  You've started adding things, this isn't our module any more, it's even got your author name.  So you should rename it.  To do so you need to find and replace mod_starter_module EVERYWHERE in each file of the module.  I use PHP Storm which has a" preserve case" function.  If you use something else be sure to make sure all capitals remain capitals and any upper and lower case remain the same.

Once you've done that you need to rename the files.  Don't forget to leave the parts of the file the same just rename the bits called mod_starter_module.  So for example en-GB.mod_starter_module.ini would become en-GB.mod_your_module.ini  always start with mod_

Finally, rename the folder to your module name e.g "mod_your_module."

Once done ZIP up your files and reinstall to make sure it all still works.  If you get an error message it means something has gone wrong.  Check all of the file names are renamed correctly, use this GitHub repository to compare the file names.  Then check every reference within the files are correct.

## Step 7.  It's up to you now.

Have a play around and see where you get to.  There's lots of cool things you can do.  Why not try creating a simple heading and paragraph with an image on the left or right.  All you need to do is understand HTML.  If you are using Bootstrap2 which ships with Joomla! you can simply use Bootstrap classes so you won't even have to write any CSS at all.  Isn't that neat?  If you do want to add more CSS you can simply open the media/css/mod_starter_module.css file and add it there.
