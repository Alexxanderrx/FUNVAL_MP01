<?php
session_start();

if (!isset($_SESSION["datos"])) {
    require("nonautho.php");
    die();
}


?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>personalInfo</title>
    <script src="main.js" defer></script>
    <link href="./output.css" rel="stylesheet">
</head>

<body class="h-[50rem] w-full">
    <nav class="flex  pl-10 pr-10 w-full h-16 justify-between items-center ">
        <div class="w-32">
            <img src="./imgs/devchallenges.svg" alt="devchallenges.svg" />
        </div>
        <div id="open" class="flex   justify-around items-center">
            <div class=" border rounded-md h-8 w-8 overflow-hidden">
                <?php
                echo "<img src='data:image/jpg; base64," . base64_encode($_SESSION["info_photo"]) . "'>";
                ?>
            </div>
            <p class="pl-4 pr-4"><?php echo $_SESSION["info_name"] ?></p>
            <svg id="spin" style="transition-duration: 500ms;" class="w-6 h-6  text-gray-800 dark:text-white"
                aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="0 0 30 8">
                <path
                    d="M15.434 1.235A2 2 0 0 0 13.586 0H2.414A2 2 0 0 0 1 3.414L6.586 9a2 2 0 0 0 2.828 0L15 3.414a2 2 0 0 0 .434-2.179Z" />
            </svg>

        </div>
        <ul id="toggle"
            class="flex flex-col justify-center items-center  h-44 w-48 border rounded-2xl bg-white absolute right-10 top-16 collapse">
            <a href="personalInfo.php"
                class="hover:bg-gray-200 flex justify-center items-center w-4/5 h-1/4 rounded-2xl">
                <li>My Profile</li>
            </a>
            <a href="personalInfo.php"
                class="hover:bg-gray-200 flex justify-center items-center w-4/5 h-1/4 rounded-2xl">
                <li class="flex justify-center items-center w-full border-b border-gray p-3">
                    Group Chat
                </li>
            </a>
            <a href="logout.php" class="hover:bg-gray-200 flex justify-center items-center w-4/5 h-1/4 rounded-2xl">
                <li>Log out
                </li>
            </a>
        </ul>
    </nav>

    <form class="h-[50rem] flex flex-col justify-start items-center w-full " method="POST" action="updateHall.php"
        enctype="multipart/form-data">
        <!-- <p class="text-3xl mb-2 mt-4">Personal info</p> -->
        <a href="personalInfo.php" class="text-sky-500 w-3/5 mb-2 mt-4">&#60;&#160;Back</a>

        <div class=" w-3/5 flex flex-col justify-center items-center border rounded-2xl">

            <div class="h-24 w-full flex flex-col justify-center items-start text-sm  px-8">
                <div>
                    <p class="text-lg">Change Info</p>
                    <p class="text-xs text-gray-400">Changes will be reflected to every services</p>
                </div>

            </div>

            <div class="h-20 w-full flex justify-start items-center text-sm  px-8">
                <div class="border rounded-md h-12 w-12 overflow-hidden">
                    <input type="image" style="opacity: 40%;"
                        class="hover:bg-gray-300 text-gray-500 border border-gray-400 rounded-lg absolute" width="48"
                        height="48" id="image" alt="Login" src="./imgs/user_placeH.jpg" disabled>
                    <?php
                    echo "<img  class='object-fill' src='data:image/jpg; base64," . base64_encode($_SESSION["info_photo"]) . "'>";
                    ?>
                </div>

                <input type="file" id="file-input" accept="image/*"
                    class="w-2/6 pl-8 h-full flex items-center text-gray-400 text-sm" name="newPhoto">

            </div>

            <div class="h-24 w-full flex flex-col justify-center items-start text-sm  px-8">
                <p class="">Name</p>
                <input class="h-12 w-1/2 bg-white text-black border rounded-lg pl-4" type="text"
                    placeholder="Enter your name..." size="30" name="newName">
            </div>

            <div class="h-24 w-full flex flex-col justify-center items-start text-sm  px-8">
                <p class="">Bio</p>
                <input class="h-24 w-1/2 bg-white text-black border rounded-lg pl-4 overflow-scroll" type="text"
                    placeholder="Enter your bio..." size="30" name="newBio">
            </div>


            <div class="h-24 w-full flex flex-col justify-center items-start text-sm  px-8">
                <p class="">Phone</p>
                <input class="h-12 w-1/2 bg-white text-black border rounded-lg pl-4" type="text"
                    placeholder="Enter your phone..." size="30" name="newPhone">
            </div>

            <div class=" h-24 w-full flex flex-col justify-center items-start text-sm  px-8">
                <p class="">Email</p>
                <input class="h-12 w-1/2 bg-white text-black border rounded-lg pl-4" type="text"
                    placeholder="Enter your email..." size="30" name="newEmail" />
            </div>

            <div class=" h-24 w-full flex flex-col justify-center items-start text-sm  px-8">
                <p class="">Password</p>
                <input class=" h-12 w-1/2 bg-white text-black border rounded-lg pl-4" type="text"
                    placeholder="Enter your new password..." size="30" name="newPass">
            </div>

            <div class=" h-16 w-full flex  justify-start items-center text-sm  px-8">
                <button class="h-10 p-6 bg-blue-500 hover:bg-blue-700 text-white  py-2 px-4 rounded-lg"
                    type="submit">Save</button>
            </div>

        </div>

        <div class="flex w-3/5 align-items-center justify-between text-gray-400">
            <p class="text-sm">create by <a href="https://github.com/Alexxanderrx">Alexxanderrx</a></p>
            <p class="text-sm">devChallenges.io</p>
        </div>

    </form>


</body>

</html>