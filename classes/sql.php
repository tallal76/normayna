<?php
class sql
{
    private string $serverName = "localhost";
    private string $userName = "root";
    private string $userPassword = "";
    private string $database = "normayna";
    private object $connexion;

    public function __construct()
    {
        try {
            $this->connexion = new PDO("mysql:host=$this->serverName;dbname=$this->database", $this->userName, $this->userPassword);
            $this->connexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        } catch (PDOException $e) {
            die("Erreur : " . $e->getMessage());
        }
    }

    public function afficher($query)
    {
        return $this->connexion->query($query)->fetchAll();
    }
}
