<?php

require_once '../app/core/connection.php';
session_start();

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
        $id=$_SESSION['iduser'];
        // echo $id;
        // return;
        $sql = "SELECT * FROM passenger where `iduser`=$id ";
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
        $id=$_SESSION['iduser'];

        $first = $first;
        $last = $last;
        $gender = $gender;
        $age = $age;
        $this->connect()->query("INSERT INTO `passenger` ( `firstname`, `lastname`, `gender`, `age`, `iduser`) VALUES ( '$first','$last', '$gender', $age ,$id)");
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
    public function checkplace(){
        $idflight= $_SESSION['idflight'];
        // echo $idflight;
        $count= $this->connect()->query("SELECT COUNT(idflight) AS count FROM `booking` WHERE `idflight`=$idflight");
        $seats=$this->connect()->query("SELECT placeNumber FROM `flight` WHERE `id`=$idflight");
        echo"<pre>";
        $count=$count->fetch_assoc();
        $seats=$seats->fetch_assoc();
        $results= $seats['placeNumber']-$count['count'];
        return $results;
    }

    public function insertbooking($idpassenger){
        $idflight= $_SESSION['idflight'];
        // echo $idflight;
        // $count= $this->connect()->query("SELECT COUNT(idflight) FROM `booking` WHERE `idflight`=$idflight");
        // $seats=$this->connect()->query("SELECT placeNumber FROM `flight` WHERE `id`=$idflight");
        // $count->num_rows;
        // $seats->num_rows;
        // echo"<pre>";
        // $count=$count->fetch_assoc();
        // $seats=$seats->fetch_assoc();
        // var_dump($count);
        // var_dump($seats);
        // $results= $seats['placeNumber']-$count['count'];
        // echo $results;
        // return;
        // if($results>0){
            $idpassenger1=$idpassenger;
            $iduser=$_SESSION['iduser'];
            $idflight= $_SESSION['idflight'];
            $this->connect()->query("INSERT INTO `booking` ( `iduser`, `idflight`, `idpassenger`) VALUES ( $iduser , $idflight,$idpassenger1)");
        // }
        // else{
            // echo '<scriprt> alert("Sorry all the seats are reserved") </script>';
            // echo '<script> alert("Sorry all the seats are reserved")</script>';
            // $this->view('users/index');
        // }


    }
}
