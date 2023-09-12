
function formSubmit(){

    const my_subject = document.getElementById("subject");
    const my_body = document.getElementById("message");

    const my_btn = document.getElementById("submitBtn").addEventListener('click',()=>{
        const form = document.getElementById('form');
        const formData = new FormData(form);
        formData.append("action","my_action")
        
        if(my_subject.value!="" && my_body.value!=""){

            fetch(ajaxurl, {
                method: 'POST',
                body: formData,
                dataType:"json"
            })
            .then(function(response) {
                
                //console.log(response);
                if(response.status===200){
                    alert("success");
                    location.reload();
                }else{
                    alert("failed");
                }
            }).catch(()=>{
              alert("failed");
            })

        }else{
            alert("please fill All required Boxes");
        }



    })
}

window.addEventListener('load', () => {
    formSubmit();
})