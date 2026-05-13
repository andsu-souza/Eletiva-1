<?php
    require_once('conexao.php'); //
    if (isset($_GET['id'])) {
        $id = $_GET['id'];
        try {
            $stmt = $pdo->prepare("DELETE FROM horario WHERE id = ?");
            $stmt->execute([$id]);
        } catch (Exception $e) {
            // Se houver OS vinculada, o banco impedirá a exclusão por segurança
        }
    }
    header('Location: horarios.php'); //
    exit();
?>