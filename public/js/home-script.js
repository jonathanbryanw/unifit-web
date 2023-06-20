window.onload=function(){
    const bmiInput = document.getElementById('bmiForm');
    const bmiHeight = document.getElementById('height');
    const bmiWeight = document.getElementById('weight');
    const bmiResult = document.getElementById('result');

    const countBmi = (e) => {
        e.preventDefault();

        var calHeight = bmiHeight.value / 100;
        var calWeight = bmiWeight.value;
        var bmi = Math.round(calWeight / (calHeight * calHeight));


        if (bmi < 18.5) {
            bmiResult.classList.add('color-green');
            let link = `<a href="/category/3" class="nav-link">CLICK HERE!<br>To see our gain muscle programs.</a>`;
            bmiResult.innerHTML = 'You are skinny.<br>' + link;
        } else if (bmi < 25) {
            bmiResult.classList.add('color-green');
            let link = `<a href="/category/2" class="nav-link">CLICK HERE!<br>To see our maintain weight (increase overall fitness health) programs.</a>`;
            bmiResult.innerHTML = 'You are healthy.<br>' + link;
        } else {
            bmiResult.classList.add('color-green');
            let link = `<a href="/category/1" class="nav-link">CLICK HERE!<br>To see our lose weight programs.</a>`;
            bmiResult.innerHTML = 'You are overweight.<br>' + link;
        }
    }

    bmiInput.addEventListener('submit', countBmi);

}
