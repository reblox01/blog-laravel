@extends('layouts.app')

@section('content')
    <div class="background-image grid grid-cols-1 m-auto">
        <div class="flex text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block text-center">
                <h1 class="sm:text-white text-5xl uppercase font-bold text-shadow-md pb-14">
                    Prêt pour la renommée du blog ?
                </h1>
                <a 
                    href="/blog"
                    class="text-center bg-gray-50 text-gray-700 py-2 px-4 font-bold text-xl uppercase">
                    En savoir plus
                </a>
            </div>
        </div>
    </div>

    <div class="sm:grid grid-cols-2 gap-20 w-4/5 mx-auto py-15 border-b border-gray-200">
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" width="700" alt="">
        </div>

        <div class="m-auto sm:m-auto text-left w-4/5 block">
            <h2 class="text-3xl font-extrabold text-gray-600">
                Comment réussir en utilisant le marketing par e-mail en tant que blogueur
            </h2>
            
            <p class="py-8 text-gray-500 text-s">
                Vous souvenez-vous que bloguer était autrefois un passe-temps où les gens écrivaient sur leurs amis, la mode, les animaux de compagnie et les vacances en famille ?
            </p>

            <p class="font-extrabold text-gray-600 text-s pb-9">
                Je le sais, car à 12 ans, mon cochon d'Inde a attiré plus d'attention en ligne que dans la vraie vie.  Mais l’époque des blogs cobayes pour le plaisir est devenue une industrie légitime et lucrative.
            </p>

            <a 
                href="/blog"
                class="uppercase bg-blue-500 text-gray-100 text-s font-extrabold py-3 px-8 rounded-3xl">
                En savoir plus
            </a>
        </div>
    </div>

    <div class="text-center p-15 bg-black text-white">
        <h2 class="text-2xl pb-5 text-l"> 
            Qu’est-ce que le marketing par e-mail et pourquoi devriez-vous l’utiliser en tant que blogueur ?
        </h2>

        <span class="font-extrabold block text-4xl py-1">
            Les médias sociaux étant à la mode ces jours-ci, de nombreux blogueurs recherchent leur renommée en ligne sur des sites comme Instagram et Facebook.  S'il est vrai que ces plateformes sont idéales pour créer une audience, elles comportent également de nombreux risques.
        </span>
        <span class="font-extrabold block text-4xl py-1">
            Changement d'algorithme Facebook ?  Nettoyage des utilisateurs inactifs sur Instagram ?  Les tweets ne sortent pas ?  Dites adieu à votre portée impressionnante.
        </span>
        <span class="font-extrabold block text-4xl py-1">
            La façon d’établir des relations qui peuvent surmonter un ou deux obstacles est de communiquer via le marketing par e-mail.  Collecter des abonnés à l'aide d'une liste de diffusion vous garantit de pouvoir leur parler directement et quand vous le souhaitez, sans aucun contrôle tiers.
        </span>
    </div>

    <div class="text-center py-15">
        <span class="uppercase text-s text-gray-400">
            Blog
        </span>

        <h2 class="text-4xl font-bold py-10">
            Recent Posts
        </h2>

        <p class="m-auto w-4/5 text-gray-500">
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque exercitationem saepe enim veritatis, eos temporibus quaerat facere consectetur qui.
        </p>
    </div>

    <div class="sm:grid grid-cols-2 w-4/5 m-auto">
        <div class="flex bg-yellow-700 text-gray-100 pt-10">
            <div class="m-auto pt-4 pb-16 sm:m-auto w-4/5 block">
                <span class="uppercase text-xs">
                    PHP
                </span>

                <h3 class="text-xl font-bold py-10">
                    Lorem ipsum dolor, sit amet consectetur adipisicing elit. Voluptas necessitatibus dolorum error culpa laboriosam. Enim voluptas earum repudiandae consequuntur ad? Expedita labore aspernatur facilis quasi ex? Nemo hic placeat et?
                </h3>

                <a 
                    href=""
                    class="uppercase bg-transparent border-2 border-gray-100 text-gray-100 text-xs font-extrabold py-3 px-5 rounded-3xl">
                    Find Out More
                </a>
            </div>
        </div>
        <div>
            <img src="https://cdn.pixabay.com/photo/2014/05/03/01/03/laptop-336704_960_720.jpg" alt="">
        </div>
    </div>
@endsection