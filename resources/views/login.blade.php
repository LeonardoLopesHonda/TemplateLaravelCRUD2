<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
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
                            class="mx-auto w-48"
                            src="https://mdbcdn.b-cdn.net/img/Photos/new-templates/bootstrap-login-form/lotus.webp"
                            alt="logo"
                        />
                        <h4 class="text-xl font-semibold mt-1 mb-12 pb-1">Loja Virtual / Lotus Blossom</h4>
                        </div>
                        <form>
                        <p class="mb-4">Entre na sua conta</p>
                        <div class="mb-4">
                            <input
                                type="text"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput1"
                                placeholder="Nome"
                            />
                        </div>
                        <div class="mb-4">
                            <input
                                type="email"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput1"
                                placeholder="Email"
                            />
                        </div>
                        <div class="mb-4">
                            <input
                                type="password"
                                class="form-control block w-full px-3 py-1.5 text-base font-normal text-gray-700 bg-white bg-clip-padding border border-solid border-gray-300 rounded transition ease-in-out m-0 focus:text-gray-700 focus:bg-white focus:border-blue-600 focus:outline-none"
                                id="exampleFormControlInput1"
                                placeholder="Senha"
                            />
                        </div>
                        <div class="text-center pt-1 mb-12 pb-1">
                            <button
                            class="inline-block px-6 py-2.5 text-white font-medium text-xs leading-tight uppercase rounded shadow-md hover:bg-blue-700 hover:shadow-lg focus:shadow-lg focus:outline-none focus:ring-0 active:shadow-lg transition duration-150 ease-in-out w-full mb-3"
                            type="button"
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
                            <a href="">Log in</a>
                            </button>
                            <a class="text-gray-500" href="#">Esqueceu sua senha?</a>
                        </div>
                        <div class="flex items-center justify-between pb-6">
                            <p class="mb-0 mr-2">Nao esta registrado?</p>
                            <button
                                type="button"
                                class="inline-block px-6 py-2 border-2 border-red-600 text-red-600 font-medium text-xs leading-tight uppercase rounded hover:bg-black hover:bg-opacity-5 focus:outline-none focus:ring-0 transition duration-150 ease-in-out"
                                data-mdb-ripple="true"
                                data-mdb-ripple-color="light"
                            >
                                <a href="/register"> Registre-se </a>
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
                    <div class="text-white px-4 py-6 md:p-12 md:mx-6">
                        <h4 class="text-4xl font-semibold mb-6">Produtos com o melhor preço para seu bolso</h4>
                        <p class="text-2xl">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat.
                        </p>
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