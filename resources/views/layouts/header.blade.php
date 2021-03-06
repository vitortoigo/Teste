<div class="flex items-center h-20 px-6 justify-between border-b flex justify-center px-4 text-gray-800 bg-white dark:text-white dark:bg-gray-800 relative z-50">
    <div class="h-8">
        <img src="https://www.ellitedigital.com.br/logo-sites/logo-ellite-white.svg" class="h-full" />
    </div>
    <div class="flex-1 ml-10 items-center hidden lg:flex">
        <a href="/" class="no-underline px-2 mr-3 text-gray-200 font-medium hover:text-blue-400">Home</a>
        <a href="/create/product" class="no-underline px-2 mr-3 font-medium hover:text-blue-400">Todos produtos</a>
    </div>
    <div class="items-center hidden lg:flex">
        @guest
        <a href="/login" class="no-underline px-2 mr-3 text-gray-200 font-medium hover:text-blue-400">Entrar</a>
        <a href="/register" class="no-underline px-2 mr-3 font-medium hover:text-blue-400">Cadastrar</a>
        @endguest
        @auth
        <a href="/create/product" class="whitespace-nowrap no-underline px-2 mr-3 font-medium hover:text-blue-400">Criar produto</a>
        <a href="/dashboard" class="whitespace-nowrap no-underline px-2 mr-3 text-gray-200 font-medium hover:text-blue-400">Meus produtos</a>
        <form class="mb-0" action="/logout" method="POST">
            @csrf
            <button type="submit" class="no-underline px-2 mr-3 font-medium hover:text-blue-400">Sair</button>
        </form>
        <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" class="svg-inline--fa fa-question-circle fa-w-16 ml-6 text-2xl cursor-pointer" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
            <path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
        </svg>
        <div class="ml-6 cursor-pointer relative rounded-full w-12 h-12">
            <div class="absolute rounded-full right-0 top-0 w-4 h-4 bg-green-400"></div>
        </div>
        @endauth
    </div>
    <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="times" class="svg-inline--fa fa-times fa-w-11 text-white text-3xl cursor-pointer lg:hidden" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 352 512">
        <path fill="currentColor" d="M242.72 256l100.07-100.07c12.28-12.28 12.28-32.19 0-44.48l-22.24-22.24c-12.28-12.28-32.19-12.28-44.48 0L176 189.28 75.93 89.21c-12.28-12.28-32.19-12.28-44.48 0L9.21 111.45c-12.28 12.28-12.28 32.19 0 44.48L109.28 256 9.21 356.07c-12.28 12.28-12.28 32.19 0 44.48l22.24 22.24c12.28 12.28 32.2 12.28 44.48 0L176 322.72l100.07 100.07c12.28 12.28 32.2 12.28 44.48 0l22.24-22.24c12.28-12.28 12.28-32.19 0-44.48L242.72 256z"></path>
    </svg>
    <!-- Only show if mobile menu open begin. Change to flex when open. -->
    <div class="hidden bg-blue-800 absolute top-full left-0 flex-col w-full pb-8 lg:hidden">
        <div class="flex-1 flex flex-col items-center text-xl">
            <a href="#" class="no-underline px-2 my-2 text-gray-200 font-medium hover:text-blue-400">Home</a>
            <a href="#" class="no-underline px-2 my-2 font-medium hover:text-blue-400">Dogs</a>
            <a href="#" class="no-underline px-2 my-2 text-gray-200 font-medium hover:text-blue-400">Bones</a>
            <a href="#" class="no-underline px-2 my-2 text-gray-200 font-medium hover:text-blue-400">Settings</a>
            <div class="my-2 flex justify-center">
                <svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="question-circle" class="svg-inline--fa fa-question-circle fa-w-16 text-2xl mx-2 cursor-pointer" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path fill="currentColor" d="M504 256c0 136.997-111.043 248-248 248S8 392.997 8 256C8 119.083 119.043 8 256 8s248 111.083 248 248zM262.655 90c-54.497 0-89.255 22.957-116.549 63.758-3.536 5.286-2.353 12.415 2.715 16.258l34.699 26.31c5.205 3.947 12.621 3.008 16.665-2.122 17.864-22.658 30.113-35.797 57.303-35.797 20.429 0 45.698 13.148 45.698 32.958 0 14.976-12.363 22.667-32.534 33.976C247.128 238.528 216 254.941 216 296v4c0 6.627 5.373 12 12 12h56c6.627 0 12-5.373 12-12v-1.333c0-28.462 83.186-29.647 83.186-106.667 0-58.002-60.165-102-116.531-102zM256 338c-25.365 0-46 20.635-46 46 0 25.364 20.635 46 46 46s46-20.636 46-46c0-25.365-20.635-46-46-46z"></path>
                </svg><svg aria-hidden="true" focusable="false" data-prefix="fas" data-icon="bell" class="svg-inline--fa fa-bell fa-w-14 text-2xl mx-2 cursor-pointer" role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 448 512">
                    <path fill="currentColor" d="M224 512c35.32 0 63.97-28.65 63.97-64H160.03c0 35.35 28.65 64 63.97 64zm215.39-149.71c-19.32-20.76-55.47-51.99-55.47-154.29 0-77.7-54.48-139.9-127.94-155.16V32c0-17.67-14.32-32-31.98-32s-31.98 14.33-31.98 32v20.84C118.56 68.1 64.08 130.3 64.08 208c0 102.3-36.15 133.53-55.47 154.29-6 6.45-8.66 14.16-8.61 21.71.11 16.4 12.98 32 32.1 32h383.8c19.12 0 32-15.6 32.1-32 .05-7.55-2.61-15.27-8.61-21.71z"></path>
                </svg>
            </div>
            <div class="cursor-pointer my-2 relative rounded-full w-12 h-12">
                <img src="https://picsum.photos/id/237/200/200.jpg" class="absolute left-0 top-0 w-full h-full rounded-full object-cover" />
                <div class="absolute rounded-full right-0 top-0 w-4 h-4 bg-green-400"></div>
            </div>
        </div>
    </div>
    <!-- Only show if mobile menu open end -->
</div>