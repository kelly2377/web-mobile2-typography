function nextStep(currentStep){
    const currentDiv = document.getElementById('step-' + currentStep);
    if(currentStep === 1){
        const nameinput = document.getElementById('user_name');
        const nameval = nameinput.value.trim();
        const nameregex = /^[a-zA-Z\s'-]+$/;
        let nameerror = currentDiv.querySelector('p[style*="color:red"]');
        if(nameval === ""){
            if(nameerror){
                nameerror.textContent = "Name is required!";
                nameerror.style.display = "block";
            }
            nameinput.focus();
            return;
        }else if (!nameregex.test(nameval)){
            if(nameerror){
                nameerror.textContent = "Only letters and spaces are allowed";
                nameerror.style.display = "block";
            }
            nameinput.focus();
            return;
        }else{
            name.style.display = "none";
        }
    }
    const isChecked = currentDiv.querySelector('input[type="radio"]:checked');
    const choiceerrortext = currentDiv.querySelector('.choices-error')
    if(!isChecked){
        choiceerrortext.style.display = "block";
        return;
    }else{
        choiceerrortext.style.display = "none";
    }
    currentDiv.style.display = 'none';
    const nextStepNum = currentStep + 1;
    const nextDiv = document.getElementById('step-' + nextStepNum);
    if(nextDiv){
        nextDiv.style.display = 'block';
    }
}