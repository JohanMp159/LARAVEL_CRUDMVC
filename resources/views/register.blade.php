<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
 @include('partials/head')
    <body >
        @include('partials/navbar')
            <div class="container p-4">
                 <form action="" method="POST"  class="card border-info">
                    <input type="hidden" name="_token" id="token" value="{{ csrf_token() }}"/>
                    <div class="card-body">
                        <input type = "text" class = "form-control mb-2" placeholder = "Name.." id="name" name="name"/>
                        <input  type = "email" class = "form-control mb-2" placeholder = "Email..."  id="email" name="email"/>
                        <input  type = "password" class="form-control mb-2" placeholder="Password..."  id="password" name="password"/>
                        <button onclick="addUser()" class ="btn btn-info">Aceptar </button>
                    </div>
                 </form>               
            </div>
        </div>

        <!-- JavaScript-->

<script>
    let name =  document.getElementById('name');
    let email =  document.getElementById('email');
    let password =  document.getElementById('password');
    let _token =  document.getElementById('token');
       
    async function addUser(){
        let obj = { name:name.value, email:email.value, password:password.value };
        const res = await fetch('http://127.0.0.1:8000/register', {
             method:'POST',
             mode: 'cors',
             headers:{
                   'X-CSRF-TOKEN': _token.value,
                   'Content-Type': 'application/json'
            },
            body:JSON.stringify(obj)      
            });
       
            const data = await res.json()
            console.log(data)
            clearInput()
           }

           function clearInput(){
               name.value = ""
               email.value = ""
               password.value = ""
           }
          
       </script>
    </body>
</html>

