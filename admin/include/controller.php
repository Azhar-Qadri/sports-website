<?php  
   session_start();
   
   include('include/model.php');
   
     class controller
    {
   
        function admin_login()
        {
            $msg='';
            $user_id='';
            $name='';
            $password='';
   
          if(isset($_REQUEST['login']))
            {
              $email=$_REQUEST['email'];
              $password=$_REQUEST['password'];
       
              //Model Query Starts 
              $ob = new model();
              $show=$ob->admin_login_sql($email,$password);
              //Model Query Ends 
   
              $count=mysqli_num_rows($show);
              if($count>0)
              {
              $fetch=mysqli_fetch_array($show);
   
              $_SESSION['ADMIN_LOGIN']='yes';
              $_SESSION['ADMIN_NAME']=$fetch['name'];
   
             ?><script> alert('Login Successfully done'); window.location.href='index.php'; </script><?php }
             else{$msg="*Please Enter Correct Login Information";
              }
            }
        }
   
   
        function view_categories()
        {
          $ob = new model();
          $show=$ob->view_categories_sql();
          return $show; 
        }

        function delete_categories()
        {
           if(isset($_REQUEST['delete']))
           {
             $c_id=$_GET['c_id'];
             $ob = new model();
             $ob->delete_categories_sql($c_id);
             header('location:categories.php');
             die();
           }
        }

        function insert_categories()
        {
            $c_name='';
            $description='';
            $image='';
            $status='';
            $msg='';
        
            if(isset($_POST['submit']))
            {
                
                $c_name=$_POST['c_name'];
                $description=$_POST['description'];
                $image=$_FILES['image'];
                
                $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
                move_uploaded_file($_FILES['image']['tmp_name'],'./media/categories/'.$image);

                 $res=mysqli_query($con,"select * from categories where c_name='$c_name'");

                 $check1=mysqli_num_rows($res);

                 if($check1>0)
                 {
                    $msg="categories is Alreay Present";
                 }
                 else
                 {
                   $ob = new model();
                   $ob->insert_catergories_sql($c_name,$description,$image,$status);
                     ?>
                <script>alert('Categories Added Successfully'); window.location.href='categories.php';</script>
                <?php 
                 }
                 
            }   
        }
            
        


        function edit_categories()
        {
           if(isset($_REQUEST['c_id']))
          { 
                $c_id=$_REQUEST['c_id'];
                $ob = new model();
                $data=$ob->edit_categories_sql($c_id);
                // echo mysqli_num_rows($data);
                return $data;
          }   
        }


        function update_categories()
        {
            if(isset($_REQUEST['update']))
            {
                
                 $c_id=$_REQUEST['c_id'];
                 $c_name=$_REQUEST['c_name'];
                 $description=$_REQUEST['description'];

                 $image=$_FILES['image'];
                 
                 if($_FILES['image']['name']!='')
                 {
                 $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
                 move_uploaded_file($_FILES['image']['tmp_name'],'./media/categories/'.$image);

                 $ob = new model();
                 $ob->update_categories_image_sql($c_id,$c_name,$description,$image);
                 }else
                 {
                 $ob = new model();
                 $ob->update_categories_sql($c_id,$c_name,$description);
                 }

             ?>
          <script>alert('Categories Updated Successfully'); window.location.href='categories.php';</script><?php   
                 
            }
        }

        function status_categories()
        {
             if(isset($_REQUEST['type']) && $_REQUEST['type']!='')
             {
                   $type=$_REQUEST['type'];
                 
                  if($type=='status')
                  {
                     $operation=$_REQUEST['operation'];
                     $c_id=$_REQUEST['c_id'];
                 
                  if($operation=='active')
                  {
                        $status='1';
                  }
                  else
                  {
                        $status='0';
                  }
                     $ob = new model();
                     $ob->status_categories_sql($status,$c_id);
                   
                     header('location:categories.php');
                     die();
                 }
            }
        }
   
   







////////////////// trainer Login Start

        function trainer_view()
        {
          $ob = new model();
          $show_trainer=$ob->trainer_view_sql();
          return $show_trainer;
        } 

        function trainer_delete()
        {

          if(isset($_REQUEST['delete']))
          {
            $t_id=$_GET['t_id'];
            $ob = new model(); 
            $ob->trainer_delete_sql($t_id);
            header('location:product.php');
            die();
          }
        }

        function trainer_status()
        {
             if(isset($_REQUEST['type']) && $_REQUEST['type']!='')
             {
                   $type=$_REQUEST['type'];
                 
                  if($type=='status')
                  {
                     $operation=$_REQUEST['operation'];
                     $t_id=$_REQUEST['t_id'];
                 
                  if($operation=='active')
                  {
                        $status='1';
                  }
                  else
                  {
                        $status='0';
                  }
                     $ob = new model();
                     $ob->trainer_status_sql($status,$t_id);
                     header('location:product.php');
                     die();
                 }
            }
        }


        function trainer_insert()
        {
          $cat_id='';
          $t_id='';
          $name='';
          $description='';
          $image='';
          $status='';
          $msg='';
          $image_required='requried';


          if(isset($_POST['submit']))
          {

          $c_id=$_POST['c_id'];
          $name=$_POST['name'];
          $description=$_POST['description'];
          $image=$_FILES['image'];
                 
                 if($_FILES['image']['name']!='')
                 {
                 $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
                 move_uploaded_file($_FILES['image']['tmp_name'],'./media/trainer/'.$image);

                 $ob = new model();
                 $ob->trainer_insert_sql($c_id,$name,$description,$image);
                 }



          ?>
          <script>alert('Trainer Added Successfully'); window.location.href='product.php';</script>
          <?php   
    
          }
        }

         function trainer_edit()
        {
           if(isset($_REQUEST['edit']))
            { 
                
                $t_id=$_REQUEST['t_id'];
                $ob = new model();
                $data_trainer=$ob->trainer_edit_sql($t_id);
                return $data_trainer;
          }   
        } 

        function trainer_update()
        {
           if(isset($_REQUEST['update']))
            {
                 $c_id=$_REQUEST['c_id'];
                 $t_id=$_REQUEST['t_id'];
                 $name=$_REQUEST['name'];
                 $description=$_REQUEST['description'];
                 $image=$_FILES['image'];
                 
                 if($_FILES['image']['name']!='')
                 {
                 $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
                 move_uploaded_file($_FILES['image']['tmp_name'],'./media/trainer/'.$image);

                 $ob = new model();
                 $ob->trainer_update_image_sql($c_id,$t_id,$name,$description,$image);
                 }else
                 {
                 $ob = new model();
                 $ob->trainer_update_sql($c_id,$t_id,$name,$description);
                 }

             ?>
          <script>alert('Trainer Updated Successfully'); window.location.href='product.php';</script><?php   
                 
            }
        }

        
////////////////// Feedback Login Ends

        function feedback_view()
        {
          $ob = new model();
          $show_feedback=$ob->feedback_view_sql();
          return $show_feedback;
         }

         function feedback_delete()
         {
            if(isset($_REQUEST['delete']))
            {
            $id=$_GET['id'];
            $ob = new model(); 
            $ob->feedback_delete_sql($id);
            header('location:client_review.php');
           die();
            }
         }

          function feedback_status()
        {
             if(isset($_REQUEST['type']) && $_REQUEST['type']!='')
             {
                   $type=$_REQUEST['type'];
                 
                  if($type=='status')
                  {
                     $operation=$_REQUEST['operation'];
                     $id=$_REQUEST['id'];
                 
                  if($operation=='active')
                  {
                        $status='1';
                  }
                  else
                  {
                        $status='0';
                  }
                     $ob = new model();
                     $ob->feedback_status_sql($status,$id);
                     header('location:client_review.php');
                     die();
                 }
            }
        }


        function feedback_insert()
        {
          if(isset($_POST['submit']))
        {

          $name=$_POST['name'];
          $review=$_POST['review'];
          $image=$_FILES['image'];

              $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
              move_uploaded_file($_FILES['image']['tmp_name'],'./media/feedback/'.$image);

              $ob = new model();
              $ob->feedback_insert_sql($name,$review,$image);
                    
           ?>
          <script>alert('Feedback Added Successfully'); window.location.href='client_review.php';</script>
          <?php   
        }
        
        }

         function feedback_edit()
        {
           if(isset($_REQUEST['edit']))
            { 
                $id=$_GET['id'];
                $ob = new model();
                $data_feed=$ob->feedback_edit_sql($id);
                return $data_feed;
          }   
        } 

        function feedback_update()
        {
           if(isset($_REQUEST['update']))
            {
                 $id=$_REQUEST['id'];
                 $name=$_REQUEST['name'];
                 $review=$_REQUEST['review'];
                 $image=$_FILES['image'];
                 
                 if($_FILES['image']['name']!='')
                 {
                 $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
                 move_uploaded_file($_FILES['image']['tmp_name'],'./media/feedback/'.$image);

                 $ob = new model();
                 $ob->feedback_update_image_sql($id,$name,$review,$image);
                 }else
                 {
                 $ob = new model();
                 $ob->feedback_update_sql($id,$name,$review);
                 }

             ?>
          <script>alert('Feedback Updated Successfully'); window.location.href='client_review.php';</script><?php   
                 
            }
        }

//////////////////Feedback Logic Ends



///////////////Enquery Login Start
      function enquery_view()
        {
          $ob = new model();
          $show_enquery=$ob->enquery_view_sql();
          return $show_enquery;
         }

       function enquery_delete()
         {
            if(isset($_REQUEST['delete']))
            {
            $id=$_GET['id'];
            $ob = new model(); 
            $ob->enquery_delete_sql($id);
            header('location:enquery.php');
            die();
            }
         }

          function enquery_status()
        {
             if(isset($_REQUEST['type']) && $_REQUEST['type']!='')
             {
                   $type=$_REQUEST['type'];
                 
                  if($type=='status')
                  {
                     $operation=$_REQUEST['operation'];
                     $id=$_REQUEST['id'];
                 
                  if($operation=='active')
                  {
                        $status='1';
                  }
                  else
                  {
                        $status='0';
                  }
                     $ob = new model();
                     $ob->enquery_status_sql($status,$id);
                     header('location:enquery.php');
                     die();
                 }
            }
        }  
////////////////Enquery Login Ends




////////////////Contact US Login Ends

         function contact_view()
        {
          $ob = new model();
          $show_contact=$ob->contact_view_sql();
          return $show_contact;
         }

       function contact_delete()
         {
            if(isset($_REQUEST['delete']))
            {
            $id=$_GET['id'];
            $ob = new model(); 
            $ob->contact_delete_sql($id);
            header('location:contact.php');
            die();
            }
         }

          function contact_status()
        {
             if(isset($_REQUEST['type']) && $_REQUEST['type']!='')
             {
                   $type=$_REQUEST['type'];
                 
                  if($type=='status')
                  {
                     $operation=$_REQUEST['operation'];
                     $id=$_REQUEST['id'];
                 
                  if($operation=='active')
                  {
                        $status='1';
                  }
                  else
                  {
                        $status='0';
                  }
                     $ob = new model();
                     $ob->contact_status_sql($status,$id);
                     header('location:contact.php');
                     die();
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

       function career_delete()
         {
            if(isset($_REQUEST['delete']))
            {
            $career_id=$_GET['career_id'];
            $ob = new model(); 
            $ob->career_delete_sql($career_id);
            header('location:career.php');
            die();
            }
         }

          function career_status()
        {
             if(isset($_REQUEST['type']) && $_REQUEST['type']!='')
             {
                   $type=$_REQUEST['type'];
                 
                  if($type=='status')
                  {
                     $operation=$_REQUEST['operation'];
                     $career_id=$_REQUEST['career_id'];
                 
                  if($operation=='active')
                  {
                        $status='1';
                  }
                  else
                  {
                        $status='0';
                  }
                     $ob = new model();
                     $ob->career_status_sql($status,$career_id);
                     header('location:career.php');
                     die();
                 }
            }
        }   


        function career_insert()
        {
          if(isset($_POST['submit']))
        {

          $job_name=$_POST['job_name'];
          $description=$_POST['description'];
          $experience=$_POST['experience'];
          $location=$_POST['location'];

              $ob = new model();
              $ob->career_insert_sql($job_name,$description,$experience,$location);
                    
           ?>
          <script>alert('Job Added Successfully'); window.location.href='career.php';</script>
          <?php   
        }
        
        }

         function career_edit()
        {
           if(isset($_REQUEST['edit']))
            { 
                $career_id=$_GET['career_id'];
                $ob = new model();
                $data_career=$ob->career_edit_sql($career_id);
                return $data_career;
          }   
        } 

        function career_update()
        {
           if(isset($_REQUEST['update']))
            {
                $career_id=$_REQUEST['career_id'];
                $job_name=$_POST['job_name'];
                $description=$_POST['description'];
                $experience=$_POST['experience'];
                $location=$_POST['location'];
                
                 $ob = new model();
                 $ob->career_update_sql($career_id,$job_name,$description,$experience,$location);
                
             ?>
          <script>alert('career Updated Successfully'); window.location.href='career.php';</script>
          <?php   
                 
            }
        }      
/////////////Career Logic Ends 




/////////////Career Applied Logic Starts

       function career_applied_view()
        {
          $career_id=$_REQUEST['career_id'];
          $ob = new model();
          $show_career_applied=$ob->career_applied_view_sql($career_id);
          return $show_career_applied;
         }

          function career_applied_delete()
         {
            if(isset($_REQUEST['delete']))
            {
            $id=$_GET['id'];

            $ob = new model(); 
            $ob->career_applied_delete_sql($id);
            ?>
            <script type="text/javascript">
            window.location.href="career.php";
            </script>
            <?php 
            }
         }

          function career_applied_status()
        {
             if(isset($_REQUEST['type']) && $_REQUEST['type']!='')
             {
                   $type=$_REQUEST['type'];
                 
                  if($type=='status_applied')
                  {
                     $operation=$_REQUEST['operation'];
                     $id=$_REQUEST['id'];
                 
                  if($operation=='active')
                  {
                        $status_applied='1';
                  }
                  else
                  {
                        $status_applied='0';
                  }
                     $ob = new model();
                     $ob->career_applied_status_sql($status_applied,$id);
                     header('location:career.php');
                     die();
                 }
            }
        }   
 
/////////////Career Applied Logic Ends


/////////////Gallery Logic Starts
          function gallery_view()
          {
          $ob = new model();
          $show_gallery=$ob->gallery_view_sql();
          return $show_gallery;
         }

         function gallery_delete()
         {
            if(isset($_REQUEST['delete']))
            {
            $id=$_GET['id'];
            $ob = new model(); 
            $ob->gallery_delete_sql($id);
            header('location:gallery.php');
            die();
            }
         }

          function gallery_status()
        {
             if(isset($_REQUEST['type']) && $_REQUEST['type']!='')
             {
                   $type=$_REQUEST['type'];
                 
                  if($type=='status')
                  {
                     $operation=$_REQUEST['operation'];
                     $id=$_REQUEST['id'];
                 
                  if($operation=='active')
                  {
                        $status='1';
                  }
                  else
                  {
                        $status='0';
                  }
                     $ob = new model();
                     $ob->gallery_status_sql($status,$id);
                     header('location:gallery.php');
                     die();
                 }
            }
        }   

        function gallery_insert()
        {
          if(isset($_REQUEST['btnupload'])){
  
      $filename=$_FILES['f']['name'];
      $i=0;
      foreach($filename as $finalname)
      {
          $tmp=$_FILES['f']['tmp_name'][$i];
          $path="media/gallery/".$finalname;
          
          move_uploaded_file($tmp, $path);        
          
           $ob = new model();
           $ob->gallery_insert_sql($path);

           
          $i++;
          ?>
          <script type="text/javascript">
            alert('Images Uploaded Successfully');
      window.location.href="gallery.php";
            
          </script>          
          <?php 
      }
}

        }

/////////////Gallery Logic Ends



////////////////// banner Login Ends

        function banner_view()
        {
          $ob = new model();
          $show_banner=$ob->banner_view_sql();
          return $show_banner;
         }

         function banner_delete()
         {
            if(isset($_REQUEST['delete']))
            {
            $id=$_GET['id'];
            $ob = new model(); 
            $ob->banner_delete_sql($id);
            header('location:banner.php');
           die();
            }
         }

          function banner_status()
        {
             if(isset($_REQUEST['type']) && $_REQUEST['type']!='')
             {
                   $type=$_REQUEST['type'];
                 
                  if($type=='status')
                  {
                     $operation=$_REQUEST['operation'];
                     $id=$_REQUEST['id'];
                 
                  if($operation=='active')
                  {
                        $status='1';
                  }
                  else
                  {
                        $status='0';
                  }
                     $ob = new model();
                     $ob->banner_status_sql($status,$id);
                     header('location:banner.php');
                     die();
                 }
            }
        }


        function banner_insert()
        {
          if(isset($_POST['submit']))
        {

          $title=$_POST['title'];
          $description=$_POST['description'];
          $image=$_FILES['image'];

              $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
              move_uploaded_file($_FILES['image']['tmp_name'],'./media/banner/'.$image);

              $ob = new model();
              $ob->banner_insert_sql($title,$description,$image);
                    
           ?>
          <script>alert('Slider Added Successfully'); window.location.href='banner.php';</script>
          <?php   
        }
        
        }

         function banner_edit()
        {
           if(isset($_REQUEST['edit']))
            { 
                $id=$_GET['id'];
                $ob = new model();
                $data_banner=$ob->banner_edit_sql($id);
                return $data_banner;
          }   
        } 

        function banner_update()
        {
           if(isset($_REQUEST['update']))
            {
                 $id=$_REQUEST['id'];
                 $title=$_REQUEST['title'];
                 $description=$_REQUEST['description'];
                 $image=$_FILES['image'];
                 
                 if($_FILES['image']['name']!='')
                 {
                 $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
                 move_uploaded_file($_FILES['image']['tmp_name'],'./media/banner/'.$image);

                 $ob = new model();
                 $ob->banner_update_image_sql($id,$title,$description,$image);
                 }else
                 {
                 $ob = new model();
                 $ob->banner_update_sql($id,$title,$description);
                 }

             ?>
          <script>alert('Slider Updated Successfully'); window.location.href='banner.php';</script><?php   
                 
            }
        }

//////////////////banner Logic Ends


////////////////// news Login Ends

        function news_view()
        {
          $ob = new model();
          $show_news=$ob->news_view_sql();
          return $show_news;
         }

         function news_delete()
         {
            if(isset($_REQUEST['delete']))
            {
            $id=$_GET['id'];
            $ob = new model(); 
            $ob->news_delete_sql($id);
            header('location:news.php');
            die();
            }
         }

          function news_status()
        {
             if(isset($_REQUEST['type']) && $_REQUEST['type']!='')
             {
                   $type=$_REQUEST['type'];
                 
                  if($type=='status')
                  {
                     $operation=$_REQUEST['operation'];
                     $id=$_REQUEST['id'];
                 
                  if($operation=='active')
                  {
                        $status='1';
                  }
                  else
                  {
                        $status='0';
                  }
                     $ob = new model();
                     $ob->news_status_sql($status,$id);
                     header('location:news.php');
                     die();
                 }
            }
        }


        function news_insert()
        {
          if(isset($_POST['submit']))
        {

          $name=$_POST['name'];
          $description=$_POST['description'];
          $location=$_POST['location'];
          $event_date= $_POST['event_date'];
          $image=$_FILES['image'];



              $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
              move_uploaded_file($_FILES['image']['tmp_name'],'./media/news/'.$image);

              $ob = new model();
              $ob->news_insert_sql($name,$description,$location,$event_date,$image);
                    
           ?>
          <script>alert('News Added Successfully'); window.location.href='news.php';</script>
          <?php   
        }
        
        }

         function news_edit()
        {
           if(isset($_REQUEST['edit']))
            { 
                $id=$_GET['id'];
                $ob = new model();
                $data_news=$ob->news_edit_sql($id);
                return $data_news;
          }   
        } 

        function news_update()
        {
           if(isset($_REQUEST['update']))
            {
                  $id=$_REQUEST['id'];
                  $name=$_REQUEST['name'];
                  $description=$_REQUEST['description'];
                  $location=$_REQUEST['location'];
                  $event_date=$_REQUEST['event_date'];
                  $image=$_FILES['image'];

                 
                 if($_FILES['image']['name']!='')
                 {
                 $image=rand(11111111,99999999).'_'.$_FILES['image']['name'];
                 move_uploaded_file($_FILES['image']['tmp_name'],'./media/news/'.$image);

                 $ob = new model();
                 $ob->news_update_image_sql($id,$name,$description,$location,$event_date,$image);
                 }else
                 {
                 $ob = new model();
                 $ob->news_update_sql($id,$name,$description,$location,$event_date);
                 }

             ?>
          <script>alert('News Updated Successfully'); window.location.href='news.php';</script><?php   
                 
            }
        }

//////////////////news Logic Ends
















 }
 ?>