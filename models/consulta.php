<?php
require_once $_SERVER["DOCUMENT_ROOT"] . "/hipocrates/db/conexao.php";

class Consulta
{
    public $id_consulta;
    public $id_medico;
    public $id_paciente;
    public $data_consulta;

    public function __construct($id_consulta = false)
    {
        if ($id_consulta) {
            $this->id_consulta = $id_consulta;
            $this->carregar();
        }
    }

    public function carregar()
    {
        $query = "SELECT id_medico, id_paciente, data_consulta FROM consulta WHERE id_consulta = :id_consulta";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_consulta', $this->id_consulta);
        $stmt->execute();

        $lista = $stmt->fetch();
        $this->id_medico = $lista['id_medico'];
        $this->id_paciente = $lista['id_paciente'];
        $this->data_consulta = $lista['data_consulta'];
    }

    public function criar()
    {
        $query = "INSERT INTO consulta (id_medico, id_paciente, data_consulta) VALUES (:id_medico, :id_paciente, :data_consulta)";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_medico', $this->id_medico);
        $stmt->bindValue(':id_paciente', $this->id_paciente);
        $stmt->bindValue(':data_consulta', $this->data_consulta);
        $stmt->execute();
        $id_consulta = $conexao->lastInsertId();
        return $id_consulta;
    }

    public static function listar()
    {
        $query = "SELECT * FROM consulta";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->execute();
        $lista = $stmt->fetchAll();
        return $lista;
    }

    public function editar()
    {
        $query = "UPDATE consulta SET id_medico = :id_medico, id_paciente = :id_paciente, data_consulta = :data_consulta WHERE id_consulta = :id_consulta";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(":id_medico", $this->id_medico);
        $stmt->bindValue(":id_paciente", $this->id_paciente);
        $stmt->bindValue(":data_consulta", $this->data_consulta);
        $stmt->bindValue(":id_consulta", $this->id_consulta);
        $stmt->execute();
    }

    public function deletar()
    {
        $query = "DELETE FROM consulta WHERE id_consulta = :id_consulta";
        $conexao = Conexao::conectar();
        $stmt = $conexao->prepare($query);
        $stmt->bindValue(':id_consulta', $this->id_consulta);
        $stmt->execute();
    }
}
