<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;

class ApiController
{
    /**
     * @Route("/api/data", name="api_get_data", methods={"GET"})
     */
    public function getData(): JsonResponse
    {
        $data = ['test' => 'here'];

        $jsonData = json_encode($data, JSON_PRETTY_PRINT);

        return new JsonResponse($jsonData, 200, [], true);
    }
}
