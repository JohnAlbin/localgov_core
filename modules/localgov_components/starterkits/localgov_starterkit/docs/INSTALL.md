# Installation

After generating a new theme using the LocalGov Starterkit, you can begin
developing without needing to post-process any CSS or JavaScript. Just use
vanilla CSS and Javascript in your files; Drupal will handle minification.

**No build tools needed.**

## Linting tools

Even though no build tools are needed to develop your theme, you can optionally
check your JavaScript for common issues and lint all the files to make sure they
conform to a common coding standard.

You will need `nvm` ([Node Version Manager](https://github.com/nvm-sh/nvm)) or a
`Node.js` installation to use the linting tools.

Using `nvm` is recommended. But, if you are NOT using `nvm`, skip all of the
`nvm` commands in the instructions below.

### Install the linting tools

1. Install the Node and Composer packages by running:
   ```
   nvm install
   npm install
   ```
2. This theme uses Drupal core’s linting rules. To copy those rules, run:
   ```
   npm run lint:setup
   ```
   Drupal core’s linting rules can change with minor version releases, so only
   run this command when you have time to see how the new rules apply to your
   codebase. You may find that you only run this command once during the
   development of your website.
3. Add your new linting configuration to Git with:
   ```
   git add .eslintrc.core.json .prettierrc.json .stylelintrc.core.json \
     composer-dev.lock package-lock.json
   ```

## Running the linting tools

1. Every time you return to your command line, ensure the same version of
   Node.js is running with:
   ```
   nvm use
   ```
2. Before committing any code changes to Git, lint all your files with:
   ```
   npm run lint
   ```

## List of linting tasks

The following scripts are available with `npm run`:

- `lint`:        Runs all linting tasks (all tasks below except for
                 `lint:setup` and `ci`.)
- `lint:setup`:  Copies Drupal core’s lint configuration to your theme. See the
                 note about this task in the “Install” instructions above.
- `lint:css`:    Lints your theme’s CSS files. It will try to fix any CSS that
                 does not match Drupal’s Stylelint rules.
- `lint:js`:     Lints your theme’s JavaScript files. It will try to fix any
                 JavaScript that does not match Drupal’s ESLint rules.
- `lint:twig`:   Lints your theme’s Twig files. It will try to fix any Twig
                 templates that do not match Drupal’s Twig standards.
- `lint:drupal`: Ensure your theme’s files follow Drupal’s coding standards.
- `prettier`:    Formats your theme’s files with Prettier.
- `ci`:          Runs all linting tasks without trying to fix or format your
                 theme’s files. Will return an error if any task fails. Useful
                 for CI environments.
