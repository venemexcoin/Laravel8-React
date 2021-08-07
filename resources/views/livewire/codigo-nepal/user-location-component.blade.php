@push('title_base')
  Use Location
@endpush

@push('styles')
<style>
   @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap');

* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    font-family: 'Poppins', sans-serif;
}
body {
  display:flex;
  align-items: center;
  justify-content: center;
  min-height: 100vh;
  background: linear-gradient(#252930 50%,#5372F0 50%);
}
button {
  font-size: 50px;
  padding: 25px 46px;
  background: #fff;
  border: none;
  outline: none;
  border-radius: 10px;
  font-weight: 500;
  color: #5372F0;
  cursor: pointer;
}
</style>

@endpush
<div>
  <button>Detect your location</button>    
</div>

@push('scripts')
  <script>
    const button = document.querySelector('button');

    button.addEventListener('click', () => {
      if (navigator.geolocation){   //if browser support geolocation api
        // geolocation.getCurrentPosition method is used to get current position of the device
        // it takes three paramaters seccess,error,options. If everyng  is right then success
        // callback funtion will call elese error,callback function waill call. We don't need third paramater for this project
        navigator.geolocation.getCurrentPosition(onSuccess,onError);
      }else {
        button.innerText = "Your browser not support";
      }

      function onSuccess(position) {
        console.log(position)
      }

      function onError(error) {
        if (error.code ==1){
          button.innerText = "Your denied the request";
        }
        else if (error.code == 2){
          button.innerText = "Location not available";
        }else {
          button.innerText = "Sommething went wrong";
        }
        button.setAttribute("disabled", "true");
      }

    })
  </script>
@endpush
