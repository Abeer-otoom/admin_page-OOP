<?php  
    $c = new mysqli("localhost","root","","ecom6");
      
     Class Admin {
            public $email;
            public $password; 
            public $fullname;

       

        public function creatadmin($c,$email,$password,$fullname)
        {
       
            $query = "insert into admin(admin_email,admin_password,admin_fullname)
             values('$email','$password','$fullname')";

            $c->query($query);
        }

         public function readadmin($c)
        {
        
          $query  = "select * from admin";

           
            $result = $c->query($query);
            return $result;
           
        }
        public function selectadmin($c,$id)
        {
        
          $query  = "select * from admin where admin_id=$id ";

           
            $result = $c->query($query);
            return $result;
           
        }
        public function deleteadmin($c,$id)
        {
       
            $query = "delete from admin where admin_id=$id";

            $c->query($query);
        }
         public function updateadmin($c,$email,$password,$fullname,$id)
        {
       
            $query = "update admin set
                      admin_email='$email',
                      admin_password='$password',
                      admin_fullname='$fullname'
                      where admin_id=$id";

           $result = $c->query($query);
            return $result;
        }



    }


    
       $x=new Admin();
    if(isset($_POST['submit'])){
      
    $email = $_POST['admin_email'];
    $password = $_POST['admin_password'];
    $fullname = $_POST['admin_name'];

     $x->creatadmin($c,$email,$password,$fullname);

  
}
