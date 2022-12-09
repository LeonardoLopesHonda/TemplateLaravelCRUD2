<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Entrar</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
    <body class="flex items-center justify-center bg-gradient-to-l from-pink-500 via-red-500 to-yellow-500" >
        <section class="h-full gradient-form md:h-screen">
        <div class="container py-12 px-6 h-full">
            <div class="flex justify-center items-center flex-wrap h-full g-6 text-gray-800">
            <div class="xl:w-10/12">
                <div class="block bg-white shadow-lg rounded-lg">
                <div class="lg:flex lg:flex-wrap g-0">
                    <div class="lg:w-6/12 px-4 md:px-0">
                    <div class="md:p-12 md:mx-6">
                        <div class="text-center">
                        <img
                            class="mx-auto w-40"
                            src="https://www.designfreelogoonline.com/wp-content/uploads/2020/10/000594-Karate-03.png"
                            alt="logo"
                        />
                        <h4 class="text-xl font-semibold mt-1 mb-12 pb-1">Loja Virtual / Loja do karateca</h4>
                        </div>
                        <form method="POST" action="/user">
                            @csrf
                                <p class="mb-4"></p>
                                <div class="mb-4">
                                    <input
                                        type="text"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        placeholder="Nome"
                                        name="nome"
                                    />
                                </div>
                                <div class="mb-4">
                                    <input
                                        type="email"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        placeholder="Email"
                                        name="email"
                                    />
                                </div>
                                <div class="mb-4">
                                    <input
                                        type="password"
                                        class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                        placeholder="Senha"
                                        name="senha"
                                    />
                                </div>
                                <div class="text-center pt-1 mb-12 pb-1">
                                    <button
                                    class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                                    type="submit"
                                    data-mdb-ripple="true"
                                    data-mdb-ripple-color="light"
                                    style="
                                        background: linear-gradient(
                                        to right,
                                        #ee7724,
                                        #d8363a,
                                        #dd3675,
                                        #b44593
                                        );
                                    "
                                    >
                                    Entrar
                                    </button>
                                </div>
                        </form>
                    </div>
                    </div>
                    <div
                    class="lg:w-6/12 flex items-center lg:rounded-r-lg rounded-b-lg lg:rounded-bl-none"
                    style="
                        background: linear-gradient(to right, #ee7724, #d8363a, #dd3675, #b44593);
                    "
                    >
                    <div class="text-white px-4 py-6 md:p-12 md:mx-6 w-full">
                        <h4 class="text-4xl font-semibold mb-2 mx-auto">A melhor loja de produtos para praticar </h4>
                        <div class="flex items-center justify-center">
                            <h1 class="text-8xl font-bold mb-6">Karatê</h1>
                        </div>

                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>
    </body>
</html>