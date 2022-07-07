<template>
 <div class="fz-contenaire bg-green">
    <div class="wrapper p-4">
            <section class="fz-header">
                <header class="header">
                    <div class="head-content">
                        <div class="headline_hero">
                            <h1 class="title" v-text="hero.title">

                            </h1>
                            <div class="sub-title" v-text="hero.subtitle">

                            </div>
                        </div>
                        <div class="images">
                            <div class="img-main">
                              <img :src="'/img/utils/'+hero.image" alt="">
                            </div>
                            <div class="img-collection">
                                <img :src="'/img/utils/spices1.png'" alt="">
                                <img :src="'/img/utils/pices2.png'" alt="">
                                <img :src="'/img/utils/pices3.png'" alt="">
                            </div>
                        </div>
                    </div>

                </header>

            </section>

            <section class="image-box ">
                <div class="fz-card white col-5">
                    <div class="card-body">
                        <img class="card-img" :src="'/img/utils/'">
                        <h4 class="card-title" >
                            <li v-for="todo in imageboxes">
                                {{ todo }}
                            </li>
                        </h4>
                        <p class="card-text white" >

                        </p>
                    </div>
                </div>
                <div class="fz-card white col-3 align-self-strech ">
                    <div class="card-body">
                        <h4 class="card-title" >

                        </h4>
                        <p class="card-text white" >

                        </p>

                        <img class="card-img" :src="'/img/utils/'">
                    </div>
                </div>
            </section>

        </div>


 </div>
</template>
<script>
import { onMounted } from 'vue';
import useHeadlineHero from '../components/domains/aff/services/headlineservices.js';
import useImageBox from '../components/domains/aff/services/imagboxservices.js';


export default {

    setup(){
        const { hero , getHeadlineHeroByPage } = useHeadlineHero();
        const{ imageboxes , getImageBoxes }= useImageBox();
        onMounted(()=>{
            getHeadlineHeroByPage('home');
            getImageBoxes();
        });


        return {
            imageboxes,
            hero
        };
    },

}

</script>
