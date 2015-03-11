<?php
date_default_timezone_set( 'Europe/Stockholm' );

include_once 'vendor/deployer/deployer/recipe/common.php';

server( 'development', 'wocker.dev' )
    ->env( 'deploy_path', '/home/core/data' )
    ->env( 'branch', 'master' )
    ->user( 'vagrant', 'vagrant' );

server( 'production', 'deployer.andreasek.se' )
    ->env( 'deploy_path', '/var/www/deployer' )
    ->user( 'www' )
    ->env( 'branch', 'master' )
    ->pubKey();

set( 'repository', 'git@github.com:EkAndreas/deploy-test.git' );

// Symlink the .env file for Bedrock
set( 'env', 'prod' );
set( 'keep_releases', 10 );
//set('shared_dirs', ['web/app/uploads', 'web/app/cache', 'web/app/plugins/cache', 'web/app/w3tc-config']);
//set('shared_files', ['.env', 'web/.htaccess', 'web/app/plugins/w3tc-wp-loader.php', 'web/app/advanced-cache.php', 'web/app/object-cache.php', 'web/app/db.php', 'web/robots.txt']);
set( 'env_vars', '/usr/bin/env' );

task( 'deploy:restart', function () {
    run( "sudo service apache2 restart" );
    //run("sudo service varnish restart");
} )->desc( 'Restarting apache2 and varnish' );

task( 'deploy', [
    'deploy:prepare',
    'deploy:release',
    'deploy:update_code',
    'deploy:vendors',
    'deploy:shared',
    'deploy:symlink',
    'cleanup',
    'deploy:restart',
    'success'
] )->desc( 'Deploy your Bedrock project, eg dep deploy production' );

