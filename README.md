### Starter Module

A basic installable module that does nothing.  It just saves you time when you go to create a module.  It's not meant to blow your mind, it's just meant to be a good starting point for you to build your module from.

The next steps would be:

1. Add your own fields using this as a guide: https://docs.joomla.org/Standard_form_field_types.  This will mean you can add text inputs, radios, select dropdowns etc.  Don't forget you should be using language strings in all of the descriptions etc.  Basically everything except the name of the field.

2. Register those fields as variables in your bootstrap2.php file.

3. Call those variables and do something with them. Which probably means building out some HTML first to lay them out.
