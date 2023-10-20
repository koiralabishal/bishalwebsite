<?php
   header("Content-type: text/css");

?>




*{
    margin:0;
    padding:0;
}




#nav {
    background-color: rgb(74, 74, 232);
    display: inline-block;
    position: fixed;
    top:0px;
    left:0px;
    right: 0px;
    padding: 17px;
    border-radius: 2px;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.6);
    z-index: 999;
}





.background-image {
    position: fixed;
    top: 0px;
    bottom: 0px;
    left: 0px;
    right: 0px;
    height: 100%;
    background-image: linear-gradient(rgba(0,0,0,0.4), rgba(0,0,0,0.4)), url(medical-photo.jpg);
    background-repeat: no-repeat;
    background-position:center;
    background-size: cover;
    background-attachment: fixed;

}






.background-text {
    text-align: center;
    color: #ffffff;
    font-family: arial;
    padding: 350px;
    position: absolute;
    left: 75px;

}






#heading{
    text-align: center;

}







#login{
    position: absolute;
    right: 200px;
    top:16px;
    padding: 10px 20px;
    border:none;
    border-radius: 8px;
    cursor: pointer;
    background-color: rgb(59, 155, 59);
    font-weight: bold;
    color:white;
    box-shadow: 0 0 5px 0 white;

}







#signUp{
    position: absolute;
    right:70px;
    top:16px;
    padding: 10px 20px;
    border:none;
    border-radius: 8px;
    cursor:pointer;
    background-color: rgb(59, 155, 59);
    font-weight: bold;
    color:white;
    box-shadow: 0 0 5px 0 white;
}







#login-form-box{
   width: 380px;
   height: 450px;
   position: relative;
   top: 170px;
   margin: auto;
   background: #fff;
   padding: 16px;
   overflow: hidden;
   border: none;
   border-radius: 13px;
   background-color: rgb(218, 214, 214);
   box-shadow: 0 4px 8px 0 rgb(173, 172, 172);
   display: none;


}






#signUp-form-box{
    width: 380px;
    height: 750px;
    position: relative;
    top:75px;
    margin: auto;
    background: #fff;
    padding: 16px;
    overflow: hidden;
    border: none;
    border-radius: 13px;
    background-color: rgb(218, 214, 214);
    box-shadow: 0 4px 8px 0 rgb(173, 172, 172);
    display: none;

}








#login-form,h3{
    text-align: center;

}








#signUp-form{
    text-align: center;
}








input,select{
    width: 80%;
    position: relative;
    top: 20px;
    padding: 10px 0;
    margin: 9px 0px;
    border-left: 0px;
    border-top: 0px;
    border-right: 0px;
    border-bottom: 1px solid #999;
    outline: none;
    background: transparent;

}


select{
    cursor:pointer;
}




#login-button{
    position: absolute;
    bottom: 100px;
    left: 160px;
    padding: 10px 25px;
    border-radius: 8px;
    border: none;
    background-color: rgb(23, 23, 213);
    color: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
    cursor: pointer;
}





#doctorId{
    visibility: hidden;
}






#signUp-button{
    position: absolute;
    bottom: 40px;
    left: 160px;
    padding: 10px 25px;
    border-radius: 8px;
    border: none;
    background-color: rgb(23, 23, 213);
    color: white;
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.3);
    cursor: pointer;
}







input[type = "checkbox"]{
    position: absolute;
    width: 4%;
    top: 320px;
    left: 50px;

}





#checkbox1{
    position: absolute;
    top: 160px;
    left:80px;
}






#checkbox2{
    position: absolute;
    top: 659px;
    left: 75px;

}





#checkbox3{
    position: absolute;
    top: 256px;
    right: 50px;
}




#label1{
    position: relative;
    top: 18px;
    right: 52px;
}






#label2{
    position: relative;
    top: 25px;
    right: 57px;
}






#paragraph1{
    position: relative;
    top: 55px;
}





#paragraph2{
    position: absolute;
    bottom: 40px;
    left: 50px;
}







#span{
    position: relative;
    top: 60px;
    right: 25px;
}







#paragraph3{
    position:relative;
    top:90px;
    right: 44px;
}







a{
    text-decoration-line: none;
}








#close-login-form{
    position: absolute;
    color: #312f2f;
    right: 10px;
    bottom: 444px;
    font-size:30px;
    border: solid 2px;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    line-height: 25px;
    text-align: center;
    cursor: pointer;
}







#close-login-form:hover{
    font-size: 35px ;
    bottom: 446px;
}






#close-signUp-form{
    position: absolute;
    color: #312f2f;
    bottom:745px;
    right: 10px;
    font-size:30px;
    border: solid 2px;
    width: 25px;
    height: 25px;
    border-radius: 50%;
    line-height: 25px;
    text-align: center;
    cursor: pointer;
}






#close-signUp-form:hover{
    font-size: 35px ;
    bottom: 747px;
}







@media screen and (max-width: 768px) {



    #login,
    #signUp
     {
      position: static !important;
      float: right;
      margin: 9px;

    }


}







@media screen and (max-width: 771px) {
    #signUp-form-box,
    #login-form-box{
        top: 160px;
    }
}
