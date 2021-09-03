
<?php  
 $connect = mysqli_connect("localhost", "root", "", "rent_in_city");  
 if(isset($_POST["insert"]))  
 {  $id = $_POST['id'];
	$name= $_POST['name'];     
	$price= $_POST['price'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "insert into product values ('$id','$name','$price','$file')";  
      if(mysqli_query($connect, $query))  
      {  
           echo '<script>alert("Image Inserted into Database")</script>';  
      }
	  else{
		  echo '<script>alert("nhi hua")</script>';
	  }
 }  
 ?>  
 <!DOCTYPE html>  
 <html>  
      <head>  
           <title>Webslesson Tutorial | Insert and Display Images From Mysql Database in PHP</title>  
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>  
           <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />  
           <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>  
      </head>  
      <body>  
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h3 align="center">Insert and Display Images From Mysql Database in PHP</h3>  
                <br />  
                <form method="post" enctype="multipart/form-data">  
                     <label for="id">ID:</label>
					 <input type="int" name="id">
					 <br>
					 <label for="name">Name:</label>
					 <input type="text" name="name">
					 <br>
					 <label for="price">Price:</label>
					 <input type="number" name="price" id="price">
					 <br>
					 <input type="file" name="image" id="image" />  
                     <br /> 
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />   
                </form>  
                <br />  
                <br />  
           </div>  
      </body>  
 </html>  
 <script>  
 $(document).ready(function(){  
      $('#insert').click(function(){  
           var image_name = $('#image').val();  
           if(image_name == '')  
           {  
                alert("Please Select Image");  
                return false;  
           }  
           else  
           {  
                var extension = $('#image').val().split('.').pop().toLowerCase();  
                if(jQuery.inArray(extension, ['gif','png','jpg','jpeg']) == -1)  
                {  
                     alert('Invalid Image File');  
                     $('#image').val('');  
                     return false;  
                }  
           }  
      });  
 });  
 </script>  