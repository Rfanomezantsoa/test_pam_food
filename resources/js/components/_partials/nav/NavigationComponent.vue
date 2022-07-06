<style>
    .fz-nav{
        background:url('/../img/utils/headline1.png') no-repeat;
    }
</style>
<template>

    <div class="fz-nav">
         <div class="closer-nav">
                <img :src="'/img/utils/NaviClose.svg'" @click="hide" alt="" class="close-icon-nav">
        </div>
        <div class="wrapper">
            <div >
                <nav class="nav">
                    <ul>
                        <li ><router-link :to="{name:'home'}" class="nav-item" @click="hide">Home</router-link> </li>
                        <li><router-link :to="{name:'menu'}" class="nav-item" @click="hide">Menu</router-link> </li>
                        <li><router-link :to="{name:'reservation'}" class="nav-item" @click="hide">Reservation</router-link> </li>
                    </ul>
                </nav>
                 <section>
                </section>
            </div>


        </div>
    </div>

</template>
<script>

import { collapsed , toggleMenu ,menuState } from "./state";

export default{
    name:"nav",
    methods:{
        hide(){
            this.$parent.toggleMenu();
        }
    }
}
</script>
