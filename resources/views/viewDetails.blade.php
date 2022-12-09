<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gradient-to-l from-green-300 to-purple-400 w-full h-screen">
    <section class="w-full h-4/5 my-auto">
        <div class="relative max-w-screen-xl px-4 py-8 mx-auto w-full h-full">
            <div class="grid items-start grid-cols-1 gap-8 md:grid-cols-2">
                <div class="grid grid-cols-2 gap-4 md:grid-cols-1">
                    <img
                    alt="Les Paul"
                    src="https://www.designfreelogoonline.com/wp-content/uploads/2020/10/000594-Karate-03.png"
                    class="object-cover w-full aspect-square rounded-xl"
                    />
                </div>

            <div class="sticky top-0">
                <strong
                class="border border-blue-600 rounded-full tracking-wide px-3 font-medium py-0.5 text-xs bg-gray-100 text-blue-600"
                >
                    Visualisar produto
                </strong>

                <div class="flex justify-between mt-8">
                <div class="max-w-[35ch]">
                    <h1 class="text-2xl font-bold">
                        {{$prod->nome}}
                    </h1>

                    <p class="mt-0.5 text-sm">{{$prod->categoria}}</p>

                    <p class="mt-0.5 text-lg">{{$prod->marca}}</p>

                    <div class=" mt-2 -ml-0.5 hidden">
                        <svg
                            class="w-5 h-5 text-yellow-400"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            class="w-5 h-5 text-yellow-400"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            class="w-5 h-5 text-yellow-400"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            class="w-5 h-5 text-yellow-400"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>

                        <svg
                            class="w-5 h-5 text-gray-200"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 20 20"
                            fill="currentColor"
                        >
                            <path
                            d="M9.049 2.927c.3-.921 1.603-.921 1.902 0l1.07 3.292a1 1 0 00.95.69h3.462c.969 0 1.371 1.24.588 1.81l-2.8 2.034a1 1 0 00-.364 1.118l1.07 3.292c.3.921-.755 1.688-1.54 1.118l-2.8-2.034a1 1 0 00-1.175 0l-2.8 2.034c-.784.57-1.838-.197-1.539-1.118l1.07-3.292a1 1 0 00-.364-1.118L2.98 8.72c-.783-.57-.38-1.81.588-1.81h3.461a1 1 0 00.951-.69l1.07-3.292z"
                            />
                        </svg>
                    </div>
                </div>

                <p class="text-lg font-bold">R${{$prod->preco}}</p>
                </div>

                <details class="relative mt-4 group">
                <summary class="block">
                    <div>
                    <div class="prose max-w-none group-open:hidden">
                        <p>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                        veniam dicta beatae eos ex error culpa delectus rem tenetur,
                        architecto quam nesciunt, dolor veritatis nisi minus
                        inventore, rerum at recusandae?
                        </p>
                    </div>

                    <span
                        class="mt-4 text-sm font-medium underline cursor-pointer group-open:absolute group-open:bottom-0 group-open:left-0 group-open:mt-0"
                    >
                        Read More
                    </span>
                    </div>
                </summary>

                <div class="pb-6 prose max-w-none">
                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Ipsa
                    veniam dicta beatae eos ex error culpa delectus rem tenetur,
                    architecto quam nesciunt, dolor veritatis nisi minus inventore,
                    rerum at recusandae?
                    </p>

                    <p>
                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Placeat
                    nam sapiente nobis ea veritatis error consequatur nisi
                    exercitationem iure laudantium culpa, animi temporibus non! Maxime
                    et quisquam amet. A, deserunt!
                    </p>
                </div>
                </details>


                <div class="flex mt-48 ml-48">
                    <button
                    type="submit"
                    class="invisible px-8 py-5 ml-3 text-xs font-medium text-white bg-green-600 rounded hover:bg-green-400"
                    >
                        Adicionar ao Carrinho
                    </button>
                    <a
                    type="submit"
                    class="block px-8 py-5 ml-3 text-xs font-medium text-black bg-yellow-500 rounded hover:bg-yellow-300 mx-18"
                    href="/products/{{$prod->id}}/edit"
                    >
                        Editar
                    </a>
                </div>
                </form>
            </div>
            </div>
        </div>
    </section>
</body>
</html>