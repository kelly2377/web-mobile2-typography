function nextStep(currentStep){
    const currentDiv = document.getElementById('step-' + currentStep);
    if(currentStep === 1){
        const nameinput = document.getElementById('user_name');
        const nameerrortext = document.getElementById('name-error');
        const nameval = nameinput.value.trim();
        const nameregex = /^[a-zA-Z\s'-]+$/;
        if(nameval === ""){
            nameerrortext.textContent = "Name is required!";
            nameerrortext.style.display = "block";
            nameinput.focus();
            return;
        }else if (!nameregex.test(nameval)){
            nameerrortext.textContent = "Only letters and spaces are allowed";
            nameerrortext.style.display = "block";
            nameinput.focus();
            return;
        }else{
            nameerrortext.style.display = "none";
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