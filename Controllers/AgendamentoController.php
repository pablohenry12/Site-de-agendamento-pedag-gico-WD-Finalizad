<?php
require_once __DIR__ . '/../models/Agendamento.php';

class AgendamentoController {
    private $model;

    public function __construct() {
        $this->model = new Agendamento();
    }

    public function index() {
        $agendamentos = $this->model->getAll();
        require __DIR__ . '/../views/agendamento/list.php';
    }

    public function create() {
        require __DIR__ . '/../views/agendamento/form.php';
    }

    public function store($data) {
        $this->model->create($data);
        header('Location: /');
    }

    public function edit($id) {
        $agendamento = $this->model->getById($id);
        require __DIR__ . '/../views/agendamento/form.php';
    }

    public function update($id, $data) {
        $this->model->update($id, $data);
        header('Location: /');
    }

    public function delete($id) {
        $this->model->delete($id);
        header('Location: /');
    }
}
