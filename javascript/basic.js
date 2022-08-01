let plans = document.getElementsByClassName("Planscom")[0];
let how_it_works = document.getElementsByClassName("Howitworks")[0];
// let plans = document.getElementById("plansbtn");
let time_no = document.getElementById("time_no");

function getscrollto(_to) {
    if(_to == 'howitbtn'){
        how_it_works.scrollIntoView();
    }
    
    if(_to == 'plansbtn' || _to == 'planOptions'){
        plans.scrollIntoView();
    }
}

function AdsCont() {
    let ccou = sessionStorage.getItem("ccou");
    if (ccou == false || ccou == null || ccou == NaN){
    sessionStorage.setItem("ccou", 3);
    

    }
    

    time_no.innerHTML = ccou;
    sessionStorage.ccou = parseInt(ccou) - 1;
    // if (ccou )
    // else{
    //    sessionStorage =  parseInt(sessionStorage.ccou) + 1;
    // }
}