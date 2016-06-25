function sendemail()
{
    name = document.getElementById('name').value;
    email = document.getElementById('email').value;
    sub = document.getElementById('subject').value;
    message = document.getElementById('message').value;
    //alert(name + email + sub + message);
    alert("Thank You for your message!Click OK to proceed!")
    //window.open("'mailto:'+email+'?subject='+sub+'&message='message'","_blank");
    window.open("https://mail.google.com/mail/u/0/?view=cm&fs=1&tf=1&to=surajrunni@gmail.com&su="+sub+"&body="+message, "_blank");
}