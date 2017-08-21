<div class="sidebar" data-background-color="white" data-active-color="danger">

    <!--
        Tip 1: you can change the color of the sidebar's background using: data-background-color="white | black"
        Tip 2: you can change the color of the active button using the data-active-color="primary | info | success | warning | danger"
    -->

        <style>
            @media screen and (max-width: 1680px) {
                .stars{
                    background-image: url(../../../img/indice2.png); 
                    width: 80%; 
                    height: 13%; 
                    margin-left: 9%;
                }
            }
            @media screen and (max-width: 1480px) {
                .stars{
                    background-image: url(../../../img/indice2.png); 
                    width: 80%; 
                    height: 13%; 
                    margin-left: 9%;
                }
                #aa{
                    margin: 6px 0px;
                }
            }
            @media screen and (max-width: 1280px) {
                .stars{
                    background-image: url(../../../img/indice2.png); 
                    width: 82%; 
                    height: 100px; 
                    margin-left: 10%;
                }
            }  
            @media screen and (max-width: 960px) and (min-width: 768px) {
                .stars{
                    display: none;
                }
            }          
            @media screen and (max-width: 767px) {
                .stars{
                    background-image: url(../../../img/indice2.png); 
                    width: 100%; 
                    height: 100px; 
                    margin-left: 5%;
                }
            }
        </style>
        <div class="sidebar-wrapper">
            <div class="logo" style="width: 100%; margin-left: 0;  background: #4492E0;  color: white;  border-right: 2px solid;">
                <a href="/Reciclar/Tec" class="simple-text" style="color: white" >
                    <b style="color: white">Yata</b>.pe
                </a>
            </div>

            <ul class="nav">
                <li class="active">
                    <a href="/Reciclar/Tec" id="aa">
                        <i class="ti-reload"></i>
                        <p>Reciclar</p>
                    </a>
                </li>
                <li >
                    <a href="/Reciclar/Perfil" id="aa">
                        <i class="ti-user"></i>
                        <p>Mi Perfil</p>
                    </a>
                </li>
                <li>
                    <a href="/Reciclar/Solicitudes" id="aa">
                        <i class="ti-view-list-alt"></i>
                        <p>Solicitudes</p>
                    </a>
                </li>
                <li>
                    <a href="/Reciclar/Contacto" id="aa">
                        <i class="ti-headphone-alt"></i>
                        <p>Ayuda y Contacto</p>
                    </a>
                </li>
                <li>
                    <a href="/Reciclar/SobreNosotros" id="aa">
                        <i class="ti-map"></i>
                        <p>Sobre Nosotros</p>
                    </a>
                </li>
                <li>
                    <a href="/Reciclar/Testimonios" id="aa">
                        <i class="ti-medall"></i>
                        <p>Testimonios</p>
                    </a>
                </li>
                <li>
                    <a href="/Reciclar/Tienda" id="aa">
                        <i class="ti-shopping-cart"></i>
                        <p>Tienda</p>
                    </a>
                </li>
                <div class="stars"></div>                
                <li>
                <li class="active-pro">
                    <a href="/auth/logout" >
                        <i class="ti-power-off"></i>
                        <p>CERRAR SESIÓN</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>