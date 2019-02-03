 <!DOCTYPE html>
<html>
<head>
    <title>Simple-SearchEngine</title>
</head>

<body bgcolor="blue">

<form action="insert.php" method="post" enctype="multipart/form-date">

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