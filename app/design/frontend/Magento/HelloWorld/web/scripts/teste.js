if(!localStorage.getItem('name')){
    localStorage.setItem('name', prompt('Digite seu nome'));
}

if(name = localStorage.getItem('name'))
{
    alert(`Olá ${name}`);
}


console.log(name);
