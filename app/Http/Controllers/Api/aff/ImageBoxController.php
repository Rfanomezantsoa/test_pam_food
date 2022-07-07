<?php

namespace App\Http\Controllers\Api\aff;

use App\Http\Controllers\Controller;
use App\Http\Resources\aff\ImageBoxResource;
use App\Models\aff\ImageBox;
use Illuminate\Http\Request;

class ImageBoxController extends Controller
{

    /** @OA\Get( path="/imageboxes/",
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
     *      )
     * ),
     */
    public function index(Request $request)
    {

        $query= ImageBox::orderByDesc('id');
        if($request->has('take')){
            $take = $request->input('take');
            $query->limit($take);
        }

        return $query->get();
    }


}
