/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Victor soares 
* DATA: 13/06/2024
*/ 
<?php
// User class representa apenas um usuário
class User {
    public $id;
    public $name;
    public $email;
    public $password;

    public function __construct($id, $name, $email, $password) {
        $this->id = $id;
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }
}

// UserService para operações relacionadas aos usuários
class UserService {
    public function save(User $user) {
        DB::table('users')->insert([
            'id' => $user->id,
            'name' => $user->name,
            'email' => $user->email,
            'password' => $user->password
        ]);
    }

    public function getAllUsers() {
        return DB::table('users')->get();
    }
}

// EmailService para enviar emails
class EmailService {
    public function sendWelcomeEmail(User $user) {
        mail($user->email, "Welcome", "Thank you for registering");
    }
}

// CsvExporter para exportar usuários para CSV
class CsvExporter {
    public function exportUsersToCsv() {
        $userService = new UserService();
        $users = $userService->getAllUsers();

        $csv = "id,name,email\n";
        foreach ($users as $user) {
            $csv .= "{$user->id},{$user->name},{$user->email}\n";
        }

        file_put_contents('users.csv', $csv);
    }
}

?>
