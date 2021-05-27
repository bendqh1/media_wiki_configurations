.htaccess:

    RewriteBase /
    RewriteCond %{REQUEST_FILENAME} !-f
    RewriteCond %{REQUEST_FILENAME} !-d
    RewriteRule ^wiki/(.*)$ index.php?title=$1 [PT,L,QSA]
    RewriteRule ^wiki/*$ index.php [L,QSA]
    RewriteRule ^wiki$ index.php [L,QSA]
    #### Add this to your LocalSettings.php (without the hashes):
        ######## $wgScriptPath = "/";
        ######## $wgArticlePath = "/wiki/$1";

Add to, or edit to have LocalSettings.php:

    $wgScriptPath = ""; # $wgScriptPath = "";
    $wgArticlePath = "/wiki/$1"; # Normally this entry doesn't exist here
