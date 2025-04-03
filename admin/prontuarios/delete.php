<?php
include '../../config.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $sql = "DELETE FROM prontuarios WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        header("Location: list.php");
    } else {
        echo "Erro ao excluir: " . $conn->error;
    }
}
?>
