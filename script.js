// Add a click event listener to the login button on the home page.
document.querySelector("#login").addEventListener("click", function() {
    // Display the login form element.
    document.querySelector("#login-form-box").style.display = "block";
    document.querySelector("#signUp-form-box").style.display = "none";
  });



document.querySelector("#signUp").addEventListener("click", function() {
    // Display the signUp form element.
    document.querySelector("#signUp-form-box").style.display = "block";
    document.querySelector("#login-form-box").style.display = "none";
  });



document.querySelector("#login-link").addEventListener("click", function() {
    // Display the login form element.
    document.querySelector("#signUp-form-box").style.display = "none";
    document.querySelector("#login-form-box").style.display = "block";
  });



document.querySelector("#signUp-link").addEventListener("click", function() {
    // Display the signUp form element.
    document.querySelector("#signUp-form-box").style.display = "block";
    document.querySelector("#login-form-box").style.display = "none";
  });




document.querySelector("#close-login-form").addEventListener("click", function() {
       //close the login form element.
      document.querySelector("#login-form-box").style.display = "none";
      document.querySelector(".background-text").style.display = "block";
  });

 

document.querySelector("#close-signUp-form").addEventListener("click", function() {
    //close the signUp form element.
   document.querySelector("#signUp-form-box").style.display = "none";
   document.querySelector(".background-text").style.display = "block";
});


document.querySelector("#login").addEventListener("click", function() {
    // hide the background text element.
    document.querySelector(".background-text").style.display = "none";

  });


document.querySelector("#signUp").addEventListener("click", function() {
    // hide the background text element
    document.querySelector(".background-text").style.display = "none";

  });








