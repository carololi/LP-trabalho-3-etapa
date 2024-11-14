<?php
    if(!isset($_SESSION)){
        session_start();
    }
    if(!isset($_SESSION['login'])){
        echo "
            <script> 
                alert('Área restrita a usuarios logados. Informe o seu login e senha');
                window.location = 'login.php';
            </script>
        ";
    }
    else{
        $nivel = $_SESSION['nivel'];
        $nome = $_SESSION['nome'];
        if($nivel != 'adm'){
            echo "
                <script> 
                    alert('$nome, Área restrita a Administradores');
                    window.location = 'index.php';
                </script>
            ";
        }
    }
?>