<!-- responsive svg image overlays -->
<style>
    #greenhouse {
        position: relative;
        width: 100%;
        vertical-align: middle;
        margin: 0;
        overflow: hidden;
    }
    
    #greenhouse svg {
        display: inline-block;
        position: absolute;
        top: 0;
        left: 0;
    }
    
    #lines {
        z-index: 3;
    }
    
    #greenhouse-details {
        display: flex;
        margin-top: 60%;
        flex-wrap: wrap;
        justify-content: center;
    }
    
    .narrow-text {
        background-color: #d4ffde;
        padding: 3% 5%;
        margin: 3%;
        flex-basis: 25%;
    }
    
    @media only screen and (max-width: 480px) {
        .narrow-text {
            flex-basis: 100%;
        }
    }
</style>
<!-- style us map -->
<style>
    #us-map {
        display: block;
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
    }
    
    path:hover,
    circle:hover {
        /*--------------color de l active-area-----------------------*/
        stroke: #2a416c69 !important;
        stroke-width: 2px;
        stroke-linejoin: round;
        fill: #2a416c69 !important;
        cursor: pointer;
    }
    
    #path67 {
        fill: none !important;
        stroke: #A9A9A9 !important;
        cursor: default;
    }
    
    #info-box {
        display: none;
        position: absolute;
        top: 0px;
        left: 0px;
        z-index: 1;
        background-color: #ffffff;
        border: 2px solid #BF0A30;
        border-radius: 5px;
        padding: 5px;
        font-family: arial;
    }
    /*  */
    
    #result-box iframe {
        width: 100%;
        height: 100%;
        border: none;
        background: white;
        overflow: auto;
        -webkit-overflow-scrolling: touch;
        -webkit-transform-origin: 0 0;
        transform-origin: 0 0
    }
</style>
<!-- .continer -->
<style>
    .containersvg {
        /*background: url(http://i.imgur.com/b1K76Pf.jpg) no-repeat;*/
        /*background-size: contain;*/
        /* max-width: 960px; */
        max-width: 100%;
        /*height: 565px;*/
        margin: auto;
        position: relative;
        /* testing: por defecto hereda 15px en ambos lados, estos padding en cero para no deslinear con la imagen de fondo */
        padding-right: 0px;
        padding-left: 0px;
    }
    /* ---------------------- */
    
    .containersvg>img.bg_image {
        width: 100%;
        height: auto;
    }
    
    .main-roof {
        max-width: 100%;
        max-height: 100%;
        overflow: hidden;
        /* magia pura(?) */
        /*                  mix-blend-mode: multiply; */
        /* nice effect */
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
    }
    
    svg {
        /*height: 565px;*/
        width: 100%;
        height: 103.5%;
    }
</style>