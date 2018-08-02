
<?php
if(isset($_POST['submit'])){ // Người dùng đã ấn submit
    if($_FILES['file']['name'] != NULL){ // Đã chọn file
        // Tiến hành code upload file
        if($_FILES['file']['type'] == "image/jpeg"
        || $_FILES['file']['type'] == "image/png"
        || $_FILES['file']['type'] == "image/gif"){
        // là file ảnh
        // Tiến hành code upload  
            if($_FILES['file']['size'] > 1048576){
                echo "File không được lớn hơn 1mb";
            }else{
                // file hợp lệ, tiến hành upload
                $path = 'upload/'.$_FILES['file']['name']; // Đường dẫn chưa file upload
                // Gọi hàm upload file
                move_uploaded_file($_FILES['file']['tmp_name'], $path);
                echo "Upload thành công <br />";
                echo "Tên file : ".$name."<br />";
                echo "Kiểu file : ".$_FILES['file']['type']."<br />";
                echo "File size : ".$_FILES['file']['size'];
           }
        }else{
           // không phải file ảnh
           echo "Kiểu file không hợp lệ";
        }
   }else{
        echo "Vui lòng chọn file";
   }
}
?>