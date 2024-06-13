/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Victor soares  
* DATA: 13/06/2024
*/ 
<?php
// Utilizando injeção de dependência na classe UserService
class UserService {
    private $db;

    public function __construct(DatabaseInterface $db) {
        $this->db = $db;
    }

    public function save(User $user) {
        $this->db->table('users')->insert([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password
        ]);
    }

    public function getAllUsers() {
        return $this->db->table('users')->get();
    }
}

// Exemplo de uso com injeção de dependência
$db = new MySQLDatabase(); // Implementação específica do banco de dados
$userService = new UserService($db);

?>
