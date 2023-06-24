/*tot = 0;
function addEvent(which)
{
    switch (which)
    {
        defult:
        var counter+100;
        alert("ickTet Added To Cart");  
    }
    
}*/

/*
function addEvent(which)
{
    alert("Ticket Added To Cart");
    switch (which)
    {
        case 1:
        retNumIn += 300;
        break;
        case 2:
        retNumIn += 500;
        break;
        case 3:
        retNumIn += 300;
        break;
        case 4:
        retNumIn += 300;
        break;
        case 5:
        retNumIn += 400;
        break;
        case 6:
        retNumIn += 80;
        break;
        case 7:
        retNumIn += 100;
        break;
        case 8:
        retNumIn += 100;
        break;
        case 9:
        retNumIn += 100;
        break;
        case 10:
        retNumIn += 100;
        break;
        case 0:
        break;
    }

    tot += retNumIn;
}*/
function CalculatePrice(addEv)
{
    alert("Your total is: " + tot);
}

function addEvent(which)
{
    var retNum = 0;
    switch (which)
    {
        case 1:
        retNum += 100;
        alert("Ticket Added To Cart");
        break;
        case 2:
        retNum += 300;
        alert("Ticket Added To Cart");
        break;
        case 3:
        retNum += 500;
        alert("Ticket Added To Cart");
        break;
        case 4:
        retNum += 300;
        alert("Ticket Added To Cart");
        break;
        case 5:
        retNum += 400;
        alert("Ticket Added To Cart");
        break;
        case 6:
        retNum += 80;
        alert("Ticket Added To Cart");
        break;
        case 7:
        retNum += 100;
        alert("Ticket Added To Cart");
        break;
        case 8:
        retNum += 100;
        alert("Ticket Added To Cart");
        break;
        case 9:
        retNum += 100;
        alert("Ticket Added To Cart");
        break;
        case 10:
        retNum += 100;
        alert("Ticket Added To Cart");
        break;
    }

    return retNum;
}
function CalculatePrice(addEv)
{
    alert(addEv);
}