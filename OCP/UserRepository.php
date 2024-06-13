/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: Victor soares  
* DATA: 13/06/2024
*/ 
<?php
// Definindo uma interface para serviços de usuário
interface UserServiceInterface {
    public function save(User $user);
    public function getAllUsers();
}
// Definindo uma interface para serviços de usuário
interface UserServiceInterface {
    public function save(User $user);
    public function getAllUsers();
}

// Implementação do UserService conforme a interface
class UserService implements UserServiceInterface {
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

// Agora UserService pode ser extendido sem modificar a classe UserServiceInterface
?>