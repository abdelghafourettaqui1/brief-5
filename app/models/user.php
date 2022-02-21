<?php

require_once '../app/core/connection.php';

class user extends Connection
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
    

    public function getpassenger()
    {
        $sql = "SELECT * FROM passenger";
        $result = $this->connect()->query($sql);
        $numRows = $result->num_rows;
        $passenger = [];
        if ($numRows > 0) {
            while ($row = $result->fetch_assoc()) {
                $passenger[] = $row;
            }
        }
        return $passenger;
    }

    public function insertpassenger($first, $last, $gender, $age)
    {
        // echo $first , $last ,$gender ,$age; 
        // return;
        $first = $first;
        $last = $last;
        $gender = $gender;
        $age = $age;
        $this->connect()->query("INSERT INTO `passenger` ( `firstname`, `lastname`, `gender`, `age`) VALUES ( '$first','$last', '$gender', $age)");
    }


    public function delete($id)
    {
        $ID = $id;
        $this->connect()->query("DELETE FROM passenger WHERE idPassenger=$ID");
    }
    public function update($idPassenger, $firstname, $lastname, $gender, $age)
    {
        $idPassenger = $idPassenger;
        $firstname = $firstname;
        $lastname = $lastname;
        $gender = $gender;
        $age = $age;
        $this->connect()->query("UPDATE `passenger` SET `firstname` = '$firstname', `lastname` = '$lastname' ,`gender` = '$gender' ,`age` = $age   WHERE `passenger`.`idPassenger` =  $idPassenger");
    }
}
