<?php 
class Courses extends CI_Controller {
    public function index()
	{
		$this->load->model("Course");
		$courses = array("courses" => $this->Course->get_all_courses());
		$this->load->view('index', $courses);
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