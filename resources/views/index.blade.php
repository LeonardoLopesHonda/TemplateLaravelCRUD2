<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-blue-300 via-green-200 to-yellow-300">
    <section>
        <div class="px-4 py-8 mx-auto max-w-screen-xl">
            <div>
            <span class="inline-block w-12 h-1 bg-red-700"></span>

            <h2 class="mt-1 text-2xl font-extrabold tracking-wide uppercase lg:text-3xl">
                Produtos
            </h2>
            </div>

            <div class="mt-8 grid grid-cols-2 lg:grid-cols-4 gap-x-4 gap-y-8">
                    @forelse($products as $prod)
                        <a href="/products/{{$prod->id}}" class="block border border-slate-100 p-12 shadow-2xl rounded-2xl hover:animate-[pulse_.5s_ease-in-out] bg-white">
                            <div class="flex justify-center">
                            <strong class="relative h-6 px-4 text-xs text-white uppercase bg-black leading-6"> New </strong>
                            </div>

                            <img
                            alt="Trainer Product"
                            src="https://www.designfreelogoonline.com/wp-content/uploads/2020/10/000594-Karate-03.png"
                            class="object-cover w-full -mt-3 h-96"
                            />

                            <h3 class="mt-4 text-lg text-black/90"> {{$prod->nome}} </h3>

                            <h5 class="mt-4 text-sm text-black/90">
                                {{$prod->marca}}
                            </h5>

                            <div class="flex items-center justify-between mt-4 font-bold">
                            <p class="text-lg">
                                R${{$prod->preco}}
                            </p>

                            <p class="text-xs tracking-wide uppercase">
                                {{$prod->categoria}}
                            </p>
                            </div>
                        </a>
                @empty
                    <p>Estamos sem estoque!</p>
                @endforelse
                </div>
            </div>
        </div>
        <div >
            <a href="/products/create" class="absolute border-slate-100 p-5 shadow-2xl rounded-full right-0 bottom-0 m-12 bg-gradient-to-l from-rose-700 to-pink-600 hover:bg-gradient-to-tr hover:from-rose-700 hover:to-pink-600">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                </svg>
            </a>
        </div>
    </section>
</body>
</html>