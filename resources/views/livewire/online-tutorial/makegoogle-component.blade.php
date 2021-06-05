@push('styles')
<style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: arial, sans-serif;
    }
    section {
        position: relative;
        width: 100%;
        height: 100vh;
        display: flex;
        justify-content: center;
        align-items: center;
    }
    section .main{
        width: 580px;
        margin: 0 20px;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
    }
    section .main .searchBx{
        position: relative;
        width: 100%;
        margin: 20px;
    }
    section .main .searchBx .query {
        width: 100%;
        padding: 13px;
        border: 1px solid #ccc;
        outline: none;
        font-size: 16px;
        border-radius: 30px;
        padding-left: 45px;
        padding-right: 60px; 
    }
    section .main .searchBx .icons {
        position: absolute;
        top: 0;
        width: 100%;
        display: flex;
        justify-content:space-between;
        padding: 12px 20px;
        align-items: center;
        pointer-events: none;
    }
    section .main .searchBx .icons img {
        max-width: 100%;
    }
    .searchBtn {
        margin: 0 5px;
        margin-top: 20px;
        padding: 12px 20px;
        color: #555;
        font-size: 14px;
        border: none;
        cursor: pointer;
        border-radius: 4px;
        border: 1px solid transparent;
        outline: none
    }
    .searchBtn:hover {
        border: 1px solid #ccc;
    }

</style>
@endpush


<div>
    <section>
        <div class="main">
            <img src="{{asset('assets/img/galeria/google/google.png')}}" alt="">
            <div class="searchBx">
                <input type="text" class="query" value="">
                <div class="icons">
                    <div><img src="{{asset('assets/img/galeria/google/search.png')}}" alt=""></div>
                    <div><img src="{{asset('assets/img/galeria/google/mic.png')}}" alt=""></div>
                </div>
            </div>
            <div class="button">
                <button class="searchBtn">Google Search</button>
            </div>
        </div>
    </section>
</div>

@push('scripts')
<script>
    let query = document.querySelector('.query');
    let searchBtn = document.querySelector('.searchBtn');

    searchBtn.onclick = function () {
        let url = 'https://www.google.com/search?q=' +query.value;
        window.open(url,'_self');
    }

</script>

@endpush