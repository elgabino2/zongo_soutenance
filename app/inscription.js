function verif(){
    var nom=document.getElementById('nam');
    const text=document.getElementById('text');

    if(nom===""){
        text.innerHTML="Veuillez entrez votre nom";
    }
    else{
        text.innerHTML="Bad request";
        
    }
}