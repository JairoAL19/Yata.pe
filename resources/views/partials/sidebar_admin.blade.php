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
                    height: 12%; 
                    margin-left: 9%;
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
                <a href="/Reciclar/Tec" class="simple-text" style="color: white">
                    <b style="color: white">Yata</b>.pe
                </a>
            </div>

            <ul class="nav">
                <li>
                    <a href="/admin845967/products">
                        <i class="ti-mobile"></i>
                        <p>Productos</p>
                    </a>
                </li>
                <li >
                    <a href="/admin845967/usuarios">
                        <i class="ti-user"></i>
                        <p>Usuarios</p>
                    </a>
                </li>
                <li>
                    <a href="/admin845967/Solicitudes_P">
                        <i class="ti-view-list-alt"></i>
                        <p>Solicitudes</p>
                    </a>
                </li>
                <li>
                    <a href="https://dashboard.zopim.com/?lang=es#home" target="_blank">
                        <i class="ti-headphone-alt"></i>
                        <p>Contacto</p>
                    </a>
                </li>
                <li>
                    <a href="/Reciclar/Tec">
                        <i class="ti-hand-point-right"></i>
                        <p>Pagina Principal</p>
                    </a>
                </li>
                <div class="stars"></div>                
                <li>
                <li class="active-pro">
                    <a href="/auth/logout">
                        <i class="ti-power-off"></i>
                        <p>CERRAR SESIÓN</p>
                    </a>
                </li>
            </ul>
        </div>
    </div>