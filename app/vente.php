<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="inscription.css">
    <script src="./tailwind/tailwind.config.js"></script>
    <script src="./tailwind/tailwind.js"></script>
    <title>Vente</title>
</head>
<body class="bg-[url(room.jpg)] bg-cover bg-center">
    <section class="w-full h-full opacity-[30%] flex justify-center items-center" id="cov">
        
    </section>
    <form action="" class="h-[80%] w-[50%] bg-[#012E40] my-[-52rem] mx-[35rem] flex justify-center items-start opacity-[95%]">
        <div class="w-[42rem] h-[24rem]  relative  my-[-10rem] flex items-center justify-center">
            <div class="bg-[white] h-[18rem] w-[18rem]   rounded-[360px] cursor-pointer absolute"></div>
            <img src="profile.webp" alt="" class="w-[17rem] h-[17rem]  relative  rounded-[360px] cursor-pointer">
        </div>
        <div class="w-[42rem] h-[24rem]  my-[12rem] absolute">
            <h1 class="text-[2.3rem] text-center text-[white] font-semibold">Vendez une proprietés</h1>
            <div class="text-[red] text-[1.5rem] font-semibold" id="text"><p ></p></div>
            <input type="text" placeholder="Entrez votre nom" id="nam" name="nom" class="my-[2rem] w-[20rem] h-[3rem] text-[1.5rem] text-center">
            <input type="text" placeholder="Entrez votre prenom" class="my-[2rem] w-[20rem] h-[3rem] text-[1.5rem] text-center"><br>
            <select name="ville" id="" class="h-[3rem] w-[40rem] text-[2rem] font-semibold">
                <option value="none">Ville</option>
                <option value="yaounde">yaounde</option>
                <option value="Douala">Douala</option>
                <option value="Maroua">Maroua</option>
            </select><br>
            
            <input type="number" placeholder="prix" class="my-[2rem] w-[20rem] h-[3rem] text-[1.5rem] text-center">
            <input type="date" placeholder="prix" class="my-[2rem] w-[20rem] h-[3rem] text-[1.5rem] text-center">
            <div class="h-[4rem] w-[40rem] bg-[white] cursor-pointer" type="file">
                <h1 class="text-[2rem] text-center">Ajouter une photos</h1>
                <input type="file" name="" id="" class="mx-[16rem] opacity-[1%] relative top-[-2rem]">
            </div>
            <button class="h-[4rem] w-[40rem] text-[white] text-[2rem] font-semibold bg-[#3CA6A6] my-[2rem]" onclick="verif()" type="button">Mettre en ligne</button>
        </div>

            <!-- <div class="bg-[white] h-[16rem] w-[16rem]  mx-[-8.5rem] my-[-6rem] rounded-[360px] cursor-pointer relative"></div>
            <img src="profile.webp" alt="" class="w-[15rem] h-[15rem] my-[-5.5rem] relative mx-[-7rem] rounded-[360px] cursor-pointer"> -->
            <!-- <h1 class="text-[2rem] ">Vendez une proprietés</h1> -->
        <!-- </div> -->
    </form>
    <script src="inscription.js"></script>
</body>
</html>