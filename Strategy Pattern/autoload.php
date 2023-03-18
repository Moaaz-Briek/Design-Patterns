<?php
function autoload($className)
{
    $array_paths = array(
        '',
        'PaymentMethods/',
    );
    foreach ($array_paths as $path) {
        $file = sprintf('%s%s.php', $path, $className);
        if(is_file($file)) {
            include_once $file;
        }
    }
}
spl_autoload_register('autoload');