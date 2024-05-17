<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="admin.css">
    <script src="./tailwind/tailwind.config.js"></script>
    <script src="./tailwind/tailwind.js"></script>
    <title>Document</title>
</head>
<body>
    <header class="h-[50%] w-full bg-[url(add.jpg)] bg-cover bg-center my-[-2rem]">
        <div class="w-full h-full bg-[#012E40] opacity-[30%]"></div>
        <div class=" relative top-[-20rem] h-[10rem] mx-[40rem] w-[63rem]">
            <h1 class="text-[5rem] text-[white] font-semibold">Bienvenue Monsieur bill dans <span class="text-[#3CA6A6] font-bold">l'espace admin</span></h1>
        </div>
        <div class="w-[42rem] h-[24rem] my-[-40rem] flex items-center justify-center">
            <div class="bg-[white] h-[18rem] w-[18rem] relative top-[18rem] mx-[-17.5rem] rounded-[360px] cursor-pointer "></div>
            <img src="profile.webp" alt="" class="w-[17rem] h-[17rem] relative top-[18rem]   rounded-[360px] cursor-pointer">
        </div>
    </header>
    <section class="h-[40rem] w-full  my-[12rem] flex justify-center">
        <h1 class="text-[4rem] font-bold  mx-[-20rem] text-[#012E40]">Listes des internautes</h1>
        <table class="my-[4rem] mx-[-44rem]  border-none">
            <tr>
                <td class="debut">Noms</td>
                <td class="debut">id </td>
                <td class="debut">Adresse email </td>
                <td class="debut"> Mot de passe</td>
                <td class="debut"> Statut</td>
                
            </tr>
            <tr>
                <td class="suite">Zongo nganou </td>
                <td class="suite">001 </td>
                <td class="suite">elgabinovicero@gmail.com</td>
                <td class="suite"> ybag.projet</td>
                <td class="suite">vendeurs</td>
            </tr>
            <tr>
                <td class="suite">Fotso tankeu </td>
                <td class="suite">002 </td>
                <td class="suite">Fotso053@gmail.com </td>
                <td class="suite"> manuel</td>
                <td class="suite">clients</td>
            </tr>
        </table>
    </section>
    <footer class="w-full h-[10rem] flex justify-center items-center">
        <h1 class="text-[3rem] font-semibold text-[white] italic">Copyright Zongo Nganou  Terminale Ti Projet Soutenance</h1>
    </footer>
</body>
</html>