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

<body class="flex flex-col justify-center items-center h-[50rem] w-screen">
    <nav class="flex  pl-10 pr-10 w-full h-16 justify-between items-center ">
        <div class="w-32">
            <img src="./imgs/devchallenges.svg" alt="devchallenges.svg" />
        </div>
        <div id="open" class="w-8 h-8  md:w-fit flex  justify-between items-center">
            <div class=" border  absolute md:static rounded-md h-8 w-8 overflow-hidden">
                <?php
                echo "<img class='h-8 w-8' src='data:image/jpg; base64," . base64_encode($_SESSION["info_photo"]) . "'>";
                ?>
            </div>
            <p class=" md:visible collapse pl-4 pr-4"><?php echo $_SESSION["info_name"] ?></p>
            <svg id="spin" style="transition-duration: 500ms;" class="md:visible collapse w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="black" viewBox="-8 0 30 10">
                <path d="M15.434 1.235A2 2 0 0 0 13.586 0H2.414A2 2 0 0 0 1 3.414L6.586 9a2 2 0 0 0 2.828 0L15 3.414a2 2 0 0 0 .434-2.179Z" />
            </svg>

        </div>
        <ul id="toggle" class="flex flex-col justify-center items-center  md:h-44 md:w-48  h-36 w-40 border rounded-xl bg-white absolute right-10 md:top-16 top-12 collapse">

            <div class=" w-11/12 ">
                <a href="personalInfo.php" class="hover:bg-gray-200 flex justify-start items-center rounded-2xl px-4">
                    <svg class="md:w-6 md:h-6 w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="gray" viewBox="0 0 20 20">
                        <path d="M10 0a10 10 0 1 0 10 10A10.011 10.011 0 0 0 10 0Zm0 5a3 3 0 1 1 0 6 3 3 0 0 1 0-6Zm0 13a8.949 8.949 0 0 1-4.951-1.488A3.987 3.987 0 0 1 9 13h2a3.987 3.987 0 0 1 3.951 3.512A8.949 8.949 0 0 1 10 18Z" />
                    </svg>
                    <li class="text-gray-500 flex justify-center items-center p-3 md:text-base text-sm">My Profile</li>
                </a>
            </div>

            <div class="w-11/12 border-b border-gray">
                <a href="personalInfo.php" class="hover:bg-gray-200 flex justify-start items-center rounded-2xl px-4">
                    <svg class="md:w-6 md:h-6 w-4 h-4 text-gray-500 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="gray" viewBox="0 0 20 18">
                        <path d="M14 2a3.963 3.963 0 0 0-1.4.267 6.439 6.439 0 0 1-1.331 6.638A4 4 0 1 0 14 2Zm1 9h-1.264A6.957 6.957 0 0 1 15 15v2a2.97 2.97 0 0 1-.184 1H19a1 1 0 0 0 1-1v-1a5.006 5.006 0 0 0-5-5ZM6.5 9a4.5 4.5 0 1 0 0-9 4.5 4.5 0 0 0 0 9ZM8 10H5a5.006 5.006 0 0 0-5 5v2a1 1 0 0 0 1 1h11a1 1 0 0 0 1-1v-2a5.006 5.006 0 0 0-5-5Z" />
                    </svg>
                    <li class="text-gray-500 flex justify-center items-center p-3 md:text-base text-sm">
                        Group Chat
                    </li>
                </a>
            </div>

            <div class="w-11/12">
                <a href="logout.php" class="hover:bg-gray-200 text-red-600 flex justify-start items-center rounded-2xl px-4">
                    <svg class="md:w-6 md:h-6 w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 18 16">
                        <path stroke="red" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 8h11m0 0L8 4m4 4-4 4m4-11h3a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2h-3" />
                    </svg>
                    <li class="flex justify-center items-center p-3 md:text-base text-sm">
                        Log out
                    </li>
                </a>
            </div>

        </ul>
    </nav>
    <form class="h-[50rem] flex flex-col justify-start items-center w-full " action="updateInfo.php">
        <p class="text-3xl mb-2 mt-4">Personal info</p>
        <p class="mb-6">Basic info, like your name and photo</p>

        <div class="w-full md:w-3/5 flex flex-col justify-center items-center border-0 md:border rounded-2xl">

            <div class="px-6 md:px-20 h-24 w-full flex justify-between items-center border-b border-gray">
                <div>
                    <p class="text-lg">Profile</p>
                    <p class="text-xs text-gray-400 w-44 md:w-full">Some info may be visible to other people</p>
                </div>

                <button class="bg-white hover:bg-gray-300 text-gray-500 border border-gray-400  py-2 px-8 rounded-lg" type="submit">Edit</button>

            </div>
            <div class="px-6 md:px-20 h-16 w-full flex border-b border-gray md:justify-normal justify-between items-center">
                <p class="w-2/6 h-full flex items-center text-gray-400 text-sm">PHOTO</p>
                <div class="border rounded-md h-12 w-12 overflow-hidden">
                    <?php
                    echo "<img class='h-12 w-12' src='data:image/jpg; base64," . base64_encode($_SESSION["info_photo"]) . "'>";
                    ?>
                </div>
            </div>

            <div class="px-6 md:px-20 h-16 w-full flex border-b border-gray items-center md:justify-normal justify-between text-gray-400 text-sm">
                <p class="w-2/6 h-full flex items-center">NAME</p>
                <input class="bg-white text-black md:text-left text-right" type="text" value="<?php echo $_SESSION["info_name"] ?>" size="20" disabled />
            </div>

            <div class="px-6 md:px-20 h-16 w-full flex border-b border-gray items-center md:justify-normal justify-between text-gray-400 text-sm">
                <p class="w-2/6 h-full flex items-center">BIO</p>
                <input class="bg-white text-black md:text-left text-right  md:w-80 w-20 text-ellipsis" type="text" value="<?php echo $_SESSION["info_bio"] ?>" disabled>
            </div>

            <div class="px-6 md:px-20 h-16 w-full flex border-b border-gray items-center md:justify-normal justify-between text-gray-400 text-sm">
                <p class="w-2/6 h-full flex items-center">PHONE</p>
                <input class="bg-white text-black md:text-left text-right" type="text" value="<?php
                                                                                                if ($_SESSION["info_phone"] == 0) {
                                                                                                    echo "";
                                                                                                } else {
                                                                                                    echo $_SESSION["info_phone"];
                                                                                                }
                                                                                                ?>" size="20" disabled>
            </div>

            <div class="px-6 md:px-20 h-16 w-full flex border-b border-gray items-center md:justify-normal justify-between text-gray-400 text-sm">
                <p class="w-2/6 h-full flex items-center">EMAIL</p>
                <input class="bg-white text-black md:text-left text-right md:w-80 w-20 text-ellipsis" type="text" value="<?php echo $_SESSION["info_email"] ?>" placeholder="Escriba su email" disabled />
            </div>

            <div class="px-6 md:px-20 h-16 w-full flex items-center md:justify-normal  justify-between text-gray-400 text-sm">
                <p class=" w-2/6 h-full flex items-center">PASSSWORD</p>
                <input class="bg-white text-black md:text-left text-right" type="password" value="<?php echo $_SESSION["info_password"] ?>" placeholder="Escriba su password" size="20" disabled>
            </div>
        </div>
        <div class="pt-6 pb-4 px-2 flex w-full md:w-3/5 justify-between items-center text-gray-400">
            <p class="text-sm">create by <a href="https://github.com/Alexxanderrx">Alexxanderrx</a></p>
            <p class="text-sm">devChallenges.io</p>
        </div>

    </form>


</body>

</html>