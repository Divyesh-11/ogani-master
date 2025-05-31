<?php include "hader_2.php"; ?>

<style>
    .cont {
        width: 100%;
        height: 600px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h3 {
        margin-bottom: 20px;
        text-align: center;
    }

    label {
        display: inline-block;
        width: 150px;
    }

    input {
        width: 350px;
        margin-top: 20px;
        background-color: whitesmoke;
        padding: 10px;

    }

    a {
        text-decoration: none;
        color: blueviolet;

    }

    a:hover {
        color: black;
    }

    input[type="submit"] {
        width: 100%;
    }
</style>


<div class="cont">

    <form method="post" enctype="multipart/form-data">
        <div>
            <h3>Register Now</h3>

            <label>Name:</label>
            <input type="text" name="name" placeholder="rohit sharma...!"><br>


            <label>Email:</label>
            <input type="email" name="email" placeholder="abc@gmail.com"><br>


            <label>Password:</label>
            <input type="password" name="pass" placeholder="Enter password"><br>


            <label>Confime Password:</label>
            <input type="password" name="cpass" placeholder="Enter confime password"><br>


            <label>Mobile:</label>
            <input type="text" name="phone" placeholder="9265182201"><br>


            <label>Image:</label>
            <input type="file" name="file" multiple><br>


            <input type="submit" class="btn btn-sm btn-primary" name="insertbtn" value="Sign Up">
        </div>
    </form>
</div>

<?php include "footer.php"  ?>