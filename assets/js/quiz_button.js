function nextStep(currentStep){
    const currentDiv = document.getElementById('step-' + currentStep);
    if(currentStep === 1){
        const nameinput = document.getElementById('user_name');
        const errortext = document.getElementById('name-error');
        if(!nameinput || nameinput.value.trim() === ""){
            errortext.style.display = "block";
            nameinput.focus();
            return;
        }else{
            errortext.style.display = "none";
        }
    }
    const isChecked = currentDiv.querySelector('input[type="radio"]:checked');
    if(!isChecked){
        alert("Please select an answer before moving on!");
        return;
    }
    currentDiv.style.display = 'none';
    const nextStepNum = currentStep + 1;
    const nextDiv = document.getElementById('step-' + nextStepNum);
    if(nextDiv){
        nextDiv.style.display = 'block';
    }
}