 <?php
                
                if (isset($_POST['button'])){

                	if ($_POST['password']!=($_POST['confirm_password'])){
                       echo "Password va confirm_password khong trung khop!!<br/> ";
                   } else
                   {
                       if($_POST['password'] == NULL)
                       {
                           echo "Vui long nhap password<br />";
                       }
                       else
                       {
                           if($_POST['gender']=="1"){
                               echo "Chào chị...!! ". $_POST['username'];
                           }else {
                               echo "Chào anh...!! ". $_POST['username'];
                           }
                           echo ' Tên đăng nhập là: ' . $_POST['username'];
                           echo '<br/>';
                       }
                   }
                	

                   
                }

                

                
           ?>

