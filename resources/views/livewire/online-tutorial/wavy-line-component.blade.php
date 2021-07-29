@push('title_base')
    Wavy line
@endpush
@push('styles')
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            display: flex;
            justify-content:center;
            align-items: center;
            min-height: 100vh;
            background: #222;
        }
        .wavy {
            position: relative;
            width: 150px;
            height: 50px;
            background: #333;
            overflow: hidden;
        }
        .wavy::before {
            content: 'aaaaaaaaaa';
            position: absolute;
            top: -42px;
            left: 0;
            font-size: 4em;
            color: transparent;
            text-decoration-style: wavy;
            text-decoration-color: #fff;
            text-decoration-line: underline;
            animation: animate 2s linear infinite;
        }
        @keyframes animate {
            0%
            {
                transform: translateX(-1px);
            }
            100%
            {
                transform: translateX(-57px);
            }
        }
    </style>
@endpush
<div>
    <div class="wavy"></div>
   
</div>
@push('scripts')

@endpush