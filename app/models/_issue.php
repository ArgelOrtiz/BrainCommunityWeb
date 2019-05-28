<?php

  class _issue{
    private $db;

    public function __construct(){
      $this->db = new DataBase;
    }

    public function get_issues(){
      $this->db->query("SELECT * from issue");

      return $this->db->records();
    }
  }

  public function create($id,$reported,$title,$summary,$date){
      $this->db->query("INSERT INTO issue VALUES (null, $reported,$id, '$title',
        '$summary','$date',0 )");

      return $this->db->execute();
    }

  public function updateIssue($issue_id, $title, $summary, $status){

     $this->db->query(
       "UPDATE issue SET title = '$title', summary = '$summary',
       status = '$status' where id = $issue_id");

     $updated = $this->db->execute();

     return $updated;
  }

  public function deleteIssue($issue_id){
    $this->db->query("UPDATE issue SET status = 1 where id = " . $issue_id);
    $deleted = $this->db->execute();

    return $deleted;
  }

  public function get_user_issue($repoerted,$id){
      $this->db->query("SELECT id FROM issue WHERE id_user_reported = $repoerted and id_user_reporter = $id");

      return $this->db->registry();
    }

 ?>
