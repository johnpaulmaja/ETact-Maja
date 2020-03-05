<?php
	//category
	$json = file_get_contents('http://rdapi.herokuapp.com/category/read.php');
	$data = json_decode($json,true);
	$category = $data['records'];
?>

<form action="pro_create.php" method="POST">
	<div class="box">
		<div class="insidebox">
			<div class="detail">
				<div class="txtholder">
<h1> Create Product </h1>
<input class="detail" type="text" name="name" placeholder="name"/>
<input class="detail" type="text" name="description" placeholder="description"/>
<input class="detail" type="text" name="price" placeholder="price"/>
<select name="category">
<option value="">--Category--</option>
	<?php
      foreach($category as $cview){
    ?>
		<option value="<?php echo $cview['id']?>"><?php echo $cview['name']?></option>
    <?php
      }
    ?>
	</select>
<input class="send" type="submit" name="submit" value="submit"/>

</form>
