<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-r from-slate-900 via-purple-900 to-slate-900 w-full h-screen">
    <div class="flex items-center justify-center mt-12 h-full w-full">
        <form class="block p-8 bg-gray-900 border border-gray-800 shadow-xl rounded-xl w-3/4 h-1/2 space-y-4 relative" method="POST" action="/products">
            @csrf
            <div class="flex items-center justify-center my-10 mb-16">
                <h2 class="text-white text-5xl font-bold">Cadastre seu produto</h2>
            </div>
          <div>
            <label class="sr-only" for="name">Nome</label>
            <input class="w-full p-5 text-sm border-gray-200 rounded-lg" placeholder="Nome" type="text" name="nome" />
          </div>

          <div class="grid grid-cols-1 gap-4 sm:grid-cols-2">
            <div>
              <label class="sr-only" for="email">Categoria</label>
              <input
                class="w-full p-5 text-sm border-gray-200 rounded-lg"
                placeholder="Categoria"
                type="text"
                name="categoria"
              />
            </div>

            <div>
              <label class="sr-only text-white" for="phone">Preço</label>
              <input
                class="w-full p-5 text-sm border-gray-200 rounded-lg"
                placeholder="Preço R$"
                type="text"
                name="preco"
              />
            </div>

            <div class="w-full col-span-2">
                <label class="sr-only" for="name">Marca</label>
                <input class="w-full p-5 text-sm border-gray-200 rounded-lg" placeholder="Marca" type="text" name="marca" />
            </div>

          </div>

          <div class="mt-4">
            <button
              type="submit"
              class="inline-flex items-center justify-center w-full px-5 py-3 text-white bg-black rounded-lg sm:w-auto absolute right-0 bottom-0 m-10 hover:bg-white hover:text-black"
            >
              <span class="font-medium"> Adicionar </span>

              <svg
                xmlns="http://www.w3.org/2000/svg"
                class="w-5 h-5 ml-3"
                fill="none"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M14 5l7 7m0 0l-7 7m7-7H3" />
              </svg>
            </button>
          </div>
        </form>
    </div>
</body>
</html>