<?php 
class Courses extends CI_Controller {
    public function index()
	{
		$this->load->model("Course");
		$courses = array("courses" => $this->Course->get_all_courses());
		$id = array();
		$name = array();
		$description = array();
		$date = array();
		foreach($courses as $rkey => $rvalue){
			foreach($rvalue as $v){
				array_push($id, $v['id']);
				array_push($name, $v['name']);
				array_push($description, $v['description']);
				array_push($date, $v['created_at']);
			}
		}
		$c = array(
			"id" => $id,
			"name" => $name,
			"description" => $description,
			"date" => $date
			);
		$this->load->view('index', $c);
	}
    public function show($id)
    {   
        $this->output->enable_profiler(TRUE); //enables the profiler
        $this->load->model("Course"); //loads the model
        $course = $this->Course->get_course_by_id($id);  //calls the get_course_by_id method
        var_dump($course);
    }
    public function add($name, $description)
    {
        $this->load->model("Course");
        $course_details = array(
            "title" => $name,
            "description" => $description
        ); 
        $add_course = $this->Course->add_course($course_details);
        if($add_course === TRUE)
            echo "Course is added!";
    }
    public function remove($id)
    {
    	echo "Delete $id";
    }
    public function destroy($id)
    {
    	$this->load->model("Course"); //loads the model
        $course = $this->Course->delete_course_by_id($id);
    }
}

?>