<?php
spl_autoload_register(function ($class) {
    //directori base
    $prefix = 'App\\';
    //directori de l'app amb el path complet
    $base_dir = __DIR__ . '/App/';

    // Guardem el nombre de caracters de la ruta APP/
    $len = strlen($prefix);
    if (strncmp($prefix, $class, $len) !== 0) {
        // si la classe no es del namespace no la carreguem
        return;
    }

    // Ens quedem nomes amb el nom de la classe
    $relative_class = substr($class, $len);

    // CAnviem la barra / per la barra invertida \ i adjuntem l'extensio php
    $file = $base_dir . str_replace('\\', '/', $relative_class) . '.php';

    // Finalment incloem l'arxiu
    if (file_exists($file)) {
        require $file;
    }
});
