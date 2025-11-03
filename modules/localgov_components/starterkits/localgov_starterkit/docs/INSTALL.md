# Installation

By creating a new theme using the LocalGov Starterkit, you will get all the existing components added to your new theme’s templates. Optionally, you will be able to easily update your templates as new versions of this component library are released (see [UPDATE.md](UPDATE.md)).

## Enable the LocalGov Component Library

Enable the LocalGov Components module (`localgov_components`) from the “LocalGov Drupal (Experimental)” group.

## Generate a new theme

From the root of your Drupal installation, run:

`php core/scripts/drupal generate-theme --starterkit localgov_starterkit --path themes/custom my_new_theme --name 'My new theme'`

In the command above, replace `My new theme` with the desired name of the new theme and replace `my_new_theme` with the desired machine name.
