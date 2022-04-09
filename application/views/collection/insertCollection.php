<!DOCTYPE html>  
<html>
<head>
<title>Registration form</title>
</head>
 
<body>
	<form method="post" action="<?= base_url() ?>Crud/savedata">
		<table width="600" border="1" cellspacing="5" cellpadding="5">
  <tr>
    <td width="230">Name</td>
    <td width="329"><input type="text" name="nama"/></td>
  </tr>
  <tr>
    <td>Penerbit</td>
    <td><input type="text" name="penerbit"/></td>
  </tr>
  <tr>
    <td>Penulis</td>
    <td><input type="email" name="penulis"/></td>
  </tr>
  <tr>
    <td>Kategori</td>
    <td><input type="email" name="kategori"/></td>
  </tr>
  <tr>
    <td colspan="2" align="center"><input type="submit" name="save" value="Save Data"/></td>
  </tr>
</table>
 
	</form>
</body>
</html>
