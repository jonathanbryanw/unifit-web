window.onload=function(){

    const bmiInput = document.getElementById('bmiForm'),
        bmiHeight = document.getElementById('height'),
        bmiWeight = document.getElementById('weight'),
        bmiResult = document.getElementById('result')

    const countBmi = (e) => {
        e.preventDefault()

        const calHeight = bmiHeight.value / 100,
            calWeight = bmiWeight.value,
            bmi = Math.round(calWeight/ (calHeight * calHeight))

        if(bmi < 18.5){        
            bmiResult.classList.add('color-green');
            let link = `<a href="${window.appUrl}/register" class="nav-link">CLICK HERE!<br>To see our lose weight programs.</a>`;
            bmiResult.innerHTML = 'You are skinny.<br>'+ link;            
            
        }else if(bmi < 25){
            bmiResult.classList.add('color-green')
            bmiResult.textContent = 'You are healthy.'        
        }else{
            bmiResult.classList.add('color-green')
            bmiResult.textContent = 'You are overweight.'        
        }
    }

    bmiInput.addEventListener('submit', countBmi)
}