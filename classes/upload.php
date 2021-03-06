<?php

class Upload 
{
	public function uploadfile($file)
	{
			$file = $file;
			$fileName = $file['name'];
			$fileTmpName = $file['tmp_name'];
			$fileSize  = $file['size'];
			$fileError = $file['error'];
			$fileType = $file['type'];

			$fileExt = explode('.', $fileName);
			$fileActualExt = strtolower(end($fileExt));

			$allowed = array('jpg', 'jpeg', 'png');

			if (in_array($fileActualExt, $allowed)) {
				if ($fileError === 0) {
					if ($fileSize < 1000000) {
						$fileNameNew = uniqid('', true).".".$fileActualExt;
						$fileDestination = '../uploads/'.$fileNameNew;
						move_uploaded_file($fileTmpName, $fileDestination);
						//header("Location: ".$filemsg);

						return $fileNameNew;
					}
					else{
						echo "Your file is too big!";
					}
				}
			} else{
				echo "You cannot upload files of this type!";
			}

	}
}
