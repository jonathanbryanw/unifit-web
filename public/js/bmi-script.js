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
            bmiResult.classList.add('color-green')
            bmiResult.textContent = 'Skinny'
        }else if(bmi < 25){
            bmiResult.classList.add('color-green')
            bmiResult.textContent = 'Healthy'        
        }else{
            bmiResult.classList.add('color-green')
            bmiResult.textContent = 'Overweight'        
        }
    }

    bmiInput.addEventListener('submit', countBmi)
}