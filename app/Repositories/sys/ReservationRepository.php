<?php
namespace App\repositories\sys;

use App\Models\sys\Reservation;
use DateTime;
use Exception;

class ReservationRepository{
    protected $reservation;
    public function __construct(){}

    public function setReservation(Reservation $res){
        $this->reservation = $res;
    }

    public function create($data){
        $data= $this->format($data);
        return Reservation::create($data);

    }

    private function format($data){
        $new = [];
        $date =$data["date_reservation"];
        $hour =$data["hour_reservation"];
        $d= new DateTime($date." ".$hour);
        try{
            $new = [
                'first_name'=>$data["first_name"],
                'last_name'=>$data["last_name"],
                'email'=>isset($data["email"])?$data["email"] : '',
                'phone'=>$data["phone"],
                'date_reservation'=>   $d ,
                "number"=>$data["number"],
                "is_validate"=>isset($data["is_validate"])?$data["is_validate"] : false,
            ];
        }catch(Exception $error){
            throw new Exception("missing argument");
        }


        return $new;
    }
}
