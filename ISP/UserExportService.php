/*
* Curso de Engenharia de Software - UniEVANGÉLICA 
* Disciplina de Programação Web 
* Dev: OTAVIO LEMES DE OLIVEIRA 
* DATA: 13/06/2024
*/ 
<?php
class UserExportService implements UserExportServiceInterface {
    private $userRepository;

    public function __construct(UserRepositoryInterface $userRepository) {
        $this->userRepository = $userRepository;
    }

    public function exportToCSV() {
        $users = $this->userRepository->getAllUsers();
        $csv = "id,name,email\n";
        foreach ($users as $user) {
            $csv .= "{$user->id},{$user->name},{$user->email}\n";
        }
        file_put_contents('users.csv', $csv);
    }
}
?>
