
<?php  
 $connect = mysqli_connect("localhost", "root", "", "rent_in_city");  
 if(isset($_POST["insert"]))  
 { 
	$name= $_POST['name'];      
	$price= $_POST['price'];
	$category=$_POST['category'];
      $file = addslashes(file_get_contents($_FILES["image"]["tmp_name"]));  
      $query = "insert into products values ('','$name','$price','$category','$file')";  
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
           
           <style>
body, html {
  height: 100%;
  margin: 0;
}

.bg {
  
  background-image: url("C:\xampp\htdocs\Rent-In-City\bg.png");
  height: 100%; 
  background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}


input, select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box;
}


input[type=file]:hover {
    background-color: #7e72727a;
}


input[type=submit]:hover {
    background-color: rgb(70, 204, 87);
}

div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}
</style>
      </head>  
      <body> 
      <div class="bg">
          
           <br /><br />  
           <div class="container" style="width:500px;">  
                <h1 align="center">Upload Your Products</h1>
                <hr style=color>
                <br />  
                <form  method="post" enctype="multipart/form-data">  
					 <input type="text" name="name" placeholder="Product Name">
					 <br>
					 <input type="number" name="price" id="price" placeholder="Product Price">
					 <br>
					 <select name="category" id="cars">
						<option >Choose category</option>
						<option value="Electronics">Electronics</option>
						<option value="Clothing">Clothing</option>
					</select>
					 <input type="file" name="image" id="image" />  
                     <br />
					
                     <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-info" />   
                </form>  
                <br />  
                <br />  
           </div>  
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