<?php include "hader_2.php";   ?>

<style>
    .cont {
        width: 100%;
        height: 300px;
        display: flex;
        justify-content: center;
        align-items: center;
    }

    h3 {
        margin-bottom: 20px;
        text-align: center;
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
</style>


<div class="cont">

    <form method="post">
        <div class="login">
            <h3>Sign IN</h3>
            <input type="email" name="email" placeholder="Email" <?php #echo htmlspecialchars($loginemail) 
                                                                    ?>><br>
            <input type="password" name="pass" placeholder="Password"><br>
            <input type="submit" class="btn btn-sm btn-primary" value="Sing In" name="login">
        </div>

        <a href="register">Not registered ? Click here</a>
    </form>
</div>



<?php include "footer.php"  ?>