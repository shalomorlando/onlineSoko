$(document).ready(()=>{
   
    let buybtn = $("#buy");

    buybtn.on("click",()=>{
        
        let amount = $("#price").html();
        let phonenumber = $("#phone-number").val();
         
            alert("Waiting for payment");
        
    })
})