<?php include "model.php";

class control extends model
{

    function __construct()
    {

        session_start();
        // model::__construct();
        parent::__construct();
        $url = $_SERVER['PATH_INFO'];

        switch ($url) {
            case "/index":
                include 'index.php';
                break;

            case "/blog-details":
                include 'blog-details.php';
                break;

            case "/cart":
                include 'cart.php';
                break;

            case "/checkout":
                include 'checkout.php';
                break;

            case "/contact":
                include 'contact.php';
                break;

            case  "/logout":
                unset($_SESSION['user']);
                header("location:index");
                break;

            case "/login":
                include 'login.php';

                if (isset($_POST['login'])) {
                    $loginemail = $_POST['email'];
                    $loginpass = $_POST['pass'];

                    $data = ['uemail' => $loginemail, 'upass' => $loginpass];
                    $login_run = $this->slect_login('ragister_data', $data);

                    $fetch = $login_run->fetch_object();

                    $dbemail = $fetch->uemail;
                    $bdpass = $fetch->upass;
                    $bdname = $fetch->uname;
                    $bdimage = $fetch->uimage;
                    // echo $bdname;
                    // exit();

                    $_SESSION['user'] = $bdname;
                    $_SESSION['image'] = $bdimage;

                    if ($dbemail == $loginemail && $bdpass == $loginpass) {
                        echo "<script>
                                alert('Welcome user...!')
                                window.location.href = 'index';
                              </script>";
                    } else {
                        echo "<script>
                                alert('Invaild useremail / password...!')
                                window.location.href = 'login';
                              </script>";
                    }
                }
                break;

            case "/register":
                if (isset($_POST['insertbtn'])) {
                    $name = $_POST['name'];
                    $email = $_POST['email'];
                    $password = $_POST['pass'];
                    $confime_password = $_POST['cpass'];
                    $mobile = $_POST['phone'];
                    $image = $_FILES['file']['name'];
                    $tmp_file = $_FILES['file']['tmp_name'];
                    move_uploaded_file($tmp_file, "uploads/" . $image);

                    if ($name != "" && $email != "" && $password != "" && $mobile != "" && $image != "") {
                        if ($password == $confime_password) {

                            $data = ['uname' => $name, 'uemail' => $email, 'upass' => $password, 'umobile' => $mobile, 'uimage' => $image];
                            $this->insert('ragister_data', $data);
                        } else {
                            echo "<script>
                                alert('Password is not metch plase enter vaild password...!')
                                window.location.href = 'register';
                              </script>";
                        }
                    }
                }

                include 'register.php';
                break;

            case "/shop-details":
                include 'shop-details.php';
                break;


            case "/shop-grid":
                include 'shop-grid.php';
                break;

            case "/Premium-vagitables":
                include 'Premium-vagitables.php';
                break;

            case "/Basic-vegetables":
                include 'Basic-vegetables.php';
                break;

            case "/Basic-Fruits":
                include 'Basic-Fruits.php';
                break;

            case "/Premium-Fruits":
                include 'Premium-Fruits.php';
                break;

            case "/Chocolates":
                include 'Chocolates.php';
                break;

            case "/Paneer-Butter-Chese":
                include 'Paneer-Butter-Chese.php';
                break;

            case "/Milk-Buttermilk-curd":
                include 'Milk-Buttermilk-curd.php';
                break;

            case "/Biscuits-cookies":
                include 'Biscuits-cookies.php';
                break;

            case "/Drinks-juice":
                include 'Drinks-juice.php';
                break;

            case "/Chips-namkins":
                include 'Chips-namkins.php';
                break;
            case "/Bathroom-Laundries":
                include 'Bathroom-Laundries.php';
                break;

            case "/Detergent-cleaners":
                include 'Detergent-cleaners.php';
                break;

            case "/Dishwash":
                include 'Dishwash.php';
                break;

            case "/Home-cleaning-tools":
                include 'Home-cleaning-tools.php';
                break;
        }
    }
};
$obj = new control();
