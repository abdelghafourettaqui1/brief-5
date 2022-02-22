<?php
class users extends controller
{
  public function index()
  {
    $this->model = $this->model('user');
    $flights = $this->model->getAllflights();
    $this->view('user/userflight', ['user' => $flights]);
  }


  public function showpassenger()
  {
    $this->model = $this->model('user');
    $flights = $this->model->getpassenger();
    $this->view('user/user', ['user' => $flights]);
  }

  public function addpassenger()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $first = $_POST['firstname'];
      $last = $_POST['lastname'];
      $gender = $_POST['gender'];
      $age = $_POST['age'];
      $this->model = $this->model('user');
      $this->model->insertpassenger($first, $last, $gender, $age);
    }
  }
  public function deletepassenger()
  { {

      $id = $_POST['delete'];
      $this->model = $this->model('user');
      $this->model->delete($id);
    }
  }
  public function editpassenger()
  {
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {
      $idPassenger = $_POST['idPassenger'];
      $firstname = $_POST['firstname'];
      $lastname = $_POST['lastname'];
      $gender = $_POST['gender'];
      $age = $_POST['age'];
      $this->model = $this->model('user');
      $this->model->update($idPassenger, $firstname, $lastname, $gender, $age);
    }
  }

  public function showForm()
  {
    if (isset($_POST['edit'])) {
      $this->view('user/editpassenger', ['idPassenger' => $_POST['edit']]);
    }
  }
  public function booking()
  {

    $this->model = $this->model('user');
    $flights = $this->model->getpassenger();
    $this->view('user/user', ['user' => $flights]);
    if (isset($_POST['reserve'])) {
      $this->view('user/user', ['id' => $_POST['booking']]);
      $_SESSION['idflight'] = $_POST['booking'];
    }
  }

  public function validate()
  {
    if (isset($_POST['validate'])) {
      $idpassenger = $_POST['validate'];
      $this->model = $this->model('user');
      $results = $this->model->checkplace();
      // $this->model->insertbooking($idpassenger);
      if ($results > 0) {
        $this->model = $this->model('user');
        $this->model->insertbooking($idpassenger);
      }
      else{
        echo '<script> alert("Sorry all the seats are reserved")</script>';
        $this->view('users/index',[]);
      }
    }
  }



  //   public function showFormadd()
  //   { 
  //       $this->view('user/user.php');

  //   }
}
