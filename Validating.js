function Validate(){
    var uname = document.getElementsByName('uname').values;
    var psw = document.getElementsByName('psw').length;

    if(psw>7)
    {
        return true;
    }
    else if(uname!=null || uname != "" || uname.length > 4){
        return true;
    }
    else{
        return false;
        document.getElementById('span').innerHTML = "Invalid Credentit";
    }
}