<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class StudentMiddleware extends Middleware
{
    public function index()
    {
        if (!isset($_SESSION['student_access']) || $_SESSION['student_access'] !== true) {
            redirect('student'); // ibalik sa home page kung walang access
            exit;
        }
    }
}