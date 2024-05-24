<?php
    session_start();
    include('php/conexion_be.php');

if (isset($_POST['id_cc']) && isset($_POST['contrasena']))  {
    
    function validate($data){
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    return $data;
    }

    $id_cc = validate($_POST['id_cc']);
    $contrasena = validate($_POST['contrasena']);

    if (empty($id_cc)) {
        header("Location: inicio-de-sesión.php?error=El Usuario es Requerido");
        exit();
    }elseif (empty($contrasena)) {
        header("Location: inicio-de-sesión.php?error=La Clave es Requerida");      
        exit();
    }else {
        
        //$Clave = md5($Clave);
        
        $stmt = $conexion->prepare("SELECT * FROM tbl_registrarse WHERE id_cc = :id_cc AND contrasena = :contrasena");
        $stmt->bindParam(':id_cc', $id_cc);
        $stmt->bindParam(':contrasena', $contrasena);
        $stmt->execute();
              
        if ($stmt->rowCount() === 1) {
            $row = $stmt->fetch(PDO::FETCH_ASSOC);
        
             if ($row['id_cc'] === $id_cc && $row['contrasena'] === $contrasena) {
                $_SESSION['id_cc'] = $row['id_cc'];
                $_SESSION['contrasena'] = $row['contrasena'];
                header("Location: index.php");
                exit();
            } else {
                header("Location: inicio-de-sesión.php?error=El usuario o clave son incorrectas");
                exit();
            }
            } else {
            header("Location: inicio-de-sesión.php?error=El usuario o clave son incorrectas");
                exit();    
            }
    }
}else{
    header("Location: inicio-de-sesión.php");
        exit();

}
