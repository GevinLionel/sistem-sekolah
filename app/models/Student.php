<?php

namespace App\Models;
require_once '../app/core/database.php';

use App\Core\Database;

class Student extends Database
{
    protected $table = 'students'; 

    public function getstudent()
    {
        $students = [];
        
        $query = "SELECT * FROM " . $this->table;
        $snmt = $this->connection->prepare($query);
        $snmt->execute();
        $result = $snmt->get_result();
        while ($student = $result->fetch_assoc()) {
            $students[] = $student;
        }
        return $students;
    }
}

require_once '../app/core/Controller.php';
require_once '../app/core/Student.php';

use App\Core\Controller;
use App\Models\Student;


class studentController extends Controller
{
    public function index()
    {
        $studentModel = new Student();
        $students = $studentModel->getstudent();
        $this->view('students.index', ['students' => $students]);
    }
}

?>