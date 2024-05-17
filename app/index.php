<?php
    try {
        $connexion = mysqli_connect( $host = 'localhost', $user = 'root', $password = '', $database = 'immobilier' );
        
    } catch (Exception $e) {

        die('Erreur : '.$e->getMessage());
    }
    if (isset($_POST['ok'])){
    $nom=$_POST['name'];
    $password=$_POST['password'];
    $email=$_POST['email'];}
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <script src="./tailwind/tailwind.config.js"></script>
    <script src="./tailwind/tailwind.js"></script>
    <title>Document</title>
</head>
<body>
    <section class="w-full h-full flex justify-center">
        <div class="w-[95%] h-[10rem]  my-[2rem] fixed z-10" id="b">
            <h1 class="text-[4rem] font-semibold text-[white] absolute mx-[2rem] my-[2rem]">Real estate</h1>
            <div class="w-full h-[9rem]  relative flex  justify-end cursor-pointer my-[-4rem] ">
                <div class="bg-[white] h-[9rem] w-[9rem] mx-[-16.5rem] my-[4.5rem] rounded-[360px]"></div>
                <img src="profile.webp" alt="" class="w-[8rem] h-[8rem] my-[5rem] relative mx-[8rem] rounded-[360px]">
            </div>
            <div class="h-[5rem] w-[60%]  relative top-[2rem] mx-[28rem] flex items-center justify-around">
                <a href="#" class="text-[2rem] font-semibold text-[white]">Accueil</a>
                <a href="#" class="text-[2rem] font-semibold text-[white]">Connexion</a>
                <a href="vente.php" class="text-[2rem] font-semibold text-[white]">Vendre</a>
                <input type="text" name="search" class="w-[40rem] h-[3.5rem] bg-[#F2E3D5] text-[2rem] text-center placeholder:text-[2rem] " placeholder="Rechercher une ville" id="searchInput">
                <button class="bg-[#3CA6A6] text-[white] w-[10rem] text-[1.3rem] h-[3.5rem] font-semibold -ml-16" type="submit">Rechercher</button>
            </div>
        </div>
        <!-- <div class="w-[20%] h-[96%] fixed bg-[#F2E3D5] shadow-lg shadow-black my-[1rem]  mx-[2rem]" id="b">
            <div class="w-full h-[9rem]  relative flex  justify-end cursor-pointer my-[1rem]">
                <div class="bg-[white] h-[12rem] w-[12rem] mx-[-19.5rem] my-[3.5rem] rounded-[360px]"></div>
                <img src="profile.webp" alt="" class="w-[11rem] h-[11rem] my-[4rem] relative mx-[8rem] rounded-[360px]">
            </div>
            <div class=" h-[8rem] w-full relative my-[6rem] ">
                <p class="text-center my-[6rem]  mx-[6rem] text-[2rem] font-semibold text-[#012E40]">Henri Rousseau</p>
                <P class="relative top-[-5rem] text-center text-[gray] text-[1.2rem]">Software Developper</P>
            </div>
            
        </div> -->
        <!-- <div class="w-full"> -->

            <!-- <input type="file" name="f" class="mx-[40rem]"> -->
        <!-- </div> -->
    </section>
    <section class="h-[44rem] w-[100%] -[red] my-[-42rem] ">
    <h1 class="text-[3rem] font-medium text-[#012E40] mx-[3rem] my-[-1rem] ">Bienvenue monsieur <?php echo"$nom";?></h1>
        <!-- <h1 class="text-[3rem] font-medium text-[#012E40] mx-[3rem] my-[-1rem] ">Nos proprietés les plus populaire</h1> -->
        <div class="w-full h-[50rem]  my-[1rem] flex justify-evenly">
            <div class="bg-[white] h-[40rem] w-[30%] my-[4rem]  shadow-xl shadow-black flex justify-center" id="block" >
                <div class=" h-[70%]  m-[1rem] ">
                    <div class="bg-[black] w-full h-full relative opacity-[50%]">
                        <div class="h-[4.5rem] w-[16rem] relative top-[22rem] mx-[0.5rem] flex items-center justify-center rounded-[5px] border-[1px] border-[white]">
                            <h1 class="text-[2.5rem] text-[white] ">FRI 13 APRI</h1>
                        </div>
                    </div>
                    <img src="webaliser-_TPTXZd9mOo-unsplash.jpg" alt="" class="my-[-28rem] h-full w-full">
                    <div class="w-full h-[9rem]  relative flex my-[19rem] justify-end ">
                        <div class="bg-[white] h-[10rem] w-[10rem] mx-[-10.5rem] my-[3.5rem] rounded-[360px]"></div>
                        <img src="profile.webp" alt="" class="w-[9rem] h-[9rem] my-[4rem] relative mx-[1rem] rounded-[360px]">
                    </div>
                    <div class="w-full h-[6rem]  my-[-19rem]">
                        <h1 class="text-[2.2rem] text-[#026773] mx-[0.5rem]">1400$/month <span class="text-[1.5rem] mx-[5rem] text-[#012E40] font-semibold">John smith</span></h1>
                        <!-- <h1 class="my-[1rem] mx-[1rem]">Situer a Lorem ipsum dolor sit amet consectetur, </h1> -->
                    </div>
                    <div class="w-full h-[4rem]  relative top-[19rem] flex">
                        <button class="text-[white] bg-[#024959] w-full h-full text-[2rem] font-bold">Buy now</button>

                    </div>
                </div>
            </div>
            <div class="bg-[white] h-[40rem] w-[30%] my-[4rem]  shadow-xl shadow-black flex justify-center" id="block">
                <div class=" h-[70%]  m-[1rem] ">
                    <div class="bg-[black] w-full h-full relative opacity-[50%]">
                        <div class="h-[4.5rem] w-[16rem] relative top-[22rem] mx-[0.5rem] flex items-center justify-center rounded-[5px] border-[1px] border-[white]">
                            <h1 class="text-[2.5rem] text-[white]">FRI 13 APRI</h1>
                        </div>
                    </div>
                    <img src="webaliser-_TPTXZd9mOo-unsplash.jpg" alt="" class="my-[-28rem] h-full w-full">
                    <div class="w-full h-[9rem]  relative flex my-[19rem] justify-end ">
                        <div class="bg-[white] h-[10rem] w-[10rem] mx-[-10.5rem] my-[3.5rem] rounded-[360px]"></div>
                        <img src="profile.webp" alt="" class="w-[9rem] h-[9rem] my-[4rem] relative mx-[1rem] rounded-[360px]">
                    </div>
                    <div class="w-full h-[6rem]  my-[-19rem]">
                        <h1 class="text-[2.2rem] text-[#026773] mx-[0.5rem]">1400$/month <span class="text-[1.5rem] mx-[5rem] text-[#012E40] font-semibold">John smith</span></h1>
                        <!-- <h1 class="my-[1rem] mx-[1rem]">Situer a Lorem ipsum dolor sit amet consectetur, </h1> -->
                    </div>
                    <div class="w-full h-[4rem]  relative top-[19rem] flex">
                        <button class="text-[white] bg-[#024959] w-full h-full text-[2rem] font-bold">Buy now</button>

                    </div>
                </div>
            </div>
            <div class="bg-[white] h-[40rem] w-[30%] my-[4rem]  shadow-xl shadow-black flex justify-center" id="block">
                <div class=" h-[70%]  m-[1rem] ">
                    <div class="bg-[black] w-full h-full relative opacity-[50%]">
                        <div class="h-[4.5rem] w-[16rem] relative top-[22rem] mx-[0.5rem] flex items-center justify-center rounded-[5px] border-[1px] border-[white]">
                            <h1 class="text-[2.5rem] text-[white]">FRI 13 APRI</h1>
                        </div>
                    </div>
                    <img src="webaliser-_TPTXZd9mOo-unsplash.jpg" alt="" class="my-[-28rem] h-full w-full">
                    <div class="w-full h-[9rem]  relative flex my-[19rem] justify-end ">
                        <div class="bg-[white] h-[10rem] w-[10rem] mx-[-10.5rem] my-[3.5rem] rounded-[360px]"></div>
                        <img src="profile.webp" alt="" class="w-[9rem] h-[9rem] my-[4rem] relative mx-[1rem] rounded-[360px]">
                    </div>
                    <div class="w-full h-[6rem]  my-[-19rem]">
                        <h1 class="text-[2.2rem] text-[#026773] mx-[0.5rem]">1400$/month <span class="text-[1.5rem] mx-[5rem] text-[#012E40] font-semibold">John smith</span></h1>
                        <!-- <h1 class="my-[1rem] mx-[1rem]">Situer a Lorem ipsum dolor sit amet consectetur, </h1> -->
                    </div>
                    <div class="w-full h-[4rem]  relative top-[19rem] flex">
                        <button class="text-[white] bg-[#024959] w-full h-full text-[2rem] font-bold">Buy now</button>

                    </div>
                </div>
            </div>
        </div>
        <div class="w-full h-[50rem]  my-[rem] flex justify-evenly">
            <div class="bg-[white] h-[40rem] w-[30%] my-[4rem]  shadow-xl shadow-black flex justify-center" id="block">
                <div class=" h-[70%]  m-[1rem] ">
                    <div class="bg-[black] w-full h-full relative opacity-[50%]">
                        <div class="h-[4.5rem] w-[16rem] relative top-[22rem] mx-[0.5rem] flex items-center justify-center rounded-[5px] border-[1px] border-[white]">
                            <h1 class="text-[2.5rem] text-[white]">FRI 13 APRI</h1>
                        </div>
                    </div>
                    <img src="webaliser-_TPTXZd9mOo-unsplash.jpg" alt="" class="my-[-28rem] h-full w-full">
                    <div class="w-full h-[9rem]  relative flex my-[19rem] justify-end ">
                        <div class="bg-[white] h-[10rem] w-[10rem] mx-[-10.5rem] my-[3.5rem] rounded-[360px]"></div>
                        <img src="profile.webp" alt="" class="w-[9rem] h-[9rem] my-[4rem] relative mx-[1rem] rounded-[360px]">
                    </div>
                    <div class="w-full h-[6rem]  my-[-19rem]">
                        <h1 class="text-[2.2rem] text-[#026773] mx-[0.5rem]">1400$/month <span class="text-[1.5rem] mx-[5rem] text-[#012E40] font-semibold">John smith</span></h1>
                        <!-- <h1 class="my-[1rem] mx-[1rem]">Situer a Lorem ipsum dolor sit amet consectetur, </h1> -->
                    </div>
                    <div class="w-full h-[4rem]  relative top-[19rem] flex">
                        <button class="text-[white] bg-[#024959] w-full h-full text-[2rem] font-bold">Buy now</button>

                    </div>
                </div>
            </div>
            <div class="bg-[white] h-[40rem] w-[30%] my-[4rem]  shadow-xl shadow-black flex justify-center" id="block">
                <div class=" h-[70%]  m-[1rem] ">
                    <div class="bg-[black] w-full h-full relative opacity-[50%]">
                        <div class="h-[4.5rem] w-[16rem] relative top-[22rem] mx-[0.5rem] flex items-center justify-center rounded-[5px] border-[1px] border-[white]">
                            <h1 class="text-[2.5rem] text-[white]">FRI 13 APRI</h1>
                        </div>
                    </div>
                    <img src="webaliser-_TPTXZd9mOo-unsplash.jpg" alt="" class="my-[-28rem] h-full w-full">
                    <div class="w-full h-[9rem]  relative flex my-[19rem] justify-end ">
                        <div class="bg-[white] h-[10rem] w-[10rem] mx-[-10.5rem] my-[3.5rem] rounded-[360px]"></div>
                        <img src="profile.webp" alt="" class="w-[9rem] h-[9rem] my-[4rem] relative mx-[1rem] rounded-[360px]">
                    </div>
                    <div class="w-full h-[6rem]  my-[-19rem]">
                        <h1 class="text-[2.2rem] text-[#026773] mx-[0.5rem]">1400$/month <span class="text-[1.5rem] mx-[5rem] text-[#012E40] font-semibold">John smith</span></h1>
                        <!-- <h1 class="my-[1rem] mx-[1rem]">Situer a Lorem ipsum dolor sit amet consectetur, </h1> -->
                    </div>
                    <div class="w-full h-[4rem]  relative top-[19rem] flex">
                        <button class="text-[white] bg-[#024959] w-full h-full text-[2rem] font-bold">Buy now</button>

                    </div>
                </div>
            </div>
            <div class="bg-[white] h-[40rem] w-[30%] my-[4rem]  shadow-xl shadow-black flex justify-center" id="block">
                <div class=" h-[70%]  m-[1rem] ">
                    <div class="bg-[black] w-full h-full relative opacity-[50%]">
                        <div class="h-[4.5rem] w-[16rem] relative top-[22rem] mx-[0.5rem] flex items-center justify-center rounded-[5px] border-[1px] border-[white]">
                            <h1 class="text-[2.5rem] text-[white]">FRI 13 APRI</h1>
                        </div>
                    </div>
                    <img src="webaliser-_TPTXZd9mOo-unsplash.jpg" alt="" class="my-[-28rem] h-full w-full">
                    <div class="w-full h-[9rem]  relative flex my-[19rem] justify-end ">
                        <div class="bg-[white] h-[10rem] w-[10rem] mx-[-10.5rem] my-[3.5rem] rounded-[360px]"></div>
                        <img src="profile.webp" alt="" class="w-[9rem] h-[9rem] my-[4rem] relative mx-[1rem] rounded-[360px]">
                    </div>
                    <div class="w-full h-[6rem]  my-[-19rem]">
                        <h1 class="text-[2.2rem] text-[#026773] mx-[0.5rem]">1400$/month <span class="text-[1.5rem] mx-[5rem] text-[#012E40] font-semibold">John smith</span></h1>
                        <!-- <h1 class="my-[1rem] mx-[1rem]">Situer a Lorem ipsum dolor sit amet consectetur, </h1> -->
                    </div>
                    <div class="w-full h-[4rem]  relative top-[19rem] flex">
                        <button class="text-[white] bg-[#024959] w-full h-full text-[2rem] font-bold">Buy now</button>

                    </div>
                </div>
            </div>
        </div>
        
    </section>
    <!-- <script src=""></script> -->

</body>
</html>