<div class="container">
    <div class="py-2 d-flex justify-content-around align-items-center">
        <div class="text-white">
            Footer Logo
        </div>
        <div class="text-info">
            Laravel v{{ Illuminate\Foundation\Application::VERSION }} (PHP v{{ PHP_VERSION }})
        </div>
        <div class="text-white">
            Copyright 2022
        </div>
    </div>
</div>
@if( Route::currentRouteName() === 'create' )
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
                        error.innerHTML = 'Ошибка валидации на сервере!';
                        console.log('Server validation error! ', err)
                    })
            }
        })
    </script>
@endif
