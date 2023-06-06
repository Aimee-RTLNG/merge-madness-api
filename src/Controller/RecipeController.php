<?php

namespace App\Controller;

use App\Entity\Recipe;
use App\Repository\RecipeRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;
use Nelmio\ApiDocBundle\Annotation\Model;
use Swagger\Annotations as SWG;

class RecipeController extends AbstractController
{
    /**
     * @Route("/recipes", name="get_all_recipes", methods={"GET"})
     */
    public function getAllRecipes(RecipeRepository $recipeRepository): JsonResponse
    {
        $recipes = $recipeRepository->findAll();

        $jsonData = json_encode($recipes, JSON_UNESCAPED_UNICODE | JSON_PRETTY_PRINT);

        return new JsonResponse($jsonData, 200, [], true);
    }
}
