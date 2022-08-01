console.log("Hello Sir!!")

let loginBox = document.getElementsByClassName("loginBox")[0];

let nameInput = document.getElementsByName("username")[0];

let confirm_password = document.getElementsByName("confirm_password")[0];
let password = document.getElementsByName("password")[0];

// let gradR = 125;



nameInput.addEventListener("keydown", ()=>{
    let nameLength = nameInput.value.length;
     
    loginBox.style.background = "linear-gradient("+(nameLength*10+ 30)+"deg, black, #7f00009c)";
    // nameLength+=30;
    console.log(gradR);

})





// confirm_password.addEventListener("blur", ()=>{
//     if (nameInput.value.length !== 0){
//     console.log("0222")
//         if (password.value.length > 5){
//             if(confirm_password.value == password.value){
//                 console.log("Done Bro yoyr");
//             }

//         }
//     }
//     else{
//         nameInput.style.background = "#b1b1b1";
//     }
// })