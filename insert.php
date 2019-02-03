 <!DOCTYPE html>
<html>
<head>
    <title>Simple-SearchEngine</title>
</head>

<body bgcolor="blue">

<form action="insert.php" method="post" enctype="multipart/form-data">

<table bgcolor="orange" width="500" border="2" cellspacing="2" align="center">
    <tr>
    <td> colspan="5" align="center" <h2>Inserting a new Webiste:</h2></td>
    </tr>
    <tr>
        <td align="right"><b>Site Title:</b></td>
        <td><input type="text" name="site_title" /> </td>
</tr>
<tr>
<td align="right"><b>Site_link:</b></td>
        <td><input type="text" name="site_link" />  </td>
</tr>

<tr>
<td align="right"><b>Site Keywords:</b></td>
        <td><input type="text" name="site_keywords"/> </td>
</tr>

<tr>
<td align="right"><b>Site Keywords:</b></td>
        <td><input type="text" name="site_keywords" /> </td>
</tr>

<tr>
<td align="right" ><b>Site Description:</b></td>
        <td><textarea cols="16" rows="8" name="site_desc"> </textarea> </td>
</tr>

<tr>
<td align="right"><b>Site Image:</b></td>
        <td><input type="file" name="site_image" /> </td>
</tr>

<tr>
        <td>align="center" colspan="5"<input type="submit" name="submit" value="Add Site Now" </td>
</tr>



</form>


</body>



</html>

<?php>
mysql_connect("$Host","$Username","$Password");
mysql_select_db("$DatabaseName");

if(isset($POST['submit'])){


echo $site_title = $_POST['site_title'];
echo $site_link = $_POST['site_link'];
echo $site_keywords = $_POST['site_keywords'];
echo $site_desc = $_POST['site_desc'];
echo $site_image = $_FILES['site_image']['name'];
echo $site_image_tmp = $_FILES['site_image']['tmp_name'];

if($site_title==''  OR $site_link==''  OR $site_keywords=='' OR  $site_desc=='')

echo "<script>alert('Please Fill All Of The Fields')</script>"

$insert_query = "insert into sites(site_title,site_link,site_keywords,site_image) values ('$site_title','$site_link','$site_keywords','$site_desc','$site_image'";




move_upload_file($site_image_tmp"images/sites/{$site_image}");

$run_query = mysql_query($insert_query)) {

        echo "<script>alert('Data Inserted Into Database)>/script>";

}


?>