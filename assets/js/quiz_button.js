function nextStep(currentStep){
    const currentDiv = document.getElementById('step-' + currentStep);
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

