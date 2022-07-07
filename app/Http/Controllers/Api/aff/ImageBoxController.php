<?php

namespace App\Http\Controllers\Api\aff;

use App\Http\Controllers\Controller;
use App\Http\Resources\aff\ImageBoxResource;
use App\Models\aff\ImageBox;
use Illuminate\Http\Request;

class ImageBoxController extends Controller
{

    /** @OA\Get( path="/imageboxes",
     *      tags={"ImageBox"},
     *      summary="List all image box Desc order",
     *      @OA\Parameter(
     *         name="take",
     *         in="query",
     *         description="nomber of element to take imagebox loaded, if take parametter empty the api return all image dox  ",
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
    public function index(Request $request)
    {
        $temp = new ImageBox();
        $query= $temp->getQuery()->orderBy('id', 'desc');
        if($request->has('take')){
            $take = $request->input('take');
            $query->limit($take);
        }

        return $query->get();
    }


}
