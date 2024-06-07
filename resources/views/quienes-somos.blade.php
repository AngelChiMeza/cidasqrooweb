@extends('layouts.app')

@section('titulo')
    Quienes somos
@endsection

@section('contenido')

<div class="bg-gray-100 text-gray-800">
    <div class="container mx-auto p-6">
        <div class="flex flex-col lg:flex-row items-center justify-between">
            <div class="w-full lg:w-1/2 text-center lg:text-left mb-6 lg:mb-0">
                <h1 class="text-3xl lg:text-5xl font-bold mb-4">¿Quiénes somos?</h1>
                <p class="text-lg lg:text-xl mb-4">
                    ¡Bienvenidos al Centro de Innovación para el Desarrollo Apícola Sustentable de Quintana Roo! En nuestro compromiso por fomentar una apicultura responsable y sostenible, nos enorgullece ser pioneros en ofrecer servicios avanzados de análisis que contribuyen a la salud y la calidad de los productos apícolas de nuestra región.
                </p>
                <a href="#" class="custom-button">Currículum institucional</a>
            </div>
            <div class="w-full lg:w-1/2 flex justify-center">
                <img src="../img/quienes-somos.jpg" alt="foto quienes somos" class="max-w-full h-auto  shadow-lg">
            </div>
        </div>
    </div>
    <div class="container mx-auto py-6">
        <h2 class="text-center text-2xl lg:text-3xl font-bold mb-6">Nuestras acciones tienen impacto en cinco áreas de interés:</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6">
            <div class="flex flex-col items-center">
                <span class="text-4xl mb-2">👤</span>
                <p class="text-center text-lg font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="flex flex-col items-center">
                <span class="text-4xl mb-2">⚗️</span>
                <p class="text-center text-lg font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="flex flex-col items-center">
                <span class="text-4xl mb-2">📈</span>
                <p class="text-center text-lg font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="flex flex-col items-center">
                <span class="text-4xl mb-2">🎓</span>
                <p class="text-center text-lg font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
            <div class="flex flex-col items-center">
                <span class="text-4xl mb-2">🎓</span>
                <p class="text-center text-lg font-semibold">Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
            </div>
        </div>
    </div>
</div>


{{-- <div class="bg-gray-100 text-gray-800">
    <section class="container mx-auto p-6">
        <h1 class="text-3xl lg:text-5xl font-bold mb-4 text-center ">¿Quiénes somos?</h1>
        <div class="text-center mb-6">
            <p class="text-2xl italic">NUESTRA IDENTIDAD “Ser en el mundo, ser nosotros” - "Wiñikil yóok’ol kaab jée bixo’one’ - "To be in the world, to be ourselves"</p>
        </div>
        <hr class="custom-divider mb-6">

        <div class="space-y-12">
            <div class="flex flex-col lg:flex-row items-start lg:items-center">
                <img src="../img/img_mision.jpg" alt="Misión" class="w-full lg:w-1/3 h-auto  shadow-lg mb-4 lg:mb-0 lg:mr-6">
                <div class="w-full lg:w-2/3">
                    <h2 class="text-2xl font-bold mb-4">Misión</h2>
                    <div class="horizontal-divider"></div>
                    <p class="text-lg mb-4">
                        Contribuir al desarrollo socioeconómico del estado de Quintana Roo y la región, mediante la formación de profesionistas (profesional asociado, licenciatura y postgrado) y la generación y aplicación de conocimiento innovador; a través de un modelo educativo intercultural, multilingüe y con una fuerte vinculación entre los diferentes sectores a nivel local, estatal, nacional e internacional. Asimismo, reconocer e impulsar todas aquellas actividades que promuevan el estudio, desarrollo y fortalecimiento de la lengua y cultura Mayas de la Península de Yucatán.
                    </p>
                </div>
            </div>
            <div class="flex flex-col lg:flex-row items-start lg:items-center lg:flex-row-reverse">
                <img src="../img/img_vision.jpg" alt="Visión" class="w-full lg:w-1/3 h-auto  shadow-lg mb-4 lg:mb-0 lg:ml-6">
                <div class="w-full lg:w-2/3">
                    <h2 class="text-2xl font-bold mb-4">Visión</h2>
                    <div class="horizontal-divider"></div>
                    <p class="text-lg mb-4">
                        La Universidad Intercultural Maya de Quintana Roo es una Institución de alto nivel académico, con presencia internacional, con certificación de todos sus procesos administrativos y de gestión, con el 100% de los programas educativos acreditados, con una fuerte vinculación con su entorno y con evidencias claras de que la región se ha transformado positivamente como resultado del trabajo de los egresados de la Universidad.
                    </p>
                </div>
            </div>
        </div>
    </section>
</div> --}}
@endsection
