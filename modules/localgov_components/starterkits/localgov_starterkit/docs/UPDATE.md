# Updating

When new releases of the original starterkit theme are made, this theme can be optionally updated to include some or all of those changes.

1. Clone the [localgov_core git repository](https://github.com/localgovdrupal/localgov_core).
2. Check your theme’s .info.yml file for the last version of localgov_starterkit used:

   `generator: localgov_starterkit:2.15.0`
3. To get a list of code changes, run:

   `git diff '2.15.0' '2.17.0' -- modules/localgov_components/starterkits/localgov_starterkit`
4. To see a list of issues for the above code changes, run:

   `git log '2.15.0' '2.17.0' -- modules/localgov_components/starterkits/localgov_starterkit`
5. Update the `generator: localgov_starterkit` version in your theme’s .info.yml file.

For more information, consult the [startkit documentation on Drupal.org](https://www.drupal.org/docs/core-modules-and-themes/core-themes/starterkit-theme#s-comparing-versions-of-the-core-starterkit-theme).
