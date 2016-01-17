/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

var url = "http://ons-portfolio.nl/guestbookhandler.php";
var userId = 2; //De 'ontvanger' van de berichten
var msgData;
var pageMaxLength = 10;
var pageCurrent = 0;
var pageCount = 1;

$(document).ready(function(){
    updatePageMessages();
});

function nextPage()
{
    if(pageCurrent < pageCount - 1)
    {
        pageCurrent++;
        //updatePageMessages();
        updatePage(msgData);
        //Go to top of page
        var top = 0;//document.getElementById('guestbook').offsetTop;
        window.scrollTo(0, top);
    }
}

function prevPage()
{
    if(pageCurrent > 0)
    {
        pageCurrent--;
        //updatePageMessages();
        updatePage(msgData);
        var top = 0;//document.getElementById('guestbook').offsetTop;
        window.scrollTo(0, top);
    }
}

function addPageButtons()
{
    var p = document.createElement('p');
    p.innerHTML = 'Page ' + (pageCurrent + 1) + ' of ' + pageCount;
    document.getElementById("guestbook").appendChild(p);
    
    var button = document.createElement('button');
    button.innerHTML = 'Previous page';
    button.onclick = prevPage;
    document.getElementById("guestbook").appendChild(button);
    
    button = document.createElement('button');
    button.innerHTML = 'Next page';
    button.onclick = nextPage;
    document.getElementById("guestbook").appendChild(button);
}

function updatePageMessages()
{
    //console.log(url);
    $.post(url, { action: "get", userId: userId }, updatePageMessagesProcessor, "json");
}

function updatePageMessagesProcessor(data)
{
    msgData = data;
    updatePage(msgData);
}

function updatePage(data)
{
    var gbNode = document.getElementById("guestbook");
    while (gbNode.firstChild) {
        gbNode.removeChild(gbNode.firstChild);
    }
    //console.log(data);
    if(data.length > 0)
    {
        if(data.length > pageMaxLength)
        {
            pageCount = Math.ceil(data.length / pageMaxLength);
            //console.log('Page count ' + pageCount);
            addPageButtons();   //Top
            for(var i = pageCurrent * pageMaxLength; (i < data.length && i < pageCurrent * pageMaxLength + pageMaxLength); i++)
            {
                createMessageHTML(data[i]);
            }
            addPageButtons();   //Bottom
        }
        else
        {
            pageCurrent = 1;
            pageCount = 1;
            for(var i = 0; i < data.length; i++)
            {
                createMessageHTML(data[i]);
            }
        }        
    }
    else
    {
        var p = document.createElement('h2');
        p.textContent = 'Geen berichten gevonden';
        gbNode.appendChild(p);
    }
}

function createMessageHTML(messageArray)
{
    //console.log(messageArray);
    var block = document.createElement('div');
    block.className = "guestbookEntry";
    var name = document.createElement('h3');
    name.className = "guestbookTitle";
    name.innerHTML = messageArray["zendernaam"];
    block.appendChild(name);
    var msg = document.createElement('p');
    msg.className = "guestbookMessage";
    msg.innerHTML = messageArray["bericht"];
    block.appendChild(msg);
    document.getElementById('guestbook').appendChild(block);
}

function submitGuestbookForm()
{
    //console.log("user submitted form");
    var name = $("input[name='name']").val();
    var mail = $("input[name='mail']").val();
    var message = $("textarea[name='message']").val();
    //console.log("name: " + name + " mail: " + mail + " message: " + message);
    if(!name.match(/^\s*$/) && !mail.match(/^\s*$/) && !message.match(/^\s*$/))
    {
        $.post(url, { action: "add", userId: userId, name: name, mail: mail, message: message }, submitGuestbookFormReciever, "json");
    }
    else
    {
        document.getElementById('guestbookFormError').innerHTML = "Vul aub alle velden in";
    }
}

function submitGuestbookFormReciever(data)
{
    if(data.error)
    {
        switch(data.error){
            case 'name':{
                document.getElementById('guestbookFormError').innerHTML = "Naam te lang, maximaal 35 tekens";
                break;
            }
            case 'mail':{
                document.getElementById('guestbookFormError').innerHTML = "Vul een geldig email adres in";
                break;
            }
            case 'message':{
                document.getElementById('guestbookFormError').innerHTML = "Bericht te lang, maximaal 700 tekens";
                break;
            }
            default: {
                document.getElementById('guestbookFormError').innerHTML = "Er is een fout opgetreden";
            }
        }
    }
    else if(data === 'success')
    {
		//Reset form
	    $("input[name='name']").val('');
        $("input[name='mail']").val('');
        $("textarea[name='message']").val('');
        document.getElementById('guestbookFormError').innerHTML = "Uw bericht is geplaatst";
        //New message is always on page 0
        pageCurrent = 0;
        updatePageMessages();
    }
}

//From: http://xkcd.com/221/
function getRandomNumber()
{
    return 4;   // chosen by fair dice roll.
                // guaranteed to be random.
}