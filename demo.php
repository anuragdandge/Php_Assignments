<!-- Date of Experiment 23/04  Aim :  WAP to create MultiStep Form 1) Personal Info : First Name , Middle Name , Last Name Phone No.  2) Educational Info :  Class Name  , Percentage , Roll No. College Name    -->
<?php
if (isset($_POST["Step1"])) {
    displayStep1();
} else if (isset($_POST["Step2"])) {
    displayStep2();
} else if (isset($_POST["Thanks"])) {
    displayThanks();
} else {
    displayStep1();
}
function setValue($fieldName)
{
    if (isset($_POST[$fieldName])) {
        echo $_POST[$fieldName];
    }
}
?>
<html>

<body>

    <head>
        <style>
            * {
                transition: all .5s ease-in-out;
                font-family: cursive;
            }

       
            main {
                display: flex;
                height: 100%;
                width: 100%;
                justify-content: center;
                align-items: center;
            }

            form {
                width: 30%;
                padding: 10px 20px;
                border-radius: 5px;
                display: flex;
                flex-direction: column;
                box-shadow: inset 0px 5px 0px 0px blueviolet, 0px 10px 30px -2px gainsboro;
            }

            form:hover {
                /* transform: skew(10deg , 10deg); */
                transform: matrix3d();
                transition: all 1s ease;
            }

            input[type="text"] {
                font-size: 15px;
                height: 50px;
                width: auto;
                padding: 5px 10px 5px 10px;
                border: none;
                outline: none;
                border-radius: 5px;
                margin: 10px;
                box-shadow: 2px 2px 5px gainsboro;
            }

            input[type="submit"] {
                padding: 5px 10px 5px 10px;
                border: none;
                outline: none;
                border-radius: 5px;
                height: 50px;
                width: 40%;
                margin: 10px;
                color: white;
                font-size: 15px;
                background-color: blueviolet;
                box-shadow: 2px 2px 6px 0px gainsboro;
            }

            input[type="submit"]:hover {
                color: white;
                background-color: blueviolet;
            }

            input:focus {
                background-color: gainsboro;
            }

            .submit {
                display: flex;
                justify-content: space-between;
            }
        </style>
    </head>

    <?php function displayStep1()
    { ?>
        <main>
            <form action="" method="post">
                <h1> Personal Information </h1>
                <input type="text" name="phone" value="<?php setValue("phone");  ?>" placeholder="Enter Phone Number">
                <input type="text" name="fname" value="<?php setValue("fname"); ?>" placeholder="Enter Full Name">
                <input type="text" name="addr" value="<?php setValue("addr"); ?>" placeholder="Enter Address">

                <input type="hidden" name="class" value="<?php setValue("class"); ?>" placeholder="Enter Class Name">
                <input type="hidden" name="rollno" value="<?php setValue("rollno"); ?>" placeholder="Enter Roll No.">
                <input type="hidden" name="college" value="<?php setValue("college"); ?>" placeholder="Enter College Name">
                <br />
                <input type="submit" value="Next >" name="Step2">

            </form>
        </main>
    <?php }
    function displayStep2()
    { ?>
        <main>
            <form action="" method="post">
                <h1> Educational Information </h1>
                <input type="hidden" name="phone" value="<?php setValue("phone");  ?>" placeholder="Enter Phone Number">
                <input type="hidden" name="fname" value="<?php setValue("fname"); ?>" placeholder="Enter Full Name">
                <input type="hidden" name="addr" value="<?php setValue("addr"); ?>" placeholder="Enter Address">

                <input type="text" name="class" value="<?php setValue("class"); ?>" placeholder="Enter Class Name">
                <input type="text" name="rollno" value="<?php setValue("rollno"); ?>" placeholder="Enter Roll No.">
                <input type="text" name="college" value="<?php setValue("college"); ?>" placeholder="Enter College Name">
                <br />
                <div class="submit"> <input type="submit" value=" < Prev" name="Step1">
                    <input type="submit" value="Thanks " name="Thanks">
                </div>

            </form>
        </main>
    <?php }

    function displayThanks()
    { ?>
        <main>
            <h1>Thanks for your submission</h1>
        </main>
    <?php } ?>
</body>

</html>