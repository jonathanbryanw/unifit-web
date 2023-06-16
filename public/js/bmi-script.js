document.addEventListener('DOMContentLoaded', function() {
    const bmiInput = document.getElementById('bmiForm');
    const bmiHeight = document.getElementById('height');
    const bmiWeight = document.getElementById('weight');
    const bmiResult = document.getElementById('result');
    const scriptTag = document.querySelector('script[data-is-logged-in]');
    const isLoggedIn = scriptTag.getAttribute('data-is-logged-in');

    function countBmi(e) {
        e.preventDefault();

        const calHeight = bmiHeight.value / 100;
        const calWeight = bmiWeight.value;
        const bmi = Math.round(calWeight / (calHeight * calHeight));


        if (bmi < 18.5) {
            bmiResult.classList.add('color-green');
            let link = `<a href="/category/3" class="nav-link">CLICK HERE!<br>To see our gain muscle programs.</a>`;
            bmiResult.innerHTML = 'You are skinny.<br>' + link;
            if (isLoggedIn != 0) {
                updateProgram('3', isLoggedIn);
            }
        } else if (bmi < 25) {
            bmiResult.classList.add('color-green');
            let link = `<a href="/category/2" class="nav-link">CLICK HERE!<br>To see our maintain weight (increase overall fitness health) programs.</a>`;
            bmiResult.innerHTML = 'You are healthy.<br>' + link;
            if (isLoggedIn != 0) {
                updateProgram('2', isLoggedIn);
            }
        } else {
            bmiResult.classList.add('color-green');
            let link = `<a href="/category/1" class="nav-link">CLICK HERE!<br>To see our lose weight programs.</a>`;
            bmiResult.innerHTML = 'You are overweight.<br>' + link;
            if (isLoggedIn != 0) {
                updateProgram('1', isLoggedIn);
            }
        }
    }

    function updateProgram(program_id, user_id) {
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');
        $.ajax({
            url: '/category/' + user_id,
            type: 'PUT',
            headers: {
                'X-CSRF-TOKEN': csrfToken
            },
            data: {
                program: program_id,
                user: user_id
            },
            success: function(response) {
                console.log('User Program updated successfully:');
            },
            error: function(xhr) {
                console.error('Error updating data:', xhr.responseText);
            }
            });
    }

    bmiInput.addEventListener('submit', countBmi);

});
