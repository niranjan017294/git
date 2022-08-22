<?php include('partials/menu.php'); ?>

<div class="main-content">
    <div class="wrapper">

        <h1>Add Admin</h1>
        <br/>

        <form action="" method="POST">

        <table class="tbl-30">
            <tr>
                <td>Full Name: </td>
                <td>
                    <input type="text" name="full_name" placeholder="Enter Your Name">
                </td>
            </tr>

            <tr>
                <td>UserName: </td>
                <td>
                    <input type="text" name="username" placeholder="Enter Your username">
                </td>
            </tr>

            <tr>
                <td>PassWord: </td>
                <td>
                    <input type="password" name="password" placeholder="Enter Your password">
                </td>
            </tr>

            <tr>
                <td colspan="2">
                    <input type="submit" name="submit" value="Add Admin" class="btn-secondary">
                </td>
            </tr>

        </table>
        </form>
    </div>
</div>


<?php include('partials/footer.php'); ?>


<?php 
    //Process the value from form and save it in Database
    //Check weather the submit button is clicked or not

    if(isset($_POST['submit']))
    {
        //Button Clicked
        //echo "Button Click";

        //1. Get the Data from form
        $full_name = $_POST['full_name'];
        $username = $_POST['username'];
        $password = md5($_POST['password']); //Password encriptions with md5

        // SQL Query to Save the data into database
        $sql = "INSERT INTO tbl_admin SET
            full_name ='$full_name',
            username='$username',
            password= '$password'
        ";

        // 3. Executing Query and seving Data into database
        $res = mysqli_query($conn, $sql) or die(mysqli_error());

        //4. check weather the(Query is Executed) data is inserted or not and display appropriate message
        if($res==TRUE)
        {
            //Data inserted
            echo "Data Inserted";
        }
        else
        {
            //Data not inserted
            echo "Data not Inserted";
        }
    }
   
?>

