<?php

class admins extends controller
{

  public function showAllflight()
  {
    $this->model = $this->model('admin');
    $flights = $this->model->getAllflights();
    $this->view('home/admin', ['admin' => $flights]);
  }
  public function addflight()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $departurePlace = $_POST['departurePlace'];
      $arrivalPlace = $_POST['arrivalPlace'];
      $departureDate = $_POST['departureDate'];
      $returnDate = $_POST['returnDate'];
      $placeNumber = $_POST['placeNumber'];
      $price = $_POST['price'];

      $this->model = $this->model('admin');
      $this->model->insertFlight($departurePlace, $arrivalPlace, $departureDate, $returnDate, $placeNumber, $price);
    }
  }
  public function deleteflight()
  { {

      $id = $_POST['delete'];
      $this->model = $this->model('admin');
      $this->model->delete($id);
    }
  }
  public function editflight()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $id = $_POST['id'];
      $departurePlace = $_POST['departurePlace'];
      $arrivalPlace = $_POST['arrivalPlace'];
      $departureDate = $_POST['departureDate'];
      $returnDate = $_POST['returnDate'];
      $placeNumber = $_POST['placeNumber'];
      $price = $_POST['price'];
      $this->model = $this->model('admin');
      $this->model->update($id, $departurePlace, $arrivalPlace, $departureDate, $returnDate, $placeNumber, $price);
    }
  }

  public function showForm()
  {
    if (isset($_POST['edit'])) {
      $this->view('home/editadminflight', ['id' => $_POST['edit']]);
    }
  }
  public function showFormadd()
  { 
      $this->view('home/addflight');
    
  }

  public function checkreservation()
  {
    
    $this->model = $this->model('admin');
    
    $booking = $this->model->checkbooking();
    
    $this->view('home/displaybooking', ['book' => $booking]);
    // echo "I'm here";
    // return;
  }
}
