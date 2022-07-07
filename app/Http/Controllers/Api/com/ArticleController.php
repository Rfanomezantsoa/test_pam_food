<?php

namespace App\Http\Controllers\Api\com;

use App\Http\Controllers\Controller;
use App\Http\Resources\com\ArticleDetailsResource;
use App\Http\Resources\com\ArticleResource;
use App\Models\com\Article;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    /** @OA\Get( path="/articles/",
     *      tags={"article"},
     *      summary="get recent article with tronced text with minimum information",
     *  @OA\Parameter(
     *         name="limit",
     *         in="query",
     *         description="to determine how many article to load",
     *         required=false,
     *      ),
     *     @OA\Response(
     *         response="200",
     *         description="Successful"
     *      )
     * )
     */
    public function index(Request $request)
    {

        $query= Article::orderByDesc('published_at')->where('published_at','<>',NULL);
        if($request->has('limit')){
            $take = $request->input('limit');
            $query->limit($take);
        }
        $query->with("author");
        return ArticleResource::collection(  $query->get() ) ;

    }



   /** @OA\Get( path="/articles/{article}",
     *      tags={"article"},
     *      summary="get article details",
     *  @OA\Parameter(
     *         name="article",
     *         in="path",
     *         description="id of article to load",
     *         required=false,
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
    public function show(Article $article)
    {
        $article->Author();

        return new ArticleDetailsResource($article);
    }

}
