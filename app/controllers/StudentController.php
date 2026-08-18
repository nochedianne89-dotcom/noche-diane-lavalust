<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentController extends Controller
{
    public function index()
    {
        $this->call->view('student_home');
    }

    public function profile()
    {
        $student = [
            'student_id' => '2026-0240',
            'name'       => 'Diane Noche',
            'course'     => 'BS Information Technology',
            'year'       => '3rd Year',
            'section'    => 'F5',
            'email'      => 'diane.noche@example.com'
        ];

        $this->call->view('student_profile', $student);
    }
}