
 <form action="upload_file.php" method="post"
 enctype="multipart/form-data">
 <label for="file">Filename:</label>
 <input type="file" name="file" id="file" /> 
 <br />
 <input type="submit" name="submit" value="Submit" />
 </form>

 
<?php
 if (!(($_FILES["file"]["type"] == "application/octet-stream")
 || ($_FILES["file"]["type"] == "text/css")
 || ($_FILES["file"]["type"] == "text/html"))
 && ($_FILES["file"]["size"] < 16777216))
   {
   if ($_FILES["file"]["error"] > 0)
     {
     echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
     }
   else
     {
     echo "Upload: " . $_FILES["file"]["name"] . "<br />";
     echo "Type: " . $_FILES["file"]["type"] . "<br />";
     echo "Size: " . ($_FILES["file"]["size"] / 1024) . " Kb<br />";
     echo "Temp file: " . $_FILES["file"]["tmp_name"] . "<br />";

     if (file_exists("upload/" . $_FILES["file"]["name"]))
       {
       echo $_FILES["file"]["name"] . " Již existuje. ";
       }
     else
       {
       move_uploaded_file($_FILES["file"]["tmp_name"],
       "upload/" . $_FILES["file"]["name"]);
       echo "Stored in: " . "upload/" . $_FILES["file"]["name"];
       }
     }
   }
 else
   {
   echo "Invalid file";
   }
 ?>