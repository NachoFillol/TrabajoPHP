<?php

function upload($name, $dir = 'uploads') {
    // Si no hay imagen enviada (size=0), realizar el codigo...
    if ( $_FILES['avatar']['size'] != 0 ) {
        $ext = pathinfo($_FILES[$name]['name'], PATHINFO_EXTENSION);
        $hash = md5(time() . $_FILES[$name]['tmp_name']);
        $path = "$dir/$hash.$ext";
        move_uploaded_file($_FILES[$name]['tmp_name'], $path);
        var_dump($_FILES[$name]['name']);
        echo "<br>";
        var_dump($_FILES[$name]['tmp_name']);
        return $path;
    }
    
    return null;
}

function get_users() {
    // string (json)
    $json = file_get_contents('users.json');

    // Retorna un array ordenado
    return json_decode($json, true);
}

function save_users($data) {
    // Convierte Array ordenado $data en json ordenado
    $json = json_encode($data, JSON_PRETTY_PRINT);
    // Guarda lo convertido en archivo json
    file_put_contents('users.json', $json);
}

function search_user($usuarios, $email, $password) {
    // Verifico para cada clave email y password dentro del array usuarios si existe el email y password de entrada (post).
    foreach ($usuarios as $usuario) {
        // Verifica si el email ingresado coincide con la base de datos de usuarios y el password verifica correctamente.
        if ($usuario['email1'] === $email && password_verify($password, $usuario['password'])) {
            return $usuario;
        }
    }
    // Si no encuentra, retorna falso
    return false;
}

function redirect($action) {
    header('location: index.php?action=' . $action);
}

?>