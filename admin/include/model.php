<?php 
include('include/connection.php');

class model extends db_connect
{
	
	function __construct()
	{
		$ob = new parent();
		$this->con=$ob->connection();
	}

	function admin_login_sql($email,$password)
	{		
     	$run=mysqli_query($this->con,"SELECT * FROM `admin_user` WHERE email='$email'and password='$password'");
	    return $run;	
	}

////////////////// Categoreis Sql start

	function view_categories_sql()
	{
		$view_cat=mysqli_query($this->con,"SELECT * FROM categories order by c_id desc");
		return $view_cat;
	}

	function delete_categories_sql($c_id)
	{
		$delete_sql="DELETE FROM `categories` WHERE c_id='$c_id'";
        mysqli_query($this->con,$delete_sql);
	}

	function insert_catergories_sql($c_name,$description,$image,$status)
	{	
		
		$insert_cat=mysqli_query($this->con,"INSERT INTO `categories`(c_name,description,image,status) VALUES ('$c_name','$description','$image','1')");
	}

	function edit_categories_sql($c_id)
   	{
   		  $select="select * from categories where c_id='$c_id'";
          $data=mysqli_query($this->con,$select);
          return $data;
   	}

   	function update_categories_image_sql($c_id,$c_name,$description,$image)
   	{	
   		$update_sql_image=mysqli_query($this->con,"UPDATE `categories` SET c_name='$c_name',description='$description',image='$image' WHERE c_id='$c_id'");
    }
	function update_categories_sql($c_id,$c_name,$description)
   	{
    	  $update_sql=mysqli_query($this->con,"UPDATE `categories` SET c_name='$c_name',description='$description' WHERE c_id='$c_id'");
	}

	function status_categories_sql($status,$c_id)
	{
		 $update_status="UPDATE `categories` SET status='$status' WHERE c_id='$c_id'";
         mysqli_query($this->con,$update_status);
        
	}

////////////////// Categoreis Sql Ends






////////////////// triner Sql start

	function trainer_view_sql()
	{
		$view_trainer=mysqli_query($this->con,"SELECT trainer.*,categories.c_name FROM trainer,categories where trainer.c_id=categories.c_id  order by trainer.t_id desc");
		return $view_trainer;
	}

	function trainer_delete_sql($t_id)
	{
		$delete_port="DELETE FROM `trainer` WHERE t_id='$t_id'";
        mysqli_query($this->con,$delete_port);
	}


   	function trainer_status_sql($status,$t_id)
	{
		$trainer_status="UPDATE `trainer` SET status='$status' WHERE t_id='$t_id'";
        mysqli_query($this->con,$trainer_status);
	}

	function trainer_insert_sql($c_id,$name,$description,$image)
	{
	 $insert_trainer=mysqli_query($this->con,"INSERT INTO `trainer`(c_id,name,description,image) VALUES ('$c_id','$name','$description','$image')");
	}

	function trainer_edit_sql($t_id)
   	{
   		  $select_trainer="select * from trainer where t_id='$t_id'";
          $data_trainer=mysqli_query($this->con,$select_trainer);
          return $data_trainer;
   	}

   	function trainer_update_image_sql($c_id,$t_id,$name,$description,$image)
   	{	
   		$trainer_sql_image=mysqli_query($this->con,"UPDATE `trainer` SET c_id='$c_id',name='$name',description='$description',image='$image' WHERE t_id='$t_id'");
	}
	function trainer_update_sql($c_id,$t_id,$name,$description)
   	{
    	  $trainer_sql=mysqli_query($this->con,"UPDATE `trainer` SET c_id='$c_id',name='$name',description='$description' WHERE t_id='$t_id'");
	}



////////////////// Trainer Sql Ends








////////////////// Feedback Sql start

    function feedback_view_sql()
    {
    	$feedback_view=mysqli_query($this->con,"SELECT * FROM `feedback` order by id desc");
    	return $feedback_view;
    }

    function feedback_delete_sql($id)
    {
    	 $delete_feedback="DELETE FROM `feedback` WHERE id='$id'";
        mysqli_query($this->con,$delete_feedback);	
    }

    function feedback_status_sql($status,$id)
	{
		$feedback_status="UPDATE `feedback` SET status='$status' WHERE id='$id'";
        mysqli_query($this->con,$feedback_status);
	}

	function feedback_insert_sql($name,$review,$image)
	{
	 $insert_feedback=mysqli_query($this->con,"INSERT INTO `feedback`(name,review,image) VALUES ('$name','$review','$image')");
	}

	function feedback_edit_sql($id)
   	{
   		  $select_feedback="select * from feedback where id='$id'";
          $data_feedback=mysqli_query($this->con,$select_feedback);
          return $data_feedback;
   	}

   	function feedback_update_image_sql($id,$name,$review,$image)
   	{	
   		$feed_sql_image=mysqli_query($this->con,"UPDATE `feedback` SET name='$name',review='$review',image='$image' WHERE id='$id'");
	}
	function feedback_update_sql($id,$name,$review)
   	{
    	  $feed_sql=mysqli_query($this->con,"UPDATE `feedback` SET name='$name',review='$review' WHERE id='$id'");
	}
////////////////// Feedback Sql Ends






////////////////// enquery Sql Starts

	function enquery_view_sql()
	{
		$view_enquery=mysqli_query($this->con,"SELECT enquery.*,categories.c_name FROM enquery,categories where enquery.c_id=categories.c_id  order by enquery.id desc");
		return $view_enquery;
	}	

	function enquery_delete_sql($id)
    {
    	$delete_enquery="DELETE FROM `enquery` WHERE id='$id'";
        mysqli_query($this->con,$delete_enquery);	
    }

    function enquery_status_sql($status,$id)
	{
		$enquery_status="UPDATE `enquery` SET status='$status' WHERE id='$id'";
        mysqli_query($this->con,$enquery_status);
	}
////////////////// enquery Sql Ends



////////////////// Contact Sql Starts

	function contact_view_sql()
	{
		$view_contact=mysqli_query($this->con,"SELECT * FROM contact order by id desc");
		return $view_contact;
	}	

	function contact_delete_sql($id)
    {
    	$delete_contact="DELETE FROM `contact` WHERE id='$id'";
        mysqli_query($this->con,$delete_contact);	
    }

    function contact_status_sql($status,$id)
	{
		$contact_status="UPDATE `contact` SET status='$status' WHERE id='$id'";
        mysqli_query($this->con,$contact_status);
	}
////////////////// Contact Sql Ends


////////////////// career Sql Starts

	function career_view_sql()
	{
		$view_career=mysqli_query($this->con,"SELECT * FROM career order by career_id desc");
		return $view_career;
	}	

	function career_delete_sql($career_id)
    {
    	$delete_career="DELETE FROM `career` WHERE career_id='$career_id'";
        mysqli_query($this->con,$delete_career);	
    }

    function career_status_sql($status,$career_id)
	{
		$career_status="UPDATE `career` SET status='$status' WHERE career_id='$career_id'";
        mysqli_query($this->con,$career_status);
	}



	function career_insert_sql($job_name,$description,$experience,$location)
	{
	 $insert_career=mysqli_query($this->con,"INSERT INTO `career`(job_name,description,experience,location) VALUES ('$job_name','$description','$experience','$location')");
	}

	function career_edit_sql($career_id)
   	{
   		  $select_career="select * from career where career_id='$career_id'";
          $data_career=mysqli_query($this->con,$select_career);
          return $data_career;
   	}

	function career_update_sql($career_id,$job_name,$description,$experience,$location)
   	{
    	   $career_sql=mysqli_query($this->con,"UPDATE `career` SET job_name='$job_name',description='$description',experience='$experience',location='$location' WHERE career_id='$career_id'"); 
    }
    
////////////////// career Sql Ends




//////////////////career_applied Sql Starts
	function career_applied_view_sql($career_id)
	{
		$view_career_applied=mysqli_query($this->con,"select * from career_applied as a,career as c where a.career_id=c.career_id and a.career_id='$career_id' order by id");
		return $view_career_applied;
	}	

	function career_applied_delete_sql($id)
    {
    	$delete_career_applied="DELETE FROM `career_applied` WHERE id='$id'";
        mysqli_query($this->con,$delete_career_applied);	
    }

     function career_applied_status_sql($status_applied,$id)
	{
		$career_status="UPDATE `career_applied` SET status_applied='$status_applied' WHERE id='$id'";
        mysqli_query($this->con,$career_status);
	}


//////////////////Career applied sql Ends






//////////////////Gallery sql Starts
	function gallery_view_sql()
	{
		$view_gallery=mysqli_query($this->con,"SELECT * FROM gallery order by id desc");
		return $view_gallery;
	}	

	function gallery_delete_sql($id)
    {
    	$delete_gallery="DELETE FROM `gallery` WHERE id='$id'";
        mysqli_query($this->con,$delete_gallery);	
    }

    function gallery_status_sql($status,$id)
	{
		$gallery_status="UPDATE `gallery` SET status='$status' WHERE id='$id'";
        mysqli_query($this->con,$gallery_status);
	}

	function gallery_insert_sql($path)
	{
        $in="insert into gallery (file) values('$path')";
        mysqli_query($this->con,$in);
    }



//////////////////Gallery sql Ends


////////////////// banner Sql start

    function banner_view_sql()
    {
    	$banner_view=mysqli_query($this->con,"SELECT * FROM `banner` order by id desc");
    	return $banner_view;
    }

    function banner_delete_sql($id)
    {
    	 $delete_banner="DELETE FROM `banner` WHERE id='$id'";
        mysqli_query($this->con,$delete_banner);	
    }

    function banner_status_sql($status,$id)
	{
		$banner_status="UPDATE `banner` SET status='$status' WHERE id='$id'";
        mysqli_query($this->con,$banner_status);
	}

	function banner_insert_sql($title,$description,$image)
	{
	 $insert_banner=mysqli_query($this->con,"INSERT INTO `banner`(title,description,image) VALUES ('$title','$description','$image')");
	}

	function banner_edit_sql($id)
   	{
   		  $select_banner="select * from banner where id='$id'";
          $data_banner=mysqli_query($this->con,$select_banner);
          return $data_banner;
   	}

   	function banner_update_image_sql($id,$title,$description,$image)
   	{	
   		$banner_sql_image=mysqli_query($this->con,"UPDATE `banner` SET title='$title',description='$description',image='$image' WHERE id='$id'");
	}
	function banner_update_sql($id,$title,$description)
   	{
    	  $banner_sql=mysqli_query($this->con,"UPDATE `banner` SET title='$title',description='$description' WHERE id='$id'");
	}
////////////////// banner Sql Ends

////////////////// news Sql start

    function news_view_sql()
    {
    	$news_view=mysqli_query($this->con,"SELECT * FROM `news` order by id desc");
    	return $news_view;
    }

    function news_delete_sql($id)
    {
    	 $delete_news="DELETE FROM `news` WHERE id='$id'";
         mysqli_query($this->con,$delete_news);	
    }

    function news_status_sql($status,$id)
	{
		$news_status="UPDATE `news` SET status='$status' WHERE id='$id'";
        mysqli_query($this->con,$news_status);
	}

	function news_insert_sql($name,$description,$location,$event_date,$image)
	{
	 $insert_news=mysqli_query($this->con,"INSERT INTO `news`(name,description,location,event_date,image) VALUES ('$name','$description','$location','$event_date','$image')");
	}

	function news_edit_sql($id)
   	{
   		  $select_news="select * from news where id='$id'";
          $data_news=mysqli_query($this->con,$select_news);
          return $data_news;
   	}

   	function news_update_image_sql($id,$name,$description,$location,$event_date,$image)
   	{	
   		$news_sql_image=mysqli_query($this->con,"UPDATE `news` SET name='$name',description='$description',location='$location',event_date='$event_date',image='$image' WHERE id='$id'");
	}
	function news_update_sql($id,$name,$description,$location,$event_date)
   	{
    	  $news_sql=mysqli_query($this->con,"UPDATE `news` SET name='$name',description='$description',location='$location',event_date='$event_date' WHERE id='$id'");
	}
////////////////// news Sql Ends



}
?>

