<?php

namespace App\Http\Controllers\Api\meal;

use App\Http\Controllers\Controller;
use App\Models\meal\Menu;
use Illuminate\Http\Request;

class MenuController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     * @OA\Get( path="/menus",
     *      tags={"Menu"},
     *      summary="List of all menu with food",
     *      @OA\Response(
     *         response="200",
     *         description="Successful"
     *      ),
     * )
     */
    public function index()
    {
        return  Menu::with('foods')->where('label','<>',Menu::$OUR_MENU)->get();
    }



    /**
     *
     * @OA\Get( path="/menus/{menu}",
     *      tags={"Menu"},
     *      summary="Menu with foods get by id",
     *      @OA\Parameter(
     *         name="menu",
     *         in="path",
     *         description="id of menu",
     *         required=true
     *      ),
     *      @OA\Response(
     *         response="200",
     *         description="Successful"
     *      ),
     *      @OA\Response(
     *         response="404",
     *         description="not found"
     *      ),
     * )
     */
    public function show(Menu $menu)
    {
        $menu->Foods();
        return $menu->toJson();
    }



    /** @OA\Get( path="/menus/name/{label}",
     *      tags={"Menu"},
     *      summary="Menu with foods get by id",
     *  @OA\Parameter(
     *         name="label",
     *         in="path",
     *         description="label of menu like starters, mains, ourmenu,pastriesdrinks",
     *         required=true,
     *      ),
     *     @OA\Response(
     *         response="200",
     *         description="Successful"
     *      ),
     *      @OA\Response(
     *         response="404",
     *         description="Menu not found"
     *      ),
     * )
     */
    public function findbyname(string $label){

        $menu=Menu::with('foods')->where('label','=',$label)->first();
        if(!$menu){
            return response()->json(['message' => 'Menu not found'], 404);
        }
        return $menu;
    }
}
