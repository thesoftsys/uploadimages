<?php 

$conn = mysqli_connect("localhost","root","","imageupload");



$flag = $_REQUEST['flag'];

switch ($flag) {
	case 1:
			//insert images
			extract($_POST);

			$dir = "images/";
			$fileName = $_FILES['img']['name'];
			$fileTemp = $_FILES['img']['tmp_name'];

			
			$finalImageFile =$_SERVER['SERVER_NAME']."/".$dir.$fileName;


			$query = mysqli_query($conn,"INSERT INTO images(imageUrl,language) VALUES('$finalImageFile','$language')");
			if($query)
			{
				move_uploaded_file($fileTemp,$dir.$fileName);
				echo "<script>alert('Image Upload Successfuly Uploaded');location.href='index.php'</script>";
			}

		break;

		case 2:

			$category = $_REQUEST['language'];
			$result = array();
			$result['data'] =array();
			$select ="SELECT *FROM images WHERE language = '$category' ORDER BY id DESC";
			$response = mysqli_query($conn,$select);

			if(mysqli_num_rows($response) > 0)
			{


				while($row = mysqli_fetch_array($response))
				{
					
					$index['id'] = $row['0'];
					$index['imageUrl'] = $row['1'];
					$index['language'] = $row['2'];
					

					array_push($result['data'], $index);
				}

				
				echo json_encode($result);
				mysqli_close($conn);
			}

		break;
	
	default:
		# code...
		break;
}

?>