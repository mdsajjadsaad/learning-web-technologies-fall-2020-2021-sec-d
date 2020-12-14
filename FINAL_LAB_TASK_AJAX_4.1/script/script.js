function ajax()
{
    let req= new XMLHttpRequest();
    req.open('GET','../controller/RegCheck.php',true);
    req.send();

    let inf=document.querySelector('#info')

    req.addEventListener('readystatechange',()=>
    {
        if(req.readyState==4 && req.status==200)
        {
            inf.innerHTML=req.responseText;
        }
    })
}