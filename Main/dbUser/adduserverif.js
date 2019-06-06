$('#submitusr').click(function(event){ 
    /*Get HTML values*/
    var user = document.getElementById("user").value;
    var password = document.getElementById("pass").value;
    var password2 = document.getElementById("conpw").value;
    var name = document.getElementById("name").value;
    var ln = document.getElementById("ln").value;
    var email = document.getElementById("email").value;
    var permissions = null;
    var flag = true;

    //Will change the border of different textfields depending of the kind of mistake
    var type = 0;

    /*Validate user*/
    if(!user && flag){
        msg = "Ingrese un Nick";
        alert(msg);
        flag = 0;
        type = 1;
    }

    if(!user[1] && flag){
        msg = "Nick usuario debe ser de longitud mayor a 2 letras";
        alert(msg);
        flag = 0;
        type = 1;
    }

    if(user[100] && flag){
        msg = "Nick usuario demasiado largo";
        alert(msg);
        flag = 0;
        type = 1;
    }

    /*Validate password*/
    if(!password && flag){
        msg = "Ingrese una contraseña de usuario";
        alert(msg);
        flag = 0;
        type = 2;
    }

    if(!password[7] && flag){
        msg = "Contraseña de usuario debe ser de longitud mayor a 8 caracteres";
        alert(msg);
        flag = 0;
        type = 2;
    }

    if(password != password2 && flag){
        msg = "Contraseña y confirmar contraseña no coinciden";
        alert(msg);
        flag = 0;
        type = 3;
    }

    //Validations of name var.
    if(!name && flag){
        msg = "Ingrese un nombre de usuario";
        alert(msg);
        flag = 0;
        type = 4;
    }

    if(!name[1] && flag){
        msg = "Nombre de usuario debe ser mayor a 2";
        alert(msg);
        flag = 0;
        type = 4;
    }

    if(name[100] && flag){
        msg = "Nombre de usuario demasiado largo";
        alert(msg);
        flag = 0;
        type = 4;
    }

    var expnamelastn=/^[a-zA-ZÑñÁáÉéÍíÓóÚúÜü\s]+$/;
    
     if (!expnamelastn.exec(name.value)){
       alert("Su nombre contiene caracteres inválidos");
       flag = 0;
       type = 4;
     }

    /*Validate last name*/
    if(!ln && flag){
        msg = "Ingrese un apellido de usuario";
        alert(msg);
        flag = 0;
        type = 5;
    }

    if(!ln[1] && flag){
        msg = "Apellido de usuario debe ser mayor a 2";
        alert(msg);
        flag = 0;
        type = 5;
    }

    if(ln[100] && flag){
        msg = "Apellido de usuario demasiado largo";
        alert(msg);
        flag = 0;
        type = 5;
    }
    
    
     if (!expnamelastn.exec(ln.value)){
       alert("Su apellido contiene caracteres inválidos");
       flag = 0;
       type = 5;
     }
      

    /*Validate e-mail*/
    if(!email && flag){
        var msg = "Ingrese un Correo electrónico";
        alert(msg);
        flag = 0;
        type = 6;
    }

    if(!email[4] && flag){
        msg = "Correo electrónico debe ser de longitud mayor a 5 letras";
        alert(msg);
        flag = 0;
        type = 6;
    }

    if(email[100] && flag){
        msg = "Correo electrónico demasiado largo";
        alert(msg);
        flag = 0;
        type = 6;
    }

    var patt = new RegExp(/^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i);
    next = patt.test((String)(email));

    if (!next && flag){
        msg = "Ingrese una dirección de correo electrónico válida";
        alert(msg);
        type = 6;
    }

    if (document.getElementById("r3").checked){
        permissions = document.getElementById("r3").value;
    }
    else if (document.getElementById("r4").checked){
        permissions = document.getElementById("r4").value;
    }

    if(!permissions && flag){
        msg = "Debe seleccionar uno de los permisos";
        alert(msg);
        flag = 0;
    }


    /*Verify that email is unique*/
    //This function iterates through all the table and saves all the emails in an array
    var allM = [];
    var table = document.getElementById("users");
    for (var i = 0, row; row = table.rows[i]; i++) {
        for (var j = 0, col; col = row.cells[j]; j++) {
            if (j == 4){
           allM.push(col.innerHTML);
            }
        }  
    }

    //This other function iterates through all the array and searches for coincidences
    for(var i = 0; i < allM.length; i++){
        if (email == allM[i]){
            alert("Correo electrónico está asociado a una cuenta ya existente");
            next = false;
            break;
            flag = 0;
            type = 6;
        }
    }

    //Change borders

    if (type == 1){
        $('#user').css({"color":"red","border":"1px solid red"});
    }

    if (type == 2){
        $('#pass').css({"color":"red","border":"1px solid red"});
    }

    if (type == 3){
        $('#pass').css({"color":"red","border":"1px solid red"});
        $('#conpw').css({"color":"red","border":"1px solid red"});
    }

    if (type == 4){
        $('#name').css({"color":"red","border":"1px solid red"});
    }

    if (type == 5){
        $('#ln').css({"color":"red","border":"1px solid red"});
    }

    if (type == 6){
        $('#email').css({"color":"red","border":"1px solid red"});
    }

    //Set back to default when user starts correcting the mistake

    $("#user").keyup(function(){
      $("#user").css({"color":"","border":""});
    });

    $("#pass").keyup(function(){
        $("#pass").css({"color":"","border":""});
        $("#conpw").css({"color":"","border":""});
    });

    $("#conpw").keyup(function(){
        $("#pass").css({"color":"","border":""});
        $("#conpw").css({"color":"","border":""});
    });

    $("#name").keyup(function(){
      $("#name").css({"color":"","border":""});
    });

    $("#ln").keyup(function(){
      $("#ln").css({"color":"","border":""});
    });

    $("#email").keyup(function(){
      $("#email").css({"color":"","border":""});
    });

    //Once all data is verified it sends to PHP file to be stored in the database

    if (flag != 0){
    $.ajax({
        type:"POST",
        url:"../dbUser/adduser.php",
        async: false,
        data: {user:user,password:password,name:name,ln:ln,email:email,permissions:permissions},
        success: function(data){
        alert(data);
            window.location = 'manageusers.php';
        }
        });
    }

});