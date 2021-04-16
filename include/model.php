<?php 
include('include/connection.php');

class model extends db_connect
{
	
	function __construct()
	{
		$ob = new parent();
		$this->con=$ob->connection();
	}

	
////////////////// Categoreis Sql start

	function view_categories_sql()
	{
		$view_cat=mysqli_query($this->con,"SELECT * FROM categories where status=1 order by c_id desc");
		return $view_cat;
	}

	
////////////////// Categoreis Sql Ends
////////////////// detial Sql start

	function detial_view_sql($c_id)
	{
		$view_detial=mysqli_query($this->con,"select * from categories where c_id='$c_id' and status=1");
		return $view_detial;
	}


////////////////// detial Sql Ends

////////////////// triner Sql start

	function trainer_view_sql()
	{
		$view_trainer=mysqli_query($this->con,"SELECT trainer.*,categories.c_name FROM trainer,categories where trainer.c_id=categories.c_id and trainer.status=1 order by trainer.t_id desc");
		return $view_trainer	;
	}

	
////////////////// Trainer Sql Ends


////////////////// Feedback Sql start

    function feedback_view_sql()
    {
    	$feedback_view=mysqli_query($this->con,"SELECT * FROM `feedback` where status=1 order by id desc");
    	return $feedback_view;
    }

    

	function feedback_insert_sql($name,$review,$image)
	{
	 $insert_feedback=mysqli_query($this->con,"INSERT INTO `feedback`(name,review,image) VALUES ('$name','$review','$image')");
	}

	
////////////////// Feedback Sql Ends




////////////////// enquery Sql Starts


	function enquery_insert_sql($c_id,$name,$email,$mobile,$msg)
	{
	 $insert_enquery=mysqli_query($this->con,"INSERT INTO `enquery`(c_id,name,email,mobile,msg) VALUES ('$c_id','$name','$email','$mobile','$msg')");
	}
	
////////////////// enquery Sql Ends



////////////////// Contact Sql Starts

	
	function contact_insert_sql($name,$email,$mobile,$msg)
	{
	 $insert_contact=mysqli_query($this->con,"INSERT INTO `contact`(name,email,mobile,msg) VALUES ('$name','$email','$mobile','$msg')");
	}
	
////////////////// Contact Sql Ends


////////////////// career Sql Starts

	function career_view_sql()
	{
		$view_career=mysqli_query($this->con,"SELECT * FROM career order by career_id desc");
		return $view_career;
	}	
    
////////////////// career Sql Ends




//////////////////career_applied Sql Starts
	function career_applied_view_sql($career_id)
	{
		$view_career_applied=mysqli_query($this->con,"select * from career_applied as a,career as c where a.career_id=c.career_id and a.career_id='$career_id' order by id");
		return $view_career_applied;
	}	

//////////////////Career applied sql Ends






//////////////////Gallery sql Starts
	function gallery_view_sql()
	{
		$view_gallery=mysqli_query($this->con,"SELECT * FROM gallery where status=1 order by id desc");
		return $view_gallery;
	}	

	function gallery_index_sql()
	{
		$index_gallery=mysqli_query($this->con,"SELECT * FROM gallery  where status=1 order by id desc limit 6;");
		return $index_gallery;
	}	


//////////////////Gallery sql Ends


////////////////// banner Sql start

    function banner_view_sql()
    {
    	$banner_view=mysqli_query($this->con,"SELECT * FROM `banner` where status=1 order by id desc");
    	return $banner_view;
    }

////////////////// banner Sql Ends


////////////////// news Sql start

    function news_view_sql()
    {
    	$news_view=mysqli_query($this->con,"SELECT * FROM `news` order by id desc");
    	return $news_view;
    }

////////////////// news Sql Ends

    function search_view_sql($txtsearch)
    {

      $sql1="select * from categories where c_name like '%$txtsearch%' or description like '%$txtsearch%' and status=1";
      $res=mysqli_query($this->con,$sql1);
      return $res;
    }
}
?>

