<?php

  class Issue extends Controller{
    private $issueModel;

    function __construct()
    {
      $this->issueModel = $this->model('_issue');
    }

    public function index()
    {
    }

    public function create(){
      $id       = $_POST['id'];
      $reported = $_POST['reported'];
      $title    = $_POST['title'];
      $summary  = $_POST['summary'];

      date_default_timezone_set('America/Mexico_City');

      $currentdate = date('y-m-d H:i:s');

      $result = $this->issueModel->create($id,$reported,$title,$summary,$currentdate);

      if ($result)
        $this->controller('Home');
      else
        echo "Ocurrio un error";

    }

    public function edit()
    {
      $id      = $_POST['issue_id'];
      $title   = $_POST['title'];
      $summary = $_POST['summary'];
      $status  = $_POST['status'];

      $updated = $this->issueModel->updateIssue($id, $title, $summary, $status);

      if($updated)
        $this->controller('/AdminHome/user_issue');
      else
        echo "Hubo un error";
    }

    public function delete()
    {
      $id = $_POST['issue_id'];
      $deleted = $this->issueModel->deleteIssue($id);

      if($deleted)
        $this->controller('/AdminHome/user_issue');
      else
        echo "Hubo un error";
    }

  }

?>
