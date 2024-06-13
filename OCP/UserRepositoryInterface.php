/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: OTAVIO LEMES DE OLIVEIRA 
* DATA: 13/06/2024
*/ 

<?php
interface UserRepositoryInterface {
    public function save(User $user);
    public function getAllUsers();
}
?>
