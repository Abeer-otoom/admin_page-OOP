<?php  
    $c = new mysqli("localhost","root","","ecom6");
      
     Class Admin 
     {
         
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
        public function readadminbyid($c,$id)
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
    if(isset($_POST['submit']))
    {
      
    $email = $_POST['admin_email'];
    $password = $_POST['admin_password'];
    $fullname = $_POST['admin_name'];

     $x->creatadmin($c,$email,$password,$fullname);
   }

  

class category
{

        public function creatcategory($c,$name,$desc,$image)
        {
       
            $query = "insert into category(cat_name , cat_desc , cat_img)
           values('$name','$desc', '$image')";

            $c->query($query);
        }

        public function readcategory($c)
        {
        
          $query  = "select * from category";

           
            $result = $c->query($query);
            return $result;
           
        }
        public function deletecategory($c,$id)
        {
       
            $query = "delete from category where cat_id=$id";

            $c->query($query);
        }
        public function readcategorybyid($c,$id)
        {
        
          $query  = "select * from category where cat_id=$id";

           
            $result = $c->query($query);
            return $result;
           
        }
         public function updatecategory($c,$name,$desc,$category_img,$id)
        {
       
             $query="update category set
                      cat_name='$name',
                      cat_desc='$desc',
                      cat_img='$category_img'
                      where cat_id=$id";

           $result = $c->query($query);
            return $result;
        }
}


$y= new category;
if (isset($_POST['save'])) 
{  $category_img=$_FILES['cat_img']['name'];
   $tmp_name=$_FILES['cat_img']['tmp_name'];
   $path='upload/';
   $name=$_POST['cat_name'];
   $desc=$_POST['cat_desc'];
   move_uploaded_file($tmp_name, $path.$category_img);

   $y->creatcategory($c,$name,$desc,$category_img);
}

class product
{
   public function creatcproduct($c,$name,$desc,$category,$price,$image)
        {
       
            $query = "insert into product(pro_name, pro_desc, pro_price,cat_id,pro_image)values
            ('$name' , '$desc' , $price , $category , '$image')";
          echo $query;
          $c->query($query);
           
        }
    public function readproduct($c)
        {
        
          $query  = "select * from category , product where 
                    category.cat_id=product.cat_id ";

           
            $result = $c->query($query);
            return $result;
           
        }
    public function deleteproduct($c,$id)
        {
       
            $query = "delete from product where pro_id=$id";

            $c->query($query);
        }
    public function readproductbyid($c,$id)
        {
        
          $query  = "select * from product where pro_id=$id";

           
            $result = $c->query($query);
            return $result;
           
        }
    public function updateproduct($c,$name,$desc,$price,$category,$product_img,$id)
        {
       
             $query="update product set
                      pro_name='$name',
                      pro_desc='$desc',
                      pro_price=$price,
                      cat_id=$category,
                      pro_image='$product_img'
                      where pro_id=$id";
 

           $result = $c->query($query);
            return $result;
        }

}

$z= new product;
if (isset($_POST['save1']))
{    $pro_img=$_FILES['p_img']['name'];
   $tmp_name=$_FILES['p_img']['tmp_name'];
   $path='upload/';
    $name=$_POST['p_name'];
    $desc=$_POST['p_desc'];
    $price=$_POST['p_price'];
    $category=$_POST['select'];
    move_uploaded_file($tmp_name, $path.$pro_img);

    $z->creatcproduct($c,$name,$desc,$category,$price,$pro_img);
}


class customer 
{
   public function creatcustom($c,$name,$email,$password,$address,$phone)
        {
       
            $query = "insert into customer(name , email , password , Address , phone_num )values
            ('$name', '$email' , '$password' ,'$address' , '$phone')";

            $c->query($query);
            
        }
     public function readcustom($c)
        {
        
          $query  = "select * from customer";

             
            $result = $c->query($query);
            return $result;
           
        }
      public function deletecustom($c,$id)
        {
       
            $query = "delete from customer where custom_id=$id";

            $c->query($query);
        }
      public function readcustombyid($c,$id)
        {
        
          $query  = "select * from customer where custom_id=$id";

           
            $result = $c->query($query);
            return $result;
           
        }
    public function updatecustom($c,$name,$email,$password,$address,$phone,$id)
        {
       
             $query="update customer set
                       name='$name',
                      email='$email',
                      password='$password',
                      Address='$address',
                      phone_num='$phone'
                      where custom_id=$id";
 

           $result = $c->query($query);
            return $result;
        }

}
$v=new customer;
if (isset($_POST['submit1']))
{
    $email=$_POST['c_email'];
    $password=$_POST['c_password'];
    $name=$_POST['c_name'];
    $address=$_POST['c_address'];
    $phone=$_POST['c_phone'];
   
   $v->creatcustom($c,$name,$email,$password,$address,$phone);

  }
