<?php
require_once __DIR__ . '/../controllers/AgendamentoController.php';

$controller = new AgendamentoController();

$action = $_GET['action'] ?? 'index';

if ($action === 'create') {
    $controller->create();
} elseif ($action === 'store') {
    $controller->store($_POST);
} elseif ($action === 'edit') {
    $controller->edit($_GET['id']);
} elseif ($action === 'update') {
    $controller->update($_GET['id'], $_POST);
} elseif ($action === 'delete') {
    $controller->delete($_GET['id']);
} else {
    $controller->index();
}
