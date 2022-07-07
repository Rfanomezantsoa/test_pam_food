<?php

namespace App\Http\Controllers\Api\sys;

use App\Http\Controllers\Controller;
use App\Http\Requests\reservation\ReservationStoreRequest;
use App\Models\sys\Reservation;
use App\repositories\sys\ReservationRepository;
use Exception;
use Illuminate\Http\Request;

class ReservationController extends Controller
{

    /** @OA\Get( path="/reservations/",
     *      tags={"reservation"},
     *      summary=" reservations list",
     *     @OA\Response(
     *         response="200",
     *         description="Successful"
     *      ),
     * )
     */
    public function index()
    {
        return  Reservation::orderByDesc('date_reservation')->whereNull('deleted_at')->paginate(20);
    }

     /** @OA\Post( path="/reservations/",
     *      tags={"reservation"},
     *      summary="add reservation",
     *      @OA\Parameter(
     *         name="first_name",
     *         in="query",
     *         required=true,
     *      ),
     *      @OA\Parameter(
     *         name="last_name",
     *         in="query",
     *         required=true
     *      ),
     *      @OA\Parameter(
     *         name="email",
     *         in="query",
     *         required=false
     *      ),
     *      @OA\Parameter(
     *         name="phone",
     *         in="query",
     *         required=true
     *      ),
     *      @OA\Parameter(
     *         name="date_reservation",
     *         in="query",
     *         required=true
     *      ),
     *      @OA\Parameter(
     *         name="hour_reservation",
     *         in="query",
     *         required=true
     *      ),
     *      @OA\Parameter(
     *         name="number",
     *         in="query",
     *         required=true
     *      ),
     *     @OA\Response(
     *         response="202",
     *         description="Successful"
     *      ),
     *      @OA\Response(
     *         response="505",
     *         description="Operation failed!"
     *      ),
     * )
     */
    public function store(ReservationStoreRequest $request, ReservationRepository $repo)
    {
        $data= $request->validated();

        try{
            $create = $repo->create($data);
            if(!$create){
                throw new Exception('Operation failed!');
            }
            return response()->json(['message' => "Operation success"], 202);
        }catch(Exception $error){
            return response()->json(['message' => $error->getMessage()], 505);
        }


    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\sys\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function show(Reservation $reservation)
    {
        return $reservation->toJson();
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\sys\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Reservation $reservation)
    {

    }



    /** @OA\Delete( path="/reservations/validate/{reservation}",
     *      tags={"reservation"},
     *      summary=" validate reservation  if his status is en attente",
     *      @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true
     *      ),
     *     @OA\Response(
     *         response="200",
     *         description="Successful"
     *      ),
     *     @OA\Response(
     *         response="404",
     *         description="Not found"
     *      ),
     * @OA\Response(
     *         response="505",
     *         description="Operation failed"
     *      ),
     * )
     * )
     */
    public function setvalidate($reservation){
        $reservation= Reservation::find($reservation);
        if( empty($reservation)){
            return response()->json(['message' => "Not found"], 404);
        }
        if($reservation->is_validate == Reservation::$ATTENTE){
            $reservation->is_validate=Reservation::$VALIDATE;
            $reservation->update();
            return response()->json(['message' => "Operation success"], 202);
        }
        return response()->json(['message' => "failed success"], 505);

    }
        /** @OA\Delete( path="/reservations/unvalidate/{reservation}",
     *      tags={"reservation"},
     *      summary=" unvalidate reservation if his status is en attente",
     *      @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true
     *      ),
     *     @OA\Response(
     *         response="200",
     *         description="Successful"
     *      ),
     *     @OA\Response(
     *         response="505",
     *         description="Operation failed"
     *      ),
     * )
     * )
     */

    public function setunvalidate($reservation){
        $reservation= Reservation::find($reservation);
        if(  empty($reservation)){
            return response()->json(['message' => "Not found"], 404);
        }
        if($reservation->is_validate == Reservation::$ATTENTE){
            $reservation->is_validate=Reservation::$UNVALIDATE;
            $reservation->update();

            return response()->json([
                'message' => "Operation success",
                'data'=>[
                    $reservation
                ]
            ], 202);
        }
        return response()->json(['message' => "failed success"], 505);

    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\sys\Reservation  $reservation
     * @return \Illuminate\Http\Response
     */

    /** @OA\Delete( path="/reservations/{reservation}",
     *      tags={"reservation"},
     *      summary=" delete reservation",
     *      @OA\Parameter(
     *         name="id",
     *         in="path",
     *         required=true
     *      ),
     *     @OA\Response(
     *         response="200",
     *         description="Successful"
     *      ),
     *     @OA\Response(
     *         response="404",
     *         description="not found"
     *      ),
     * )
     * )
     */
    public function destroy(Reservation $reservation)
    {
        $reservation->delete();
        return response()->json(['message' => "Operation success"], 202);
    }


}
