<?php
    $static = getenv('STATIC_APP');
    $dynamic = getenv('DYNAMIC_APP');
?>
<VirtualHost *:80>
    ServerName demo.res.ch

    ProxyPass '/api/students/' 'http://<?php print "$dynamic"?>/'
    ProxyPassReverse '/api/students/' 'http://<?php print "$dynamic"?>/'

    ProxyPass '/' 'http://<?php print "$static"?>/'
    ProxyPassReverse '/' 'http://<?php print "$static"?>/'
</VirtualHost>
