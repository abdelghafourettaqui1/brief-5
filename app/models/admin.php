<?php

require_once '../app/core/connection.php';

class admin extends Connection
{
    public function getAllflights()
    {
        $sql = "SELECT * FROM flight";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        $flight = [];
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $flight[] = $row;
            }
        }
        return $flight;
    }

    public function insertFlight($departurePlace, $arrivalPlace, $departureDate, $passengerNumber, $placeNumber, $price)
    {
        $departure = $departurePlace;
        $arrival = $arrivalPlace;
        $date = $departureDate;
        $passenger = $passengerNumber;
  
        $sets = $placeNumber;
        $p = $price;
        // $info=$this->connect()->prepare("INSERT INTO `flight` (`departurePlace`, `arrivalPlace`, `departureDate`, `passengerNumber`,`placeNumber`, `price`) VALUES (?, ?, ?, ?, ?, ?)");
        // $info->bind_param('sssiii',$departure,$arrival,$date,$passenger,$sets,$p);
        // $info->execute(); 
        $this->connect()->query("INSERT INTO `flight` ( `departurePlace`, `arrivalPlace`, `departureDate`, `passengerNumber`, `placeNumber`, `price`) VALUES ( '$departure','$arrival', '$date', $passenger, $sets, $p)");
    }

    public function delete($id)
    {
        $ID = $id;
        $this->connect()->query("DELETE FROM flight WHERE ID=$ID");
    }
    public function update($id, $departurePlace, $arrivalPlace, $departureDate, $passengerNumber, $placeNumber, $price)
    {
        $ID = $id;
        $departure = $departurePlace;
        $arrival = $arrivalPlace;
        $date = $departureDate;
        $passenger = $passengerNumber;
        $sets = $placeNumber;
        $p = $price;
        $this->connect()->query("UPDATE flight SET departurePlace ='$departure' , arrivalPlace='$arrival' , departureDate='$date',passengerNumber=$passenger,placeNumber= $sets ,price= $p WHERE ID = $ID ");
    }
}
