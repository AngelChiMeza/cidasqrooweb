@extends('layouts.app')

@section('titulo')
    Historia
@endsection

@section('contenido')

<!-- Historia -->
<div class="container mx-auto p-4">

    <h1 class="text-3xl lg:text-5xl font-bold mb-10 text-center ">Historia</h1>

    <section class="container mx-auto py-16 px-4">
        <div class="text-center mb-16">
            <h2 class="text-4xl font-bold">Fundación</h2>
        </div>
        <div class="flex flex-wrap -mx-4 text-center">
            <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                <div class="p-6">
                    <div class="text-red-700 mb-4">
                        <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                          </svg>


                    </div>
                    <h3 class="font-bold text-xl mb-2">Acuerdo de creación</h3>
                    <p class="text-gray-700 text-base">
                        El CIAD se creó por acuerdo publicado en el Diario Oficial de la Federación el 22 de septiembre de 1981 y se constituyó formalmente como asociación civil, con carácter de empresa de participación estatal mayoritaria, el 16 de marzo de 1982, teniendo su sede en Hermosillo, Sonora, México.
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                <div class=" p-6 ">
                    <div class="text-red-700 mb-4">
                        <svg  class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12 21v-8.25M15.75 21v-8.25M8.25 21v-8.25M3 9l9-6 9 6m-1.5 12V10.332A48.36 48.36 0 0 0 12 9.75c-2.551 0-5.056.2-7.5.582V21M3 21h18M12 6.75h.008v.008H12V6.75Z" />
                          </svg>

                    </div>
                    <h3 class="font-bold text-xl mb-2">Asociados fundadores</h3>
                    <p class="text-gray-700 text-base">
                        Sus asociados fundadores fueron la Secretaría de Educación Pública, el Consejo Nacional de Ciencia y Tecnología, la Universidad Nacional Autónoma de México, el Instituto Politécnico Nacional y el Gobierno del Estado de Sonora.
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                <div class="p-6 ">
                    <div class="text-red-700 mb-4">
                        <svg class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M18 18.72a9.094 9.094 0 0 0 3.741-.479 3 3 0 0 0-4.682-2.72m.94 3.198.001.031c0 .225-.012.447-.037.666A11.944 11.944 0 0 1 12 21c-2.17 0-4.207-.576-5.963-1.584A6.062 6.062 0 0 1 6 18.719m12 0a5.971 5.971 0 0 0-.941-3.197m0 0A5.995 5.995 0 0 0 12 12.75a5.995 5.995 0 0 0-5.058 2.772m0 0a3 3 0 0 0-4.681 2.72 8.986 8.986 0 0 0 3.74.477m.94-3.197a5.971 5.971 0 0 0-.94 3.197M15 6.75a3 3 0 1 1-6 0 3 3 0 0 1 6 0Zm6 3a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Zm-13.5 0a2.25 2.25 0 1 1-4.5 0 2.25 2.25 0 0 1 4.5 0Z" />
                          </svg>

                    </div>
                    <h3 class="font-bold text-xl mb-2">Asociados activos</h3>
                    <p class="text-gray-700 text-base">
                        En 1993 se integraron como asociados activos el Gobierno del Estado de Sinaloa y la Secretaría de Pesca (hoy Secretaría de Agricultura, Ganadería, Desarrollo Rural, Pesca y Alimentación) y en 1997 el Gobierno del Estado de Chihuahua.
                    </p>
                </div>
            </div>
            <div class="w-full md:w-1/2 lg:w-1/4 px-4 mb-8">
                <div class= " p-6 ">
                    <div class="text-red-700 mb-4">
                        <svg  class="w-12 h-12 mx-auto" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M12.75 3.03v.568c0 .334.148.65.405.864l1.068.89c.442.369.535 1.01.216 1.49l-.51.766a2.25 2.25 0 0 1-1.161.886l-.143.048a1.107 1.107 0 0 0-.57 1.664c.369.555.169 1.307-.427 1.605L9 13.125l.423 1.059a.956.956 0 0 1-1.652.928l-.679-.906a1.125 1.125 0 0 0-1.906.172L4.5 15.75l-.612.153M12.75 3.031a9 9 0 0 0-8.862 12.872M12.75 3.031a9 9 0 0 1 6.69 14.036m0 0-.177-.529A2.25 2.25 0 0 0 17.128 15H16.5l-.324-.324a1.453 1.453 0 0 0-2.328.377l-.036.073a1.586 1.586 0 0 1-.982.816l-.99.282c-.55.157-.894.702-.8 1.267l.073.438c.08.474.49.821.97.821.846 0 1.598.542 1.865 1.345l.215.643m5.276-3.67a9.012 9.012 0 0 1-5.276 3.67m0 0a9 9 0 0 1-10.275-4.835M15.75 9c0 .896-.393 1.7-1.016 2.25" />
                        </svg>
                    </div>
                    <h3 class="font-bold text-xl mb-2">Conversión a CPI</h3>
                    <p class="text-gray-700 text-base">
                        El 31 de marzo del año 2000 la Asamblea de Asociados del CIAD autorizó su constitución como Centro Público de Investigación, al amparo de la Ley para el Fomento de la Investigación Científica y Tecnológica (sustituida en 2002 por la Ley de Ciencia y Tecnología).
                    </p>
                </div>
            </div>
        </div>
    </section>
    <div class="timeline-container pt-15">
        <!-- Timeline Item 1 -->
        <div class="timeline-item mb-8 flex justify-between items-center w-full">
            <div class="order-1 w-5/12"></div>
            <div class="order-1 w-5/12 px-1 py-4 text-right">
                <div class="inline-block rounded-lg shadow-lg bg-white p-4">
                    <div class="flex items-center justify-end mb-2">
                        <img src="https://via.placeholder.com/24" alt="Icon" class="mr-2">
                        <h3 class="font-bold text-gray-800 text-lg">Lorem Ipsum Dolor</h3>
                    </div>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                    </p>
                </div>
            </div>
            <div class="timeline-circle w-14 h-14 rounded-full bg-red-900-with-border text-white flex items-center justify-center">
                1980
            </div>
        </div>

        <!-- Timeline Item 2 -->
        <div class="timeline-item mb-8 flex justify-between items-center w-full flex-row-reverse">
            <div class="order-1 w-5/12"></div>
            <div class="order-1 w-5/12 px-1 py-4 text-left">
                <div class="inline-block rounded-lg shadow-lg bg-white p-4">
                    <div class="flex items-center mb-2">
                        <img src="https://via.placeholder.com/24" alt="Icon" class="mr-2">
                        <h3 class="font-bold text-gray-800 text-lg">Lorem Ipsum Dolor</h3>
                    </div>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                    </p>
                </div>
            </div>
            <div class="timeline-circle w-14 h-14 rounded-full bg-amber-300-with-border flex items-center justify-center">
                1985
            </div>
        </div>

        <!-- Timeline Item 3 -->
        <div class="timeline-item mb-8 flex justify-between items-center w-full">
            <div class="order-1 w-5/12"></div>
            <div class="order-1 w-5/12 px-1 py-4 text-right">
                <div class="inline-block rounded-lg shadow-lg bg-white p-4">
                    <div class="flex items-center justify-end mb-2">
                        <img src="https://via.placeholder.com/24" alt="Icon" class="mr-2">
                        <h3 class="font-bold text-gray-800 text-lg">Lorem Ipsum Dolor</h3>
                    </div>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                    </p>
                </div>
            </div>
            <div class="timeline-circle w-14 h-14 rounded-full bg-red-900-with-border text-white flex items-center justify-center">
                1990
            </div>
        </div>

        <!-- Timeline Item 4 -->
        <div class="timeline-item mb-8 flex justify-between items-center w-full flex-row-reverse">
            <div class="order-1 w-5/12"></div>
            <div class="order-1 w-5/12 px-1 py-4 text-left">
                <div class="inline-block rounded-lg shadow-lg bg-white p-4">
                    <div class="flex items-center mb-2">
                        <img src="https://via.placeholder.com/24" alt="Icon" class="mr-2">
                        <h3 class="font-bold text-gray-800 text-lg">Lorem Ipsum Dolor</h3>
                    </div>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                    </p>
                </div>
            </div>
            <div class="timeline-circle w-14 h-14 rounded-full bg-amber-300-with-border flex items-center justify-center">
                1995
            </div>
        </div>

        <!-- Timeline Item 5 -->
        <div class="timeline-item mb-8 flex justify-between items-center w-full">
            <div class="order-1 w-5/12"></div>
            <div class="order-1 w-5/12 px-1 py-4 text-right">
                <div class="inline-block rounded-lg shadow-lg bg-white p-4">
                    <div class="flex items-center justify-end mb-2">
                        <img src="https://via.placeholder.com/24" alt="Icon" class="mr-2">
                        <h3 class="font-bold text-gray-800 text-lg">Lorem Ipsum Dolor</h3>
                    </div>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                    </p>
                </div>
            </div>
            <div class="timeline-circle w-14 h-14 rounded-full bg-red-900-with-border text-white flex items-center justify-center">
                2000
            </div>
        </div>

        <!-- Timeline Item 6 -->
        <div class="timeline-item mb-8 flex justify-between items-center w-full flex-row-reverse">
            <div class="order-1 w-5/12"></div>
            <div class="order-1 w-5/12 px-1 py-4 text-left">
                <div class="inline-block rounded-lg shadow-lg bg-white p-4">
                    <div class="flex items-center mb-2">
                        <img src="https://via.placeholder.com/24" alt="Icon" class="mr-2">
                        <h3 class="font-bold text-gray-800 text-lg">Lorem Ipsum Dolor</h3>
                    </div>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                    </p>
                </div>
            </div>
            <div class="timeline-circle w-14 h-14 rounded-full bg-amber-300-with-border flex items-center justify-center">
                2005
            </div>
        </div>

        <!-- Timeline Item 7 -->
        <div class="timeline-item mb-8 flex justify-between items-center w-full">
            <div class="order-1 w-5/12"></div>
            <div class="order-1 w-5/12 px-1 py-4 text-right">
                <div class="inline-block rounded-lg shadow-lg bg-white p-4">
                    <div class="flex items-center justify-end mb-2">
                        <img src="https://via.placeholder.com/24" alt="Icon" class="mr-2">
                        <h3 class="font-bold text-gray-800 text-lg">Lorem Ipsum Dolor</h3>
                    </div>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                    </p>
                </div>
            </div>
            <div class="timeline-circle w-14 h-14 rounded-full bg-red-900-with-border text-white flex items-center justify-center">
                2010
            </div>
        </div>

        <!-- Timeline Item 8 -->
        <div class="timeline-item mb-8 flex justify-between items-center w-full flex-row-reverse">
            <div class="order-1 w-5/12"></div>
            <div class="order-1 w-5/12 px-1 py-4 text-left">
                <div class="inline-block rounded-lg shadow-lg bg-white p-4">
                    <div class="flex items-center mb-2">
                        <img src="https://via.placeholder.com/24" alt="Icon" class="mr-2">
                        <h3 class="font-bold text-gray-800 text-lg">Lorem Ipsum Dolor</h3>
                    </div>
                    <p class="text-sm leading-snug tracking-wide text-gray-900 text-opacity-100">
                        Lorem ipsum dolor sit amet, consectetur adipiscing elit. Integer nec odio. Praesent libero. Sed cursus ante dapibus diam. Sed nisi. Nulla quis sem at nibh elementum imperdiet.
                    </p>
                </div>
            </div>
            <div class="timeline-circle w-14 h-14 rounded-full bg-amber-300-with-border flex items-center justify-center">
                2015
            </div>
        </div>
    </div>
</div>





@endsection
