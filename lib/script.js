//llet's get all requeird elements

const form = document.querySelector("form"),
statusTxt  = form.querySelector(".button-area span");

form.onsubmit = (e)=>{
    e.preventDefault(); //preventing form from submitting
    statusTxt.style.color = "#0d6efd";
    statusTxt.style.display = "block";

    let xhr = new XMLHttpRequest();//Creating new XML object
    xhr.open("POST", "message.php", true);//Sending post request to message.php file
    xhr.onload = ()=>{
        if(xhr.readyState == 4 && xhr.status == 200){//if ajax response status is 200 & ready status is 4 means there is new message
            let response = xhr.response;
            if(response.indexOf("Email and password fields is required") != -1 || response.indexOf("Enter a valid email address") || response.indexOf("Sorry, faild to send your message!")){
                statusTxt.style.color = "red";
            }else{
                form.reset();
                setTimeout(()=>{
                    statusTxt.style.display = "none";
                },3000);
            }
            statusTxt.innerText = response;
        }else{

        }
    }
    let formData = new FormData(form);//creating new FormData obj. this obj is used to send from data
    xhr.send(formData);
}