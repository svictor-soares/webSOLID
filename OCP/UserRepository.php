/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: OTAVIO LEMES DE OLIVEIRA 
* DATA: 13/06/2024
*/ 
<?php
class UserRepository implements UserRepositoryInterface {
    private $pdo;

    public function __construct(PDO $pdo) {
        $this->pdo = $pdo;
    }

    public function save(User $user) {
        $stmt = $this->pdo->prepare("INSERT INTO users (id, name, email, password) VALUES (?, ?, ?, ?)");
        $stmt->execute([$user->getId(), $user->getName(), $user->getEmail(), $user->getPassword()]);
    }

    public function getAllUsers() {
        $stmt = $this->pdo->query("SELECT id, name, email FROM users");
        return $stmt->fetchAll(PDO::FETCH_OBJ);
    }
}
?>
