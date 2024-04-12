<?php
session_start();
include("connect.php");

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>StartSeed</title>
    <!-- font awesome cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.2/css/all.min.css"
        integrity="sha512-SnH5WK+bZxgPHs44uWIX+LLJAJ9/2PkPKZ5QiAj6Ta86w+fsb2TkcmfRyVX3pBnMFcV7oQPJkl9QevSCWr3W6A=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />



    <!-- cdn de tailwing y daisyui -->
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://cdn.jsdelivr.net/npm/daisyui@4.10.1/dist/full.min.css" rel="stylesheet" type="text/css" />


</head>
</head>
<!-- xl:bg-black  md:bg-yellow-400  -->

<body class="bg-white">


    <!-- navbar -->

    <header>
        <nav class="w-[90%] max-lg:w-screen mx-auto flex justify-between max-lg:flex-wrap items-center ">

            <!-- logo -->

            <div class="max-lg:order-1 p-1">
                <a class="w-16 max-lg:m-4" href="index.html"><img src="img/logonav.jpeg" alt=""></a>
            </div>

            <!-- link de referencia  -->

            <div id="menunav" class="h-fit w-full flex items-center px-5 mx-auto max-lg:hidden max-lg:order-3 ">
                <ul class="flex items-center max-lg:flex-col gap-[4vw] mx-auto ">
                    <li>
                        <a href="templates/buscar_campañas.html" class=" hover:text-gray-500 text-[#206A5D] ">Buscar Campañas</a>
                    </li>
                    <li>
                        <a href="templates/sobreNosotos.html" class=" hover:text-gray-500 text-[#206A5D] ">Sobre nosotros</a></a>
                    </li>
                    <li>
                        <a href="templates/misCampañas.html" class=" hover:text-gray-500 text-[#206A5D] ">Mis Campañas</a>
                    </li>
                    <li>
                        <a href="templates/IniciarCampañas.html" class=" hover:text-gray-500 text-[#206A5D] ">iniciar Campaña</a>
                    </li>
                </ul>
            </div>

            <!-- botone de iniciar secion user y menu en dispositivos moviles -->
            <div class="flex items-center gap-4 px-3 max-lg:order-2">


                <button id="userA"
                    class="bg-gradient-to-r from-[#A2D988]/50 to-[#66994E]/10 rounded-full h-11 w-28 text-[#206A5D]">
                    Hola <?php 
                    if(isset($_SESSION['email'])){
                    $email=$_SESSION['email'];
                    $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                    while($row=mysqli_fetch_array($query)){
                    echo $row['firstName'];
                    // .' '.$row['lastName'];
                    }
                    }
                    ?>
                </button>

                <!-- user -->
                <div id="userB" class="dropdown dropdown-end hidden">
                    <div tabindex="0" role="button" class="btn btn-ghost btn-circle avatar">
                        <div class="w-10 rounded-full">
                            <img alt="Tailwind CSS Navbar component"
                                src="https://daisyui.com/images/stock/photo-1534528741775-53994a69daeb.jpg" />
                        </div>
                    </div>
                    <ul tabindex="0"
                        class="mt-3 z-[1] p-2 shadow menu menu-sm dropdown-content bg-base-100 rounded-box w-52">
                        <li>
                            <a class="justify-between" href="PerfilAjuste.html">
                                Profile
                                <span class="badge">New</span>
                            </a>
                        </li>
                        <li><a href="PerfilAjuste.html">Settings</a></li>
                        <li id="logOut"><a>Logout</a></li>
                    </ul>
                </div>
                <button id="botonav" class="lg:hidden">
                    <i class="fa-solid fa-bars fa-2xl"></i>
                </button>
            </div>
        </nav>
    </header>




    <!-- secion quienes somos -->





    <div class="hero min-h-screen shadow-2xl">
        <div class="hero-content p-0 flex-col lg:flex-row">

            <!-- imagen hero -->
            <img src="img/hero.jpg" class="max-w-md rounded-lg max-lg:w-screen " />
            <div class="flex flex-col">
                <h1 class="text-center text-[#81B214] text-4xl font-black ">QUIENES SOMOS ?</h1>

                <!-- secion de texto -->

                <section class="font-medium text-black space-y-8 mt-6">
                    <P>Starseed es más que una plataforma de crowdfunding; somos una comunidad impulsada por la pasión y
                        la
                        innovación, con raíces profundas en El Salvador y una visión global. Nacimos con el propósito de
                        empoderar a emprendedores, soñadores y agentes de cambio en nuestra querida tierra,
                        proporcionando
                        una
                        plataforma donde sus ideas brillantes puedan tomar vuelo y alcanzar su máximo potencial.</P>
                    <p class="max-lg:hidden">En Starseed, creemos en el poder de la colaboración y en el impacto
                        positivo
                        que puede tener cuando
                        nos
                        unimos para hacer realidad nuestros sueños. Desde el corazón de Centroamérica, estamos
                        construyendo
                        puentes hacia un futuro más brillante, donde la creatividad, la innovación y el espíritu
                        empresarial
                        sean celebrados y apoyados.</p>
                    <p class="max-lg:hidden">Nuestro enfoque va más allá de la recaudación de fondos; estamos
                        comprometidos
                        con el éxito a largo
                        plazo
                        de cada proyecto que respaldamos. Nos esforzamos por brindar el apoyo necesario, ya sea en forma
                        de
                        asesoramiento experto, recursos estratégicos o conexiones valiosas, para ayudar a cada
                        emprendedor a
                        alcanzar sus metas y llevar sus ideas desde la concepción hasta la realización.</p>
                </section>
                <button
                    class=" btn-lg bg-gradient-to-r from-[#A2D988]/50 to-[#66994E]/10 self-center mt-4 mb-4 text-secondary text-xl rounded-full font-medium ">Campañas</button>
            </div>
        </div>
    </div>


    <!-- pasos para iniciar una campaña -->

    <div class="text-center mt-14 py-8 shadow-lg ">

        <h1 class="capitalize text-4xl text-[#81B214]">Como iniciar una campaña?</h1>
        <br>
        <h2 class="capitalize text-[#206A5D] text-2xl">siga estos pasos</h2>

        <div class="mt-14">




            <div class="mx-16 max-lg:mx-4 space-y-8 max-lg:space-y-16">


                <!-- primer paso -->


                <div class="flex justify-center space-x-28 max-lg:space-x-4 max-lg:flex-col max-lg:space-y-8">
                    <div class="basis-1/3">
                        <i class="fa-solid fa-user fa-2xl text-[#81B214] align-bottom"></i>
                    </div>



                    <div class="basis-2/3">
                        <p class="line-clamp-7 text-start  text-black font-medium text-wrap ">Busca el botón
                            "Registrarse" o "Crear cuenta". Por lo
                            general, se encuentra en la esquina superior derecha de la página principal.
                            Haz clic en el botón "Registrarse" y se abrirá un formulario de registro.
                            Completa todos los campos requeridos del formulario, como nombre, dirección de correo
                            electrónico y contraseña.
                            Lee los términos y condiciones, y marca la casilla para aceptarlos si estás de acuerdo.
                            Haz clic en el botón "Enviar" o "Registrarse" para completar el proceso de registro.</p>
                    </div>
                </div>




                <!-- segundo paso -->



                <div class="flex justify-center space-x-28 max-lg:space-x-4  max-lg:flex-col max-lg:space-y-8">
                    <div class="basis-1/3">
                        <i class="fa-solid fa-comments fa-2xl text-[#81B214] align-bottom"></i>
                    </div>

                    <div class="basis-2/3">
                        <p class="line-clamp-7 text-start text-black font-medium ">Explora las causas: Navega por las
                            diferentes categorías de
                            causas que apoyamos, desde ayuda humanitaria hasta conservación del medio ambiente.
                            Encuentra una causa que te apasione y descubre las organizaciones que están trabajando en
                            ella.
                            <br>
                            Sé parte de nuestra comunidad en línea: Únete a nuestros grupos en redes sociales y
                            participa en las conversaciones. Comparte tus experiencias, ideas y preguntas con otros
                            donantes y miembros de la comunidad.
                        </p>
                    </div>
                </div>



                <!-- tercero paso -->

                <div class="flex justify-center space-x-28 max-lg:space-x-4  max-lg:flex-col max-lg:space-y-8">
                    <div class="basis-1/3">
                        <i class="fa-solid fa-hand-holding-dollar fa-2xl text-[#81B214] align-bottom"></i>
                    </div>

                    <div class="basis-2/3">
                        <p class="line-clamp-7 text-start text-black font-medium ">para promover tu proyecto y aceptar
                            donaciones en línea.
                            Asegúrate de incluir información detallada sobre tu causa, el impacto que esperas lograr y
                            cómo se utilizarán los fondos donados.</p>
                    </div>
                </div>


                <!-- cuarto paso -->

                <div class="flex justify-center space-x-28 max-lg:space-x-4  max-lg:flex-col max-lg:space-y-8">
                    <div class="basis-1/3">
                        <i class="fa-solid fa-heart fa-2xl text-[#81B214] align-bottom"></i>
                    </div>

                    <div class="basis-2/3">
                        <p class="line-clamp-7 text-start text-black font-medium ">Ayuda a aumentar la visibilidad de
                            los proyectos
                            compartiéndolos en tus redes sociales y entre tus contactos. Cuantas más personas conozcan
                            un proyecto, mayores serán las posibilidades de que se alcance la meta de financiamiento.
                        </p>
                    </div>
                </div>

            </div>


        </div>


    </div>


    <!-- Descubre campañas que te pueden interesar -->


    <div class="shadow mt-8">
        <h1 class="text-center text-secondary text-3xl font-medium ">Descubre campañas que te pueden interesar</h1>

        <button
            class="bg-gradient-to-r from-[#A2D988]/50 to-[#66994E]/10 rounded-full h-11 w-28 flex justify-center items-center ml-36 my-6 max-lg:mx-auto text-[#206A5D] font-medium  ">
            Campañas
        </button>


        <div
            class="flex justify-center max-lg:flex-col max-lg:w-screen max-lg:space-x-0  max-lg:space-y-4 space-x-4  mb-28">

            <!-- proyecto destacado 1 -->



            <div class="card w-96 max-lg:w-screen bg-[#CFD8D7] shadow-xl">
                <figure><img src="img/hero.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        Proyec!

                    </h2>
                    <div class="badge badge-secondary">Popular</div>
                    <progress class="progress progress-success w-56" value="70" max="100"></progress>
                    <p>Ayudanos a crear una pagina
                        <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptates nulla, hic
                        blanditiis vel aperiam provident quod illo dolore rem debitis explicabo, recusandae, sint
                        perferendis mollitia possimus aut quasi repudiandae.
                    </p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Tecnologia</div>
                        <div class="badge badge-outline">Web</div>
                    </div>
                </div>
            </div>


            <!-- proyecto destacado 2 -->


            <div class="card w-96 max-lg:w-screen bg-[#CFD8D7] shadow-xl">
                <figure><img src="img/hero.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        EXAMPLE!

                    </h2>
                    <div class="badge badge-secondary">Popular</div>
                    <progress class="progress progress-success w-56" value="70" max="100"></progress>
                    <p>Ayudanos a crear una pagina
                        <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptates nulla, hic
                        blanditiis vel aperiam provident quod illo dolore rem debitis explicabo, recusandae, sint
                        perferendis mollitia possimus aut quasi repudiandae.
                    </p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Tecnologia</div>
                        <div class="badge badge-outline">Web</div>
                    </div>
                </div>
            </div>



            <!-- proyecto destacado 3 -->
            <div class="card w-96 max-lg:w-screen bg-[#CFD8D7] shadow-xl">
                <figure><img src="img/hero.jpg" alt="Shoes" /></figure>
                <div class="card-body">
                    <h2 class="card-title">
                        I can sleep!

                    </h2>
                    <div class="badge badge-secondary">Popular</div>
                    <progress class="progress progress-success w-56" value="70" max="100"></progress>
                    <p>Ayudanos a crear una pagina
                        <br>
                        Lorem ipsum dolor sit amet consectetur adipisicing elit. Numquam voluptates nulla, hic
                        blanditiis vel aperiam provident quod illo dolore rem debitis explicabo, recusandae, sint
                        perferendis mollitia possimus aut quasi repudiandae.
                    </p>
                    <div class="card-actions justify-end">
                        <div class="badge badge-outline">Tecnologia</div>
                        <div class="badge badge-outline">Web</div>
                    </div>
                </div>
            </div>





        </div>

    </div>



    <!-- footer -->

    <footer class="footer p-10 space-x-auto max-lg:justify-items-center">
        <aside>
            <img src="img/foteer.png" alt="">
            <p class="text-[#206A5D]">StarSeed.<br> 2024</p>
        </aside>
        <nav class="flex flex-col ">
            <h6 class="footer-title text-[#81B214]">Recaudacion de Fondos</h6>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Tecnologia</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Salud</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Emergencia</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Animales</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Educacion</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Animales</a>
        </nav>
        <nav class="flex flex-col ">
            <h6 class="footer-title text-[#81B214]">Mas Informacion</h6>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Como Funciona</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Porque Nosotros</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Pregustas Frecuentes</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Soporte Tecnico</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Contactanos</a>
        </nav>
        <nav class="flex flex-col ">
            <h6 class="footer-title self-center text-[#81B214]">Legal</h6>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Terminos de uso</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Privacy policy</a>
            <a class="link link-hover self-center text-[#206A5D] font-medium">Cookie policy</a>
        </nav>
    </footer>




    <script src="https://cdn.tailwindcss.com"></script>
    <script src="js/menu.js"></script>
    <script src="script.js"></script>
</body>

</html>