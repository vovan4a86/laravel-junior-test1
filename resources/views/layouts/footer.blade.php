<div class="container">
    <div class="py-3 d-flex justify-content-around align-items-center">
        <div class="text-white">
            Footer Logo
        </div>
        <div class="text-white">
            Copyright 2022
        </div>
    </div>
</div>
@if( Route::currentRouteName('create') )
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.0.0-alpha.1/axios.min.js"
            integrity="sha512-xIPqqrfvUAc/Cspuj7Bq0UtHNo/5qkdyngx6Vwt+tmbvTLDszzXM0G6c91LXmGrRx8KEPulT+AfOOez+TeVylg=="
            crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script>
        const form = document.querySelector('form')
        const name = document.querySelector('#name')
        const phone = document.querySelector('#phone')
        const sendBtn = document.querySelector('.btn.btn-success')
        const error = document.querySelector('.error')

        sendBtn.addEventListener('click', e => {
            e.preventDefault();
            if (name.value.length === 0 || phone.value.length === 0) {
                error.innerHTML = 'Заполните все обязательные поля';
            } else {
                const data = new FormData(form);
                axios.post('/feedbacks', data)
                    .then(response => {
                        if (response.status === 201) {
                            window.location.href = '/success';
                        }
                    })
                    .catch(err => {
                        error.innerHTML = 'Ошибка отправки данных на сервер!';
                        console.log('Server validation error! ', err)
                    })
            }
        })
    </script>
@endif
