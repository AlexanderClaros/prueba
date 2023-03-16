<!doctype html>
<html>
    <head>

        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="/dist/output.css" rel="stylesheet">
        <link rel="stylesheet" href="../css/app.css">
        <script src="https://cdn.tailwindcss.com"></script>

    </head>

    <body class="bg-gray-400">

        <nav class="p-5 bg-black shadow md:flex md:items-center md:justify-between">

            <div class="md:max-w-xs md:flex md:space-x-2">
            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="text-orange-400/75 bi bi-fuel-pump" viewBox="0 0 16 16">
                        <path d="M3 2.5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 .5.5v5a.5.5 0 0 1-.5.5h-5a.5.5 0 0 1-.5-.5v-5Z"/>
                        <path d="M1 2a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v8a2 2 0 0 1 2 2v.5a.5.5 0 0 0 1 0V8h-.5a.5.5 0 0 1-.5-.5V4.375a.5.5 0 0 1 .5-.5h1.495c-.011-.476-.053-.894-.201-1.222a.97.97 0 0 0-.394-.458c-.184-.11-.464-.195-.9-.195a.5.5 0 0 1 0-1c.564 0 1.034.11 1.412.336.383.228.634.551.794.907.295.655.294 1.465.294 2.081v3.175a.5.5 0 0 1-.5.501H15v4.5a1.5 1.5 0 0 1-3 0V12a1 1 0 0 0-1-1v4h.5a.5.5 0 0 1 0 1H.5a.5.5 0 0 1 0-1H1V2Zm9 0a1 1 0 0 0-1-1H3a1 1 0 0 0-1 1v13h8V2Z"/>
                        </svg>
                <a href="#" class="font-display max-w-sm text-2xl font-bold leading-tight">
                    <span class="link link-underline link-underline-orange text-orange-400/75">
                        Geoportal
                    </span>
                </a>

            </div>

            <ul class="md:float-right md:flex md:items-center z-[-1] md:z-auto md:static absolute w-full left-0 md:w-auto">

                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="link link-underline link-underline-orange font-display max-w-sm font-bold leading-tight text-xl text-orange-400/75">ESTACIONES DE SERVICIO</a>
                </li>

                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="link link-underline link-underline-orange font-display max-w-sm font-bold leading-tight text-xl text-orange-400/75">POSTES MARITIMOS</a>
                </li>

                <li class="mx-4 my-6 md:my-0">
                    <a href="#" class="link link-underline link-underline-orange font-display max-w-sm font-bold leading-tight text-xl text-orange-400/75">NOSOTROS</a>
                </li>

                <button class="bg-gray-600 text-white font-display max-w-sm text-xl font-bold leading-tight px-5 py-2 mx-4 hover:bg-gray-700 rounded">
                    Login
                </button>

            </ul>


            <!--animacion underline-->
            <style>
                .link-underline {
                    border-bottom-width: 0;
                    background-image: linear-gradient(transparent, transparent), linear-gradient(#fff, #fff);
                    background-size: 0 3px;
                    background-position: 0 100%;
                    background-repeat: no-repeat;
                    transition: .5s ease-in-out;
                }

                .link-underline-orange {
                    background-image: linear-gradient(transparent, transparent), linear-gradient(rgb(251 146 60 / 0.75), rgb(251 146 60 / 0.75))
                }

                .link-underline:hover {
                    background-size: 100% 3px;
                    background-position: 0 100%
                }
            </style>
            
	    </nav>

        <div>@yield('content')</div>

    </body>

</html>