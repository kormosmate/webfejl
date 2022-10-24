function show(obj)
{
    console.log(obj.value)
    document.getElementById("pontErtek").innerHTML = obj.value
}

let pers = {}
function kuldes()
{
    console.log("adatok ellenőrzése")
    document.querySelector(".msg").innerHTML = ""
    let nev = document.getElementById("nev").value
    if(nev.length>2)
    pers.nev = nev
    else
    document.querySelector(".msg").innerHTML = "A név kitöltése kötelező."
}