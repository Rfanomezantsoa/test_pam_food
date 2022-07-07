<?php

namespace App\Http\Controllers\Api\aff;

use App\Http\Controllers\Controller;
use App\Http\Resources\aff\HeadlineHeroResource;
use App\Models\aff\HeadlineHero;
use Illuminate\Http\Request;
use Nette\Utils\Json;

class HeadlineHeroController extends Controller
{
    /** @OA\Get( path="/headlineheros",
     *      tags={"headlineheros"},
     *      summary="List all headline ",
     *     @OA\Response(
     *         response="200",
     *         description="Successful"
     *      ),
     * )
     */
    public function index()
    {
        return HeadlineHeroResource::collection(HeadlineHero::all());
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

    }

     /** @OA\Get( path="/headlineheros/{headlinehero}",
     *      tags={"headlinehero"},
     *      summary="get headlinehero by his name",
     *      @OA\Parameter(
     *         name="headlinehero",
     *         in="path",
     *         description="name of the page which headline belong like : home,contact, reservation",
     *         required=true,
     *      ),
     *     @OA\Response(
     *         response="200",
     *         description="Successful"
     *      ),
     *      @OA\Response(
     *         response="404",
     *         description="not found"
     *      ),
     * )
     */
    public function show( $headlineHero)
    {

        $headline = HeadlineHero::where('page', '=',strtolower($headlineHero))->first();
        if(!$headline){
            return response()->json(['message' => 'Not Found!'], 404);
        }

        return $headline->toJson(JSON_PRETTY_PRINT);
    }



}
