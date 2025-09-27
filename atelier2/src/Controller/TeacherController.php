<?php
namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\RedirectResponse;

class TeacherController extends AbstractController
{
    #[Route('/teacher/{name}', name: 'teacher_show')]
    public function showTeacher(string $name): Response
    {
        return $this->render('teacher/showTeacher.html.twig', [
            'name' => $name,
        ]);
    }

    #[Route('/go-to-student', name: 'go_to_student')]
    public function goToIndex(): RedirectResponse
    {
        return $this->redirectToRoute('student_index');
    }
}