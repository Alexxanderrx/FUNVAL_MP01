<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link href="./output.css" rel="stylesheet">
</head>


<body class=" h-screen flex  justify-center align-items-center ">

    <div class="flex flex-col justify-center align-items-center w-96">
        <form class="flex-col w-96 p-10 border border-gray-400 rounded-3xl" name="formularioSingUp" method="post" action="infoHall.php">

            <img class="mb-4" src="./imgs/devchallenges.svg" alt="devchallenges.svg" />

            <p class="mb-4 font-bold text-lg">Join thousands of learners from around the world</h4>
            <p class="mb-5 text-sm">Master web development by making real-life projects. There are multiple paths for
                you to
                choose</p>
            <div>

                <div class="relative block mb-3">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-5 h-5">
                                <path d="M1.5 8.67v8.58a3 3 0 003 3h15a3 3 0 003-3V8.67l-8.928 5.493a3 3 0 01-3.144 0L1.5 8.67z" />
                                <path d="M22.5 6.908V6.75a3 3 0 00-3-3h-15a3 3 0 00-3 3v.158l9.714 5.978a1.5 1.5 0 001.572 0L22.5 6.908z" />
                            </svg>
                        </svg>
                    </span>
                    <input class="block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" type="text" name="email" placeholder="Email" required />
                </div>

                <div class="relative block mb-2">
                    <span class="absolute inset-y-0 left-0 flex items-center pl-2">
                        <svg class="h-5 w-5 fill-slate-300" viewBox="0 0 20 20">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" class="w-6 h-6">
                                <path fill-rule="evenodd" d="M12 1.5a5.25 5.25 0 00-5.25 5.25v3a3 3 0 00-3 3v6.75a3 3 0 003 3h10.5a3 3 0 003-3v-6.75a3 3 0 00-3-3v-3c0-2.9-2.35-5.25-5.25-5.25zm3.75 8.25v-3a3.75 3.75 0 10-7.5 0v3h7.5z" clip-rule="evenodd" />
                            </svg>
                        </svg>
                    </span>
                    <input class="block bg-white w-full border border-slate-300 rounded-md py-2 pl-9 pr-3 shadow-sm focus:outline-none focus:border-sky-500 focus:ring-sky-500 focus:ring-1 sm:text-sm" type="password" name="pass" placeholder="Password" required />
                </div>

            </div>
            <p class="text-center mb-1  text-red-700">&#160;
                <?php
                session_start();
                if (isset($_SESSION["error_rg"])) {
                    echo $_SESSION["error_rg"];
                };
                unset($_SESSION["error_rg"]);
                ?>
            </p>
            <button class="mb-5 w-full bg-blue-500 hover:bg-blue-700 text-white  py-2 px-4 rounded-lg" type="submit" name="start">Star coding now</button>

            <p class=" flex text-sm justify-center">or continue with these social profile</p>

            <div class="p-4 pl-8 pr-8 flex justify-around align-items-center  ">
                <a href="#"><img src="./imgs/Google.svg" alt="google.svg" /></a>
                <a href="#"><img src="./imgs/Facebook.svg" alt="Facebook.svg" /></a>
                <a href="#"><img src="./imgs/Twitter.svg" alt="Twitter.svg" /></a>
                <a href="#"><img src="./imgs/Gihub.svg" alt="Gihub.svg" /></a>
            </div>
            <div class="flex text-sm justify-center">
                <p>Already a member?</p>
                <p class=" text-sky-500"><a href="./login.php">&#160;Login</a></p>
            </div>

        </form>
        <div class="flex align-items-center justify-between">
            <p class="text-sm">create by <a href="https://github.com/Alexxanderrx">Alexxanderrx</a></p>
            <p class="text-sm">devChallenges.io</p>
        </div>
    </div>

</body>

</html>