<style>
    .nav-container .nav-bar-item{
        display: inline-block;
        display: flex;
        align-items: center;
        margin-right:0.8rem ;
    }
    .nav-container .logo{
        width: 164px;
    }

</style>
<template>
    <v-nav class="" :class="menuState"></v-nav>
    <div class="fz-contenaire bg-green p-0 ">
        <div class="fixed  bg-green ">
            <div class=" wrapper">

                <nav class="nav-container  d-flex justify-content-between align-items-center">
                    <div class="d-flex">
                        <a href="" class="nav-bar-item"><img :src="'/img/utils/Logo.svg'" alt="foodZero" class="logo"></a>
                        <a @click="toggleMenu" class="nav-bar-item "><img :src="'/img/utils/NaviOpen.svg'" alt="open-icon" class="open-icon-nav"></a>
                    </div>
                    <div class="d-flex">
                        <div class="nav-bar-item white"> +264 34 89 715 49 </div>
                        <div class="nav-bar-item">
                            <a href="#" class="btn btn-outline-white btn-hover-white">Reservations</a>
                        </div>
                    </div>
                </nav>
            </div>

        </div>
    </div>


</template>

<script>

import { collapsed , toggleMenu ,menuState } from "./state";

export default{

    props:{},
    setup(){
        return { collapsed , toggleMenu ,menuState };
    },

    name:"nav-bar",
    data(){
        return { collapsed , toggleMenu ,menuState };
    }


}

</script>
