<?php
class Agendamento {
    private $db;

    public function __construct() {
        $this->db = Database::getConnection();
    }

    public function getAll() {
        $stmt = $this->db->query("SELECT * FROM agendamentos");
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function getById($id) {
        $stmt = $this->db->prepare("SELECT * FROM agendamentos WHERE id = :id");
        $stmt->execute(['id' => $id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public function create($data) {
        $stmt = $this->db->prepare("INSERT INTO agendamentos (nome, turma, data, hora) VALUES (:nome, :turma, :data, :hora)");
        $stmt->execute($data);
    }

    public function update($id, $data) {
        $stmt = $this->db->prepare("UPDATE agendamentos SET nome = :nome, turma = :turma, data = :data, hora = :hora WHERE id = :id");
        $stmt->execute(array_merge($data, ['id' => $id]));
    }

    public function delete($id) {
        $stmt = $this->db->prepare("DELETE FROM agendamentos WHERE id = :id");
        $stmt->execute(['id' => $id]);
    }
}
