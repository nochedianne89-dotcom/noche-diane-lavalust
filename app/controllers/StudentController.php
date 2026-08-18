<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller {

    public function index() {
        $_SESSION['student_access'] = true;
        $this->call->view('student_home');
    }

    public function profile() {
        $student = [
            'student_id'  => '2026-00240',
            'name'        => 'Diane Noche',
            'course'      => 'BS Information Technology',
            'year'        => '3rd Year',
            'section'     => 'F5',
            'email'       => 'diane.noche@gmail.com',
            'address'     => 'Del Pilar, Naujan, Oriental Mindoro',
            'contact'     => '0933-947-9601',
            'hobbies'     => 'Baking, watching k-dramas, and listening to music',
            'description' => 'A dedicated 3rd year BS Information Technology student who enjoys learning new things, with a love for baking and watching k-dramas on the side.'
        ];

        $this->call->view('student_profile', $student);
    }
}
?>