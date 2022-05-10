<footer class="flex justify-center px-4 text-gray-800 bg-white dark:text-white dark:bg-gray-800">
    <div class="container py-6">
        <h1 class="text-lg font-bold text-center lg:text-2xl">
            Preencha seu e-mail <br> para receber ofertas exclusivas.
        </h1>

        <div class="flex flex-col justify-center mt-6 w-6/12 mx-auto">
            <div class="bg-white border rounded-md focus-within:ring dark:bg-gray-800 dark:border-gray-600 focus-within:border-blue-400 focus-within:ring-blue-300 focus-within:ring-opacity-40 dark:focus-within:border-blue-300">
                <form method="POST" action="/newsletter" class="flex justify-between md:flex-row m-0">
                    @csrf
                    <input name="email" type="email" class="w-full p-2 m-1 text-sm text-gray-700 bg-transparent appearance-none focus:outline-none focus:placeholder-transparent" placeholder="Digite seu e-mail..." aria-label="Digite seu e-mail...">
                    <button type="submit" class="whitespace-nowrap w-full px-3 py-2 m-1 text-sm font-medium tracking-wider text-white uppercase transition-colors duration-200 transform bg-gray-800 rounded-md dark:hover:bg-gray-600 dark:bg-gray-700 lg:w-auto hover:bg-gray-700">Inscrever-se</button>
                </form>
            </div>
            @if(Session::has('success'))
            <div class="mt-5">
                <h1 class="font-bold text-green-600 text-center">{{Session::get('success')}}</h1>
            </div>
            @else
            <div class="mt-5">
                <h1 class="font-bold text-red-600 text-center">{{Session::get('error')}}</h1>
            </div>
            @endif
        </div>

        <hr class="h-px mt-6 border-gray-300 border-none dark:bg-gray-700">

        <div class="flex flex-col items-center justify-between mt-6 md:flex-row">
            <div>
                <a href="#" class="text-xl font-bold text-gray-800 dark:text-white hover:text-gray-700 dark:hover:text-gray-300">Brand</a>
            </div>

            <div class="flex mt-4 md:m-0">
                <div class="-mx-4">
                    <a href="#" class="px-4 text-sm font-medium text-gray-800 dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-400 hover:underline">Home</a>
                    <a href="#" class="px-4 text-sm font-medium text-gray-800 dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-400 hover:underline">Criar produto</a>
                    <a href="#" class="px-4 text-sm font-medium text-gray-800 dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-400 hover:underline">Meus produtos</a>
                    <a href="#" class="px-4 text-sm font-medium text-gray-800 dark:text-gray-200 hover:text-gray-700 dark:hover:text-gray-400 hover:underline">Contato</a>
                </div>
            </div>
        </div>
    </div>
</footer>