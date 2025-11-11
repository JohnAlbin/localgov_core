# LocalGov Components

This module provides LocalGov’s (experimental) default component library.

The goal of this component library is to provide all the markup needed for
LocalGov modules and starter themes. It is currently in development, but theme
developers can use this library _now_ by:

- adding these Single Directory Components (SDC) to their theme’s templates
  _or_
- creating a new theme using the bundled starterkit

## Using these components in your existing theme

1. Enable the LocalGov Components module (`localgov_components`) from the
   “LocalGov Drupal (Experimental)” group.
2. @TODO Browse the library’s styleguide to determine which components you wish
   to use.
3. Add one or more of these SDC to your theme’s templates following
   [Drupal’s SDC docs](https://www.drupal.org/docs/develop/theming-drupal/using-single-directory-components).

## Generating a new theme with the LocalGov Starterkit

By creating a new theme using the LocalGov Starterkit, you will get all the
existing components added to your new theme’s templates. Optionally, you will be
able to easily update your templates as new versions of this component library
are released (see [UPDATE.md](starterkits/localgov_starterkit/docs/UPDATE.md)).

1. Enable the LocalGov Components module (`localgov_components`) from the
   “LocalGov Drupal (Experimental)” group.
2. From the root of your Drupal installation, run:
   ```
   php core/scripts/drupal generate-theme --starterkit localgov_starterkit \
     --path themes/custom my_new_theme --name 'My new theme'
   ```
   In the command above, replace `My new theme` with the desired name of the new
   theme and replace `my_new_theme` with the desired machine name.
3. Look at your new theme’s README.md to get started.
