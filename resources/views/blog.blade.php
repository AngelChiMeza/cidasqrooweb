@extends('layouts.app')

@section('titulo')
    Noticias
@endsection

@section('contenido')
<div class="container mx-auto px-4 py-8">
    <!-- Encabezado principal -->
    <x-headline text="Noticias más recientes del CIDASQROO" />

    <!-- Sección de noticias -->
    <div class="grid grid-cols-1 lg:grid-cols-3 gap-6 mt-8">
        <!-- Noticias principales -->
        <div class="lg:col-span-2 flex flex-col justify-between">
            <x-headline text="Taller de capacitación sobre el manejo del Protocolo de Acción ante la Intoxicación de Abejas por Plaguicidas" subtext="Durante el 27 y 28 de febrero del presente año se llevó a cabo el “Taller de capacitación sobre el manejo del Protocolo de Acción ante la Intoxicación de Abejas por Plaguicidas” en el Centro de Innovación para el Desarrollo Apícola Sustentable, dicho taller fue impulsado en coordinación con el CIATEJ Monterrey y el Laboratorio Nacional Conahcyt de Toxicología Socioambiental LANCTOXS e impartido por el Dr. Octavio Gaspar Ramírez." />
            <img src="../img/principal_noticia1.jpg" alt="Taller de capacitación" class="w-full h-auto mb-4">
        </div>

        <!-- Otras noticias -->
        <div class="grid grid-cols-1 gap-6 flex flex-col h-full">
            <div class="flex-1 flex flex-col">
                <x-news-card
                    image="../img/noticia3.png"
                    title="Intercambio de experiencias con el Centro de Atención Múltiple (CAM) de José María Morelos con niños desde los 4 hasta los 12 años."
                    description="El pasado 02 de febrero del presente año, el Centro de Innovación para el Desarrollo Apícola Sustentable en Quintana Roo, realizó un intercambio de experiencias con el Centro de Atención Múltiple (CAM) de José María Morelos, para lo cual se recibió un grupo de niños desde 4 hasta los 12 años."
                />
            </div>
            <div class="flex-1 flex flex-col">
                <x-news-card
                    image="../img/noticia2.png"
                    title="Salidas a campo entre enero y febrero"
                    description="Uno de los ejes principales que tiene el Centro de Innovación para el Desarrollo Apícola Sustentable en Quintana Roo es la vinculación comunitaria, por ello durante el mes de enero y dentro del marco del proyecto “Impulso a la Producción de la Meliponicultura para el Fortalecimiento de la Seguridad y Soberanía Alimentaria en Defensa del Territorio Biocultural en Municipios del Estado de Quintana Roo”."
                />
            </div>
        </div>
    </div>
</div>
<div class="container mx-auto px-4 py-8">
    <!-- Encabezado principal -->
    <h1 class="text-2xl font-bold mb-6">Noticias más recientes</h1>

    <!-- Sección de noticias -->
    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
        <!-- Tarjeta de noticias -->
        <x-news-card
            image="../img/noticia3.png"
            title="FGR revela que no hay asuntos pendientes con Carlos Ahumada, empresario señalado de fraude"
            description=""
        />
        <x-news-card
            image="../img/noticia3.png"
            title="Calendario SEP Ciclo Escolar 2024 - 2025: cuándo inician y clases en educación básica"
            description=""
        />
        <x-news-card
            image="../img/noticia3.png"
            title="Cacomixtle es captado en zonas de Nuevo León; expertos piden no tocarlo"
            description=""
        />
        <x-news-card
            image="../img/noticia3.png"
            title="¿De qué murió Pato Levy, hijo de Talina Fernández?"
            description=""
        />
        <x-news-card
            image="../img/noticia3.png"
            title="Corona Capital 2024: estas son las fechas en las que se realizará el festival"
            description=""
        />
        <x-news-card
            image="../img/noticia3.png"
            title="Por qué Ángela Aguilar no acompañó a Christian Nodal a su show del Auditorio Nacional"
            description=""
        />
        <x-news-card
            image="../img/noticia3.png"
            title="Otra noticia relevante"
            description=""
        />
        <x-news-card
            image="../img/noticia3.png"
            title="Más noticias"
            description=""
        />
        <x-news-card
            image="../img/noticia3.png"
            title="Últimas noticias"
            description=""
        />
    </div>
</div>

@endsection
