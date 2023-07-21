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
    <nav class="flex  pl-10 pr-10 w-full h-16  justify-between items-center ">
        <div class="w-32">
            <img src="./imgs/devchallenges.svg" alt="devchallenges.svg" />
        </div>
        <div id="open" class="flex justify-around items-center">
            <div class="container border rounded-md h-8 w-8 overflow-hidden">
                <?php
                echo "<img src='data:image/jpg; base64," . base64_encode($_SESSION["info_photo"]) . "'>";
                ?>
            </div>
            <p class="pl-4 pr-4"><?php echo $_SESSION["info_name"] ?></p>

            <svg id="spin" style="transition-duration: 500ms;" class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="-8 0 30 10">
                <path d="M15.434 1.235A2 2 0 0 0 13.586 0H2.414A2 2 0 0 0 1 3.414L6.586 9a2 2 0 0 0 2.828 0L15 3.414a2 2 0 0 0 .434-2.179Z" />
            </svg>

        </div>
        <ul id="toggle" style="transition-duration: 200ms;" class="flex flex-col justify-center items-center  h-44 w-48 border rounded-2xl bg-white absolute right-10 top-16 collapse">
            <a href="personalInfo.php" class="hover:bg-gray-200 flex justify-center items-center w-4/5 h-1/4 rounded-2xl">
                <li>My Profile</li>
            </a>
            <a href="personalInfo.php" class="hover:bg-gray-200 flex justify-center items-center w-4/5 h-1/4 rounded-2xl">
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

    <form class="h-[50rem] flex flex-col justify-start items-center w-full " action="updateInfo.php">
        <p class="text-3xl mb-2 mt-4">Personal info</p>
        <p class="mb-6">Basic info, like your name and photo</p>

        <div class=" w-3/5 flex flex-col justify-center items-center border rounded-2xl">

            <div class="pl-20 pr-20 h-24 w-full flex justify-between items-center border-b border-gray">
                <div>
                    <p class="text-lg">Profile</p>
                    <p class="text-xs text-gray-400">Some info may be visible to other people</p>
                </div>

                <button class="bg-white hover:bg-gray-300 text-gray-500 border border-gray-400  py-2 px-8 rounded-lg" type="submit">Edit</button>

            </div>
            <div class="pl-20 h-16 w-full flex border-b border-gray items-center">
                <p class="w-2/6 h-full flex items-center text-gray-400 text-sm">PHOTO</p>
                <div class="border rounded-md h-12 w-12 overflow-hidden">
                    <?php
                    echo "<img  src='data:image/jpg; base64," . base64_encode($_SESSION["info_photo"]) . "'>";
                    ?>
                </div>
            </div>

            <div class="pl-20 h-16 w-full flex border-b border-gray items-center">
                <p class="w-2/6 h-full flex items-center text-gray-400 text-sm">NAME</p>
                <input class="bg-white text-black" type="text" value="<?php echo $_SESSION["info_name"] ?>" size="30" disabled />
            </div>

            <div class="pl-20 h-16 w-full flex border-b border-gray items-center text-gray-400 text-sm">
                <p class="w-2/6 h-full flex items-center">BIO</p>
                <input class="bg-white text-black" type="text" value="<?php echo $_SESSION["info_bio"] ?>" size="30" disabled>
            </div>

            <div class="pl-20 h-16 w-full flex border-b border-gray items-center text-gray-400 text-sm">
                <p class="w-2/6 h-full flex items-center">PHONE</p>
                <input class="bg-white text-black" type="text" value="<?php echo $_SESSION["info_phone"] ?>" placeholder="Escriba su numero de telefono" size="30" disabled>
            </div>

            <div class="pl-20 h-16 w-full flex border-b border-gray items-center text-gray-400 text-sm">
                <p class="w-2/6 h-full flex items-center">EMAIL</p>
                <input class="bg-white text-black" type="text" value="<?php echo $_SESSION["info_email"] ?>" placeholder="Escriba su email" size="30" disabled />
            </div>

            <div class="pl-20 h-16 w-full flex items-center text-gray-400 text-sm">
                <p class="w-2/6 h-full flex items-center">PASSSWORD</p>
                <input class="bg-white text-black" type="text" value="<?php echo $_SESSION["info_password"] ?>" placeholder="Escriba su password" size="30" disabled>
            </div>
        </div>
        <div class="flex w-3/5 align-items-center justify-between text-gray-400">
            <p class="text-sm">create by <a href="https://github.com/Alexxanderrx">Alexxanderrx</a></p>
            <p class="text-sm">devChallenges.io</p>
        </div>

    </form>


</body>

</html>