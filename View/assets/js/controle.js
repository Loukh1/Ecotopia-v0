function verrif()
{//////nommmm/////////
    let=pwd=document.getElementById("password");
    let=conf=document.getElementById("confirm");
    let=x=F.codee.value;
    if (F.fname.value == "")
    {
        alert("veuillez saisir votre Nom");
        return false;
    } 
    
    else if (!F.fname.value.match((/^[a-zA-Z()]*$/)))
    {
        alert("veuillez saisir correctement votre Nom");
        return false;
    }////////prnom////////
    else if(F.lname.value =="")
    {
        alert("veuillez saisir votre Prenom");
        return false;
    }
    else if (!F.lname.value.match((/^[a-zA-Z()]*$/)))
    {
        alert("veuillez saisir correctement votre Preom");
        return false;
    }

    else if(F.email.value == "")
    {
        alert("veuillez saisir votre Email");
        return false;
    }
    else if ( (F.email.value.indexOf('@')==-1)||(F.email.value.indexOf('.')==-1))
    {
        alert("veuillez saisir correctement votre Email");
        return false;
    }
    else if (F.user.value =="")
    {
        alert("veuillez saisir votre Username");
        return false;
    }
    else if (!F.user.value.match((/^[a-z\d_]{6,16}$/)))
    {
        alert("veuillez saisir coorectement votre Username");
        return false;
    }
    else if(F.password.value =="")
    {
        alert("veuillez saisir votre mot de passe");
        return false;
    } 
    else if(!F.password.value.match((/^(?=.*[0-9])(?=.*[a-z])(?=.*[A-Z])([a-zA-Z0-9]{8,})$/)))    
    {
        alert("le mot de passe doit comprendre au minimum 8 caracteres");
        return false;
    }
    else if (F.confirm.value =="")
    {
        alert("veuillez confirmer votre mot de passe");
        return false;
    }/////password,confirmation//////
    else if (pwd.value.trim()!==conf.value.trim())
    {
        alert("veuillez cinfirmer correctement votre mot de passe");
        return false;
    }
    else if(F.birthday.value =="")
    {
        alert("veuillez saisir  votre date de naissance");
        return false;
    }
    else if (F.ville.selectedIndex ==0)
    {
        alert("veuillez choisir  votre Ville");
        return false;
    }
    else if(F.adressee.value =="")
    {
        alert("veuillez saisir  votre adresse");
        return false;
    }
    else if(F.codee.value =="")
    {
        alert("veuillez saisir votre code postal");
        return false;

    }/*else if(isNaN(x) || x.lenght!=5 || x.indexOf(" ")!=-1)
    {
        alert("veuillez saisir seulement 4 chiffres pour  votre code postal");
        return false;
    }*/
    else if (F.telephonee.value =="")
    {
        alert("veuillez saisir numero de telephone");
        return false;
    }
    else if ( (!F.question[0].checked)&&(!F.question[1].checked))
    {
        alert("veuillez repondre à la premiere question");
        return false;
    }
    else if ( (!F.questionn[0].checked)&&(!F.questionn[1].checked))
    {
        alert("veuillez repondre au deuxieme question");
        return false;
    }

       


}

