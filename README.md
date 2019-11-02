# Dioscuri

This is a package to quickly setup a local WordPress installation on a Mac using [Laravel Valet](https://laravel.com/docs/master/valet#installation). It is assumed the you are using `.test` for the local TLD.

## Requirements
- [Laravel Valet](https://laravel.com/docs/6.x/valet)
- MySQL 5.6
- Perl
- PHP 7.1

## Installation

```bash
git clone https://github.com/pryley/dioscuri.git [projectdir]
cd [projectdir]
sh install
```

## What's Installed

The following boilerplate theme is installed and activated:
- [Castor](https://github.com/pryley/castor)

The following plugins are installed and activated:
- [Black Bar]https://wordpress.org/plugins/blackbar/
- [Imsanity](https://wordpress.org/plugins/imsanity/)
- [Meta Box](https://wordpress.org/plugins/meta-box/)
- [Pollux](https://wordpress.org/plugins/pollux/)
- [The SEO Framework](https://wordpress.org/plugins/autodescription/)

The following plugins are installed:
- [Disable Comments](https://wordpress.org/plugins/disable-comments/)
- [Easy Updates Manager](https://wordpress.org/plugins/stops-core-theme-and-plugin-updates)
- [Machete](https://wordpress.org/plugins/machete/)
- [Optimize Database after Deleting Revisions](https://wordpress.org/plugins/rvg-optimize-database/)
- [Paste as Plain Text](https://wordpress.org/plugins/paste-as-plain-text/)
- [Post Type Archive Link](https://wordpress.org/plugins/post-type-archive-links/)
- [Powerful Posts Per Page](https://wordpress.org/plugins/pppp/)
- [Safe Redirect Manager](https://wordpress.org/plugins/safe-redirect-manager/)
- [Safe SVG](https://wordpress.org/plugins/safe-svg/)
- [SendGrid](https://wordpress.org/plugins/sendgrid-email-delivery-simplified/)
- [Simple Custom Post Order](https://wordpress.org/plugins/simple-custom-post-order/)
- [Simple Page Sidebars](https://wordpress.org/plugins/simple-page-sidebars)
- [Simple Post Type Permalinks](https://wordpress.org/plugins/simple-post-type-permalinks)
- [Two Factor](https://wordpress.org/plugins/two-factor/)
- [UpdraftPlus WordPress Backup Plugin](https://wordpress.org/plugins/updraftplus)
- [User Menus](https://wordpress.org/plugins/user-menus)
- [User Role Editor](https://wordpress.org/plugins/user-role-editor)

The following Must-Use plugins are installed:
- [Bedrock Autoloader](https://github.com/roots/bedrock/blob/master/web/app/mu-plugins/bedrock-autoloader.php)
- [Disallow Indexing](https://github.com/roots/bedrock/blob/master/web/app/mu-plugins/disallow-indexing.php)
- [Register Theme Directory](https://github.com/roots/bedrock/blob/master/web/app/mu-plugins/register-theme-directory.php)
- [Soil](https://github.com/roots/soil)
- [Stage Switcher](https://github.com/roots/wp-stage-switcher)
- [WP Password bcrypt](https://github.com/pryley/wp-password-bcrypt)
- [WP Thumb](https://github.com/pryley/wp-thumb)
