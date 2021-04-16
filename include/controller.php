<?php  
   session_start();
   
   include('include/model.php');
   
     class controller
    {
   
////////////////// Categories Login Start

        function view_categories()
        {
          $ob = new model();
          $show=$ob->view_categories_sql();
          return $show; 
        }
/////////////////// Categories login Ends

////////////////// Detial Login Start

        function detial_view()
        {
          $c_id=$_REQUEST['c_id'];
          $ob = new model();
          $show_detial=$ob->detial_view_sql($c_id);
          return $show_detial;
        }         

 //////////////////Detial Logic Ends





////////////////// trainer Login Start

        function trainer_view()
        {
          $ob = new model();
          $show_trainer=$ob->trainer_view_sql();
          return $show_trainer;
        } 

     
        
////////////////// Feedback Login Ends

        function feedback_view()
        {


           $ob = new model();
           $show_feedback=$ob->feedback_view_sql();
            return $show_feedback;
         }

    

        function feedback_insert()
        {
          if(isset($_POST['submit']))
        {

          $name=$_POST['name'];
          $review=$_POST['review'];
          $image=$_FILES['image'];

              $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
              move_uploaded_file($_FILES['image']['tmp_name'],'admin/media/feedback/'.$image);

              $ob = new model();
              $run_feedback=$ob->feedback_insert_sql($name,$review,$image);
            
                  if($run_feedback)
                  {
                      $_SESSION['STATUS'] ="Your Feedback is Sent Successfully!";
                      $_SESSION['STATUS_CODE'] ="success";
                  } 
                  else
                  {
                      $_SESSION['STATUS']="Your Feedback is Not Sent!";
                      $_SESSION['STATUS_CODE']="error";
                  }  
        }
        
        }
     
//////////////////Feedback Logic Ends



///////////////Enquery Login Start
   
         function enquery_insert()
        {
          if(isset($_POST['submit']))
        {
          echo $c_id=$_REQUEST['c_id'];
          $name=$_POST['name'];
          $email=$_POST['email'];
          $mobile=$_POST['mobile'];
          $msg=$_POST['msg'];
          
              $ob = new model();
              $run_enquery=$ob->enquery_insert_sql($c_id,$name,$email,$mobile,$msg);
          
                  if($run_enquery)
                  {
                      $_SESSION['STATUS'] ="Your enquery is Sent Successfully!";
                      $_SESSION['STATUS_CODE'] ="success";
                  } 
                  else
                  {
                      $_SESSION['STATUS']="Your enquery is Not Sent!";
                      $_SESSION['STATUS_CODE']="error";
                  }
          
              
        
        
        }
          }

////////////////Enquery Login Ends




////////////////contact US Login Ends

         
          function contact_insert()
        {
          if(isset($_POST['submit']))
        {

          $name=$_POST['name'];
          $email=$_POST['email'];
          $mobile=$_POST['mobile'];
          $msg=$_POST['msg'];

              $ob = new model();
              $run_contact=$ob->contact_insert_sql($name,$email,$mobile,$msg);
          

                  if($run_contact)
                  {
                      $_SESSION['STATUS'] ="Your Contact is Sent Successfully!";
                      $_SESSION['STATUS_CODE'] ="success";
                  } 
                  else
                  {
                      $_SESSION['STATUS']="Your Contact is Not Sent!";
                      $_SESSION['STATUS_CODE']="error";
                  }
        }
        
        }

/////////////Contact Logic Ends 


/////////////Career Logic Starts
        function career_view()
        {
          $ob = new model();
          $show_career=$ob->career_view_sql();
          return $show_career;
         }



/////////////Career Applied Logic Starts

       function career_applied_view()
        {
          $career_id=$_REQUEST['career_id'];
          $ob = new model();
          $show_career_applied=$ob->career_applied_view_sql($career_id);
          return $show_career_applied;
         }

 
/////////////Career Applied Logic Ends


/////////////Gallery Logic Starts
          function gallery_view()
          {
          $ob = new model();
          $show_gallery=$ob->gallery_view_sql();
          return $show_gallery;
         }

         function gallery_index()
         {
          $ob = new model();
          $index_gallery=$ob->gallery_index_sql();
          return $index_gallery;
         }


/////////////Gallery Logic Ends



////////////////// banner Login Ends

        function banner_view()
        {
          $ob = new model();
          $show_banner=$ob->banner_view_sql();
          return $show_banner;
         }

        
//////////////////banner Logic Ends

//////////////////News Logic Ends

       function news_view()
        {
          $ob = new model();
          $show_news=$ob->news_view_sql();
          return $show_news; 
        }  
/////////////////News logic Ends


function search_view()
{
      if(isset($_REQUEST['btnsearch']))
    {

     $txtsearch=$_REQUEST['search'];

          $ob = new model();
          $show_search=$ob->search_view_sql($txtsearch);
          return $show_search; 
    }

}
 }
 ?>