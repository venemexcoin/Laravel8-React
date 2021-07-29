@push('title_base')
    Draggable
@endpush
@push('styles')
<link href='https://unpkg.com/boxicons@2.0.9/css/boxicons.min.css' rel='stylesheet'>
<style>
    @import url('https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600&display=swap');
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: 'Poppins', sans-serif;
    }
    body {
        background: #6f36ff;
    }
    .wrapper {
        top: 50%;
        left: 50%;
        width: 450px;
        background: #fff;
        position: absolute;
        border-radius: 10px;
        transform: translate(-50%, -50%) scale(1.4);
    }
    .wrapper header{
        color: #6f36ff;
        font-size: 23px;
        font-weight: 500;
        padding: 17px 30px;
        border-bottom: 1px solid #bfbfbf;
    }
    .wrapper header.active {
        cursor: move;
        user-select: none;
    }
    .wrapper .content {
        display: flex;
        align-items: center;
        justify-content: center;
        flex-direction:column;
        margin: 30px 30px 40px;
    }
    .content .icon {
        height: 95px;
        width: 95px;
        display: flex;
        align-items: center;
        justify-content: center;
        border-radius: 50%;
        border: 5px solid #6f36ff;   
    }
    .content .icon i {
        color: #6f36ff;
        font-size: 60px;
    }
    .content .title {
        font-size: 29px;
        font-weight: 500;
        margin: 15px;
    }
    .content p {
        font-size: 16px;
        text-align: center;
    }
</style>
@endpush
<div>
    <div class="wrapper">
        <header>Draggable Div</header>
        <div class="content">
            <div class="icon"><i class="bx bx-move"></i></div>
            <div class="title">Draggable Div</div>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Veritatis quis quo ratione enim? Magnam totam obcaecati reprehenderit voluptate, animi tempore omnis enim quam dolore exercitationem non voluptates dolores optio eaque.</p>
        </div>
    </div>
    
</div>
@push('scripts')
<script>
    
    const wrapper = document.querySelector('.wrapper'),
    header = wrapper.querySelector('header');

    function onDrag({movementX, movementY}) {
        let getStyle = window.getComputedStyle(wrapper);
        let left = parseInt(getStyle.left); 
        let top  = parseInt(getStyle.top);
        wrapper.style.left = `${left + movementX}px`;
        wrapper.style.top = `${top + movementY}px`;
    }

        header.addEventListener('mousedown', () => {
            header.classList.add('active');
        header.addEventListener('mousemove', onDrag);
    });

    document.addEventListener('mouseup', () => {
        header.classList.remove('active');
        header.removeEventListener('mousemove', onDrag);
    });
</script>

@endpush
